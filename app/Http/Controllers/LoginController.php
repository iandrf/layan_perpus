<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Models\User; // Mengimpor model User
use App\Models\Postbuku;
class LoginController extends Controller
{
    public function index()
    {

        $postb = Postbuku::latest()->limit(4)->get();
        return view('home',compact('postb'));
    
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('home');
        }
    }

    public function store(Request $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME); // Gunakan HOME dengan huruf besar
    }

    public function actionlogin(Request $request): RedirectResponse
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil, periksa peran pengguna
            $user = Auth::user();
            if ($user->role === 'admin') {
                // Jika pengguna adalah admin, arahkan ke dashboard admin
                return redirect()->route('home');
            } else {
                // Jika pengguna adalah user biasa, arahkan ke dashboard user
                return redirect()->route('home');
            }
        }

        // Jika otentikasi gagal, kembali ke halaman sebelumnya dengan pesan kesalahan
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('username')); // Menggunakan withInput() untuk menyimpan input yang benar
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
