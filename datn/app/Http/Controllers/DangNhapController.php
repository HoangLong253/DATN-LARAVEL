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
        //các thông báo lỗi validate
        $messages = [
            'username.required' => 'Email không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
        ];
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ], $messages);

        //tạo biến + lưu giá trị biến là giá trị request trên server đổ về
        $name = $request->username;
        $pass = $request->password;
        //query builder để kiểm tra người dùng đã có trên database chưa
        $nd = DB::table('nguoidung')
                        ->where("TenDangNhapND", $name)
                        ->where("MatKhauND", $pass)
                        ->exists();
        //kiểm tra câu query đúng chưa
        if($nd == 1) {
            //tạo biến is_logged
            $is_logged = 1;
            //tạo biến lưu mã người dùng
            $id = (DB::table('nguoidung')
                        ->where("TenDangNhapND", $name)
                        ->where("MatKhauND", $pass)
                        ->select('MaNgDung')
                        ->get())[0]->MaNgDung;
            //tạo cookie để lưu giá trị đăng nhập
            setcookie('is_logged', $is_logged, time() + 360000, '/');
            //tạo cookie để lưu mã người dùng vào cookie để xác thực đăng nhập
            setcookie('id', $id, time() + 360000, '/');
            //xoá cart người vãng lai
            session()->forget('cart');
            session()->flush();
            return redirect()->route('index');
        } else {
            return redirect()->route('dangnhap')->with('fail', 'Tài khoản hoặc mật khẩu không chính xác.');
        }
    }

    //đăng kí   

    public function check_register(Request $request)
    {
        //lấy tất cả người dùng để so sánh tên đăng nhập
        $nvcheck = DB::table('nguoidung')->where('TrangThaiND', '=', 1)->get();

        //các thông báo lỗi validate
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

        //tạo biến + lưu giá trị biến là giá trị request trên server đổ về
        $username = $request->username;
        $MaNV = (string)time();
        $fullname = $request->fullname;
        $password = $request->password;
        $phone = $request->phone;
        $email = $request->email;

        //tạo biến đếm để kiểm tra trùng tên đăng nhập
        $count = 0;

        //kiểm tra tên đăng nhập
        foreach($nvcheck as $nvcheck) {
            if($username == $nvcheck->TenDangNhapND) {
                $count++;
            }
        }

        //if để kiểm tra trùng tên đăng nhập, không thì lưu người dùng
        if($count == 1) {
            return redirect()->route('dangki')->with('fail', 'Trùng tên đăng nhập');
        } else {
            //lưu giá trị người dùng vào dtb
            $check = DB::table('nguoidung')
            ->insert([
                'TenDangNhapND' => $username, 
                'MaNgDung' => $MaNV,
                'HoTenND' => $fullname,
                'EmailND' => $email,
                'MatKhauND' => $password,
                'SDTND' => $phone,
                'TrangThaiND' => 1,
            ]);

            //lưu giá trị giỏ hàng vào dtb
            $gd = DB::table('giohang')
            ->insert([
                'MaGioHang' => $MaNV,
                'MaNgDung' => $MaNV,
                'TongTienGH' => 0,
                'TrangThaiGH' => 1
            ]);
    
            //cập nhật mã giỏ hàng vào người dùng mới thêm vào
            $nv = DB::table('nguoidung')
            ->where('MaNgDung', '=', $MaNV)
            ->update([
                'MaGioHang' => $MaNV
            ]);
            if($check) {
                return redirect()->route('dangnhap')->with('success', 'Đăng ký thành công.');
            } else {
                return redirect()->route('dangki')->with('fail', 'Đăng ký thất bại.');
            }
        }
    }
}
