<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\Company;
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
            return response()->json([
                'errors' => 'Credentials does not match',
            ], 401);
        }

        $user = User::where('email', $request->email)->first();
        Auth::login($user);

        return response()->json([
            'user' => $user,
            'token' => $user->createToken('login')->plainTextToken,
        ], 200);
    }

    public function register(StoreUserRequest $request)
    {
        //user register
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);

        //employer register
        if ($request->is_employer) {

            if ($request->is_new_company=="true") {
                //new company register
                $company = Company::firstOrCreate([
                    'name' => $request->company_name,
                    'contact_number' => $request->contact_number,
                    'email' => $request->company_email,
                    'reg_no' => $request->reg_no,
                    'location' => $request->company_location,
                    'description' => $request->company_description,
                ]);
            } else {
                $company = Company::where('name', 'LIKE', "%{$request->search_company}%")->first();
            }

            $user->is_employer = true;
            $user->company()->associate($company)->save();
        }

        event(new Registered($user));

        // Auth::login($user);

        // $response = array_merge($request->all(), [
        //     'token' => $user->createToken('login')->plainTextToken,
        // ]);

        return response()->json([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->about,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ], 200);
    }

    public function logout()
    {

        $user = Auth::user();
        $user->currentAccessToken()->delete();

        return response()->json([
            'message' => 'logout successfully',
        ], 200);
    }

    public function autoLogin(Request $request)
    {
        $user = User::findOrFail($request->id);

        return response()->json($user);
    }
}
