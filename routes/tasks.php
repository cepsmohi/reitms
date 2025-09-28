<?php

use App\Livewire\Tasks\Rmsinstall;
use App\Livewire\Tasks\Taskcreate;
use App\Livewire\Tasks\Taskindex;
use Illuminate\Support\Facades\Route;

Route::as('tasks')
    ->prefix('tasks')
    ->group(function () {
        Route::get('', Taskindex::class)->name('');
        Route::get('/taskcreate', Taskcreate::class)->name('.create');
        Route::get('/rmsinstall', Rmsinstall::class)->name('.rmsinstall');
    });
