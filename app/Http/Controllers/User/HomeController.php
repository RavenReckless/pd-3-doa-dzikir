<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MateriDzikir;
use App\Models\Shalawat;
use App\Models\SharedExperience;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $sharings = SharedExperience::all();
        $dzikirs = MateriDzikir::all();
        $shalawats = Shalawat::all();
        return view('home', compact('sharings', 'dzikirs', 'shalawats'));
    }
}
