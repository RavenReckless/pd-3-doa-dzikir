<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Monitoring;
use App\Models\User;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index()
    {
        $monitorings = Monitoring::with('user')->get();
        return view('admin.monitorings.index', compact('monitorings'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.monitorings.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'dzikir_list' => 'required|string'
        ]);

        Monitoring::create($request->all());

        return redirect()->route('admin.monitoring.index')->with('success', 'Monitoring berhasil ditambahkan.');
    }

    public function edit(Monitoring $monitoring)
    {
        $users = User::all();
        return view('admin.monitorings.edit', compact('monitoring', 'users'));
    }

    public function update(Request $request, Monitoring $monitoring)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'dzikir_list' => 'required|string'
        ]);

        $monitoring->update($request->all());

        return redirect()->route('admin.monitoring.index')->with('success', 'Monitoring berhasil diupdate.');
    }

    public function destroy(Monitoring $monitoring)
    {
        $monitoring->delete();
        return redirect()->route('admin.monitoring.index')->with('success', 'Monitoring berhasil dihapus.');
    }
}
