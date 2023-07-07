<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /*public function home() {
        if(isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged']==1 ) {
            $admin = DB::table("nhanvien")
                        ->where('MaNV', '=', $_COOKIE['id'])
                        ->get();
            $alls = DB::table("saches")
            ->join("nhaxuatban", "saches.MaNXB", "=", "nhaxuatban.MaNXB")
            ->get();
            return view('admin',[
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }*/
    /*Đăng nhập / kí / xuất*/
    public function adm_login(Request $request)
    {
        $messages = [
            'username.required' => 'Tài khoản không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
        ];
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ], $messages);

        $name = $request->username;
        $pass = $request->password;

        $nv = DB::table('nhanvien')
            ->where("TenDangNhapNV", $name)
            ->where("MatKhau", $pass)
            ->where("LaAdmin", '=', 0)
            ->exists();
        $admin = DB::table('nhanvien')
            ->where("TenDangNhapNV", $name)
            ->where("MatKhau", $pass)
            ->where("LaAdmin", '=', 1)
            ->exists();
        if ($admin == 1) {
            $admin_is_logged = 1;
            $id = (DB::table('nhanvien')
                ->where("TenDangNhapNV", $name)
                ->where("MatKhau", $pass)
                ->select('MaNV')
                ->get())[0]->MaNV;
            setcookie('admin_is_logged', $admin_is_logged, time() + 360000, '/');
            setcookie('admin_id', $id, time() + 360000, '/');
            return redirect()->route('admin');
        } else if ($nv == 1) {
            $admin_is_logged = 1;
            $id = (DB::table('nhanvien')
                ->where("TenDangNhapNV", $name)
                ->where("MatKhau", $pass)
                ->select('MaNV')
                ->get())[0]->MaNV;
            setcookie('admin_is_logged', $admin_is_logged, time() + 360000, '/');
            setcookie('admin_id', $id, time() + 360000, '/');
            return redirect()->route('admin');
        } else {
            return redirect()->route('admin_login_form')->with('fail', 'Tài khoản hoặc mật khẩu không chính xác.');
        }
    }

    public function adm_logout()
    {
        setcookie('admin_is_logged', 0, time() - 360000, '/');
        setcookie('admin_is_logged', 0, time() + 360000, '/');
        return redirect()->route('admin');
    }
    /* End Đăng nhập / kí / xuất */
    /* index */
    public function home()
    {
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('admin_index', [
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    /* end index */
    /* hiển thị */
    public function product()
    {
        $alls = DB::table("saches")
            ->join("nhaxuatban", "saches.MaNXB", "=", "nhaxuatban.MaNXB")
            ->where("saches.TrangThai", '=', 1)
            ->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('admin_product', [
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function employee()
    {
        $alls = DB::table('nhanvien')->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('admin_employee', [
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function user()
    {
        $alls = DB::table('nguoidung')->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('admin_user', [
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function product_type()
    {
        $alls = DB::table('loaisach')->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('admin_product_type', [
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function publisher()
    {
        $alls = DB::table('nhaxuatban')->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('admin_publisher', [
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function news()
    {
        $alls = DB::table('nhaxuatban')->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('admin_publisher', [
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }

    public function invoice_sale()
    {
        $alls = DB::table('hoadonban')
            ->join('nhanvien', 'hoadonban.MaNV', '=', 'nhanvien.MaNV')
            ->join('nguoidung', 'hoadonban.MaNgDung', '=', 'nguoidung.MaNgDung')
            ->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('admin_invoice_sale', [
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function invoice_import()
    {
        $alls = DB::table('hoadonnhap')
            ->join('nhanvien', 'hoadonnhap.MaNV', '=', 'nhanvien.MaNV')
            ->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('admin_invoice_import', [
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }

    public function invoice_detail_sale($id)
    {
        $alls = DB::table('cthoadonban')
            ->join('saches', 'cthoadonban.MaSach', '=', 'saches.MaSach')
            ->where('MaHDBan', '=', $id)
            ->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('admin_invoice_detail_sale', [
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function invoice_detail_import($id)
    {
        $alls = DB::table('cthoadonnhap')
            ->join('saches', 'cthoadonnhap.MaSach', '=', 'saches.MaSach')
            ->where('MaHDNhap', '=', $id)
            ->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('admin_invoice_detail_import', [
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    /*End hiển thị*/
    /*Chức năng*/
    /*Sách*/
    public function add_product()
    {
        $loaisach = DB::table('loaisach')->get();
        $nxb = DB::table('nhaxuatban')->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('add_product', [
                'admin' => $admin,
                'loaisach' => $loaisach,
                'nxb' => $nxb,
            ]);
        } else {
            return view('adm_partials.login');
        }
    }

    public function edit_product($id)
    {
        $loaisach = DB::table('loaisach')->get();
        $nxb = DB::table('nhaxuatban')->get();
        $sach = DB::table('saches')
            ->where('MaSach', '=', $id)
            ->get();
        /*$loaisachraw = DB::raw("SELECT IF('MaLoaiSach' not like $sach[0]->MaLoaiSach) FROM loaisach");*/
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('edit_product', [
                'admin' => $admin,
                'loaisach' => $loaisach,
                'sach' => $sach,
                'nxb' => $nxb,
            ]);
        } else {
            return view('adm_partials.login');
        }
    }

    public function func_add_product(Request $request)
    {
        $messages = [
            'bookid.required' => 'Mã sách không được để trống',
            'bookname.required' => 'Tên sách không được để trống',
            'price.required' => 'Đơn giá không được để trống',
            'percent.required' => 'Chiết khấu không được để trống',
        ];
        $this->validate($request, [
            'bookid' => 'required',
            'bookname' => 'required',
            'price' => 'required',
            'percent' => 'required',
        ], $messages);

        $bookid = $request->bookid;
        $bookname = $request->bookname;
        $booktype = $request->booktype;
        $publisher = $request->publisher;
        $price = $request->price;
        $percent = $request->percent;
        $content = $request->content;
        $star = $request->star;
        $checkexist = DB::table('saches')
            ->where('MaSach', '=', $bookid)
            ->exist();
        if ($checkexist) {
            return redirect()->route('add_product')->with('fail', 'Mã sách đã tồn tại');
        } else {
            $check = DB::table('saches')
                ->insert([
                    'MaSach' => $bookid,
                    'TenSach' => $bookname,
                    'MaLoaiSach' => $booktype,
                    'MaNXB' => $publisher,
                    'DonGia' => $price,
                    'PhanTramGiam' => $percent,
                    'MoTa' => $content,
                    'TrangThai' => 1,
                    'NoiBat' => $star,
                ]);
            if ($check) {
                return redirect()->route('admin_product')->with('success', 'Thêm sách thành công.');
            } else {
                return redirect()->route('add_product')->with('fail', 'Thêm sách không thành công.');
            }
        }
    }

    public function func_edit_product($id, Request $request)
    {
        $sach = DB::table('saches')
        ->where('MaSach', '=', $id)
        ->get();
        $messages = [
            'bookid.required' => 'Mã sách không được để trống',
            'bookname.required' => 'Tên sách không được để trống',
            'price.required' => 'Đơn giá không được để trống',
            'percent.required' => 'Chiết khấu không được để trống',
        ];
        $this->validate($request, [
            'bookid' => 'required',
            'bookname' => 'required',
            'price' => 'required',
            'percent' => 'required',
        ], $messages);

        $bookid = $request->bookid;
        $bookname = $request->bookname;
        $booktype = $request->booktype;
        $publisher = $request->publisher;
        $price = $request->price;
        $percent = $request->percent;
        $content = $request->content;
        $star = $request->star;
        $checkduplicate = (
            $sach[0]->MaSach == $bookid &&
            $sach[0]->TenSach == $bookname &&
            $sach[0]->MaLoaiSach == $booktype &&
            $sach[0]->DonGia == $price &&
            $sach[0]->PhanTramGiam == $percent &&
            $sach[0]->MoTa == $content &&
            $sach[0]->NoiBat == $star
        );
        if ($checkduplicate) {
            return redirect()->route('admin_product')->with('fail', 'Trường dữ liệu không thay đổi, sửa không thành công');
        } else {
            $check = DB::table('saches')
            ->where('MaSach', '=', $sach[0]->MaSach)
            ->update([
                'MaSach' => $bookid,
                'TenSach' => $bookname,
                'MaLoaiSach' => $booktype,
                'MaNXB' => $publisher,
                'DonGia' => $price,
                'PhanTramGiam' => $percent,
                'MoTa' => $content,
                'TrangThai' => 1,
                'NoiBat' => $star,
            ]);
        if ($check) {
            return redirect()->route('admin_product')->with('success', 'Sửa sách thành công.');
        } else {
            return redirect()->route('add_product')->with('fail', 'Sửa sách không thành công.');
        }
        }
        /*$loaisachraw = DB::raw("SELECT IF('MaLoaiSach' not like $sach[0]->MaLoaiSach) FROM loaisach");*/
    }
    public function func_delete_product($id)
    {
        $del = DB::table('saches')
            ->where('MaSach', '=', $id)
            ->update([
                'TrangThai' => 0
            ]);
        if ($del) {
            return redirect()->route('admin_product')->with('success', 'Xoá sách thành công.');
        } else {
            return redirect()->route('admin_product')->with('fail', 'Xoá sách không thành công.');
        }
    }
    /*End Sách*/
    /*Nhân viên*/
    public function add_empl()
    {
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('add_employee', [
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function edit_empl($id)
    {
        $nv = DB::table('nhanvien')
            ->where('MaNV', '=', $id)
            ->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('edit_employee', [
                'admin' => $admin,
                'nv' => $nv
            ]);
        } else {
            return view('adm_partials.login');
        }
    }

    public function func_add_empl()
    {
    }
    public function func_edit_empl($id)
    {
    }

    public function func_delete_empl($id)
    {
        $del = DB::table('nhanvien')
            ->where('MaNV', '=', $id)
            ->update([
                'TrangThai' => 0
            ]);
        if ($del) {
            return redirect()->route('admin_product')->with('success', 'Xoá nhân viên thành công.');
        } else {
            return redirect()->route('admin_product')->with('fail', 'Xoá nhân viên không thành công.');
        }
    }
    /*End Nhân Viên*/
    /*Loại sách*/
    public function add_product_type()
    {
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('add_product_type', [
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function edit_product_type($id)
    {
        $pt = DB::table('loaisach')
            ->where('MaLoaiSach', '=', $id)
            ->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('edit_product_type', [
                'admin' => $admin,
                'pt' => $pt
            ]);
        } else {
            return view('adm_partials.login');
        }
    }

    public function func_add_product_type()
    {
    }
    public function func_edit_product_type($id)
    {
    }

    public function func_delete_product_type($id)
    {
        $del = DB::table('loaisach')
            ->where('MaLoaiSach', '=', $id)
            ->update([
                'TrangThai' => 0
            ]);
        if ($del) {
            return redirect()->route('admin_product_type')->with('success', 'Xoá loại sách thành công.');
        } else {
            return redirect()->route('admin_product_type')->with('fail', 'Xoá loại sách không thành công.');
        }
    }
    /*End Loại sách*/
    /*Nhà Xuất Bản*/
    public function add_publisher()
    {
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('add_publisher', [
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function edit_publisher($id)
    {
        $pl = DB::table('nhaxuatban')
            ->where('MaNXB', '=', $id)
            ->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('edit_publisher', [
                'admin' => $admin,
                'pl' => $pl
            ]);
        } else {
            return view('adm_partials.login');
        }
    }

    public function func_add_publisher()
    {
    }
    public function func_edit_publisher($id)
    {
    }

    public function func_delete_publisher($id)
    {
        $del = DB::table('nhaxuatban')
            ->where('MaNXB', '=', $id)
            ->update([
                'TrangThai' => 0
            ]);
        if ($del) {
            return redirect()->route('admin_product')->with('success', 'Xoá loại sách thành công.');
        } else {
            return redirect()->route('admin_product')->with('fail', 'Xoá loại sách không thành công.');
        }
    }
    /*End Nhà Xuất Bản*/

    /*(Chi tiết) Hoá đơn nhập*/
    public function add_invoice_import()
    {
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('add_invoice_import', [
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function edit_invoice_import()
    {
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('add_invoice_import', [
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function func_delete_invoice_import()
    {
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('add_invoice_import', [
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    /*End (Chi tiết) Hoá đơn nhập*/
    /*(Chi tiết) Hoá đơn bán*/
    public function edit_invoice_sale()
    {
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('add_invoice_import', [
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function func_delete_invoice_sale()
    {
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('add_invoice_import', [
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    /*End (Chi tiết) Hoá đơn bán*/
}
