<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MateriDzikir;
use App\Models\DzikirRecord;
use Carbon\Carbon;

class ShowMateriDzikirController extends Controller
{
    public function show($id)
    {
        $dzikir = MateriDzikir::findOrFail($id);
        $materiDzikir = MateriDzikir::all();
        $dzikirRecords = DzikirRecord::where('materi_dzikir_id', $id)->get();

        // Get current time
        $currentTime = Carbon::now()->format('H');
        $morningDzikir = [];
        $eveningDzikir = [];

        if ($currentTime < 12) {
            $morningDzikir = MateriDzikir::where('title', 'Dzikir Pagi')->get();
        } else {
            $eveningDzikir = MateriDzikir::where('title', 'Dzikir Petang')->get();
        }

        return view('show-dzikir', compact('dzikir', 'materiDzikir', 'dzikirRecords', 'morningDzikir', 'eveningDzikir'));
    }
}
