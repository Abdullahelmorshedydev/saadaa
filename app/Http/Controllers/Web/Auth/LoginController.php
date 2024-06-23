<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Auth\LoginRequest;
use App\Http\Requests\Web\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login()
    {
        return view('site.pages.Login');
    }

    public function store(LoginRequest $request)
    {
        $data = $request->validated();
        $user = User::where('email', $data['email'])->first();
        if (!$user || !Hash::check($data['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Invalid credentials'],
            ]);
        }
        Auth::login($user);
        return redirect()->route('index')->with('success', 'Logged in Successfully');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $user = User::create([
            'name' => $data['username'],
            'email' => $data['email_register'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password_register']),
        ]);
        auth()->login($user);
        return redirect()->route('index')->with('success', 'Register Successfully');
    }

    public function logout ()
    {
        auth()->logout();
        return back()->with('success', 'Logged out Successfully');
    }
}
