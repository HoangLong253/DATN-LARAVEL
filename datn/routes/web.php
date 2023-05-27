<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [BooksController::class, 'home'])->name('home');

Route::get('/home/add', [BooksController::class, 'add'])->name('add');

/*Route::get('/home', function () {
    return view('home');
});
*/
Route::get('/', [BooksController::class, 'index'])->name('index');

Route::get('dangnhap', function () {
    return view('DangNhap');
})->name('dangnhap');

Route::get('dangki', function () {
    return view('DangKy');
})->name('dangki');

/*Route::get('taphop', function () {
    return view('taphop');
})->name('taphop');*/

Route::get('/collections', [BooksController::class, 'collections'])->name('collections');

Route::get('/collections/sach-giao-khoa/lop-6/am-nhac-va-mi-thuat-lop-6', [BooksController::class, 'amnhac6'])->name('amnhac6');

Route::get('/giohang', [CartController::class, 'giohang'])->name('giohang');

Route::get('/collections/{loai}/{tensach}', function($loai, $tensach){
    $loai = DB::table('sach')->where('MaSach', '=', $loai)->where('TenSach', '=', $tensach)->get();

    return view();
})->name('chitietsach');


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