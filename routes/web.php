<?php

use App\Livewire\Admin\OfferedServices\CreateOfferedServices;
use App\Livewire\Admin\OfferedServices\EditOfferedServices;
use App\Livewire\Admin\OfferedServices\IndexOfferedServices;
use App\Livewire\Home;
use App\Livewire\Profile\IndexProfile;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('profile', IndexProfile::class)
    ->middleware(['auth'])
    ->name('profile');

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::prefix('/offered-services')->name('offered-services.')->group(function () {
        Route::get('', IndexOfferedServices::class)->name('index');
        Route::get('/create', CreateOfferedServices::class)->name('create');
        Route::get('/edit/{id}', EditOfferedServices::class)->name('edit');
    });
});

require __DIR__ . '/auth.php';
