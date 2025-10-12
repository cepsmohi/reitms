<?php

use App\Livewire\Regulators\Regulatorcreate;
use App\Livewire\Regulators\Regulatorindex;
use Illuminate\Support\Facades\Route;

Route::as('regulators')
    ->prefix('regulators')
    ->group(function () {
        Route::get('', Regulatorindex::class)->name('');
        Route::get('/create', Regulatorcreate::class)->name('.create');
    });
