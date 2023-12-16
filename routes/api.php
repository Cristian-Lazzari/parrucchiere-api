<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DateController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ReservationController;


Route::get('setting',      [SettingController::class, 'index'])->name('api.setting.index');

Route::get('dates',        [DateController::class, 'index'])->name('api.dates.index');
Route::get('posts',        [PostController::class, 'index'])->name('api.posts.index');
Route::get('services',     [ServiceController::class, 'index'])->name('api.services.index');

Route::post('reservations',[ReservationController::class, 'store'])->name('api.reservations.store'); 

