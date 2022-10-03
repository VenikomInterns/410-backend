<?php

use App\Http\Controllers\API\CategoryApiController;
use App\Http\Controllers\API\ProductApiController;
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

Route::prefix('api')->group(function () {
    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });

});
Route::apiResource('products', ProductApiController::class)->only('index','show');

Route::apiResource('categories', CategoryApiController::class)->only('index');

Route::get('productsOfCategory/{category}', [ProductApiController::class,'showOfCategory']);

Route::get('allProducts', [ProductApiController::class,'allProducts']);




