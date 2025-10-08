<?php

use App\Livewire\Materials\Materialindex;
use Illuminate\Support\Facades\Route;

Route::as('materials')
    ->prefix('materials')
    ->group(function () {
        Route::get('', Materialindex::class)->name('');
    });
