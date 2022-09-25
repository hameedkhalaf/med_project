<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\RoleController;
use app\Http\Controllers\PatientController;
use app\Http\Controllers\ReservationController;
use app\Http\Controllers\ServiceController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
});

Route::resource('user','UserController');
Route::resource('role','RoleController');
Route::resource('patient','PatientController');
Route::resource('service','ServiceController');
Route::resource('reservation','ReservationController');