<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;         
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function signup(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'PhoneNumber' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Create a new user
        $user = new User([
            'name' => $request->input('name'),
            'PhoneNumber' => $request->input('PhoneNumber'),
            'email' => $request->input('email'),
            'password' =>bcrypt($request->input('password')) ,
        ]);

        $user->save();

        // Redirect to a desired route, e.g., login or home
        return redirect('/login')->with('success', 'Signup successful! Please login.');
    }

    public function login(Request $request){
        
            // Validate the request data
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
            
            // Attempt to authenticate the user
            if (Auth::attempt($credentials)) {
                // Authentication passed
                $request->session()->regenerate();
            

        // Store the user's name in the session
        $request->session()->put('user_name', Auth::user()->name);
    
                return redirect()->intended('dashboard'); // Redirect to a secure area
            }
    
            // Authentication failed
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }

    }
  
