<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/index',[BookController::class,'index']);
Route::get('/',[AuthController::class,'login']);
Route::post('/regi',[AuthController::class,'registerpost']);
Route::get('/register',[AuthController::class,'register']);
Route::post('/store',[AuthController::class,'loginpost']);
Route::get('/bookshop/add', [BookController::class,'add']);
Route::post('/bookshop/insert', [BookController::class,'insert']);
Route::get('/bookshop/{id}/edit', [BookController::class,'edit']);
Route::put('/bookshop/{id}/update', [BookController::class,'update']);
Route::delete('/bookshop/{id}/delete', [BookController::class,'destroy']);
Route::get('/bookshop/{id}/show', [BookController::class,'show']);



