<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class RegisterationController extends Controller
{

    public function register(Request $request)
    {
        try {
            // تحقق من البيانات
            $validatedData = $request->validate([
                'mobile' => 'required|unique:users,mobile|digits:10',
                'password' => 'required|string|confirmed|min:6',
                'latitude' => 'required|string',
                'longitude' => 'required|string',
            ]);

            // إعداد بيانات المستخدم
            $newuser = [
                'mobile' => $validatedData['mobile'],
                'password' => Hash::make($validatedData['password']),
                'latitude' => $validatedData['latitude'],
                'longitude' => $validatedData['longitude'],
            ];

            // إنشاء المستخدم
            $user = User::create($newuser);

            // إعداد بيانات النجاح
            $success['token'] = $user->createToken('auth_token', ['app:all'])->plainTextToken;
            $success['mobile'] = $user->mobile;

            return response()->json([
                'message' => 'User registered successfully',
                'data' => $success,
            ], 200);
        } catch (ValidationException $e) {
            // إرجاع رسالة الخطأ الأولى
            $message = $e->validator->errors()->first();
            return response()->json([
                'message' => $message,
            ], 422);
        }
    }

}
