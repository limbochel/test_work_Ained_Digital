<?php

use App\Http\Controllers\RealtyController;
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
Route::get('/realty','App\Http\Controllers\RealtyController@Index');
Route::get("/customer", 'App\Http\Controllers\CustomerController@Index');
Route::get("/deal", 'App\Http\Controllers\DealController@Index');

Route::get("/realty/{realty}", 'App\Http\Controllers\RealtyController@Show');
Route::get("/customer/{realty}", 'App\Http\Controllers\CustomerController@Show');
Route::get("/deal/{realty}", 'App\Http\Controllers\DealController@Show');

Route::post  ("/customer", 'App\Http\Controllers\CustomerController@Store');
Route::post  ("/deal", 'App\Http\Controllers\DealController@Store');