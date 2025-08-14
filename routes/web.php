<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::redirect('/', app()->getLocale());
Route::group(['prefix' => '{language}'], function () {

    Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

    Route::middleware(['auth'])->group(function () {

        Route::get('dashboard', [DashboardController::class , 'index'])->name('dashboard');
        Route::resource('/users', UserController::class)->middleware(['admin']);

//        Route::redirect('settings', 'settings/profile');
//        Route::get('settings/profile', Profile::class)->name('settings.profile');
//        Route::get('settings/password', Password::class)->name('settings.password');
//        Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
    });

});

require __DIR__ . '/auth.php';
