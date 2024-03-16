<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import Hash
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:8', // At least 8 characters
            'role' => 'nullable|string|max:255',
        ]);

        $data = $request->only(['name', 'email', 'password', 'role']);
        $data['password'] = Hash::make($data['password']); // Hashing the password

        $user = User::create($data);

        return redirect()->route('login')->with('success', 'User registered successfully!');
    }
}
