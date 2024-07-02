<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MateriDzikir;
use App\Models\RecommendedDzikir;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MateriDzikirController extends Controller
{
    public function index () {
        $dzikirs = MateriDzikir::all();
        $recommendedDzikirs = RecommendedDzikir::all();
        return view('dzikir', compact('dzikirs', 'recommendedDzikirs'));
    }

    public function showDzikirs ($slug) {
        $dzikir = MateriDzikir::where('slug', $slug)->first();

        return view('dzikir', compact('dzikir'));
    }
}
