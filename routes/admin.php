<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('Admin.HomePage');
    });
    Route::get('/adminLogin', function () {
        return view('Admin.Auth.login');
    });
    Route::get('/adminRegister', function () {
        return view('Admin.Auth.register');
    });
    Route::get('/adminProfile', function () {
        return view('Admin.Auth.profile');
    });


?>
