<?php

use App\Livewire\Files\Filecreate;
use App\Livewire\Files\Fileindex;
use Illuminate\Support\Facades\Route;

Route::as('files')
    ->prefix('files')
    ->group(function () {
        Route::get('', Fileindex::class)->name('');
        Route::get('/create', Filecreate::class)->name('.create');
    });
