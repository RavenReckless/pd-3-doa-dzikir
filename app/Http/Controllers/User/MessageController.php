<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Community;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index(Community $community)
    {
        $messages = $community->messages()->with('user')->latest()->get();
        return view('show-communities', compact('community', 'messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'community_id' => 'required|exists:communities,id',
            'message' => 'required|string',
        ]);

        $message = new Message();
        $message->user_id = auth()->id();
        $message->community_id = $request->community_id;
        $message->message = $request->message;
        $message->save();

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }

    public function showCommunity($id)
    {
        $community = Community::with('users')->findOrFail($id);
        $messages = Message::where('community_id', $id)
            ->with('user')
            ->latest()
            ->get();

        return view('show-communities', compact('community', 'messages'));
    }

    public function destroy($id)
    {
        $message = Message::findOrFail($id);

        if ($message->user_id != auth()->id()) {
            return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk menghapus pesan ini.');
        }

        $message->delete();

        return redirect()->back()->with('success', 'Pesan berhasil dihapus.');
    }
}
