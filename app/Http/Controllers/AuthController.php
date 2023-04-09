<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(LoginUserRequest $request)
    {
        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return response()->json(['errors' => 'Credentials does not match'], 401);
        }

        $user = User::where('email', $request->email)->first();
        return response()->json([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'token' => $user->createToken('login')->plainTextToken,
        ], 200);
    }

    public function register(StoreUserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        // $response = array_merge($request->all(), [
        //     'token' => $user->createToken('login')->plainTextToken,
        // ]);

        return response()->json([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'token' => $user->createToken('login')->plainTextToken,
        ], 200);
    }

    // public function logout(Type $var = null)
    // {
    //     # code...
    // }
}
