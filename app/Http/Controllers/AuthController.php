<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Services\TwilioService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'mobile' => 'required|numeric|digits:10',
            'password' => 'required|string|min:6',
        ]);

        // البحث عن المستخدم
        $user = User::where('mobile', $request['mobile'])->first();

        if (!$user || !Hash::check($request['password'], $user->password)) {
            return response()->json(['message' => 'Invalid Password Or Mobile'], 401);
        }

        // توليد OTP وإرساله
        $otp = rand(100000, 999999);
        $user->update([
            'otp' => $otp,
            'otp_expires_at' => now()->addMinutes(5),
        ]);

        // استدعاء TwilioService لإرسال OTP
        $twilio = new TwilioService();
        $message = "Your verification code is: $otp";

        $sendStatus = $twilio->sendSMS("+963.$user->mobile", $message);

        if ($sendStatus !== true) {
            return response()->json(['message' => 'Failed to send OTP.', 'error' => $sendStatus], 500);
        }

        return response()->json(
            ['message' => 'OTP sent successfully.',
            ],200);
    }

    // التحقق من OTP
    public function verifyOTP(Request $request)
    {
        $request->validate([
            'mobile' => 'required|numeric|digits:10',
            'otp' => 'required|numeric|digits:6',
        ]);

        $user = User::where('mobile', $request->mobile)
            ->where('otp', $request['otp'])
            ->where('otp_expires_at', '>', now())
            ->first();

        if (!$user) {
            return response()->json([
                'message' => 'Invalid or expired OTP.'
            ], 401);
        }

        // إعادة تعيين الرمز بعد التحقق
        $user->update(['otp' => null, 'otp_expires_at' => null]);

        // توليد API Token
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login successful!',
            'token' => $token
        ]);
    }
    public function sendResetCode(Request $request)
    {
        // 1. التحقق من البيانات
        $request->validate([
            'mobile' => 'required|digits:10',
        ]);

        // 2. البحث عن المستخدم
        $user = User::where('mobile', $request['mobile'])->first();

        if (!$user) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        // 3. توليد رمز تحقق (OTP)
        $resetCode = rand(100000, 999999);

        // 4. تحديث قاعدة البيانات بالرمز وتاريخ الصلاحية
        $user->update([
            'reset_code' => $resetCode,
            'reset_code_expires_at' => Carbon::now()->addMinutes(15), // صلاحية 15 دقيقة
        ]);

        // 5. إرسال الرمز عبر SMS أو البريد الإلكتروني
        $message = "Your password reset code is: $resetCode";

        // مثال مع Twilio
        $twilioService = new TwilioService();
        $sendStatus = $twilioService->sendSMS("+963.$user->mobile", $message);

        if ($sendStatus !== true) {
            return response()->json(['message' => 'Failed to send reset code'], 500);
        }

        return response()->json(['message' => 'Reset code sent successfully']);
    }

    public function verifyResetCode(Request $request)
    {
        // 1. التحقق من البيانات
        $request->validate([
            'mobile' => 'required|digits:10',
            'reset_code' => 'required|digits:6',
        ]);

        // 2. البحث عن المستخدم
        $user = User::where('mobile', $request['mobile'])
            ->where('reset_code', $request['reset_code'])
            ->where('reset_code_expires_at', '>', Carbon::now())
            ->first();

        if (!$user) {
            return response()->json(['message' => 'Invalid or expired reset code'], 400);
        }

        return response()->json(['message' => 'Reset code verified successfully']);
    }

    public function resetPassword(Request $request)
    {
        // 1. التحقق من البيانات
        $request->validate([
            'mobile' => 'required|digits:10',
            'reset_code' => 'required|digits:6',
            'new_password' => 'required|string|min:6',
        ]);

        // 2. البحث عن المستخدم والتحقق من الرمز
        $user = User::where('mobile', $request['mobile'])
            ->where('reset_code', $request['reset_code'])
            ->where('reset_code_expires_at', '>', Carbon::now())
            ->first();

        if (!$user) {
            return response()->json(['message' => 'Invalid or expired reset code'], 400);
        }

        // 3. تحديث كلمة المرور
        $user->update([
            'password' => Hash::make($request['new_password']),
            'reset_code' => null, // مسح الرمز
            'reset_code_expires_at' => null, // مسح تاريخ الصلاحية
        ]);

        return response()->json(['message' => 'Password reset successfully']);
    }
}

