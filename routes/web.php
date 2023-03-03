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





//show home/landing page
Route::get('/', [HomeController::class,'index']);


//show dashboard
Route::get('/lawicodashboard', [DashboardController::class,'index']);

//all related to posts
Route::resource('/posts', PostsController::class);

//show login form
Route::get('/login', [AuthController::class, 'index']);

//show register and create form
Route::get('/register', [AuthController::class, 'create']);

// create new user
Route::post('/users', [AuthController::class, 'store']);

//log user out 
Route::get('/logout',[AuthController::class,'logout']);