<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class SanctumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        return ['token' => $user->createToken($request->token_name
            ?? "default")->plainTextToken];
    }
    public function delete(Request $request){
        $request->user()->currentAccessToken()->delete();
    }
    // Revoke all tokens...

//$user->tokens()->delete();
//
//// Revoke the token that was used to authenticate the
//current request...
//
//$request->user()->currentAccessToken()->delete();
//
//// Revoke a specific token...
//
//$user->tokens()->where('id', $tokenId)->delete();
}
