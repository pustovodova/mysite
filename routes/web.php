<?php

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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'indexAction']);

Route::get('/news/{id}', [\App\Http\Controllers\NewsController::class, 'action']);

Route::get('/news_1', [\App\Http\Controllers\News_1Controller::class, 'news_1Action']);
Route::get('/news_2', [\App\Http\Controllers\News_2Controller::class, 'news_2Action']);
Route::get('/news_3', [\App\Http\Controllers\News_3Controller::class, 'news_3Action']);

Route::get('/reg', [\App\Http\Controllers\RegController::class, 'regAction']);
Route::post('/reg', [\App\Http\Controllers\RegController::class, 'reg']);

Route::get('/sign', [\App\Http\Controllers\SignController::class, 'signAction']);
Route::post('/sign', [\App\Http\Controllers\SignController::class, 'sign']);

Route::get('/logout', [\App\Http\Controllers\SignController::class, 'logout']);

