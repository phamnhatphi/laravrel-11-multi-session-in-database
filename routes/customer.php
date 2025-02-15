<?php

use Illuminate\Support\Facades\Route;

Route::group(function () {
    Route::get('/customer/login', function () {
        return 'Customer User logged in';
    });

    Route::get('/list', function () {
        return 'Customer Dashboard';
    })->middleware('permission:customer-view');

    Route::get('/create', function () {
        return 'Customer Create Page';
    })->middleware('permission:customer-create');

    Route::get('/edit', function () {
        return 'Customer Edit Page';
    })->middleware('permission:customer-edit');

    Route::get('/delete', function () {
        return 'Customer Delete Page';
    })->middleware('permission:customer-delete');

    Route::get('/manage', function () {
        return 'Customer Manage Page';
    })->middleware('permission:customer-view', 'permission:customer-edit');
});