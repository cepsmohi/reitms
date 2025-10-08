<?php

use App\Livewire\Meters\Meterindex;
use Illuminate\Support\Facades\Route;

Route::as('meters')
    ->prefix('meters')
    ->group(function () {
        Route::get('', Meterindex::class)->name('');
    });
