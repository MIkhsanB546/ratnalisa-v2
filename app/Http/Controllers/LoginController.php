<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function showLogin(): View
    {
        return view('admin.auth.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $petugas = Petugas::where('username', $request->input('username'))->first();

        if (!$petugas || !Hash::check($request->input('password'), $petugas->password)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Username atau password salah.');
        }

        Session::put('petugas_id', $petugas->id_petugas);
        Session::put('petugas_username', $petugas->username);
        Session::put('petugas_role', $petugas->role);
        Session::put('petugas_nama', $petugas->nama);

        $request->session()->regenerate();

        return redirect()->route('admin.dashboard');
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
