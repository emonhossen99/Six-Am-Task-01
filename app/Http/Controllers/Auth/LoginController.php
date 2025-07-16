<?php

namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        // Check User Login
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role_id === 1) {
                // User role is admin then redirect to admin dashboard
                return redirect()->intended('/admin/dashboard');;
            } else {
                // User role is user then redirect to user dashboard
                return redirect()->intended('/user/dashboard');
            }
        }
       return Inertia::render('Auth/Login');
    }


    public function loginStore(LoginRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            if ($user->role_id === 1) {
                return redirect()->route('admin.dashboard.index')->with('success', 'Admin Login Successfully');
            } else {
                return redirect()->route('user.dashboard.index')->with('success', 'User Login Successfully');
            }
        }
        return back()->with('error','Invalid credentials');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logout Successfully');
    }
}
