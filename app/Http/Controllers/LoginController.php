<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('users.login');
    }

    public function store(Request $request)
    {
        $attr = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($attr)) {
            return redirect('/');
        }

        throw ValidationException::withMessages([
            'username' => 'Pengguna tidak terdaftar!',
        ]);

    }
}
