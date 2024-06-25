<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RecommendedDzikir;
use Illuminate\Http\Request;

class RecommendedDzikirController extends Controller
{
    public function index() {
        $recommendedDzikirs = RecommendedDzikir::all();
        return view('admin.recommended-dzikir.index', compact('recommendedDzikirs'));
    }

    public function create() {
        return view('admin.recommended-dzikir.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'count' => 'required|numeric',
        ]);

        RecommendedDzikir::create([
            'title' => $request->title,
            'description' => $request->description,
            'count' => $request->count,
        ]);

        return redirect()->route('admin.recommended-dzikir.index');
    }

    public function edit(RecommendedDzikir $recommendedDzikir) {
        return view('admin.recommended-dzikir.edit', compact('recommendedDzikir'));
    }

    public function update(Request $request, RecommendedDzikir $recommendedDzikir) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'count' => 'required|numeric',
        ]);

        $recommendedDzikir->update([
            'title' => $request->title,
            'description' => $request->description,
            'count' => $request->count,
        ]);

        return redirect()->route('admin.recommended-dzikir.index');
    }

    public function destroy(RecommendedDzikir $recommendedDzikir) {
        $recommendedDzikir->delete();

        return redirect()->route('admin.recommended-dzikir.index');
    }
}
