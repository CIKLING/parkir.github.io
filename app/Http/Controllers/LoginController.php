<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function postLogin(Request $request)
    {

        $credentials = $request->only('username', 'password');
        $user = User::where('username', $credentials['username'])->first();

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil

            $request->session()->put('user', $user);
            return redirect()->intended('/dashboard');
        }

        // Jika autentikasi gagal
        return redirect('/login')->with('error', 'username atau password salah!');

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}