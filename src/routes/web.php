<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ShopController::class, 'index']);
Route::get('/detail{shop_id}', [ShopController::class, 'detail']);
Route::post('register', [AuthController::class, 'store']);
Route::post('/register/thanks', [ShopController::class, 'thanks']);

Route::middleware('auth')->group(function () {
    Route::get('/', [ShopController::class, 'index']);
    Route::get('/my-page', [UserController::class, 'index']);
    Route::post('/my-like', [UserController::class, 'storeLike']);
    Route::post('/my-like/delete', [UserController::class, 'deleteLike']);
    Route::post('/reservation', [UserController::class, 'storeReservation']);
    Route::post('/reservation/delete', [UserController::class, 'deleteReservation']);
});
