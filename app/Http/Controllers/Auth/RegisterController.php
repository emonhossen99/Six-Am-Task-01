<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        // Check User Login 
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role_id === 1) {
                // User role is admin then redirect to admin dashboard 
                return redirect()->route('admin.dashboard.index');
            } else {
                // User role is user then redirect to user dashboard
                return redirect()->route('user.dashboard.index');
            }
        }
        return view('auth.register');
    }

    public function registerStore(RegisterRequest $request){
        $role = Role::where('slug', 'user')->first();
        User::create([
            'role_id'           => $role->id,
            'name'              => $request->name,
            'email'             => $request->email,
            'email_verified_at' => now(),
            'password'          => Hash::make($request->password),
        ]);
        return redirect()->route('login')->with('success','Registration successful. Please login now.');
    }
}
