<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MateriDzikir;
use Illuminate\Http\Request;

class DoaPagiSoreController extends Controller
{
    public function index() {
        $dzikirs = MateriDzikir::whereIn('id', [1, 3])->get();
        return view('doa-pagi-sore', compact('dzikirs'));
    }

    public function showDzikirs($slug) {
        $dzikir = MateriDzikir::where('slug', $slug)->first();
        return view('doa-pagi-sore', compact('dzikir'));
    }
}
