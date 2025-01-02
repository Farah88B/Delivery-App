<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ChangeLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
//    public function handle(Request $request, Closure $next): Response
//    {
//        app()->setLocale('en');
//        if(isset($request->lang) && $request->lang == 'ar'){
//            app()->setLocale('ar');
//        }
//        // تحقق من أن المستخدم مسجل دخوله
//        if (Auth::check()) {
////            // تعيين اللغة بناءً على preferred_language للمستخدم
//            $locale = Auth::user()->preferred_language;
//           App::setLocale($locale);
//        }
//        return $next($request);
//    }

// app/Http/Middleware/SetLanguage.php

    public function handle(Request $request, Closure $next): Response
    {
        // تحقق إذا كان المستخدم مسجلاً دخوله
        if (Auth::check()) {
            // تعيين اللغة بناءً على اللغة المفضلة للمستخدم المخزنة في قاعدة البيانات
            $locale = Auth::user()->preferred_language;
            // تعيين اللغة في التطبيق بناءً على اللغة المفضلة
            app()->setLocale($locale);
        } else {
            // تعيين اللغة افتراضيًا إلى الإنجليزية إذا كان المستخدم غير مسجل دخوله
            app()->setLocale('en');
        }

        return $next($request);
    }






}
