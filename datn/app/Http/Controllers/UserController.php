<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request) {
        $nd = DB::table('nguoidung')
                    ->where('MaNgDung', '=', $_COOKIE['id'])
                    ->get();
        $messages = [
            'username.required' => 'Tên đăng nhập không được để trống',
            'name.required' => 'Họ tên không được để trống',
            'password.required' => 'Mật khẩu không được để trống', 
            'email.required' => 'Email không được để trống', 
            'phone.required' => 'Điện thoại không được để trống', 
        ];
        $this->validate($request, [
            'username' => 'required',
            'name' => 'required',
            'password' => 'required',  
            'email' => 'required',  
            'phone' => 'required',  
        ], $messages);

        $username = $request->username;
        $name = $request->name; 
        $password = $request->password; 
        $email = $request->email; 
        $phone = $request->phone; 
        $checkduplicate = (
            $nd[0]->TenDangNhapND == $username &&
            $nd[0]->HoTenND == $name &&
            $nd[0]->MatKhau == $password &&
            $nd[0]->Email == $email &&
            $nd[0]->SDT == $phone
        );
        if($checkduplicate) {
            return redirect()->route('thongtinnguoidung')->with('fail', 'Dữ liệu không thay đổi');
        } else {
            $check = DB::table('nguoidung')
            ->where('MaNgDung', '=', $_COOKIE['id'])
            ->update([
                'TenDangNhapND' => $username,
                'HoTenND' => $name,
                'MatKhau' => $password,
                'Email' => $email,
                'SDT' => $phone, 
            ]);
            if($check) {
                return redirect()->route('thongtinnguoidung')->with('success', 'Sửa thông tin thành công.');
            } else {
                return redirect()->route('thongtinnguoidung')->with('fail', 'Sửa thông tin không thành công.');
            }
        }
        
    }

    public function delete() {
        $del = DB::table('nguoidung')
        ->where('MaNgDung', '=', $_COOKIE['id'])
        ->update([
            'TrangThai' => 0
        ]);
        if ($del) {
        return redirect()->route('dangxuat')->with('success', 'Xoá tài khoản thành công.');
    } else {
        return redirect()->route('thongtinnguoidung')->with('fail', 'tài khoản không thành công.');
    }
    }
}
