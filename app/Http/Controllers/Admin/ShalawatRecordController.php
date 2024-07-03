<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shalawat;
use App\Models\ShalawatRecord;
use Illuminate\Http\Request;

class ShalawatRecordController extends Controller
{
    public function index() {
        $shalawatRecords = ShalawatRecord::all();
        return view('admin.shalawat-record.index', compact('shalawatRecords'));
    }

    public function create() {
        $shalawats = Shalawat::all();
        return view('admin.shalawat-record.create', compact('shalawats'));
    }

    public function store(Request $request) {
        $request->validate([
            'shalawat_id' => 'required|exists:shalawats,id',
            'title' => 'required',
            'file_path' => 'required|mimes:mp3,wav,ogg|max:20480',
        ]);

        if ($request->hasFile('file_path')) {
            $filePath = $request->file('file_path')->store('audio', 'public');
            $shalawat = Shalawat::findOrFail($request->input('shalawat_id'));
            ShalawatRecord::create([
                'shalawat_id' => $request->input('shalawat_id'),
                'title' => $request->input('title'),
                'file_path' => $filePath,
            ]);
        }

        return redirect()->route('admin.shalawat-records.index')
                         ->with('success', 'Shalawat Record created successfully.');
    }

    public function show(ShalawatRecord $shalawatRecord) {
        return view('admin.shalawat-record.show', compact('shalawatRecord'));
    }

    public function edit(ShalawatRecord $shalawatRecord) {
        $shalawat = Shalawat::all();
        return view('admin.shalawat-record.edit', compact('shalawatRecord', 'shalawat'));
    }

    public function update(Request $request, ShalawatRecord $shalawatRecord) {
        $request->validate([
            'shalawat_id' => 'required|exists:shalawats,id',
            'title' => 'required',
            'file_path' => 'required|mimes:mp3,wav,ogg|max:20480',
        ]);

        if ($request->hasFile('file_path')) {
            $filePath = $request->file('file_path')->store('audio', 'public');
            $shalawat = Shalawat::findOrFail($request->input('shalawat_id'));
            $shalawatRecord->update([
                'shalawat_id' => $request->input('shalawat_id'),
                'title' => $request->input('title'),
                'file_path' => $filePath,
            ]);
        }

        return redirect()->route('admin.shalawat-records.index')
                         ->with('success', 'Shalawat Record updated successfully.');
    }

    public function destroy(ShalawatRecord $shalawatRecord) {
        $shalawatRecord->delete();

        return redirect()->route('admin.shalawat-records.index')
                         ->with('success', 'Shalawat Record deleted successfully.');
    }
}
