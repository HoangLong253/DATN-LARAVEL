<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GioithieuController;
use App\Http\Controllers\TintucController;
use App\Http\Controllers\DichvuController;
use App\Http\Controllers\TieuchiController;
use App\Http\Controllers\LienheController;
use App\Http\Controllers\product_detailController;
use App\Http\Controllers\collectionsController;
use App\Http\Controllers\AddProductController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [BooksController::class, 'admin'])->name('admin');
/*Route::get('/home', function () {
    return view('home');
});
*/
Route::get('/', [BooksController::class, 'index'])->name('index');
/* Login -Regis */
Route::get('dangnhap', function () {
    return view('DangNhap');
})->name('dangnhap');

Route::get('dangki', function () {
    return view('DangKy');
})->name('dangki');
/* Menu */
Route::get('gioithieu', function () {
    return view('GioiThieu');
})->name('gioithieu');

Route::get('tintuc', function () {
    return view('TinTuc');
})->name('tintuc');

Route::get('dichvu', function () {
    return view('DichVu');
})->name('dichvu');

 
Route::get('lienhe', function () {
    return view('LienHe');
})->name('lienhe');

Route::get('giohang', function () {
    return view('giohang');
})->name('giohang');

/* Product */
Route::get('product_detail', function () {
    return view('product/product_detail');
})->name('product_detail');

Route::get('collections', function () {
    return view('collections');
})->name('collections');

/* Admin add product */
Route::get('AddProduct', function () {
    return view('adm_partials/add_product');
})->name('AddProduct');

/*Route::get('taphop', function () {
    return view('taphop');
})->name('taphop');

//này là taphop/cái gì đó vd taphop/sach-giao-khoa

/*Route::get('taphop', function () {
    return view('taphop');
})->name('taphop');*/

//này là taphop/sach-giao-khoa/cái gì đó vd taphop/sach-giao-khoa/lop-6/toan-6-tap-1

/*Route::get('taphop', function () {
    return view('taphop');
})->name('taphop');*/

/*Route::post('validate_registration', 'validate_registration')->name('logreg.validate_registration');

Route::post('validate_login', 'validate_login')->name('logreg.validate_login');*/