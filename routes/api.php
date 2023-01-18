<?php

use App\Http\Controllers\AdminController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('admin',[AdminController::class,'index']);
Route::post('admin',[AdminController::class,'create']);
Route::get('/admin/{id}',[AdminController::class,'detail']);
Route::put('/admin/{id}',[AdminController::class,'update']);
Route::delete('/admin/{id}',[AdminController::class,'delete']);
