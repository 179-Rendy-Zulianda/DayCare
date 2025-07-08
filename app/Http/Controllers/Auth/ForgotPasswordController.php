<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            // Redirect ke form reset password dengan membawa email
            return redirect()->route('password.reset.form', ['email' => $request->email]);
        } else {
            return back()->withErrors(['email' => 'Email tidak ditemukan di database.']);
        }
    }
} 