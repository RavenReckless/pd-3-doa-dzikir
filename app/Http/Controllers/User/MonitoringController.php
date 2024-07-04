<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Monitoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MonitoringController extends Controller
{
    public function index()
    {
        $community = Auth::user()->community;
        $messages = Monitoring::where('user_id', Auth::id())->get();
        return view('monitoring', compact('community', 'messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'dzikir_list' => 'required|string'
        ]);

        Monitoring::create([
            'user_id' => Auth::id(),
            'dzikir_list' => $request->dzikir_list,
        ]);

        return redirect()->route('monitoring.index')->with('success', 'Jawaban Anda berhasil dikirim.');
    }
}
