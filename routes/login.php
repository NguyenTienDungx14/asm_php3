<?php


use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\AuthenController;
use App\Http\Controllers\Auth\MemberController;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->as('auth.')->group(function () {

    Route::get('/', function ()
    {
        return view('auth.dashboard');
    })->name('dashboard');
    Route::prefix('auth.')->as('auth.')->group(function () {
        Route::get('/login',AuthenController::class,'showFormLogin')->name('login');
        Route::post('/login',AuthenController::class,'handleLogin');

        Route::get('register',AuthenController::class,'showFormRegister')->name('register');
        Route::post('register',AuthenController::class,'handleRegister');

        Route::post('logout',AuthenController::class,'logout')->name('logout');

        Route::get('member',MemberController::class,'dashboard')->name('member.dashboard')->middleware('auth');
        Route::get('admin',AdminController::class,'dashboard')->name('admin.dashboard')->middleware('auth');

    });

});
