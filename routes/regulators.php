<?php

use App\Livewire\Regulators\Regulatorindex;
use Illuminate\Support\Facades\Route;

Route::as('regulators')
    ->prefix('regulators')
    ->group(function () {
        Route::get('', Regulatorindex::class)->name('');
    });
