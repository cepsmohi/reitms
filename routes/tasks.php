<?php

use App\Livewire\Tasks\Rmsinstall;
use App\Livewire\Tasks\Rmsinstalldetails;
use App\Livewire\Tasks\Rmsmaintain;
use App\Livewire\Tasks\Rmsmaintaindetails;
use App\Livewire\Tasks\Taskcreate;
use App\Livewire\Tasks\Taskindex;
use Illuminate\Support\Facades\Route;

Route::as('tasks')
    ->prefix('tasks')
    ->group(function () {
        Route::get('', Taskindex::class)->name('');
        Route::get('/taskcreate', Taskcreate::class)->name('.create');
        Route::get('/rmsinstall', Rmsinstall::class)->name('.rmsinstall');
        Route::get('/rmsinstall/{task}', Rmsinstalldetails::class)->name('.rmsinstall.details');
        Route::get('/rmsmaintain', Rmsmaintain::class)->name('.rmsmaintain');
        Route::get('/rmsmaintain/{task}', Rmsmaintaindetails::class)->name('.rmsmaintain.details');
    });
