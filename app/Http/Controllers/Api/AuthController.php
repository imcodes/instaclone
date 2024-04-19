<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Login Method
     * 
     */
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            
        ]);

        $user = User::where('email',$request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
     
        $jwt =  $user->createToken($request->email)->plainTextToken;
        $data = [
            'message' => 'Login Successfull',
            'token' => $jwt,
            'userInfo' => $user
        ];

        return response($data);
        
    }

    public function logout(Request $request){
        $request->validate([
            'user_id' => 'required|integer',
        ]);
        $user = User::where('id',$request->user_id)->first();
        $user->tokens()->delete();
        return response(['message'=>'Logged out success']);
    }
}
