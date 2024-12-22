<?php

namespace App\Http\Controllers;

use App\Models\User;

class AccountController extends Controller
{
    public function account_list()
    {
        $users = User::all();
        return view('admin.accounts', compact('users'));
    }
}
