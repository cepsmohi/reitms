<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MeterController;
use App\Http\Controllers\UserController;
use App\Livewire\Customers\Customercreate;
use App\Livewire\Customers\Customerindex;
use App\Livewire\Seals\Sealcreate;
use App\Livewire\Seals\Sealindex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Auth::routes(['register' => false]);
Route::get('pending', function () {
    return view('pages.ui.pending');
})->name('pending');
Route::get('blocked', function () {
    return view('pages.ui.blocked');
})->name('blocked');
Route::middleware(['auth', 'aprvuser'])->group(function () {
    Route::controller(HomeController::class)
        ->group(function () {
            Route::get('home', 'index')->name('home');
        });
    Route::as('users')
        ->prefix('users')
        ->controller(UserController::class)
        ->group(function () {
            Route::get('', 'index')->name('');
            Route::get('profile', 'profile')->name('.profile');
            Route::get('password', 'password')->name('.password');
            Route::get('loginhistory', 'loginhistory')->name('.loginhistory');
            Route::get('issues', 'issues')->name('.issues');
            Route::get('issues/create', 'createissue')->name('.issues.create');
            Route::get('issues/reply/{issue}', 'replyissue')->name('.issues.reply');
            Route::get('issues/edit/{issue}', 'editissue')->name('.issues.edit');
            Route::get('create', 'create')->name('.create');
            Route::get('edit/{user}', 'edit')->name('.edit');
        });
    Route::as('customers')
        ->prefix('customers')
        ->group(function () {
            Route::get('', Customerindex::class)->name('');
            Route::get('/create', Customercreate::class)->name('.create');
        });
    Route::as('seals')
        ->prefix('seals')
        ->group(function () {
            Route::get('', Sealindex::class)->name('');
            Route::get('/create', Sealcreate::class)->name('.create');
        });
    Route::get('/optimizeclear', function () {
        Artisan::call('optimize:clear');
        return 'Cleared. <a href="/home">Back Home</a>';
    });
});
