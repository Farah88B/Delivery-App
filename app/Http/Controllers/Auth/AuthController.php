<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\TwilioService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{

    public function login3(Request $request)
    {
        $request->validate([
            'mobile' => 'required|numeric|digits:10',
            'password' => 'required|string|min:6',
        ]);
        // البحث عن المستخدم
        $user = User::where('mobile', $request['mobile'])->first();

        if (!$user ) {
            return response()->json(['message' => 'Invalid Mobile'], 401);
        }else if( !Hash::check($request['password'], $user->password)){
            return response()->json(['message' => 'Invalid Password'], 401);
        }
        // توليد API Token
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login successful!',
            'token' => $token
        ]);
    }

    public function login(Request $request)
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
            ]);
            $phoneNumber = "+963" . ltrim($user->mobile, '0');


            // استدعاء TwilioService لإرسال OTP
            $twilio = new TwilioService();
            $message = "Your verification code is: $otp";

            $sendStatus = $twilio->sendSMS($phoneNumber, $message);

            if ($sendStatus !== true) {
                return response()->json([
                    'message' => 'Failed to send OTP.',
                    // 'error' => $sendStatus
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
            'message' => 'Login successful!',
            'token' => $token
        ]);
    }

    public function setLanguage(Request $request)
    {
        // التحقق من المدخلات
        $validated = $request->validate([
            'preferred_language' => 'required|string|in:en,ar', // تحديد أن اللغة يجب أن تكون واحدة من 'en' أو 'ar'
        ]);
        $user = Auth::user();
        if (!$user) {
            return response()->json(['message' => 'Unauthorised'], 401);
        }
        // تعيين اللغة المفضلة للمستخدم
        $preferredLanguage = $validated['preferred_language'];

        // تحديث اللغة المفضلة للمستخدم في قاعدة البيانات
        $user->update([
            'preferred_language' => $preferredLanguage,
        ]);

        // تعيين اللغة في التطبيق بناءً على اللغة المفضلة
        app()->setLocale($preferredLanguage);
        return response()->json([
            'message' => 'Language set successfully',
            'preferred_language' => $preferredLanguage,
        ], 200);
    }

    public function changeLanguage(Request $request)
    {
        // التحقق من المدخلات
        $validated = $request->validate([
            'preferred_language' => 'required|string|in:en,ar', // تحديد أن اللغة يجب أن تكون واحدة من 'en' أو 'ar'
        ]);

        $user = Auth::user();
        if (!$user) {
            return response()->json(['message' => 'Unauthorised'], 401);
        }

        // تعيين اللغة المفضلة للمستخدم
        $preferredLanguage = $validated['preferred_language'];

        // تحديث اللغة المفضلة للمستخدم في قاعدة البيانات
        $user->update([
            'preferred_language' => $preferredLanguage,
        ]);

        // تعيين اللغة في التطبيق بناءً على اللغة المفضلة
        app()->setLocale($preferredLanguage);

        return response()->json([
            'message' => 'Language changed successfully',
            'preferred_language' => $preferredLanguage,
        ], 200);
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



    public function forgotPassword(Request $request)
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
        $resetCode = "123456";

        // 4. تحديث قاعدة البيانات بالرمز وتاريخ الصلاحية
        $user->update([
            'reset_code' => $resetCode,
        ]);

        return response()->json(['message' => 'Reset code sent successfully']);
    }

    public function resetPassword2(Request $request)
    {
        // 1. التحقق من البيانات
        $request->validate([
            'mobile' => 'required|numeric|digits:10',
            'reset_code' => 'required|digits:6',
            'new_password' => 'required|confirmed|string|min:6',
        ]);
        // 2. البحث عن المستخدم والتحقق من الرمز
        $user = User::where('mobile',$request['mobile'])
            ->where('reset_code', $request['reset_code'])
            ->first();

        if (!$user) {
            return response()->json(['message' => 'Invalid reset code'], 400);
        }
        // 3. تحديث كلمة المرور
        $user->update([
            'password' => Hash::make($request['new_password']),
            'reset_code' => null, // مسح الرمز
        ]);
        // توليد API Token
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Password reset successfully!',
            'token' => $token
        ]);
    }
    public function resetPassword(Request $request)
    {
        // 1. التحقق من البيانات
        $validator = \Validator::make($request->all(), [
            'mobile' => 'required|numeric|digits:10',
            'reset_code' => 'required|digits:6',
            'new_password' => 'required|confirmed|string|min:6',
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            return response()->json(['message' => $firstError], 400);
        }

        $user = User::where('mobile', $request['mobile'])
            ->where('reset_code', $request['reset_code'])
            ->first();

        if (!$user) {
            return response()->json(['message' => 'Invalid reset code'], 400);
        }

        // 3. تحديث كلمة المرور
        $user->update([
            'password' => Hash::make($request['new_password']),
            'reset_code' => null, // مسح الرمز
        ]);

        // توليد API Token
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Password reset successfully!',
            'token' => $token
        ]);
    }








    /// No Usage , Just Try
    public function verifyResetCode(Request $request)
    {
        $user_id =  Auth::user()->id;
        // 1. التحقق من البيانات
        $request->validate([
            //  'mobile' => 'required|digits:10',
            'reset_code' => 'required|digits:6',
            'new_password' => 'required|confirmed|string|min:6',
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
    public function login2(Request $request)
    {
        try {
            // التحقق من صحة المدخلات
            $request->validate([
                'mobile' => 'required|numeric|digits:10',
                'password' => 'required|string|min:6',
            ]);

            // البحث عن المستخدم باستخدام رقم الجوال
            $user = User::where('mobile', $request['mobile'])->first();

            // التحقق من وجود المستخدم
            if (!$user) {
                return response()->json(['message' => 'Invalid Mobile'], 401);
            }

            // التحقق من صحة كلمة المرور
            $credentials = $request->only('mobile', 'password');

            // التحقق من التوثيق باستخدام بيانات الاعتماد
            if (Auth::attempt($credentials)) {
                // الحصول على المستخدم الحالي
                $user = Auth::user();

                // تعيين اللغة بناءً على اللغة المفضلة للمستخدم
                app()->setLocale($user->preferred_language);

                // توليد OTP وإرساله
                $otp = rand(100000, 999999);
                $user->update([
                    'otp' => $otp,
                ]);

                return response()->json([
                    'message' => 'OTP sent to you',
                    'data' => "otp = $otp"
                ], 200);
            }

            // إذا كانت بيانات الاعتماد غير صحيحة
            return response()->json(['message' => 'Invalid credentials'], 401);

        } catch (ValidationException $e) {
            // معالجة استثناءات التحقق من الصحة
            return response()->json([
                'message' => 'Validation error: ' . $e->getMessage(),
            ], 422); // رمز الاستجابة المناسب لأخطاء التحقق من الصحة
        } catch (\Exception $e) {
            // التعامل مع أي استثناءات أخرى
            return response()->json([
                'message' => 'An error occurred: ' . $e->getMessage(),
            ], 500);
        }
    }
    public function verifyOTP2(Request $request){

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
    public function forgotPassword2(Request $request)
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
    public function resetPassword3(Request $request)
    {
        $request->validate([
            'mobile' => 'required|numeric|digits:10',
            'otp' => 'required|digits:6',
            'password' => 'required|string|min:6',
        ]);

        // البحث عن المستخدم بناءً على رقم الجوال
        $user = User::where('mobile', $request->mobile)
            ->where('otp', $request->otp)
            ->where('otp_expires_at', '>', now())
            ->first();

        if (!$user) {
            return response()->json([
                'message' => 'Invalid OTP or mobile number, or OTP expired.',
            ], 401);
        }

        // تحديث كلمة المرور
        $user->update([
            'password' => Hash::make($request->password), // تشفير كلمة المرور
            'otp' => null
        ]);

        return response()->json([
            'message' => 'Password reset successfully.',
        ], 200);
    }

    public function setLanguage2(Request $request)
    {
        $validated = $request->validate([
            'preferred_language' => 'nullable|string', // فقط تحقق أنها نصية ومقبولة كحقل
        ]);

        $user = Auth::user();
        if (!$user) {
            return response()->json(['message' => 'Unauthorised'], 401);
        }

        // الحصول على اللغة المفضلة
        $preferredLanguage = $validated['preferred_language'] ?? 'en'; // اللغة الافتراضية هي الإنجليزية

        // التحقق إذا كانت اللغة المدخلة غير مدعومة
        if (!in_array($preferredLanguage, ['ar', 'en'])) {
            return response()->json([
                'message' => 'Invalid preferred language. Supported languages are "ar" and "en".',
            ], 422); // استجابة HTTP للحالات غير الصالحة
        }

        // تعيين اللغة بناءً على التفضيل
        App::setLocale($preferredLanguage);

        return response()->json([
            'message' => 'Language set successfully',
            'preferred_language' => $preferredLanguage,
        ], 200);
    }
}

