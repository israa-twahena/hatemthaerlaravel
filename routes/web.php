<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::get('contact/{age}',[ProfileController::class, 'contact']);

//Route::prefix('profile')->middleware('auth')->group(function() {
//    Route::get('/test', [ProfileController::class, 'test']);
//    Route::get('/password/{pass?}', [ProfileController::class, 'password']);
//});

Route::group(['prefix' => 'profile'], function () {
    Route::get('/test2/{x?}', [ProfileController::class, 'test2']);
    Route::get('/password/{pass?}', [UserController::class, 'password']);
    Route::get('/password/{pass?}', [AdminController::class, 'password']);
});

Route::get('contact',[ProfileController::class, 'contact'])->middleware('auth');
//Route::get('login', function () {
//   return 'You must log in';
//})->name('login');

//Route::prefix('profile')->group(function() {
//    Route::get('contact', function () {
//        return 'welcome';
//    });
//    Route::get('password', function () {
//        return 'welcome';
//    });
//});

//Route::get('/contact', function () {
//    return 1;
//})->middleware('auth');
//
//Route::get('/contact2', function () {
//    return 2;
//})->middleware('auth');

//Route::middleware('auth')->group(function() {
//    Route::get('/contact', function () {
//        return 1;
//    });
//});

//Route::group(['middleware' => 'auth'],function () {
//    Route::get('/contact', function () {
//        return 1;
//    });
//});

//Route::group(['prefix' => 'profile'], function () {
//    Route::get('contact/{age?}',[ProfileController::class, 'contact']);
////    Route::get('password', function () {
////        return 'welcome';
////    });
//});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
