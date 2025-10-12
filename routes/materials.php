<?php

use App\Livewire\Materials\Materialcreate;
use App\Livewire\Materials\Materialdetail;
use App\Livewire\Materials\Materialindex;
use App\Livewire\Materials\Materialstocks;
use Illuminate\Support\Facades\Route;

Route::as('materials')
    ->prefix('materials')
    ->group(function () {
        Route::get('', Materialindex::class)->name('');
        Route::get('/create', Materialcreate::class)->name('.create');
        Route::get('/detail/{material}', Materialdetail::class)->name('.detail');
        Route::get('/stocks', Materialstocks::class)->name('.stocks');
    });
