<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Location;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
//    public function register(Request $request)
//    {
//        // تحقق البيانات
//        $validated = $request->validate([
//            'first_name' => 'required|string|max:255',
//            'last_name' => 'required|string|max:255',
//            'mobile' => 'required|unique:users,mobile',
//            'password' => 'required|string|min:6',
//            'latitude' => 'required|string',
//            'longitude' => 'required|string',
//            'address' => 'nullable|string',
//        ]);
//
//        // إنشاء المستخدم
//        $user = User::create([
//            'first_name' => $validated['first_name'],
//            'last_name' => $validated['last_name'],
//            'mobile' => $validated['mobile'],
//            'password' => Hash::make($validated['password']),
//        ]);
//
//        // حفظ الموقع للمستخدم
//       $location = Location::create([
//            'user_id' => $user->id,
//            'latitude' => $validated['latitude'],
//            'longitude' => $validated['longitude'],
//            'address' => $validated['address']
//        ]);
//
//        return response()->json([
//            'message' => 'User registered successfully',
//            'user' => $user,
//            'locations' => $location,
//        ], 201);
//    }
//
//    public function login(Request $request)
//    {
//        // التحقق من البيانات المُدخلة
//        $validated = $request->validate([
//            'mobile' => 'required|string',
//            'password' => 'required|string|min:6',
//        ]);
//
//        // البحث عن المستخدم باستخدام رقم الموبايل
//        $user = User::where('mobile', $validated['mobile'])->first();
//
//        // التحقق من وجود المستخدم وكلمة المرور
//        if (!$user || !Hash::check($validated['password'], $user->password)) {
//            return response()->json(['message' => 'Invalid phone or password'], 401);
//        }
//
//        // إنشاء Token جديد للمستخدم
//        $token = $user->createToken('auth_token')->plainTextToken;
//
//        // إرجاع البيانات مع Token
//        return response()->json([
//            'message' => 'Login successful',
//            'user' => $user,
//            'token' => $token,
//        ], 200);
//    }

    public function showProfile()
    {
        $user = Auth::user();

        // تحميل المواقع الخاصة بالمستخدم
        $location= $user->load('locations')->latest;

        return response()->json([
            'message' => 'User profile',
            'user' =>$user,
            ],200);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // التحقق من البيانات المُرسلة
        $validated = $request->validate([
            'first_name' => 'sometimes|string|max:255',
            'last_name' => 'sometimes|string|max:255',
            'location' => 'sometimes|string|max:255',
            'mobile' => 'sometimes|string|max:255',
            'profile_image' => 'sometimes|image|max:2048', // صورة بحد أقصى 2 ميغابايت
        ]);

        // تحديث الصورة إن وُجدت
        if ($request->hasFile('profile_image')) {
            // حذف الصورة القديمة إن وُجدت
            if ($user->profile_image) {
                Storage::disk('public')->delete($user->profile_image);
            }

            // تخزين الصورة الجديدة
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $path;
        }

        // تحديث البيانات الشخصية
        $user->first_name = $validated['first_name'] ?? $user->first_name;
        $user->last_name = $validated['last_name'] ?? $user->last_name;
        $user->mobile = $validated['mobile'] ?? $user->mobile;
        $user->save();
        // إضافة الموقع الجديد إذا تم إرساله
        if ($request->has(['latitude', 'longitude'])) {
           $location= Location::create([
                'user_id' => $user->id,
                'name' => $validated['location_name'] ?? 'New Location',
                'latitude' => $validated['latitude'],
                'longitude' => $validated['longitude'],
            ]);
        }
        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => $user,

        ]);
    }

    public function changePassword(Request $request)
    {
        // الحصول على المستخدم الحالي
        $user = Auth::user();

        // التحقق من المدخلات
        $validated = $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        // التحقق من صحة كلمة المرور الحالية
        if (!Hash::check($validated['current_password'], $user->password)) {
            return response()->json(['error' => 'Current password is incorrect'], 400);
        }

        // تحديث كلمة المرور الجديدة
        $user->password = Hash::make($validated['new_password']);
        $user->save();

        return response()->json(['message' => 'Password updated successfully']);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message'=>'Logout Successfully'

        ]);
    }




}
