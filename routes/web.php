<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GambleUrlController;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return view('login');
})->name('login');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::group(['middleware' => 'auth', 'controller' => GambleUrlController::class], function () {
    Route::get('regenerate', 'regenerate')->name('regenerate');
    Route::get('invalidate', 'invalidate')->name('invalidate');
    Route::get('imfeelinglucky', 'imfeelinglucky')->name('imfeelinglucky');
    Route::get('history', 'history')->name('history');
    Route::get('{gableUrl}', 'show')->name('show');
});
