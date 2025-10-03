<?php

use App\Livewire\Users\Changepass;
use App\Livewire\Users\Usercreate;
use App\Livewire\Users\Userindex;
use App\Livewire\Users\Userprofile;
use Illuminate\Support\Facades\Route;

Route::as('users')
    ->prefix('users')
    ->group(function () {
        Route::get('', Userindex::class)->name('');
        Route::get('create', Usercreate::class)->name('.create');
        Route::get('profile', Userprofile::class)->name('.profile');
        Route::get('change/pass', Changepass::class)->name('.password');
    });
