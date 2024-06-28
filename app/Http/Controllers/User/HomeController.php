<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MateriDzikir;
use App\Models\SharedExperience;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $sharings = SharedExperience::all();
        $dzikirs = MateriDzikir::all();
        return view('home', compact('sharings', 'dzikirs'));
    }
}
