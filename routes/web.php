<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
// App\Http\Controllers\Auth;
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

Route::group(['middleware' => ['guest']], function() {
    // Login form
    Route::get('/', [AuthController::class, 'showLogin'])->name('showLogin');


    // login process
    Route::post('login', [AuthController::class, 'login'])->name('login');
});


Route::group(['middleware' => ['auth']], function() {
    // User page
    Route::get('home', function() {
        return view('home');

    })->name('home');

    // log out process

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

});


