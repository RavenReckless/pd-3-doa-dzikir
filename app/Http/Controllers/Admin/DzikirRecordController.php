<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DzikirRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DzikirRecordController extends Controller
{
    public function index()
    {
        $dzikirRecords = DzikirRecord::all();
        return view('admin.dzikir-records.index', compact('dzikirRecords'));
    }

    public function create()
    {
        return view('admin.dzikir-records.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'file_path' => 'required|mimes:mp3,wav,ogg|max:20480',
        ]);

        if ($request->hasFile('file_path')) {
            $filePath = $request->file('file_path')->store('audio', 'public');
            DzikirRecord::create([
                'nama' => $request->input('nama'),
                'file_path' => $filePath,
            ]);
        }

        return redirect()->route('admin.dzikir-records.index')
                         ->with('success', 'Dzikir Record created successfully.');
    }

    public function show(DzikirRecord $dzikirRecord)
    {
        return view('admin.dzikir-records.show', compact('dzikirRecord'));
    }

    public function edit(DzikirRecord $dzikirRecord)
    {
        return view('admin.dzikir-records.edit', compact('dzikirRecord'));
    }

    public function update(Request $request, DzikirRecord $dzikirRecord)
    {
        $request->validate([
            'nama' => 'required',
            'file_path' => 'nullable|mimes:mp3,wav,ogg|max:20480',
        ]);

        $dzikirRecord->nama = $request->input('nama');

        if ($request->hasFile('file_path')) {
            // Hapus file lama
            if ($dzikirRecord->file_path) {
                Storage::disk('public')->delete($dzikirRecord->file_path);
            }
            // Simpan file baru
            $filePath = $request->file('file_path')->store('audio', 'public');
            $dzikirRecord->file_path = $filePath;
        }

        $dzikirRecord->save();

        return redirect()->route('admin.dzikir-records.index')
                         ->with('success', 'Dzikir Record updated successfully.');
    }

    public function destroy(DzikirRecord $dzikirRecord)
    {
        if ($dzikirRecord->file_path) {
            Storage::disk('public')->delete($dzikirRecord->file_path);
        }
        $dzikirRecord->delete();

        return redirect()->route('admin.dzikir-records.index')
                         ->with('success', 'Dzikir Record deleted successfully.');
    }
}