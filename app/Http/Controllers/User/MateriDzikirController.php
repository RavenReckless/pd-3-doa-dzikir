<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MateriDzikir;
use Illuminate\Http\Request;

class MateriDzikirController extends Controller
{
    public function index () {
        $dzikirs = MateriDzikir::paginate(6);
        return view('dzikir', compact('dzikirs'));
    }

    public function showDzikirs ($slug) {
        $dzikir = MateriDzikir::where('slug', $slug)->first();
        return view('dzikir', compact('dzikir'));
    }
}

