<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MateriDzikir;
use App\Models\DzikirRecord;

class ShowMateriDzikirController extends Controller
{
    public function show($id)
    {
        $dzikir = MateriDzikir::findOrFail($id);
        $materiDzikir = MateriDzikir::all();
        $dzikirRecords = DzikirRecord::where('materi_dzikir_id', $id)->get();

        return view('show-dzikir', compact('dzikir', 'materiDzikir', 'dzikirRecords'));
    }
}
