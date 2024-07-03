<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MateriDzikir;
use Illuminate\Http\Request;

class QiyamulLailController extends Controller
{
    public function index() {
        $dzikirs = MateriDzikir::whereIn('id', [22])->get();
        return view('qiyamul-lail', compact('dzikirs'));
    }

    public function showDzikirs($slug) {
        $dzikir = MateriDzikir::where('slug', $slug)->first();
        return view('qiyamul-lail', compact('dzikir'));
    }
}
