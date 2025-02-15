<?php

use Illuminate\Support\Facades\Route;

Route::group(function () {
    Route::get('/admin/login', function () {
        return 'Admin logged in';
    });

    Route::get('/list', function () {
        return 'Admin Dashboard';
    })->middleware('permission:admin-view');

    Route::get('/create', function () {
        return 'Admin Create Page';
    })->middleware('permission:admin-create');

    Route::get('/edit', function () {
        return 'Admin Edit Page';
    })->middleware('permission:admin-edit');

    Route::get('/delete', function () {
        return 'Admin Delete Page';
    })->middleware('permission:admin-delete');

    Route::get('/manage', function () {
        return 'Admin Manage Page';
    })->middleware('permission:admin-view', 'permission:admin-edit');
});
