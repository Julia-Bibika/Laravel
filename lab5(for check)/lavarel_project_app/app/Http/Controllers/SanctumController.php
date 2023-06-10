<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class SanctumController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

//        $request->validate([
//            'email' => 'required|email',
//            'password' => 'required',
//        ]);
//        $user = User::where('email', $request->email)->first();
////        if (!$user || !Hash::check($request->password, $user->password)) {
//////            throw ValidationException::withMessages([
//////                'email' => ['The provided credentials are incorrect.'],
//////            ]);
////        }
        return ['token' => Auth::user()->createToken($request->token_name
            ?? "default")->plainTextToken];
    }
    public function delete(Request $request){
        $request->user()->currentAccessToken()->delete();
    }
//    public function getToken(Request $request)
//    {
//        $user = $request->user();
//        $token = $user->createToken($request->token_name
//            ?? "default")->plainTextToken;
//
//        return response()->json(['token' => $token, 'user' => $user], 200);
//    }
}
