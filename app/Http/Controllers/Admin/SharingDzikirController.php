<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SharedExperience;
use App\Models\User;
use Illuminate\Http\Request;

class SharingDzikirController extends Controller
{
    public function index () {
        $sharings = SharedExperience::where('type', 'dzikir')->get();
        return view('admin.sharing-dzikir.index', compact('sharings'));
    }

    public function create () {
        $users = User::all();
        return view('admin.sharing-dzikir.create', compact('users'));
    }

    public function store (Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        SharedExperience::create([
            'user_id' => auth()->id(),
            'type' => 'dzikir',
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.sharing-dzikir.index');
    }

    public function edit (SharedExperience $sharing) {
        return view('admin.sharing-dzikir.edit', compact('sharing'));
    }

    public function update (Request $request, SharedExperience $sharing) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $sharing->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.sharing-dzikir.index');
    }

    public function show (SharedExperience $sharing) {
        return view('admin.sharing-dzikir.show', compact('sharing'));
    }

    public function destroy (SharedExperience $sharing) {
        $sharing->delete();
        return redirect()->route('admin.sharing-dzikir.index');
    }
}
