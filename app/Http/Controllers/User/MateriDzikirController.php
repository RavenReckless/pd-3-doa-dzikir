<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MateriDzikir;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MateriDzikirController extends Controller
{
    public function index () {
        $dzikirs = MateriDzikir::all();

        // Get current time
        $currentTime = Carbon::now()->format('H');
        $morningDzikir = [];
        $eveningDzikir = [];

        if ($currentTime < 12) {
            // Fetching untuk dzikir pagi
            $morningDzikir = MateriDzikir::where('title', 'Dzikir Pagi')->get();
        } else {
            // Fetching untuk dzikir petang
            $eveningDzikir = MateriDzikir::where('title', 'Dzikir Petang')->get();
        }

        return view('dzikir', compact('dzikirs',  'morningDzikir', 'eveningDzikir'));
    }

    public function showDzikirs ($slug) {
        $dzikir = MateriDzikir::where('slug', $slug)->first();

        return view('dzikir', compact('dzikir'));
    }
}
