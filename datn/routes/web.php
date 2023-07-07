<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DangNhapController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GioithieuController;
use App\Http\Controllers\TintucController;
use App\Http\Controllers\DichvuController;
use App\Http\Controllers\TieuchiController;
use App\Http\Controllers\LienheController;
use App\Http\Controllers\product_detailController;
use App\Http\Controllers\collectionsController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\LogregController;
use App\Http\Controllers\ThanhToanController;

use Illuminate\Support\Facades\DB;

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

/*xử lí admin*/
Route::get('/admin/trang-chu', [AdminController::class, 'home'])->name('admin');
Route::get('/admin', [AdminController::class, 'home'])->name('admin');

Route::post('adm_login', [AdminController::class, 'adm_login'])->name('adm_login');

Route::get('adm_logout', [AdminController::class, 'adm_logout'])->name('adm_logout');

Route::get('/admin/login', function() {
    return view('adm_partials.login');
})->name('admin_login_form');

Route::get('/admin/sach', [AdminController::class, 'product'])->name('admin_product');

Route::get('/admin/nhan-vien', [AdminController::class, 'employee'])->name('admin_employee');

Route::get('/admin/nguoi-dung', [AdminController::class, 'user'])->name('admin_user');

Route::get('/admin/loai-sach', [AdminController::class, 'product_type'])->name('admin_product_type');

Route::get('/admin/nha-xuat-ban', [AdminController::class, 'publisher'])->name('admin_publisher');

Route::get('/admin/hoa-don-nhap', [AdminController::class, 'invoice_import'])->name('admin_invoice_import');

Route::get('chi-tiet-hoa-don-ban/{id}', [AdminController::class, 'invoice_detail_sale'])->name('admin_invoice_detail_sale');

Route::get('chi-tiet-hoa-don-nhap/{id}', [AdminController::class, 'invoice_detail_import'])->name('admin_invoice_detail_import');

Route::get('/admin/hoa-don-ban', [AdminController::class, 'invoice_sale'])->name('admin_invoice_sale');

Route::get('/admin/bang-tin', [AdminController::class, 'user'])->name('admin_user');

/*thêm sửa xoá*/ 

/*sách*/
Route::get('/admin/sach/them-sach', [AdminController::class, 'add_product'])->name('add_product');

Route::post('/them-sach', [AdminController::class, 'func_add_product'])->name('func_add_product');

Route::get('/admin/sach/sua-sach/{id}', [AdminController::class, 'edit_product'])->name('edit_product');

Route::post('/sua-sach', [AdminController::class, 'func_edit_product'])->name('func_edit_product');

Route::get('/xoa-sach/{id}', [AdminController::class, 'func_delete_product'])->name('func_delete_product');
/*end sách*/

/*nhân viên*/
Route::get('/admin/nhan-vien/them-nhan-vien', [AdminController::class, 'add_empl'])->name('add_employee');

Route::post('/them-nhan-vien', [AdminController::class, 'func_add_empl'])->name('func_add_empl');

Route::get('/admin/sach/sua-nhan-vien/{id}', [AdminController::class, 'edit_empl'])->name('edit_empl');

Route::post('/sua-nhan-vien', [AdminController::class, 'func_edit_empl'])->name('func_edit_empl');

Route::get('/xoa-nhan-vien/{id}', [AdminController::class, 'func_delete_empl'])->name('func_delete_empl');
/*end nhân viên*/

/*loại sách*/
Route::get('/admin/loai-sach/them-loai-sach', [AdminController::class, 'add_product_type'])->name('add_product_type');

Route::post('/them-loai-sach', [AdminController::class, 'func_add_product_type'])->name('func_add_product_type');

Route::get('/admin/sach/sua-loai-sach/{id}', [AdminController::class, 'edit_product_type'])->name('edit_product_type');

Route::post('/sua-loai-sach', [AdminController::class, 'func_edit_product_type'])->name('func_edit_product_type');

Route::get('/xoa-loai-sach/{id}', [AdminController::class, 'func_delete_product_type'])->name('func_delete_product_type');
/*end loại sách*/

/*nhà xuất bản*/
Route::get('/admin/nha-xuat-ban/them-nha-xuat-ban', [AdminController::class, 'add_publisher'])->name('add_publisher');

Route::post('/them-nha-xuat-ban', [AdminController::class, 'func_add_publisher'])->name('func_add_publisher');

Route::get('/admin/sach/sua-nha-xuat-ban/{id}', [AdminController::class, 'edit_publisher'])->name('edit_publisher');

Route::post('/sua-nha-xuat-ban', [AdminController::class, 'func_edit_publisher'])->name('func_edit_publisher');

Route::get('/xoa-nha-xuat-ban/{id}', [AdminController::class, 'func_delete_publisher'])->name('func_delete_publisher');
/*end nhà xuất bản*/

/*hoá đơn nhập*/
Route::get('/admin/hoa-don-nhap/them-hoa-don-nhap', [AdminController::class, 'add_invoice_import'])->name('add_invoice_import');

Route::post('/them-hoa-don-nhap', [AdminController::class, 'func_add_invoice_import'])->name('func_add_invoice_import');

Route::get('/admin/sach/sua-hoa-don-nhap/{id}', [AdminController::class, 'edit_invoice_import'])->name('edit_invoice_import');

Route::post('/sua-hoa-don-nhap', [AdminController::class, 'func_edit_invoice_import'])->name('func_edit_invoice_import');

Route::get('/xoa-hoa-don-nhap/{id}', [AdminController::class, 'func_delete_invoice_import'])->name('func_delete_invoice_import');
/*end hoá đơn nhập*/

/*chi tiết hoá đơn nhập*/
Route::get('/admin/sach/sua-hoa-don-nhap/{id}', [AdminController::class, 'edit_invoice_detail_import'])->name('edit_invoice_detail_import');

Route::post('/sua-hoa-don-nhap', [AdminController::class, 'func_edit_invoice_detail_import'])->name('func_edit_invoice_detail_import');
/*end chi tiết hoá đơn nhập*/

/*chi tiết hoá đơn bán*/
Route::get('/admin/sach/sua-hoa-don-ban/{id}', [AdminController::class, 'edit_invoice_import'])->name('edit_invoice_import');

Route::post('/sua-hoa-don-ban', [AdminController::class, 'func_edit_invoice_import'])->name('func_edit_invoice_import');
/*end chi tiết hoá đơn bán*/



/* Menu */
Route::get('gioithieu', function () {
    if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']==1 ) {
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
    if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']==1 ) {
        $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
        return view('TinTuc', [
            'user1' => $user1,
        ]);
    }
    else {
        return view('TinTuc');
    }
})->name('tintuc');

Route::get('/tintuc/chudetintuc', function(){
    if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']==1 ) {
        $user1 = DB::table("nguoidung")->where('MaNgDung', '=' ,$_COOKIE['id'])->get();
        return view('articletest', [
            'user1' => $user1,
        ]);
    }
    else {
        return view('articletest');
    }
})->name('chitiettintuc');

Route::get('dichvu', function () {
    if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']==1 ) {
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
    if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']==1 ) {
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
Route::get('/sach/{id}/{count}', [CartController::class, 'them'])->name('them.giohang');
Route::patch('giohang/update', [CartController::class, 'capnhat'])->name('capnhat.giohang');
Route::delete('giohang/xoa', [CartController::class, 'xoa'])->name('xoa.giohang');

/* Product */

Route::get('/collections/tatca', [BooksController::class, 'collections'])->name('collections');

Route::get('/collections/sach-giao-khoa/lop-6/am-nhac-va-mi-thuat-lop-6', [BooksController::class, 'amnhac6'])->name('amnhac6');

Route::get('/collections/sach/{loai}/{tensach}/{ma}', function($loai, $tensach, $ma){
    $chitietsach = DB::table('saches')
                        ->join('nhaxuatban', 'saches.MaNXB', '=', 'nhaxuatban.MaNXB')
                        ->where('MaSach', '=', $ma)
                        ->get();
    $sgks = DB::table("saches")
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
    if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']==1 ) {
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

Route::get('/collections/giao-khoa', [BooksController::class, 'GK'])->name('GK');
Route::get('/collections/tham-khao', [BooksController::class, 'TK'])->name('TK');
Route::get('/collections/nha-xuat-ban/giao-duc', [BooksController::class, 'GD'])->name('GD');
Route::get('/collections/nha-xuat-ban/dai-hoc-quoc-gia-ha-noi', [BooksController::class, 'DHQGHN'])->name('DHQGHN');
Route::get('/collections/nha-xuat-ban/tong-hop-thanh-pho-ho-chi-minh', [BooksController::class, 'THTPHCM'])->name('THTPHCM');
Route::get('/collections/nha-xuat-ban/dong-nai', [BooksController::class, 'DN'])->name('DN');
Route::get('/collections/nha-xuat-ban/thanh-nien', [BooksController::class, 'TN'])->name('TN');

Route::get('/collections/giao-khoa/cap-2', [BooksController::class, 'c2'])->name('c2');
Route::get('/collections/giao-khoa/cap-3', [BooksController::class, 'c3'])->name('c3');

Route::get('/collections/giao-khoa/cap-2/lop-6', [BooksController::class, 'l6'])->name('l6');
Route::get('/collections/giao-khoa/cap-2/lop-7', [BooksController::class, 'l7'])->name('l7');
Route::get('/collections/giao-khoa/cap-2/lop-8', [BooksController::class, 'l8'])->name('l8');
Route::get('/collections/giao-khoa/cap-2/lop-9', [BooksController::class, 'l9'])->name('l9');
Route::get('/collections/giao-khoa/cap-3/lop-10', [BooksController::class, 'l10'])->name('l10');
Route::get('/collections/giao-khoa/cap-3/lop-11', [BooksController::class, 'l11'])->name('l11');
Route::get('/collections/giao-khoa/cap-3/lop-12', [BooksController::class, 'l12'])->name('l12');

/* Thong tin ca nhan / thanh toan */
Route::get('thanhtoan', function () {
    return view('thongtingiaohang');
})->name('thanhtoan');
Route::get('thongtinnguoidung', function () {
    return view('thongtinnguoidung');
})->name('thongtinnguoidung');
Route::get('lichsumuahang', function () {
    return view('lichsumuahang');
})->name('lichsumuahang');
