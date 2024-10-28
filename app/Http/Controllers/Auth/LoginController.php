<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Mendapatkan kredensial
        $credentials = $request->only('email', 'password');

        // Mencoba login
        if (Auth::attempt($credentials)) {
            // Jika login berhasil, ambil user berdasarkan email
            $user = User::where('email', $request->email)->first();

            // Cek peran user
            if ($user->role === 'Owner' || $user->role === 'Pengajar' || $user->role === 'Siswa') {
                // Regenerasi session
                $request->session()->regenerate();

                // Arahkan ke halaman dashboard atau halaman yang sesuai dengan peran
                if ($user->role === 'Owner') {
                    return redirect('/dashboard/owner')->with('success', 'Login sebagai Owner berhasil!');
                } else {
                    return redirect('/dashboard/admin')->with('success', 'Login sebagai Pengajar berhasil!');
                }
            } else {
                // Jika peran tidak valid, logout
                Auth::logout();
                return back()->withErrors(['email' => 'Peran pengguna tidak valid.']);
            }
        } else {
            // Jika login gagal, kembali dengan error
            return back()->withErrors([
                'email' => 'Kredensial yang diberikan tidak cocok dengan catatan kami.',
            ])->onlyInput('email');
        }
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logout berhasil!');
    }
}
