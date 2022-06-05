<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.index', [
            'title' => 'register',
            'active' => 'register',
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:5|max:25',
        ]);
        User::create($validateData);
        // validate hidden pass ada 2 cara
        // $validateData['password'] = bcrypt($validateData['password']);
        // $validateData['password'] = Hash::make($validateData['password']);
    }
}
