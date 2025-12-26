<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
  

    public function register(Request $request)
    {
        // dd($request->all());
        // ✅ Validation
       $request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|email|unique:users,email',
    'password' => 'required|min:8|confirmed',
    'terms' => 'required',
]);


        // ✅ Create user
       User::create([
    'name' => $request->name,
    'email' => $request->email,
    'password' => bcrypt($request->password),
]);


        // ✅ Redirect
        return redirect()->route('login')->with('success', 'Account created successfully!');
    }
}
