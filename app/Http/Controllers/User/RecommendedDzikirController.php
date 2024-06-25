<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\RecommendedDzikir;
use Illuminate\Http\Request;

class RecommendedDzikirController extends Controller
{
    public function index () {
        $recommendedDzikirs = RecommendedDzikir::all();
        return view('user.recommended-dzikir.index', compact('recommendedDzikirs'));
    }
}
