<?php

use App\Http\Controllers\HomeController;
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
            Route::get('dashboard', 'index')->name('home');
        });

    require __DIR__.'/users.php';
    require __DIR__.'/customers.php';
    require __DIR__.'/seals.php';
    require __DIR__.'/tasks.php';
    require __DIR__.'/materials.php';
    require __DIR__.'/meters.php';
    require __DIR__.'/regulators.php';

    Route::get('/optimizeclear', function () {
        Artisan::call('optimize:clear');
        return 'Cleared. <a href="/home">Back Home</a>';
    });
});
