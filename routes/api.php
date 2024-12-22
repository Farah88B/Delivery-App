<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/profile', [UserController::class, 'showProfile']);
    Route::post('/profile/update', [UserController::class, 'updateProfile']);

    Route::post('/password/forgot', [AuthController::class, 'sendResetCode']);
    Route::post('/password/verify', [AuthController::class, 'verifyResetCode']);
    Route::post('/password/reset', [AuthController::class, 'resetPassword']);

    Route::post('/logout',[UserController::class,'logout']);
    });


Route::post('register',[RegisterationController::class,'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/verify-otp', [AuthController::class, 'verifyOTP']);



Route::get('/restaurants',[RestaurantController::class,'getAllRestaurants']);
Route::get('/restaurant/{id}',[RestaurantController::class,'getRestaurant']);

Route::get('restaurant/{id}/category',[RestaurantController::class,'getRestaurantCategory']);


Route::get('/categories',[CategoryController::class,'getAllCategories']);
Route::get('/category/{id}',[CategoryController::class,'getCategoryRestaurants']);
