<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\RedirectResponse;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:10'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6'],
            'confirm_password' => ['required', 'same:password'],
            'check_box' => ['required', 'accepted'],
        ]);

        // Create the user. The password will be automatically hashed by the 'hashed' cast in User model.
        $user = User::create([
            'name' => $incomingFields['name'],
            'email' => $incomingFields['email'],
            'password' => $incomingFields['password'],
        ]);

        // Automatically log in the user after registration
        Auth::login($user);

        return redirect('/login')->with('success', 'Registration successful!');
    }

    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt([
            'email' => $incomingFields['email'],
            'password' => $incomingFields['password']
        ])) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Logged out successfully!');
    }
}
