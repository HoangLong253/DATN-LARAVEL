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
    public function adm_login(Request $request) {
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
                        ->where("Email", $name)
                        ->where("MatKhau", $pass)
                        ->where("LaAdmin", '=', 0)
                        ->exists();
        $admin = DB::table('nhanvien')
                        ->where("Email", $name)
                        ->where("MatKhau", $pass)
                        ->where("LaAdmin", '=', 1)
                        ->exists();
        if($admin == 1) {
            $admin_is_logged = 1;
            $id = (DB::table('nhanvien')
                    ->where("Email", $name)
                    ->where("MatKhau", $pass)
                    ->select('MaNV')
                    ->get())[0]->MaNV;
            setcookie('admin_is_logged', $admin_is_logged, time() + 360000, '/');
            setcookie('id', $id, time() + 360000, '/');
            return redirect()->route('admin');
        } else if ($nv == 1) {
            $admin_is_logged = 1;
            $id = (DB::table('nhanvien')
                    ->where("Email", $name)
                    ->where("MatKhau", $pass)
                    ->select('MaNV')
                    ->get())[0]->MaNV;
            setcookie('admin_is_logged', $admin_is_logged, time() + 360000, '/');
            setcookie('id', $id, time() + 360000, '/');
            return redirect()->route('admin');
        } else {
            return redirect()->route('admin')->with('fail', 'Tài khoản hoặc mật khẩu không chính xác.');
        }
    }

    public function adm_logout() {
        setcookie('admin_is_logged', 0, time() - 360000, '/');
        setcookie('admin_is_logged', 0, time() + 360000, '/');
        return redirect()->route('admin');
    }

    public function home() {
        if(isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged']==1 ) {
            $admin = DB::table("nhanvien")
                        ->where('MaNV', '=', $_COOKIE['id'])
                        ->get();
            return view('admin_index',[
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function product() {
        $alls = DB::table("saches")
        ->join("nhaxuatban", "saches.MaNXB", "=", "nhaxuatban.MaNXB")
        ->get();
        if(isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged']==1 ) {
            $admin = DB::table("nhanvien")
                        ->where('MaNV', '=', $_COOKIE['id'])
                        ->get();
            return view('admin_product',[
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function employee() {
        $alls = DB::table('nhanvien')->get();
        if(isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged']== 1 ) {
            $admin = DB::table("nhanvien")
                        ->where('MaNV', '=', $_COOKIE['id'])
                        ->get();
            return view('admin_employee',[
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function user() {
        $alls = DB::table('nguoidung')->get();
        if(isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged']== 1 ) {
            $admin = DB::table("nhanvien")
                        ->where('MaNV', '=', $_COOKIE['id'])
                        ->get();
            return view('admin_user',[
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function product_type() {
        $alls = DB::table('loaisach')->get();
        if(isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged']== 1 ) {
            $admin = DB::table("nhanvien")
                        ->where('MaNV', '=', $_COOKIE['id'])
                        ->get();
            return view('admin_product_type',[
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function publisher() {
        $alls = DB::table('nhaxuatban')->get();
        if(isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged']== 1 ) {
            $admin = DB::table("nhanvien")
                        ->where('MaNV', '=', $_COOKIE['id'])
                        ->get();
            return view('admin_publisher',[
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function news() {
        $alls = DB::table('nhaxuatban')->get();
        if(isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged']== 1 ) {
            $admin = DB::table("nhanvien")
                        ->where('MaNV', '=', $_COOKIE['id'])
                        ->get();
            return view('admin_publisher',[
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }

    public function invoice_sale() {
        $alls = DB::table('hoadonban')->get();
        if(isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged']== 1 ) {
            $admin = DB::table("nhanvien")
                        ->where('MaNV', '=', $_COOKIE['id'])
                        ->get();
            return view('admin_invoice_sale',[
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function invoice_import() {
        $alls = DB::table('hoadonnhap')->get();
        if(isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged']== 1 ) {
            $admin = DB::table("nhanvien")
                        ->where('MaNV', '=', $_COOKIE['id'])
                        ->get();
            return view('admin_invoice_import',[
                'alls' => $alls,
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }

    public function add_product() {
        if(isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged']==1 ) {
            $admin = DB::table("nhanvien")
                        ->where('MaNV', '=', $_COOKIE['id'])
                        ->get();
            return view('add_product',[
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function edit_product() {

    }
    public function delete_product() {

    }
    public function add_empl() {
        if(isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged']==1 ) {
            $admin = DB::table("nhanvien")
                        ->where('MaNV', '=', $_COOKIE['id'])
                        ->get();
            return view('add_product',[
                'admin' => $admin
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
    public function edit_empl() {

    }
    public function delete_empl() {

    }
}
