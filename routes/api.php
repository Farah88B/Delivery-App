<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterationController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Categry\CategoryController;
use App\Http\Controllers\Favorite\FavoriteFoodController;
use App\Http\Controllers\Food\FoodController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\Restaurant\RestaurantController;
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
Route::post('/verify-otp', [RegisterationController::class, 'verifyOTP']);
Route::post('/login', [AuthController::class, 'login3']);


Route::prefix('/password')->group(function () {
    Route::post('/forgot', [AuthController::class, 'forgotPassword']);
  //  Route::post('/verify', [AuthController::class, 'verifyOtpPassword']);
    Route::post('/reset', [AuthController::class, 'resetPassword']);
});


Route::middleware(['auth:sanctum','checkLanguage'])->group(function () {

    Route::post('/changeLanguage', [AuthController::class, 'changeLanguage']);
    Route::post('/setLanguage', [AuthController::class, 'setLanguage']);

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
    Route::prefix('/favorites')->group(function () {
        Route::get('/get', [FavoriteFoodController::class, 'listFavorites']);
        Route::post('/add', [FavoriteFoodController::class, 'addToFavorites']);
        Route::delete('/remove', [FavoriteFoodController::class, 'removeFromFavorites']);
    });
    Route::prefix('/cart')->group(function () {
        Route::post('/addItem', [CartController::class, 'addToCart']);
        Route::post('/removeItem', [CartController::class, 'removeFromCart']);
        Route::delete('/cancelCart', [CartController::class, 'cancelCart']);
        Route::get('/viewCart', [CartController::class, 'viewCartItems']);
        Route::get('/viewCartBeforeConfirm', [CartController::class, 'viewCartBeforeConfirm']);
    });
    Route::prefix('/orders')->group(function () {
        Route::post('/ConfirmOrder', [OrderController::class, 'ConfirmOrder']);
        Route::get('/getAllOrders', [OrderController::class, 'getAllOrders']);
        Route::get('/{orderId}/getOrderById', [OrderController::class, 'getOrderById']);
        Route::delete('/{orderId}/deleteOrder', [OrderController::class, 'deleteOrder']);
        Route::post('/{orderId}/status', [OrderController::class, 'updateOrderStatus']);
    });
    });







