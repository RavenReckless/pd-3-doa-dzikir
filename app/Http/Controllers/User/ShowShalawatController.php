<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Shalawat;
use App\Models\ShalawatRecord;

class ShowShalawatController extends Controller
{
    public function show($id) {
        $shalawat = Shalawat::findOrFail($id);
        $shalawats = Shalawat::all();
        $shalawatRecords = ShalawatRecord::where('shalawat_id', $id)->get();

        return view('show-shalawat', compact('shalawat', 'shalawats', 'shalawatRecords'));
    }
}
