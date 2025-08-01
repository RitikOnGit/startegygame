<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controller\Admin\RegisterationController;
use Illuminate\Support\Facades\Response;


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

Route::post('/login', [App\Http\Controllers\Admin\RegisterationController::class,'login'])->name('login');
Route::post('/register', [App\Http\Controllers\Admin\RegisterationController::class,'Register'])->name('register');
