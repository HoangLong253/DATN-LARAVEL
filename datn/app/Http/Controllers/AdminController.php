<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function home() {
        if(isset($_COOKIE['admin_is_logged']) && $_COOKIE['admin_is_logged']==1 ) {
            $alls = DB::table("saches")
            ->join("nhaxuatban", "saches.MaNXB", "=", "nhaxuatban.MaNXB")
            ->get();
            return view('admin',[
                'alls' => $alls,
            ]);
        } else {
            return view('adm_partials.login');
        }
    }
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
            return redirect()->route('admin_login_form')->with('fail', 'Tài khoản hoặc mật khẩu không chính xác.');
        }
    }

    public function adm_logout() {
        setcookie('admin_is_logged', 0, time() - 360000, '/');
        setcookie('admin_is_logged', 0, time() + 360000, '/');
        return redirect()->route('admin_login_form');
    }

    public function add() {
        $alls = DB::table("saches")
        ->join("nhaxuatban", "sach.MaNXB", "=", "nhaxuatban.MaNXB")
        ->get();
        return view('add');
    }
}
