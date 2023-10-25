<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/master", [PortofController::class,"master"]);
Route::get("/home", [PortofController::class,"home"]);
Route::get("/about",[PortofController::class,"about"]);
Route::get("/projects", [PortofController::class,"projects"]);
Route::get("/contact",[PortofController::class,"contact"]);

Route::get('/', function () {
    return view('master');
});


Route::resource('/user', UserController::class,);

Route::get('/form',[AuthController::class,'index']);
Route::post('/form/login',[AuthController::class,'login']);
 

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
   });
   