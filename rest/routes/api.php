<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\AuthController;

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
Route::post('testing',function(){
    return 'test api works';
});


Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);
Route::put('users/{user}', [AuthController::class, 'update']);
Route::delete('users/{user}', [AuthController::class, 'destroy']);
Route::get('viewUsers', [AuthController::class, 'viewUsers']);

Route::post('store',[FoodController::class,'store']);
Route::delete('food/{id}', [FoodController::class, 'destroy']);
Route::get('index', [FoodController::class, 'index']);
Route::put('foods/{id}', [FoodController::class, 'update'])->name('update');

