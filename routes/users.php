<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::as('users')
    ->prefix('users')
    ->controller(UserController::class)
    ->group(function () {
        Route::get('', 'index')->name('');
        Route::get('profile', 'profile')->name('.profile');
        Route::get('password', 'password')->name('.password');
        Route::get('loginhistory', 'loginhistory')->name('.loginhistory');
        Route::get('issues', 'issues')->name('.issues');
        Route::get('issues/create', 'createissue')->name('.issues.create');
        Route::get('issues/reply/{issue}', 'replyissue')->name('.issues.reply');
        Route::get('issues/edit/{issue}', 'editissue')->name('.issues.edit');
        Route::get('create', 'create')->name('.create');
        Route::get('edit/{user}', 'edit')->name('.edit');
    });
