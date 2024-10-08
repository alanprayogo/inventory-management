<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Menggunakan metode validate() dari objek Request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Coba untuk login dengan kredensial yang diberikan
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            // Menentukan redirect berdasarkan role
            if ($user->role == 'admin') {
                return redirect()->route('dashboard-admin')->with('success', 'Login successful! Welcome, Admin!');
            } else {
                return redirect()->route('dashboard-member')->with('success', 'Login successful! Welcome, Member!');
            }
        }

        // Jika login gagal, kembali dengan pesan kesalahan
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'You have successfully logged out.');
    }
}
