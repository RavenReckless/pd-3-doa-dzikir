<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MateriDzikir;
use Illuminate\Http\Request;

class ShowMateriDzikirController extends Controller
{
    public function show($id)
    {
        $dzikir = MateriDzikir::findOrFail($id);
        
        return view('show-dzikir', compact('dzikir'));
    }
}
