<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    // Tampilkan semua user kecuali admin
    public function index()
    {
        $users = User::orderBy('name')->get();
        return view('admin.user', compact('users'));
    }

    // Form edit user (kecuali admin)
    public function edit($id)
    {
        $user = User::findOrFail($id);
        if ($user->role === 'admin') {
            abort(403, 'Tidak bisa edit akun admin!');
        }
        return view('admin.user_edit', compact('user'));
    }

    // Update user (kecuali admin)
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if ($user->role === 'admin') {
            abort(403, 'Tidak bisa update akun admin!');
        }
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,'.$user->id,
            'email' => 'required|email|unique:users,email,'.$user->id,
            'phone' => 'required',
            'address' => 'required',
            'password' => 'nullable|min:8',
        ]);
        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        } else {
            unset($validated['password']);
        }
        $user->update($validated);
        return redirect()->route('admin.user')->with('success', 'User berhasil diupdate!');
    }

    // Hapus user (kecuali admin)
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if ($user->role === 'admin') {
            abort(403, 'Tidak bisa menghapus akun admin!');
        }
        $user->delete();
        return redirect()->route('admin.user')->with('success', 'User berhasil dihapus!');
    }
}
