<?php

use App\Livewire\Admin\OfferedServices\Create;
use App\Livewire\Admin\OfferedServices\Index;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::prefix('/offered-services')->name('offered-services.')->group(function () {
        Route::get('', Index::class)->name('index');
        Route::get('/create', Create::class)->name('create');
    });
});

require __DIR__ . '/auth.php';
