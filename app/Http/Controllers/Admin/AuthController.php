<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.contents.auth.index');
    }

    public function validation(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required|min:6'
        ], [
            'username.required' => 'Username harus diisi',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 6 karakter'
        ]);

        if (Auth::attempt(['username' => $validated['username'], 'password' => $validated['password']])) {
            return redirect()->route('admin.dashboard')->with('success', 'Anda berhasil masuk sebagai ' . Str::lower(Auth::user()->name));
        } else {
            return redirect()->route('auth.index')->withErrors(['message' => 'Username dan password salah'])->withInput();
        }
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        Auth::logout();
        return redirect()->route('auth.index')->with('success', 'Anda berhasil keluar');
    }
}
