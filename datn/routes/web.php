<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/', [BooksController::class, 'index'])->name('index');

Route::get('dangnhap', function () {
    return view('DangNhap');
})->name('dangnhap');

Route::get('dangki', function () {
    return view('DangKy');
})->name('dangki');

/*Route::post('validate_registration', 'validate_registration')->name('logreg.validate_registration');

Route::post('validate_login', 'validate_login')->name('logreg.validate_login');*/