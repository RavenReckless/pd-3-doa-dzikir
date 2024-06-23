<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ManfaatDzikir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManfaatDzikirController extends Controller
{
    public function index()
    {
        $manfaatDzikir = ManfaatDzikir::all();
        return view('admin.manfaat-dzikir.index', compact('manfaatDzikir'));
    }

    public function create()
    {
        return view('admin.manfaat-dzikir.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('gambar_manfaat_dzikir', 'public');
        }

        ManfaatDzikir::create($data);
        return redirect()->route('admin.manfaat-dzikir.index');
    }

    public function show(ManfaatDzikir $manfaatDzikir)
    {
        return view('admin.manfaat-dzikir.show', compact('manfaatDzikir'));
    }

    public function edit(ManfaatDzikir $manfaatDzikir)
    {
        return view('admin.manfaat-dzikir.edit', compact('manfaatDzikir'));
    }

    public function update(Request $request, ManfaatDzikir $manfaatDzikir)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($manfaatDzikir->image) {
                Storage::disk('public')->delete($manfaatDzikir->image);
            }
            $data['image'] = $request->file('image')->store('gambar_manfaat_dzikir', 'public');
        }

        $manfaatDzikir->update($data);
        return redirect()->route('admin.manfaat-dzikir.index');
    }

    public function destroy(ManfaatDzikir $manfaatDzikir)
    {
        if ($manfaatDzikir->image) {
            Storage::disk('public')->delete($manfaatDzikir->image);
        }
        $manfaatDzikir->delete();
        return redirect()->route('admin.manfaat-dzikir.index');
    }
}
