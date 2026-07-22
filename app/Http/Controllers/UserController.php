<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\RedirectResponse;

class UserController extends Controller
{
    public function register(Request $request): RedirectResponse
    {
        // Process the registration logic here
        $incomingFields = Validator::make($request->all(), [
            'name' => ['required', 'min:3', 'max: 10'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6'],
            'confirm_password' => ['required', 'same:password'],
            'check_box' => ['required', 'accepted'],
            ]
        );
        if ($incomingFields->fails()) {
            return redirect('/register')->withErrors($incomingFields)->withInput();
        }

        // Create a new user instance
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        Auth::login($user);
        return redirect('/login')->with('success', 'Registration successful! Please login.');

    }

     public function login(Request $request)
    {
        return 'Login successful!';
    }
}
