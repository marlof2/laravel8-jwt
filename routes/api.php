<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Middleware\JwtMiddleware;


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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['namespace' => 'Api', 'as' => 'api.'], function () {
    Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');

    Route::group(['middleware' => 'jwt'], function () {

        Route::post('/refresh', [AuthController::class, 'refresh'])->name('auth.refresh');
        Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
        Route::post('/me', [AuthController::class, 'me'])->name('auth.me');
        Route::get('/users', [UserController::class, 'index'])->name('user.index');
        Route::get('/address', [AddressController::class, 'index'])->name('address.index');
        Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    });
});
