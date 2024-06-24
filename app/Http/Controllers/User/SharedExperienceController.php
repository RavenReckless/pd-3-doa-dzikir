<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\SharedExperience;
use Illuminate\Http\Request;

class SharedExperienceController extends Controller
{
    public function index () {
        $sharings = SharedExperience::all();
        return view('sharing', compact('sharings'));
    }

    public function showShared ($slug) {
        $sharing = SharedExperience::where('slug', $slug)->first();

        return view('sharing', compact('sharing'));
    }
}
