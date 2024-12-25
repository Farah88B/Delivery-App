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
    public function handle(Request $request, Closure $next): Response
    {
//        app()->setLocale('en');
//        if(isset($request->lang) && $request->lang == 'ar'){
//            app()->setLocale('ar');
//        }
        // تحقق من أن المستخدم مسجل دخوله
        if (Auth::check()) {
            // تعيين اللغة بناءً على preferred_language للمستخدم
            $locale = Auth::user()->preferred_language;
            App::setLocale($locale);
        }
        return $next($request);
    }
}
