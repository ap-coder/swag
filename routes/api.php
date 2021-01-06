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


Route::resource('products', App\Http\Controllers\API\ProductAPIController::class);

Route::resource('careers', App\Http\Controllers\Api\V1\Admin\CareerAPIController::class);

Route::resource('users', App\Http\Controllers\Api\V1\Admin\UsersAPIController::class);

Route::resource('accounts', App\Http\Controllers\Api\V1\Admin\AccountAPIController::class);

Route::resource('white_papers', App\Http\Controllers\Api\V1\Admin\WhitePaperAPIController::class);