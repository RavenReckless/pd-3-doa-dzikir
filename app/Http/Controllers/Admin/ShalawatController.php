<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shalawat;
use Illuminate\Http\Request;

class ShalawatController extends Controller
{
    public function index () {
        $shalawats = Shalawat::all();
        return view('admin.shalawat.index', compact('shalawats'));
    }

    public function create () {
        return view('admin.shalawat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'bacaan' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('gambar_shalawat', 'public');
        }

        Shalawat::create($data);
        return redirect()->route('admin.shalawat.index');
    }

    public function edit(Shalawat $shalawat) {
        return view('admin.shalawat.edit', compact('shalawat'));
    }

    public function update(Request $request, Shalawat $shalawat) {
        $request->validate([
            'title' => 'required',
            'bacaan' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('gambar_shalawat', 'public');
        }

        $shalawat->update($data);
        return redirect()->route('admin.shalawat.index');
    }

    public function destroy(Shalawat $shalawat) {
        $shalawat->delete();

        return redirect()->route('admin.shalawat.index');
    }

}
