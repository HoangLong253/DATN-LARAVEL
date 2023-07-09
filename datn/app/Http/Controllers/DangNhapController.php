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
        $nd = DB::table('nguoidung')
                        ->where("TenDangNhapND", $name)
                        ->where("MatKhauND", $pass)
                        ->exists();
        /*$ship = DB::table('nggiaohang')
                        ->where("Email", $name)
                        ->where("MatKhau", $pass)
                        ->exists();*/

        if($nd == 1) {
            $is_logged = 1;
            $id = (DB::table('nguoidung')
            ->where("TenDangNhapND", $name)
            ->where("MatKhauND", $pass)
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
            'username.required' => 'Tên Đăng Nhập Không Được Bỏ Trống',
            'fullname.required' => 'Họ Và Tên Không Được Bỏ Trống',
            'password.required' => 'Mật Khẩu Không Được Bỏ Trống.',
            'password.min' => 'Mật Khẩu Phải Trên 8 ký tự.',
            'password.regex' => 'Mật Khẩu Phải Chứa Kí Tự Đặc Biệt',
            'repassword.same' => 'Mật Khẩu Không Khớp.',
            'phone.required' => 'Số Điện Thoại Không Được Bỏ Trống.',
            'phone.alpha_num' => 'Số Điện Thoại Phải Là Dữ Liệu Số.',
            'phone.digits' => 'Số Điện Thoại Phải Là Chữ Số.',
            'phone.min' => 'Số Điện Thoại Phải Đủ 10 Chữ Số.',
            'email.required' => 'Email không được bỏ trống',
            'email.regex' => 'Email phải chứa @',
        ];
        $this->validate($request, [ 
            'username' => 'required',
            'fullname' => 'required',
            'password' => 'required|min:8',
            'repassword' => 'same:password',
            'phone' => 'required|alpha_num|min:10',
            'email' => 'required|regex:/^.+@.+$/i',
        ], $messages);

        $username = $request->username;
        $MaNV = time();
        $fullname = $request->fullname;
        $password = $request->password;
        $phone = $request->phone;
        $email = $request->email;

        $check = DB::table('nguoidung')
        ->insert([
            'TenDangNhapND' => $username, 
            'MaNgDung' => $MaNV,
            'HoTenND' => $fullname,
            'EmailND' => $email,
            'MatKhauND' => $password,
            'SDTND' => $phone,
            'TrangThaiND' => 1
        ]);

        if($check) {
           $gd = DB::table('giohang')
                    ->insert([
                        'MaGioHang' => $MaNV,
                        'MaNgDung' => $MaNV,
                        'TongTienGH' => 0,
                        'TrangThaiGH' => 1
                    ]);
            $nv = DB::table('nguoidung')
            ->where('MaNgDung', '=', $MaNV)
            ->update([
                'MaGioHang' => $MaNV
            ]);
            return redirect()->route('dangnhap')->with('success', 'Đăng ký thành công.');
        } else {
            return redirect()->route('dangki')->with('fail', 'Đăng ký thất bại.');
        }

    }
}
