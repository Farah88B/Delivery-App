<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\TwilioService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterationController extends Controller
{


    public function register(Request $request){

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

            // توليد OTP وإرساله
        $otp = "123456";
        $user->update([
            'otp' => $otp,
        ]);

        return response()->json(
            [
                'message' => 'OTP sent successfully.',
            ], 200);

    }catch (ValidationException $e){
$message = $e->validator->errors()->first();
return response()->json([
'message' => $message
], 422); // كود 422 يشير إلى خطأ في التحقق
}
    }
    public function verifyOTP(Request $request)
    {
        $request->validate([
            'mobile' => 'required|numeric|digits:10',
            'otp' => 'required|numeric|digits:6',
        ]);

        $user = User::where('mobile', $request['mobile'])
            ->where('otp', $request['otp'])
            ->first();

        if (!$user) {
            return response()->json([
                'message' => 'Invalid OTP.'
            ], 401);
        }

        // إعادة تعيين الرمز بعد التحقق
        $user->update(['otp' => null]);

        // توليد API Token
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Register successful!',
            'token' => $token
        ]);
    }

    public function register2(Request $request)
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
            $phoneNumber = "+963" . ltrim($user->mobile, '0');


            // استدعاء TwilioService لإرسال OTP
            $twilio = new TwilioService();
            $message = "Your verification code is: ";

            $sendStatus = $twilio->sendSMS($phoneNumber, $message);

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
