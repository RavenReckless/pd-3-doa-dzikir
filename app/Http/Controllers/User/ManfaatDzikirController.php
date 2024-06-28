<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ManfaatDzikir;
use App\Models\MateriDzikir;
use Illuminate\Http\Request;

class ManfaatDzikirController extends Controller
{
    public function index () {
        $manfaats = ManfaatDzikir::all();
        $dzikirs = MateriDzikir::all();
        return view('manfaat', compact('manfaats', 'dzikirs'));
    }
}
