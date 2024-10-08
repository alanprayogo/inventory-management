<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat pengguna baru dengan peran 'Member' secara default
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Member'
        ]);

        // Login otomatis setelah registrasi
        auth()->login($user);

        // Redirect berdasarkan role
        if ($user->role === 'Admin') {
            return redirect()->route('dashboard-admin');
        } else {
            return redirect()->route('dashboard-member');
        }
    }

}
