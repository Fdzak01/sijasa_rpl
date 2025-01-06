<?php

namespace App\Http\Controllers;

use App\Models\KategoriLayanan;
use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = User::all();
        return view('admin.pengguna.index', compact('pengguna'));
    }

    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'jenkel' => 'required',
            'bio' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'jenkel' => $request->jenkel,
            'bio' => $request->bio
        ]);

        return redirect()->route('login')->with('success', 'Registration successfull! Please login');
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->role == 'user') {
                return redirect()->intended('/');
            }

            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Login failed!');
    }

    public function home()
    {
        $kategori = KategoriLayanan::all();
        return view('welcome', compact('kategori'));
    }

    public function dashboard()
    {
        $pengguna = User::where('role', 'user')->count();
        $layanan = User::where('role', 'pelayanan')->count();
        return view('admin.dashboard', compact('pengguna', 'layanan'));
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('admin.pengguna.update', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);

        $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role
        ]);

        return redirect()->route('pengguna')->with('success', 'Update successfull!');
    }

    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('pengguna')->with('success', 'Delete successfull!');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
