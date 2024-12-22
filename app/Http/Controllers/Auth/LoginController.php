<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = [
            'mobile'=> $request['mobile'],
            'password'=>$request['password']
        ];
         if(auth()->attempt($credentials)){

             $user =Auth::user();

             $user->tokens()->delete();

             $success['token'] =  $user->createToken(request()->userAgent())->plainTextToken;
             $success['success'] = true;

             return response()->json($success,200);
         } else {
             return response()->json(['error'=>'Unauthorized'], 401);
         }
            }

}
