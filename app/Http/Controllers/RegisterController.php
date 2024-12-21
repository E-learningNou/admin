<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewUserAdded;

class RegisterController extends Controller
{
    // Show registration form
    public function showRegistrationForm()
    {
        if(Auth::check()){
            if(Auth::user()->role=='admin')
                  { return view('Pages.admin.Alladmin'); }
        }

        else{return view('auth.register'); }
    }

    // Handle registration
    public function store(Request $request, $role)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role'=>'in:admin,user',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register.index')
                             ->withErrors($validator)
                             ->withInput();
        }

        // Create new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $role, // Use the role passed to the method
        ]);
        //$user->notify(new NewUserAdded());
        // Redirect based on role
        if ($role == 'admin') {
            return redirect()->route('adminhome');
        } else {
            Auth::login($user);
            return redirect()->route('home');
        }
    }

    public function register(Request $request)
    {
        if (Auth::check() && Auth::user()->role !== 'admin') {
            return redirect()->route('home')->withErrors(['error' => 'Unauthorized action.']);
        }
        // Determine the role based on the request

        $role = $request->input('role', 'user'); // Default to 'user' if no role is provided
         // Call the store method with the determined role
        return $this->store($request, $role);
    }
}
