<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/master', function () {
    return view('master');
});
Route::get('/landpage', function () {
    return view('landpage');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::get('/login_register', function(){
    return view ('login_register');
});
// Route::get("/login",[UserController::class,'login'])->name('login')->middleware('USERLOGIN');
// Route::get("/register",[UserController::class,'register'])->middleware('USERREGISTER');
// Route::post("/login",[UserController::class,'loginUser'])->name('login-user')->middleware('USERLOGIN');
// Route::post("/register-user",[UserController::class,'registerUser'])->name('register-user')->middleware('USERREGISTER');

Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment.form');
Route::post('/payment', [PaymentController::class, 'processPayment'])->name('payment.process');
