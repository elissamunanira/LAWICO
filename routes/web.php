<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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
Route::get('/', [HomeController::class,'index']);
Route::get('/lawicodashboard', [DashboardController::class,'index']);

// Route::get('/', function () {
//     return view('Home.index');
// });

Route::get('/login', [AuthController::class, 'index']);
Route::get('/register', [AuthController::class, 'create']);


// Route::resource('/users',AuthController::class);
Route::post('/users', [AuthController::class, 'store']);