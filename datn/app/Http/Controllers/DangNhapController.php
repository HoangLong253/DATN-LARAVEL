<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\nhanvien;

use Illuminate\Support\Facades\DB;

class DangNhapController extends Controller
{
    public function check_login(Request $request)
    {
        $messages = [
            'username.required' => 'Email không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
        ];
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ], $messages);

        $name = $request->username;
        $pass = $request->password;

        /*$nv = DB::table('nhanvien')
                        ->where("Email", $name)
                        ->where("MatKhau", $pass)
                        ->exists();*/
        $nd = DB::table('nguoidungs')
                        ->where("Email", $name)
                        ->where("MatKhau", $pass)
                        ->exists();
        /*$ship = DB::table('nggiaohang')
                        ->where("Email", $name)
                        ->where("MatKhau", $pass)
                        ->exists();*/

        if($nd == 1) {
            $is_logged = 1;
            $id = (DB::table('nguoidungs')
            ->where("Email", $name)
            ->where("MatKhau", $pass)
            ->select('MaNgDung')
            ->get())[0]->MaNgDung;
            setcookie('is_logged', $is_logged, time() + 360000, '/');
            setcookie('id', $id, time() + 360000, '/');
            //setcookie('id', $id, time() + 360000, '/');
            //tạo giỏ hàng nếu chưa có giỏ hàng
            return redirect()->route('index');
        } else {
            return redirect()->route('dangnhap')->with('fail', 'Tài khoản hoặc mật khẩu không chính xác.');
        }
    }

    //đăng kí   

    public function check_register(Request $request)
    {
        $messages = [
            'fullname.required' => 'Họ Và Tên Không Được Bỏ Trống',
            'password.required' => 'Mật Khẩu Không Được Bỏ Trống.',
            'password.min' => 'Mật Khẩu Phải Trên 8 ký tự.',
            'repassword.same' => 'Mật Khẩu Không Khớp.',
            'phone.required' => 'Số Điện Thoại Không Được Bỏ Trống.',
            'phone.alpha_num' => 'Số Điện Thoại Phải Là Dữ Liệu Số.',
            'phone.digits' => 'Số Điện Thoại Phải Đủ 10 Chữ Số.',
            'email.required' => 'Email không được bỏ trống',
        ];
        $this->validate($request, [
            
            'fullname' => 'required',
            'password' => 'required|min:8',
            'repassword' => 'same:password',
            'phone' => 'required|alpha_num',
            'email' => 'required',
        ], $messages);

        $MaNV = time();
        $fullname = $request->fullname;
        $password = $request->password;
        $phone = $request->phone;
        $email = $request->email;

        /*$check = DB::table('nhanvien')
            ->create([
                'MaNV' => $MaNV,
                'HoTen' => $fullname,
                'Email' => $email,
                'MatKhau' => $password,
                'SDT' => $phone,
            ]);
        if($check) {
            return redirect()->route('dangnhap')->with('success', 'Đăng ký thành công.');
        } else {
            return redirect()->route('dangki')->with('fail', 'Đăng ký thất bại.');
        }*/
        /*DB::table('nhanvien')
            ->create([
                'MaNV' => $MaNV,
                'HoTen' => $fullname,
                'Email' => $email,
                'MatKhau' => $password,
                'SDT' => $phone,
            ]);*/
        $check = DB::table('nguoidung')
        ->insert([
            'MaNgDung' => $MaNV,
            'HoTen' => $fullname,
            'Email' => $email,
            'MatKhau' => $password,
            'SDT' => $phone,
            'TrangThai' => 1
        ]);
        if($check) {
            return redirect()->route('dangnhap')->with('success', 'Đăng ký thành công.');
        } else {
            return redirect()->route('dangki')->with('fail', 'Đăng ký thất bại.');
        }

    }
}
