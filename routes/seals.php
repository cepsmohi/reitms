<?php

use App\Livewire\Seals\Sealcreate;
use App\Livewire\Seals\Sealindex;
use App\Livewire\Seals\Sealshow;
use Illuminate\Support\Facades\Route;

Route::as('seals')
    ->prefix('seals')
    ->group(function () {
        Route::get('', Sealindex::class)->name('');
        Route::get('/create', Sealcreate::class)->name('.create');
        Route::get('/show/{seal}', Sealshow::class)->name('.show');
    });
