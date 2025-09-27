<?php

use App\Livewire\Customers\Customercreate;
use App\Livewire\Customers\Customerindex;
use Illuminate\Support\Facades\Route;

Route::as('customers')
    ->prefix('customers')
    ->group(function () {
        Route::get('', Customerindex::class)->name('');
        Route::get('/create', Customercreate::class)->name('.create');
    });
