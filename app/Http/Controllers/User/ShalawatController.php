<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Shalawat;
use Illuminate\Http\Request;

class ShalawatController extends Controller
{
    public function index () {
        $shalawats = Shalawat::paginate(6);
        return view('shalawat', compact('shalawats'));
    }

    public function showDzikirs ($slug) {
        $shalawat = Shalawat::where('slug', $slug)->first();
        return view('shalawat', compact('shalawat'));
    }
}
