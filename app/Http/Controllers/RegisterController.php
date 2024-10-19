<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $user = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:user,username',
            'no_telp' => 'required|unique:user,no_telp',
            'email' => 'email|unique:user',
            'team' => '',
            'address' => '',
            'date_of_birth' => 'required|date',
            'password' => 'required|confirmed'
        ]);
        User::create($user);
        return redirect()->route('login.index')->withSuccess('Register Berhasil Silahkan Login Terlebih Dahulu');
    }
}
