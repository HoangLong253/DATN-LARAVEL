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
            ->where("TrangThaiNV", 1)
            ->where("LaAdmin", '=', 0)
            ->exists();
        $admin = DB::table('nhanvien')
            ->where("TenDangNhapNV", $name)
            ->where("MatKhauNV", $pass)
            ->where("TrangThaiNV", 1)
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
            ->where("saches.TrangThaiS", '=', 1)
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
        $alls = DB::table('nhanvien')
            ->where('TrangThaiNV', '=', 1)
            ->get();
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
        $alls = DB::table('nguoidung')
            ->where('TrangThaiND', '=', 1)
            ->get();
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
        $alls = DB::table('loaisach')
            ->where('TrangThaiLS', '=', 1)
            ->get();
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
        $alls = DB::table('nhaxuatban')
            ->where('TrangThaiNXB', '=', 1)
            ->get();
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
            ->where('TrangThaiHDB', '=', 1)
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
            ->where('TrangThaiHDN', '=', 1)
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
            ->where('TrangThaiCTHDB', '=', 1)
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
        $hdn = DB::table('hoadonnhap')
            ->where('TrangThaiHDN', '=', 1)
            ->where('MaHDNhap', '=', $id)
            ->get();
        $alls = DB::table('cthoadonnhap')
            ->join('saches', 'cthoadonnhap.MaSach', '=', 'saches.MaSach')
            ->where('MaHDNhap', '=', $id)
            ->where('TrangThaiCTHDN', '=', 1)
            ->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('admin_invoice_detail_import', [
                'alls' => $alls,
                'admin' => $admin,
                'hdn' => $hdn,
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
        $loaisach = DB::table('loaisach')
            ->where('TrangThaiLS', '=', 1)
            ->get();
        $nxb = DB::table('nhaxuatban')
            ->where('TrangThaiNXB', '=', 1)
            ->get();
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
        $loaisach = DB::table('loaisach')
            ->where('TrangThaiLS', '=', 1)
            ->get();
        $nxb = DB::table('nhaxuatban')
            ->where('TrangThaiNXB', '=', 1)
            ->get();
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
                    'DonGiaSach' => $price,
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
        $active = $request->active;
        $star = $request->star;
        $checkduplicate = ($sach[0]->MaSach == $bookid &&
            $sach[0]->TenSach == $bookname &&
            $sach[0]->MaLoaiSach == $booktype &&
            $sach[0]->DonGia == $price &&
            $sach[0]->PhanTramGiam == $percent &&
            $sach[0]->MoTa == $content &&
            $sach[0]->TrangThaiS == $active &&
            $sach[0]->NoiBat == $star
        );
        if ($checkduplicate) {
            return redirect()->route('admin_product')->with('fail', 'Dữ liệu trùng lặp');
        } else {
            $check = DB::table('saches')
                ->where('MaSach', '=', $sach[0]->MaSach)
                ->update([
                    'MaSach' => $bookid,
                    'TenSach' => $bookname,
                    'MaLoaiSach' => $booktype,
                    'MaNXB' => $publisher,
                    'DonGiaSach' => $price,
                    'PhanTramGiam' => $percent,
                    'MoTa' => $content,
                    'TrangThai' => $active,
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
                'TrangThaiS' => 0
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

    public function func_add_empl(Request $request)
    {
        $messages = [
            'id.required' => 'Mã nhân viên không được để trống',
            'emplname.required' => 'Tên nhân viên không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            'emplemail.required' => 'Email không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
        ];
        $this->validate($request, [
            'id' => 'required',
            'emplname' => 'required',
            'password' => 'required',
            'emplemail' => 'required',
            'phone' => 'required',
        ], $messages);

        $id = $request->id;
        $emplname = $request->emplname;
        $password = $request->password;
        $emplemail = $request->emplemail;
        $phone = $request->phone;
        $isadmin = $request->isadmin;
        $check = DB::table('nhanvien')
            ->insert([
                'MaNV' => $id,
                'HoTenNV' => $emplname,
                'EmailNV' => $emplemail,
                'MatKhauNV' => $password,
                'SDT' => $phone,
                'LaAdmin' => $isadmin,
                'TrangThai' => 1,
            ]);
        if ($check) {
            return redirect()->route('add_empl')->with('success', 'Thêm nhân viên thành công.');
        } else {
            return redirect()->route('add_empl')->with('fail', 'Thêm nhân viên không thành công.');
        }
    }
    public function func_edit_empl($id, Request $request)
    {
        $nv = DB::table('nhanvien')
            ->where('MaNV', '=', $id)
            ->get();
        $messages = [
            'id.required' => 'Mã nhân viên không được để trống',
            'emplname.required' => 'Tên nhân viên không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            'emplemail.required' => 'Email không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
        ];
        $this->validate($request, [
            'id' => 'required',
            'emplname' => 'required',
            'password' => 'required',
            'emplemail' => 'required',
            'phone' => 'required',
        ], $messages);

        $id1 = $request->id;
        $emplname = $request->emplname;
        $password = $request->password;
        $emplemail = $request->emplemail;
        $phone = $request->phone;
        $isadmin = $request->isadmin;
        $checkdup = ($id1 == $nv[0]->MaNV &&
            $emplname == $nv[0]->HoTenNV &&
            $password == $nv[0]->MatKhau &&
            $emplemail == $nv[0]->Email &&
            $phone == $nv[0]->SDT &&
            $isadmin == $nv[0]->LaAdmin);
        if ($checkdup) {
            return redirect()->route('admin_employee')->with('fail', 'Dữ liệu trùng lặp');
        } else {
            $check = DB::table('nhanvien')
                ->where('MaNV', '=', $id)
                ->update([
                    'MaNV' => $id1,
                    'HoTenNV' => $emplname,
                    'EmailNV' => $emplemail,
                    'MatKhauNV' => $password,
                    'SDTNV' => $phone,
                    'LaAdmin' => $isadmin,
                    'TrangThai' => 1,
                ]);
            if ($check) {
                return redirect()->route('admin_employee')->with('success', 'Sửa nhân viên thành công.');
            } else {
                return redirect()->route('admin_employee')->with('fail', 'Sửa nhân viên không thành công.');
            }
        }
    }

    public function func_delete_empl($id)
    {
        $del = DB::table('nhanvien')
            ->where('MaNV', '=', $id)
            ->update([
                'TrangThaiNV' => 0
            ]);
        if ($del) {
            return redirect()->route('admin_employee')->with('success', 'Xoá nhân viên thành công.');
        } else {
            return redirect()->route('admin_employee')->with('fail', 'Xoá nhân viên không thành công.');
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

    public function func_add_product_type(Request $request)
    {
        $messages = [
            'id.required' => 'Mã loại sách không được để trống',
            'name.required' => 'Tên loại sách không được để trống',
        ];
        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
        ], $messages);

        $id = $request->id;
        $name = $request->name;
        $check = DB::table('loaisach')
            ->insert([
                'MaLoaiSach' => $id,
                'TenLoaiSach' => $name,
                'TrangThaiLS' => 1,
            ]);
        if ($check) {
            return redirect()->route('admin_product_type')->with('success', 'Thêm loại sách thành công.');
        } else {
            return redirect()->route('admin_product_type')->with('fail', 'Thêm loại sách không thành công.');
        }
    }
    public function func_edit_product_type($id, Request $request)
    {
        $pt = DB::table('loaisach')
            ->where('MaLoaiSach', '=', $id)
            ->get();
        $messages = [
            'id.required' => 'Mã loại sách không được để trống',
            'name.required' => 'Tên loại sách không được để trống',
        ];
        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
        ], $messages);

        $id1 = $request->id;
        $name = $request->name;
        $active = $request->active;

        $checkdup = ($id1 = $pt[0]->MaLoaiSach &&
            $id1 = $pt[0]->TenLoaiSach);

        if ($checkdup) {
            return redirect()->route('admin_product_type')->with('fail', 'Dữ liệu trùng lặp');
        } else {
            $check = DB::table('loaisach')
                ->where('MaLoaiSach', '=', $id)
                ->update([
                    'MaLoaiSach' => $id1,
                    'TenLoaiSach' => $name,
                    'TrangThaiLS' => $active,
                ]);
            if ($check) {
                return redirect()->route('admin_product_type')->with('success', 'Sửa loại sách thành công.');
            } else {
                return redirect()->route('admin_product_type')->with('fail', 'Sửa loại sách không thành công.');
            }
        }
    }

    public function func_delete_product_type($id)
    {
        $del = DB::table('loaisach')
            ->where('MaLoaiSach', '=', $id)
            ->update([
                'TrangThaiLS' => 0
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

    public function func_add_publisher(Request $request)
    {
        $messages = [
            'id.required' => 'Mã nhà xuất bản không được để trống',
            'name.required' => 'Tên nhà xuất bản không được để trống',
        ];
        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
        ], $messages);

        $id = $request->id;
        $name = $request->name;
        $check = DB::table('nhaxuatban')
            ->insert([
                'MaNXB' => $id,
                'TenNXB' => $name,
                'TrangThaiNXB' => 1,
            ]);
        if ($check) {
            return redirect()->route('admin_publisher')->with('success', 'Thêm nhà xuất bản thành công.');
        } else {
            return redirect()->route('admin_publisher')->with('fail', 'Thêm nhà xuất bản không thành công.');
        }
    }
    public function func_edit_publisher($id, Request $request)
    {
        $nxb = DB::table('nhaxuatban')
            ->where('MaNXB', '=', $id)
            ->get();
        $messages = [
            'id.required' => 'Mã nhà xuất bản không được để trống',
            'name.required' => 'Tên nhà xuất bản không được để trống',
        ];
        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
        ], $messages);

        $id1 = $request->id;
        $name = $request->name;
        $active = $request->active;

        $checkdup = ($id1 == $nxb[0]->MaNXB &&
                    $name == $nxb[0]->TenNXB);
        if ($checkdup) {
            return redirect()->route('admin_publisher')->with('fail', 'Dữ liệu trùng lặp');
        } else {
            $check = DB::table('nhaxuatban')
                ->where('MaNXB', '=', $id)
                ->update([
                    'MaNXB' => $id,
                    'TenNXB' => $name,
                    'TrangThaiNXB' => $active,
                ]);
            if ($check) {
                return redirect()->route('admin_publisher')->with('success', 'Sửa nhà xuất bản thành công.');
            } else {
                return redirect()->route('admin_publisher')->with('fail', 'Sửa nhà xuất bản không thành công.');
            }
        }
    }

    public function func_delete_publisher($id)
    {
        $del = DB::table('nhaxuatban')
            ->where('MaNXB', '=', $id)
            ->update([
                'TrangThaiNXB' => 0
            ]);
        if ($del) {
            return redirect()->route('admin_publisher')->with('success', 'Xoá nhà xuất bản thành công.');
        } else {
            return redirect()->route('admin_publisher')->with('fail', 'Xoá nhà xuất bản không thành công.');
        }
    }
    /*End Nhà Xuất Bản*/

    /*(Chi tiết) Hoá đơn nhập*/
    public function add_invoice_import()
    {
        $nv = DB::table('nhanvien')
            ->where('TrangThaiNV', '=', 1)
            ->where('LaAdmin', '=', 1)
            ->get();

        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('add_invoice_import', [
                'admin' => $admin,
                'nv' => $nv
            ]);
        } else {
            return view('adm_partials.login');
        }
    }

    public function edit_invoice_import($id)
    {
        $hdn =  DB::table('hoadonnhap')
            ->where('MaHDNhap', '=', $id)
            ->get();

        $nv = DB::table('nhanvien')
            ->where('TrangThaiNV', '=', 1)
            ->where('LaAdmin', '=', 1)
            ->get();

        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('edit_invoice_import', [
                'admin' => $admin,
                'nv' => $nv,
                'hdn' => $hdn
            ]);
        } else {
            return view('adm_partials.login');
        }
    }

    public function func_add_invoice_import(Request $request)
    {
        $messages = [
            'id.required' => 'Mã hóa đơn không được để trống',
            'total.required' => 'Tổng tiền không được để trống',
        ];
        $this->validate($request, [
            'id' => 'required',
            'total' => 'required',
        ], $messages);

        $id = $request->id;
        $employee = $request->employee;
        $total = $request->total;
        $checkexist = DB::table('hoadonnhap')
            ->where('MaHDNhap', '=', $id)
            ->exists();
        if ($checkexist) {
            return redirect()->route('add_invoice_import')->with('fail', 'Dữ liệu trùng lặp');
        } else {
            $check = DB::table('hoadonnhap')
                ->insert([
                    'MaHDNhap' => $id,
                    'MaNV' => $employee,
                    'TongTienHDN' => $total,
                    'TrangThaiHDN' => 1,
                ]);
            if ($check) {
                return redirect()->route('add_invoice_import')->with('success', 'Thêm hóa đơn nhập thành công.');
            } else {
                return redirect()->route('add_invoice_import')->with('fail', 'Thêm hóa đơn nhập không thành công.');
            }
        }
    }

    public function func_edit_invoice_import(Request $request, $id)
    {
        $hdn = DB::table('hoadonnhap')
            ->where('MaHDNhap', '=', $id)
            ->get();
        $messages = [
            'total.required' => 'Tổng tiền không được để trống',
        ];
        $this->validate($request, [
            'total' => 'required',
        ], $messages);



        $employee = $request->employee;
        $total = $request->total;
        if ($request->active == 'on') {
            $active = 1;
        } else {
            $active = 0;
        }

        $checkdup = ($employee == $hdn[0]->MaNV &&
            $total == $hdn[0]->TongTienHDN &&
            $active == $hdn[0]->TrangThaiHDN);
        if ($checkdup) {
            return redirect()->route('edit_invoice_import', ['id' => $id])->with('fail', 'Dữ liệu không thay đổi');
        } else {
            $check = DB::table('hoadonnhap')
                ->where('MaHDNhap', '=', $id)
                ->update([
                    'MaHDNhap' => $id,
                    'MaNV' => $employee,
                    'TongTienHDN' => $total,
                    'TrangThaiHDN' => $active,
                ]);
            if ($check) {
                return redirect()->route('edit_invoice_import', ['id' => $id])->with('success', 'Sửa hóa đơn nhập thành công.');
            } else {
                return redirect()->route('edit_invoice_import', ['id' => $id])->with('fail', 'Sửa hóa đơn nhập không thành công.');
            }
        }
    }
    public function func_delete_invoice_import($id)
    {
        $del1 = DB::table('hoadonnhap')
            ->where('MaHDNhap', '=', $id)
            ->update([
                'TrangThaiHDN' => 0
            ]);
        $del2 = DB::table('cthoadonnhap')
            ->where('MaHDNhap', '=', $id)
            ->update([
                'TrangThaiCTHDN' => 0
            ]);

        if ($del1 && $del2) {
            return redirect()->route('admin_publisher')->with('success', 'Xoá nhà xuất bản thành công.');
        } else {
            return redirect()->route('admin_publisher')->with('fail', 'Xoá nhà xuất bản không thành công.');
        }
    }

    public function add_invoice_detail_import($id)
    {
        $hdn = DB::table('hoadonnhap')
            ->where('MaHDNhap', '=', $id)
            ->get();
        $sach = DB::table('saches')->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('add_invoice_detail_import', [
                'admin' => $admin,
                'sach' => $sach,
                'hdn' => $hdn
            ]);
        } else {
            return view('adm_partials.login');
        }
    }

    public function func_add_invoice_detail_import($id, Request $request)
    {
        $messages = [
            'id.required' => 'Mã hóa đơn không được để trống',
            'total.required' => 'Tổng tiền không được để trống',
        ];
        $this->validate($request, [
            'id' => 'required',
            'total' => 'required',
        ], $messages);

        $id = $request->id;
        $employee = $request->employee;
        $total = $request->total;
        $checkexist = DB::table('hoadonnhap')
            ->where('MaHDNhap', '=', $id)
            ->exists();
        if ($checkexist) {
            return redirect()->route('add_invoice_import')->with('fail', 'Dữ liệu trùng lặp');
        } else {
            $check = DB::table('hoadonnhap')
                ->insert([
                    'MaHDNhap' => $id,
                    'MaNV' => $employee,
                    'TongTien' => $total,
                    'TrangThai' => 1,
                ]);
            if ($check) {
                return redirect()->route('add_invoice_import')->with('success', 'Thêm hóa đơn nhập thành công.');
            } else {
                return redirect()->route('add_invoice_import')->with('fail', 'Thêm hóa đơn nhập không thành công.');
            }
        }
    }

    public function edit_invoice_detail_import($id, $num)
    {
        $hdn = DB::table('hoadonnhap')
            ->where('MaHDNhap', '=', $id)
            ->get();
        $cthdn = DB::table('cthoadonnhap')
            ->where('MaHDNhap', '=', $id)
            ->where('id', '=', $num)
            ->get();
        $sach = DB::table('saches')->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('edit_invoice_detail_import', [
                'admin' => $admin,
                'sach' => $sach,
                'hdn' => $hdn,
                'cthdn' => $cthdn,
            ]);
        } else {
            return view('adm_partials.login');
        }
    }

    public function func_edit_invoice_detail_import($id, Request $request)
    {
        $messages = [
            'id.required' => 'Mã hóa đơn không được để trống',
            'total.required' => 'Tổng tiền không được để trống',
        ];
        $this->validate($request, [
            'id' => 'required',
            'total' => 'required',
        ], $messages);

        $id = $request->id;
        $employee = $request->employee;
        $total = $request->total;
        $checkexist = DB::table('hoadonnhap')
            ->where('MaHDNhap', '=', $id)
            ->exists();
        if ($checkexist) {
            return redirect()->route('add_invoice_import')->with('fail', 'Dữ liệu trùng lặp');
        } else {
            $check = DB::table('hoadonnhap')
                ->insert([
                    'MaHDNhap' => $id,
                    'MaNV' => $employee,
                    'TongTien' => $total,
                    'TrangThai' => 1,
                ]);
            if ($check) {
                return redirect()->route('add_invoice_import')->with('success', 'Thêm hóa đơn nhập thành công.');
            } else {
                return redirect()->route('add_invoice_import')->with('fail', 'Thêm hóa đơn nhập không thành công.');
            }
        }
    }

    /*End (Chi tiết) Hoá đơn nhập*/
    /*(Chi tiết) Hoá đơn bán*/
    public function edit_invoice_sale($id)
    {
        $nv = DB::table('nhanvien')
            ->where('TrangThaiNV', '=', 1)
            ->where('LaAdmin', '=', 0)
            ->get();
        $hdb = DB::table('hoadonban')
            ->where('MaHDBan', '=', $id)
            ->get();
        if (isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged'] == 1) {
            $admin = DB::table("nhanvien")
                ->where('MaNV', '=', $_COOKIE['admin_id'])
                ->get();
            return view('edit_invoice_sale', [
                'nv' => $nv,
                'admin' => $admin,
                'hdb' => $hdb
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function func_edit_invoice_sale(Request $request, $id)
    {
        $nv = $request->employee;
        $shippingstatus = $request->shippingstatus;
        $paycheckstatus = $request->paycheckstatus;

        $inv_s = DB::table('hoadonban')
            ->where('MaHDBan', '=', $id)
            ->update([
                'MaNV' => $nv,
                'TrangThaiGiaoHang' => $shippingstatus,
                'TrangThaiThanhToan' => $paycheckstatus
            ]);
        if ($inv_s) {
            return redirect()->route('admin_invoice_sale')->with('success', 'Sửa hoá đơn bán thành công.');
        } else {
            return redirect()->route('admin_invoice_sale')->with('fail', 'Sửa hoá đơn bán không thành công.');
        }
    }
    public function func_delete_invoice_sale($id)
    {
        $del1 = DB::table('hoadonban')
            ->where('MaHDB', '=', $id)
            ->update([
                'TrangThaiHDB' => 0
            ]);
        $del2 = DB::table('cthoadonban')
            ->where('MaHDBCTHDB', '=', $id)
            ->update([
                'TrangThai' => 0
            ]);
        if ($del1 && $del2) {
            return redirect()->route('admin_product')->with('success', 'Xoá hoá đơn bán thành công.');
        } else {
            return redirect()->route('admin_product')->with('fail', 'Xoá hoá đơn bán không thành công.');
        }
    }
    /*End (Chi tiết) Hoá đơn bán*/
}
