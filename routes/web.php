<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DataInfosController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'create'])->name('register');
Route::post('/register/store', [AuthController::class, 'store'])->name('user.store');
Route::post('/login/auth', [AuthController::class, 'authenticate'])->name('user.auth');
Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

Route::group(['middleware' => 'auth'], function ()
{
    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::resource('crud', DataInfosController::class);
    });

});
