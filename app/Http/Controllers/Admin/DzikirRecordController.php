<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DzikirRecord;
use App\Models\MateriDzikir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DzikirRecordController extends Controller
{
    public function index()
    {
        $dzikirRecords = DzikirRecord::with('materiDzikir')->paginate(5);
        return view('admin.dzikir-records.index', compact('dzikirRecords'));
    }

    public function create()
    {
        $materiDzikir = MateriDzikir::all();
        return view('admin.dzikir-records.create', compact('materiDzikir'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'materi_dzikir_id' => 'required|exists:materi_dzikirs,id',
            'file_path' => 'required|mimes:mp3,wav,ogg|max:20480',
        ]);

        if ($request->hasFile('file_path')) {
            $filePath = $request->file('file_path')->store('audio', 'public');
            $materiDzikir = MateriDzikir::findOrFail($request->input('materi_dzikir_id'));
            DzikirRecord::create([
                'materi_dzikir_id' => $request->input('materi_dzikir_id'),
                'nama' => $materiDzikir->title,
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
        $materiDzikir = MateriDzikir::all();
        return view('admin.dzikir-records.edit', compact('dzikirRecord', 'materiDzikir'));
    }

    public function update(Request $request, DzikirRecord $dzikirRecord)
    {
        $request->validate([
            'materi_dzikir_id' => 'required|exists:materi_dzikir,id',
            'file_path' => 'nullable|mimes:mp3,wav,ogg|max:20480',
        ]);

        $materiDzikir = MateriDzikir::findOrFail($request->input('materi_dzikir_id'));
        $dzikirRecord->materi_dzikir_id = $request->input('materi_dzikir_id');
        $dzikirRecord->nama = $materiDzikir->title;

        if ($request->hasFile('file_path')) {
            // Delete old file
            if ($dzikirRecord->file_path) {
                Storage::disk('public')->delete($dzikirRecord->file_path);
            }
            // Save new file
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
