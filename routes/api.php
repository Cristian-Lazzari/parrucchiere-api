<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DateController;
use App\Http\Controllers\Api\TimeController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ReservationController;

Route::get('projects',     [ProjectController::class, 'index'])->name('api.projects.index'); 
Route::get('categories',   [CategoryController::class, 'index'])->name('api.categories.index');
Route::get('setting',      [SettingController::class, 'index'])->name('api.setting.index');
Route::get('time',         [TimeController::class, 'index'])->name('api.time.index');
Route::get('dates',         [DateController::class, 'index'])->name('api.dates.index');

Route::post('reservations',[ReservationController::class, 'store'])->name('api.reservations.store'); 
Route::post('orders',      [OrderController::class, 'store'])->name('api.orders.store'); 