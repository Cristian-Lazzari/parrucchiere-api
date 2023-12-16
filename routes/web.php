<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Admin\DateController;
use App\Http\Controllers\Admin\PostController;

use App\Http\Controllers\Admin\HashtagController;

use App\Http\Controllers\Admin\ServiceController;

use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Guests\PageController as GuestsPageController;

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

Route::get('/', [GuestsPageController::class, 'home'])->name('guests.home');

Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {

        Route::get('/',                                 [AdminPageController::class,    'dashboard'])->name('dashboard');
        Route::get('/setting',                          [AdminPageController::class,    'setting'])->name('setting');
        Route::put('/settings/allupdate',               [SettingController::class,      'allupdate'])->name('settings.allupdate');
        Route::resource('settings', SettingController::class);

        

        Route::resource('hashtags',                      HashtagController::class);
        Route::get('/posts/trashed',                    [PostController::class,      'trashed'])->name('posts.trashed');
        Route::resource('posts',                         PostController::class);
        
        Route::resource('services',                         ServiceController::class);
      
        Route::post('/reservations/updatestatus/{order_id}',        [ReservationController::class,  'updatestatus'])->name('reservations.updatestatus');
        Route::post('/dates/updatestatus/{order_id}',               [DateController::class,         'updatestatus'])->name('dates.updatestatus');
        
        Route::post('/dates/upmaxres/{order_id}',               [DateController::class,         'upmaxres'])->name('dates.upmaxres');
        Route::post('/dates/downmaxres/{order_id}',             [DateController::class,         'downmaxres'])->name('dates.downmaxres');
        
 
        Route::resource('reservations',                  ReservationController::class);
        Route::resource('dates',                         DateController::class);



});

Route::middleware('auth')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
