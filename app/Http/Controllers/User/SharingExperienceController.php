<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\SharedExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SharingExperienceController extends Controller
{
    public function create() {
        $sharings = SharedExperience::all();
        return view('create-sharing', compact('sharings'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        SharedExperience::create([
            'user_id' => $user->id,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Experience shared successfully.');
    }
}
