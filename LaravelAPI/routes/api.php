<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// User Controller

Route::post('register', [App\Http\Controllers\UserController::class, 'register']);
Route::post('auth', [App\Http\Controllers\UserController::class, 'auth']);
Route::get('users', [App\Http\Controllers\UserController::class, 'users']);

// Restaurant Controller

Route::get('restaurants', [App\Http\Controllers\RestaurantController::class, 'restaurants']);
Route::get('restaurants/{id}', [App\Http\Controllers\RestaurantController::class, 'restaurants_id']);
Route::post('restaurants', [App\Http\Controllers\RestaurantController::class, 'restaurants_post']);
Route::put('restaurant/{id}', [App\Http\Controllers\RestaurantController::class, 'restaurants_id_put']);
Route::delete('restaurant/{id}', [App\Http\Controllers\RestaurantController::class, 'restaurants_id_delete']);

// Menu Controller

Route::get('menus', [App\Http\Controllers\MenuController::class, 'menus']);
Route::get('menus/{id}', [App\Http\Controllers\MenuController::class, 'menus_id']);
Route::get('restaurants/{id}/menus', [App\Http\Controllers\MenuController::class, 'restaurants_id_menus']);
Route::post('restaurants/{id}/menus', [App\Http\Controllers\MenuController::class, 'restaurants_id_menus_post']);
Route::put('menus/{id}', [App\Http\Controllers\MenuController::class, 'menus_id_put']);
Route::delete('menus/{id}', [App\Http\Controllers\MenuController::class, 'menus_id_delete']);
