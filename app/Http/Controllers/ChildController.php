<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    // Tampilkan daftar anak
    public function index()
    {
        $children = Child::latest()->paginate(10);
        return view('admin.anak', compact('children'));
    }

    // Tampilkan form pendaftaran anak
    public function create()
    {
        return view('admin.children.create');
    }

    // Simpan data anak
    public function store(Request $request)
    {
        $validated = $request->validate([
            'program' => 'required',
            'tanggal_masuk' => 'required|date',
            'nama_anak' => 'required',
            'tanggal_lahir' => 'nullable|date',
            'foto_anak' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        // Handle upload foto
        if ($request->hasFile('foto_anak')) {
            $foto = $request->file('foto_anak')->store('foto_anak', 'public');
            $validated['foto_anak'] = $foto;
        }

        $validated['user_id'] = auth()->id();
        Child::create($validated + $request->except(['_token', 'foto_anak']));

        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.anak')->with('success', 'Data anak berhasil didaftarkan!');
        } else {
            return redirect()->route('dashboard')->with('success', 'Pendaftaran anak berhasil!');
        }
    }

    public function edit($id)
    {
        $child = Child::findOrFail($id);
        return view('admin.children.edit', compact('child'));
    }

    public function update(Request $request, $id)
    {
        $child = Child::findOrFail($id);
        $validated = $request->validate([
            'program' => 'required',
            'tanggal_masuk' => 'required|date',
            'nama_anak' => 'required',
            'tanggal_lahir' => 'nullable|date',
            'foto_anak' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        if ($request->hasFile('foto_anak')) {
            $foto = $request->file('foto_anak')->store('foto_anak', 'public');
            $validated['foto_anak'] = $foto;
        }
        $child->update($validated + $request->except(['_token', 'foto_anak', '_method']));
        return redirect()->route('admin.anak')->with('success', 'Data anak berhasil diupdate!');
    }

    public function destroy($id)
    {
        $child = Child::findOrFail($id);
        $child->delete();
        return redirect()->route('admin.anak')->with('success', 'Data anak berhasil dihapus!');
    }
}
