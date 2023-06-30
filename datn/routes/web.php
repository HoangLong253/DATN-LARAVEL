<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
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
use App\Http\Controllers\LogregController;
use App\Http\Controllers\DangNhapController;

use Illuminate\Support\Facades\DB;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/home', [BooksController::class, 'home'])->name('home');

Route::get('/admin', [BooksController::class, 'home'])->name('admin');

Route::get('/home/add', [BooksController::class, 'add'])->name('add');

Route::get('/', [BooksController::class, 'index'])->name('index');

/* Login -Regis */
Route::get('dangnhap', function () {
    return view('DangNhap');
})->name('dangnhap');

Route::get('dangki', function () {
    return view('DangKy');
})->name('dangki');

Route::get('dangxuat', function () {
    setcookie('is_logged', 0, time() - 360000, '/');
    setcookie('is_logged', 0, time() + 360000, '/');
    return redirect()->route('index');
})->name('dangxuat');

/*Xử lí chức năng đăng nhập đăng kí*/
Route::post('check_register', [DangNhapController::class, 'check_register'])->name('check_register');

Route::post('check_login', [DangNhapController::class, 'check_login'])->name('check_login');

/* Menu */
Route::get('gioithieu', function () {
    if(isset($_COOKIE['is_logged']) || $_COOKIE['is_logged']==1 ) {
        $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
        return view('GioiThieu', [
            'user1' => $user1,
        ]);
    }
    else{
        return view('GioiThieu');
    }
})->name('gioithieu');

Route::get('tintuc', function () {
    if(isset($_COOKIE['is_logged']) || $_COOKIE['is_logged']==1 ) {
        $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
        return view('TinTuc', [
            'user1' => $user1,
        ]);
    }
    else {
        return view('TinTuc');
    }
})->name('tintuc');

Route::get('dichvu', function () {
    if(isset($_COOKIE['is_logged']) || $_COOKIE['is_logged']==1 ) {
        $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
        return view('DichVu', [
            'user1' => $user1,
        ]);
    }
    else {
        return view('DichVu');
    }
})->name('dichvu');

 
Route::get('lienhe', function () {
    if(isset($_COOKIE['is_logged']) || $_COOKIE['is_logged']==1 ) {
        $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
        return view('LienHe', [
            'user1' => $user1,
        ]);
    }
    else {
        return view('LienHe');
    }
})->name('lienhe');

Route::get('/giohang', [CartController::class, 'giohang'])->name('giohang');

/* Product */

Route::get('/collections/tatca', [BooksController::class, 'collections'])->name('collections');

Route::get('/collections/sach-giao-khoa/lop-6/am-nhac-va-mi-thuat-lop-6', [BooksController::class, 'amnhac6'])->name('amnhac6');

Route::get('/collections/{loai}/{tensach}/{ma}', function($loai, $tensach, $ma){
    $chitietsach = DB::table('sach')
                        ->join('nhaxuatban', 'sach.MaNXB', '=', 'nhaxuatban.MaNXB')
                        ->where('MaSach', '=', $ma)
                        ->get();
    $sgks = DB::table("sach")
                        ->where([
                            ["MaLoaiSach", "=", "GK"],
                            ["TrangThai", "=", 1,],
                        ])
                        ->take(10)
                        ->get();
    /*$tennxb = DB::table('nhaxuatban')
                    ->where('MaNXB', $tennxb1)
                    ->get();*/
    $tenloai = DB::table('loaisach')
                    ->where('MaLoaiSach', '=' ,$loai)
                    ->get();
    if(isset($_COOKIE['is_logged']) || $_COOKIE['is_logged']==1 ) {
        $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
        return view('chitietsach', [
                'user1' => $user1,
                'chitietsach' => $chitietsach,
                'sgks' => $sgks,
                'tenloai' => $tenloai
        ]);
    } else {
        return view('chitietsach', [
            'chitietsach' => $chitietsach,
            'sgks' => $sgks,
            'tenloai' => $tenloai
    ]);
    }
})->name('chitietsach');

Route::post('/timkiem', [BooksController::class, 'search'])->name('search');

Route::get('/collections/giaokhoa', [BooksController::class, 'GK'])->name('GK');

Route::get('/collections/thamkhao', [BooksController::class, 'TK'])->name('TK');

Route::get('/collections/nha-xuat-ban/giao-duc', [BooksController::class, 'GD'])->name('GD');

Route::get('/collections/nha-xuat-ban/dai-hoc-quoc-gia-ha-noi', [BooksController::class, 'DHQGHN'])->name('DHQGHN');