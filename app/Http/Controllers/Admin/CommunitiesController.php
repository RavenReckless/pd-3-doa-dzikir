<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\Request;

class CommunitiesController extends Controller
{
    public function index()
    {
        $communities = Community::all();
        return view('admin.communities.index', compact('communities'));
    }

    public function create() {
        return view('admin.communities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Community::create($request->all());
        return redirect()->route('admin.community.index');
    }

    public function show(Community $community)
    {
        return view('admin.communities.show', compact('community'));
    }

    public function edit(Community $community)
    {
        $community = Community::find($community->id);
        return view('admin.communities.edit', compact('community'));
    }

    public function update(Request $request, Community $community)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $community->update($request->all());
        return redirect()->route('admin.community.index');
    }

    public function destroy(Community $community)
    {
        $community->delete();
        return redirect()->route('admin.community.index');
    }
}
