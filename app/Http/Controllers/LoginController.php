<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    // Show login form
    public function showLoginForm()
    {

        return view('auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        // Validate input data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

            if ($validator->fails()) {
                return redirect()->route('login')
                                ->withErrors($validator)
                                ->withInput();
            }

        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'))) {
            if(Auth::user()->role =='admin'){
                return redirect()->route('adminhome');
            }
            else{
            // Authentication passed
            return redirect()->route('home');
        }
        }

        // Authentication failed
        return redirect()->route('login')->withErrors(['email' => 'Invalid credentials']);
    }
    //
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    // Handle logout
    public function logout()
    {
        $user=Auth::user();
        if($user){
          $user->delete();
        }
        Auth::logout();
         return redirect()->route('login');
    }
}
