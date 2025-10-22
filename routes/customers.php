<?php

use App\Livewire\Customers\Customercreate;
use App\Livewire\Customers\Customeredit;
use App\Livewire\Customers\Customerindex;
use App\Livewire\Customers\Customermap;
use Illuminate\Support\Facades\Route;

Route::as('customers')
    ->prefix('customers')
    ->group(function () {
        Route::get('', Customerindex::class)->name('');
        Route::get('/create', Customercreate::class)->name('.create');
        Route::get('/map', Customermap::class)->name('.map');
        Route::get('/details/{customer}', Customeredit::class)->name('.edit');
    });
