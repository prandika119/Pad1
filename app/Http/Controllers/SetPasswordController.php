<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SetPasswordController extends Controller
{
    public function edit($id)
    {
        $user = User::find($id);
        return view('auth.set_password', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $password = $request->validate([
            'password' => 'required|confirmed',
        ]);
        $password['password'] = Hash::make($password['password']);
        User::where('id', $id)->update($password);
        return redirect()->route('login.index')->withSuccess('Update Password berhasil, silahkan login!');
    }
}
