<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('auth.password');
    }
    public function validateData(Request $request)
    {
        $user = User::where('username', $request->username)->first();
        if ($user->no_telp == $request->no_telp) {
            return redirect()->route('setPassword.edit', $user->id)->with('success_set_password', 'Silahkan masukan password baru');
        }
        return back()->with('error', 'Username dan No Telphone yang anda masukan salah');
    }
}
