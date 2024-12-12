<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function createUser(Request $request)
    {
        $incomingData = $request->validate([
            'name' => ['required', 'min:3', 'max:30'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'program' => ['required'],
            'password' => ['required', 'min:8', 'max:200'],
        ]);
            
        $incomingData['password'] = bcrypt($incomingData['password']);
        $user = User::create($incomingData);
        Auth::login($user);
        return redirect('/login');
    }
}
