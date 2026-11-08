<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Poin 2, 3, & 4: Memvalidasi, autentikasi, dan menangani kredensial salah
    public function login(Request $request)
    {
        // Poin 2: Memvalidasi input login
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Poin 3: Menggunakan fasilitas autentikasi Laravel (Auth::attempt)
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/books')->with('success', 'Berhasil login!');
        }

        // Poin 4: Menampilkan pesan jika kredensial tidak sesuai
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }

    // Poin 6: Menyediakan proses logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Berhasil logout.');
    }
}
