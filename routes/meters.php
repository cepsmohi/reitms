<?php

use App\Livewire\Meters\Metercreate;
use App\Livewire\Meters\Meterindex;
use Illuminate\Support\Facades\Route;

Route::as('meters')
    ->prefix('meters')
    ->group(function () {
        Route::get('', Meterindex::class)->name('');
        Route::get('/create', Metercreate::class)->name('.create');
    });
