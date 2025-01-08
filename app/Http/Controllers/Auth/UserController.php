<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function showProfile()
    {
        $user = Auth::user();
        $data = [
            'first_name' => $user->first_name,
            'lasst_name'=>$user->last_name,
            'profile_image'=> $user->profile_image,
            'latitude'=>$user->latitude,
            'longitude'=>$user->longitude
        ];

        return response()->json([
            'message' => 'User profile',
            'data' =>$data,
            ],200);
    }

    public function updateProfile2(Request $request)
    {
        $user = Auth::user();

        // التحقق من البيانات المُرسلة
        $validated = $request->validate([
            'first_name' => 'sometimes|string|max:255',
            'last_name' => 'sometimes|string|max:255',
            'profile_image' => 'sometimes|image|max:2048', // صورة بحد أقصى 2 ميغابايت
            'latitude' => 'sometimes|string|max:255',
            'longitude' => 'sometimes|string',
        ]);

        // تحديث الصورة إن وُجدت
        if ($request->hasFile('profile_image')) {
            // حذف الصورة القديمة إن وُجدت
            if ($user->profile_image) {
                Storage::disk('public/profile_images')->delete($user->profile_image);
            }

            // تخزين الصورة الجديدة
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $validated['profile_image'] = $path;
        }

        // تحديث البيانات الشخصية باستخدام update()
      $user->update(array_filter([
            'first_name' => $validated['first_name'] ?? null,
            'last_name' => $validated['last_name'] ?? null,
            'profile_image' => $validated['profile_image'] ?? null,
          'latitude' => $validated['latitude'] ?? null,
          'longitude' => $validated['longitude'] ?? null,
        ]));
        $data = [
            'first_name'=> $user->first_name,
            'last_name'=>$user->last_name,
            'profile_image'=>$user->profile_image,
            'latitude'=>$user->latitude,
            'longitude'=>$user->longitude
        ];

        // إضافة الموقع الجديد إذا تم إرساله
//        if ($request->has(['latitude', 'longitude'])) {
//            Location::create([
//                'user_id' => $user->id,
//                'latitude' => $validated['latitude'],
//                'longitude' => $validated['longitude'],
//            ]);
//        }

        return response()->json([
            'message' => 'Profile updated successfully',
            'data' => $data,
        ], 200);
    }



    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // التحقق من البيانات المُرسلة
        $validated = $request->validate([
            'first_name' => 'sometimes|string|max:255',
            'last_name' => 'sometimes|string|max:255',
            'profile_image' => 'sometimes|image|max:2048',
            'latitude' => 'sometimes|string|max:255',
            'longitude' => 'sometimes|string',
        ]);

        // تحديث الصورة إن وُجدت
        if ($request->hasFile('profile_image')) {
            // حذف الصورة القديمة
            if ($user->profile_image) {
                $relativePath = $user->profile_image;
                if (Storage::disk('public')->exists($relativePath)) {
                    Storage::disk('public')->delete($relativePath);
                    \Log::info("Deleted image successfully: {$relativePath}");
                } else {
                    \Log::warning("Image does not exist: {$relativePath}");
                }
            }

            // تخزين الصورة الجديدة
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $validated['profile_image'] = $path;
        }

        // تحديث البيانات الشخصية
        $updated = $user->update([
            'first_name' => $validated['first_name'] ?? $user->first_name,
            'last_name' => $validated['last_name'] ?? $user->last_name,
            'profile_image' => $validated['profile_image'] ?? $user->profile_image,
            'latitude' => $validated['latitude'] ?? $user->latitude,
            'longitude' => $validated['longitude'] ?? $user->longitude,
        ]);

        if (!$updated) {
            return response()->json([
                'message' => 'Failed to update profile',
            ], 500);
        }

        // تحديث البيانات المرسلة
        $user->refresh();
        $data = [
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'profile_image' => $user->profile_image,
            'latitude' => $user->latitude,
            'longitude' => $user->longitude,
        ];

        return response()->json([
            'message' => 'Profile updated successfully',
            'data' => $data,
        ], 200);
    }





}
