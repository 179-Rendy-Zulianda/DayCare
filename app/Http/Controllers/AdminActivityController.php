<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::with('child')->orderByDesc('tanggal')->get();
        return view('admin.aktivitas', compact('activities'));
    }

    public function create()
    {
        $children = Child::orderBy('nama_anak')->get();
        return view('admin.aktivitas_create', compact('children'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'child_id' => 'required|exists:children,id',
            'tanggal' => 'required|date',
            'aktivitas' => 'required',
            'catatan' => 'nullable',
            'jam' => 'nullable',
        ]);
        $validated['created_by'] = Auth::id();
        Activity::create($validated);
        return redirect()->route('admin.aktivitas.index')->with('success', 'Aktivitas berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $activity = Activity::findOrFail($id);
        $children = Child::orderBy('nama_anak')->get();
        return view('admin.aktivitas_edit', compact('activity', 'children'));
    }

    public function update(Request $request, $id)
    {
        $activity = Activity::findOrFail($id);
        $validated = $request->validate([
            'child_id' => 'required|exists:children,id',
            'tanggal' => 'required|date',
            'aktivitas' => 'required',
            'catatan' => 'nullable',
            'jam' => 'nullable',
        ]);
        $activity->update($validated);
        return redirect()->route('admin.aktivitas.index')->with('success', 'Aktivitas berhasil diupdate!');
    }

    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();
        return redirect()->route('admin.aktivitas.index')->with('success', 'Aktivitas berhasil dihapus!');
    }
} 