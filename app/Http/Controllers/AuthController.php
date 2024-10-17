<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     $credentials['password'] = md5($credentials['password']);
    //     if (Auth::attempt($credentials)) {
    //         // Login berhasil
    //         return redirect()->route('admin');
    //     }

    //     // dd($credentials);

    //     // Login gagal
    //     return redirect()->back()->withInput()->withErrors(['login' => 'Email atau password salah.']);
    // }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = md5($request->input('password'));

        $admin = Admin::where('email', $email)
            ->where('password', $password)
            ->first();

        if ($admin) {
            // Login berhasil
            Auth::guard('admin')->login($admin);
            return redirect()->route('admin');
        }

        // Login gagal
        return redirect()->back()->withInput()->withErrors(['login' => 'Email atau password salah.']);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
