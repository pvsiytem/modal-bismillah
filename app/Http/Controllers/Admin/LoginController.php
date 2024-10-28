<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the admin login form
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // Handle the login attempt
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log in the admin
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed
            return redirect()->intended('admin/dashboard'); // Redirect to admin dashboard
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
