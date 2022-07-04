<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create(Request $request)
    {
        return view('users.register');
    }

    public function store(Request $request)
    {

        $request->validate([
            'username' => ['required', 'unique:users,username', 'string', 'min:3', 'alpha_num', 'max:25'],
            'password' => ['required', 'min:4']
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        session()->flash('success', 'Terimakasih, Kamu sudah terdaftar!');
        return redirect('/');
    }
}
