<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MateriDzikir;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriDzikirController extends Controller
{
    public function index()
    {
        $materiDzikir = MateriDzikir::with('language')->get();
        return view('admin.materi-dzikir.index', compact('materiDzikir'));
    }

    public function create()
    {
        $languages = Language::all();
        return view('admin.materi-dzikir.create', compact('languages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'language_id' => 'required|exists:languages,id',
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('gambar_materi_dzikir', 'public');
        }

        MateriDzikir::create($data);
        return redirect()->route('admin.materi-dzikir.index');
    }

    public function show(MateriDzikir $materiDzikir)
    {
        return view('admin.materi-dzikir.show', compact('materiDzikir'));
    }

    public function edit(MateriDzikir $materiDzikir)
    {
        $languages = Language::all();
        return view('admin.materi-dzikir.edit', compact('materiDzikir', 'languages'));
    }

    public function update(Request $request, MateriDzikir $materiDzikir)
    {
        $request->validate([
            'language_id' => 'required|exists:languages,id',
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($materiDzikir->image) {
                Storage::disk('public')->delete($materiDzikir->image);
            }
            $data['image'] = $request->file('image')->store('gambar_materi_dzikir', 'public');
        }

        $materiDzikir->update($data);
        return redirect()->route('admin.materi-dzikir.index');
    }

    public function destroy(MateriDzikir $materiDzikir)
    {
        if ($materiDzikir->image) {
            Storage::disk('public')->delete($materiDzikir->image);
        }
        $materiDzikir->delete();
        return redirect()->route('admin.materi-dzikir.index');
    }
}