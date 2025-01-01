<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Services\TwilioService;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    public function login(Request $request)
{
    try {
        $request->validate([
            'mobile' => 'required|numeric|digits:10',
            'password' => 'required|string|min:6',
        ]);

        // البحث عن المستخدم
        $user = User::where('mobile', $request['mobile'])->first();
        $request['password'] = Hash::make($request['password']);

        if (!$request['password'] = $user->password) {
            return response()->json([
                'message' => 'Password mismatch',
                'stored_password' => $user->password,
                'entered_password' => $request['password']
            ], 401);

        }
            if (!$user ) {
            return response()->json(['message' => 'Invalid  Mobile'], 401);
        }
        // توليد OTP وإرساله
        $otp = rand(100000, 999999);
        $user->update([
            'otp' => $otp,
        ]);
    return response()->json([
        'message' => 'OTP sent to you',
        'data' => "otp = $otp"
    ],200);
    }catch (ValidationException $e) {
        return response()->json([
            'message' => $e->getMessage(),
        ]);
}
}

    public function verifyOTP(Request $request){

    $request->validate([
        'mobile' => 'required|numeric|digits:10',
        'otp' => 'required|numeric|digits:6',
    ]);
    $user = User::where('mobile', $request->mobile)
            ->where('otp', $request['otp'])
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
            'data' => "Token = $token"

        ],201);
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'mobile' => 'required|digits:10', // التحقق من رقم الجوال
        ]);

        // البحث عن المستخدم بناءً على رقم الجوال
        $user = User::where('mobile', $request->mobile)->first();

        if (!$user) {
            return response()->json([
                'message' => 'Mobile number not found.',
            ], 404);
        }

        // توليد OTP وإضافة وقت انتهاء
        $otp = rand(100000, 999999);
        $user->update([
            'otp' => $otp,
            'otp_expires_at' => now()->addMinutes(5), // صلاحية OTP لمدة 5 دقائق
        ]);

        // إرسال OTP عبر SMS أو البريد الإلكتروني
        // في بيئة التطوير فقط:
        return response()->json([
            'message' => 'OTP has been sent to your mobile.',
            'otp' => $otp, // احذف هذا السطر في بيئة الإنتاج
        ]);
    }
    public function verifyOtpPassword(Request $request)
    {
        $request->validate([
            'mobile' => 'required|numeric|digits:10',
            'otp' => 'required|digits:6',
        ]);

        // البحث عن المستخدم بناءً على رقم الجوال و OTP
        $user = User::where('mobile', $request->mobile)
            ->where('otp', $request->otp)
            ->where('otp_expires_at', '>', now())
            ->first();

        if (!$user) {
            return response()->json([
                'message' => 'Invalid OTP or mobile number, or OTP expired.',
            ], 401);
        }

        // إزالة OTP بعد التحقق
        $user->update(['otp' => null]);

        return response()->json([
            'message' => 'OTP verified successfully. You can now reset your password.',
        ], 200);
    }
    public function resetPassword(Request $request)
    {
        $request->validate([
            'mobile' => 'required|numeric|digits:10',
            'password' => 'required|string|min:6',
        ]);

        // البحث عن المستخدم بناءً على رقم الجوال
        $user = User::where('mobile', $request->mobile)->first();

        if (!$user) {
            return response()->json([
                'message' => 'Invalid mobile number.',
            ], 401);
        }

        // تحديث كلمة المرور
        $user->update([
            'password' => Hash::make($request->password), // تشفير كلمة المرور
        ]);

        return response()->json([
            'message' => 'Password reset successfully.',
        ], 200);
    }

public function setLanguage(Request $request)
{
    $validated = $request->validate([
        'mobile' => 'required|numeric|digits:10',
        'preferred_language' => 'sometimes|in:ar,en',
    ]);
    // البحث عن المستخدم بناءً على رقم الجوال
    $user = User::where('mobile', $validated['mobile'])->first();
    if (!$user) {
        return response()->json(['message' => 'Invalid mobile number'], 401);
    }
    // التحقق من أن اللغة المفضلة موجودة ولها قيمة صحيحة (en أو ar)
    $preferredLanguage = $user->preferred_language;

    // تعيين اللغة الافتراضية إذا لم تكن هناك لغة مفضلة أو كانت غير صالحة
    if (in_array($preferredLanguage, ['en', 'ar'])) {
        App::setLocale($preferredLanguage);  // تعيين اللغة بناءً على تفضيل المستخدم
    } else {
        App::setLocale('en');  // تعيين اللغة الافتراضية (الإنجليزية) إذا كانت اللغة المفضلة غير صالحة
    }

    return response()->json([
        'message' => 'Language set successfully',
        'preferred_language' => App::getLocale(),
    ], 200);
}


    public function changeLanguage(Request $request)
    {
        // التحقق من صحة المدخلات
        $validated = $request->validate([
            'preferred_language' => 'sometimes|in:ar,en',
        ]);

        // البحث عن المستخدم بناءً على رقم الجوال
        $user = Auth::user();

        if (!$user) {
            return response()->json([
                'message' => 'User not authenticated'
            ], 401);
        }

        // تحديث لغة المستخدم
        $updated = $user->update([
            'preferred_language' => $validated['preferred_language'],
        ]);

        // التحقق من نجاح التحديث
        if ($updated) {
            return response()->json([
                'message' => 'Language changed successfully',
                'data'=>$updated
            ]);
        } else {
            return response()->json([
                'message' => 'Failed to change language'
            ], 500);
        }
    }

    public function logout(Request $request){
        if ($request->user()) {
            $request->user()->currentAccessToken()->delete();
            return response()->json([
                'message' => 'Logout Successfully'
            ]);
        }

        return response()->json([
            'message' => 'No authenticated user found'
        ], 401);


    }



    public function login2(Request $request)
    {
        try {
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
                return response()->json([
                    'message' => 'Failed to send OTP.',
                    //'error' => $sendStatus
                ], 500);
            }

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

    // التحقق من OTP
    public function verifyOTP2(Request $request)
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

    public function sendResetCode2(Request $request)
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
        $user_id =  Auth::user()->id;
        // 1. التحقق من البيانات
        $request->validate([
            //  'mobile' => 'required|digits:10',
            'reset_code' => 'required|digits:6',
        ]);

        // 2. البحث عن المستخدم
        $user = User::find($user_id)
            ->where('reset_code', $request['reset_code'])
            ->where('reset_code_expires_at', '>', Carbon::now())
            ->first();

        if (!$user) {
            return response()->json(['message' => 'Invalid or expired reset code'], 400);
        }

        return response()->json(['message' => 'Reset code verified successfully']);
    }

    public function resetPassword2(Request $request)
    {
        // 1. التحقق من البيانات
        $request->validate([
            'new_password' => 'required|confirmed|string|min:6',
        ]);
        $user_id =  Auth::user()->id;
        // 2. البحث عن المستخدم والتحقق من الرمز
        $user = User::find($user_id)
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

