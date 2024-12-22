<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index() {
        return view('autentikasi.register');
    }

    public function store(Request $request) {
        $user_data = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        $user_data['password'] = bcrypt($user_data['password']);
        $user = User::create($user_data);
        return redirect('/login');
    }
}
