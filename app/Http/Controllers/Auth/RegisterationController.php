<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterationController extends Controller
{
    public function register(RegisterationRequest $request)
    {
        $newuser = $request->validated();
        $newuser['password'] = Hash::make($newuser['password']);
        $newuser['role'] = 'user';

        $user = User::create($newuser);

        $success['token'] = $user->createToken('user', ['app:all'])->plainTextToken;
        $success['mobile'] = $user->mobile;

        return response()->json([
            'Data' => $success,
            'message' => 'User registered successfully'
        ], 200);
    }
}
