<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
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

Route::post('register',[RegisterationController::class,'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/verify-otp', [AuthController::class, 'verifyOTP']);


Route::prefix('/password')->group(function () {
    Route::post('/forgot', [AuthController::class, 'forgotPassword']);
  //  Route::post('/verify', [AuthController::class, 'verifyOtpPassword']);
    Route::post('/reset', [AuthController::class, 'resetPassword']);
});

Route::middleware(['auth:sanctum','checkLanguage'])->group(function () {

    Route::post('/setLanguage', [AuthController::class, 'setLanguage']);

    Route::post('/changeLanguage', [AuthController::class, 'changeLanguage']);

    Route::post('/logout',[AuthController::class,'logout']);

    Route::get('/profile', [UserController::class, 'showProfile']);
    Route::post('/profile/update', [UserController::class, 'updateProfile']);


Route::prefix('category')->group(function () {
    Route::get('/all',[CategoryController::class,'getAllCategories']);
    Route::get('/{categoryId}/foods',[CategoryController::class,'getCategoryRestaurantsFoods']);
    Route::get('/{categoryId}/restaurants',[CategoryController::class,'getCategoryRestaurants']);
});
Route::prefix('restaurant')->group(function () {
    Route::get('/all',[RestaurantController::class,'getAllRestaurants']);
    Route::get('/{id}',[RestaurantController::class,'getRestaurantById']);
    Route::get('/{restaurantId}/category',[RestaurantController::class,'getRestaurantCategory']);
    Route::get('/{restaurantId}/foods',[RestaurantController::class,'getRestaurantFoods']);
});
Route::prefix('/foods')->group(function () {
    Route::get('/all',[FoodController::class,'getCategoriesWithFoods']);
    Route::get('/{foodId}',[FoodController::class,'getFoodById']);
    Route::get('/{foodId}/restaurants',[FoodController::class,'getFoodRestaurants']);
});
    });







