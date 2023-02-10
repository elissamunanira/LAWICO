<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashboardController;

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




Route::resource('/posts', PostsController::class);
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

// Route::get('/', function () {
//     return view('Home.index');
// });
