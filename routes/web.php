<?php

use Illuminate\Support\Facades\Route;

// Load routes admin
Route::prefix('admin')
    ->middleware('setUserType:admin')
    ->group(base_path('routes/admin.php'));

// load routes customer_user
Route::prefix('customer')
    ->middleware('setUserType:customer_user')
    ->group(base_path('routes/customer.php'));
