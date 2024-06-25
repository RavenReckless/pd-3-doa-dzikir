<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContentDzikir;
use Illuminate\Http\Request;

class ContentDzikirController extends Controller
{
    public function index()
    {
        $contents = ContentDzikir::all();
        return view('admin.content.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.content.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        ContentDzikir::create($request->all());
        return redirect()->route('admin.content.index');
    }

    public function show(ContentDzikir $contentDzikir)
    {
        return view('admin.content.show', compact('contentDzikir'));
    }

    public function edit(ContentDzikir $contentDzikir)
    {
        return view('admin.content.edit', compact('contentDzikir'));
    }

    public function update(Request $request, ContentDzikir $contentDzikir)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $contentDzikir->update($request->all());
        return redirect()->route('admin.content.index');
    }

    public function destroy(ContentDzikir $contentDzikir)
    {
        $contentDzikir->delete();
        return redirect()->route('admin.content.index');
    }
}
