<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SampleController extends Controller
{
    function index()
    {
        return view('login');
    }

    function registration()
    {
        return view('registration');
    }

    function validate_registration(Request $request)
    {
        $request->validate([
            'name'         =>   'required',
            'email'        =>   'required|email|unique:users',
            'password'     =>   'required|min:6'
        ]);

        $data = $request->all();

        User::create([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('login')->with('success', 'Đăng nhập thành công');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('dashboard');
        }

        return redirect('login')->with('success', 'Login details are not valid');
    }

    function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }

    //đăng nhập
    
    public function check_login(Request $request)
    {
        $messages = [
            'username.required' => 'Bạn Chưa Điền Thông Tin Đăng Nhập',
        ];
        $this->validate($request, [
            'username' => 'required',
        ], $messages);

        $name = $request->username;
        $pass = $request->password;

        $nv = DB::table('nhanvien')
                        ->where("Email", $name)
                        ->where("MatKhau", $pass)
                        ->exists();
        $nd = DB::table('nguoidung')
                        ->where("Email", $name)
                        ->where("MatKhau", $pass)
                        ->exists();
        $ship = DB::table('nggiaohang')
                        ->where("Email", $name)
                        ->where("MatKhau", $pass)
                        ->exists();

        if($nv) {
            $is_logged = 1;
            $id = (DB::table('nhanvien')
            ->where("Email", $name)
            ->where("MatKhau", $pass)
            ->select('MaNV')
            ->get());
            setcookie('is_logged', $is_logged, time() + 360000, '/');
            setcookie('id', $id, time() + 360000, '/');
            //setcookie('id', $id, time() + 360000, '/');
            //tạo giỏ hàng nếu chưa có giỏ hàng
            return redirect()->route('dangnhap');
        } else {
            return redirect()->route('dangnhap')->with('fail', 'Tài khoản hoặc mật khẩu không chính xác.');
        }
    }

    //đăng kí   

    public function create_register(Request $request) 
    {
        $messages = [
            'name.required' => 'Họ Và Tên Không Được Bỏ Trống Không Được Bỏ Trống.',
            'username.required' => 'Tên Đăng Nhập Không Được Bỏ Trống!',
            'username.unique' => 'Tên Đăng Nhập Đã Tồn Tại!',
            'username.regex' => 'Tên Đăng Nhập KHông Được Chứa Khoảng Trắng Và Ký Tự Đặc Biệt.',
            'password.required' => 'Mật Khẩu Không Được Bỏ Trống.',
            'password.min' => 'Mật Khẩu Phải Trên 8 ký tự.',
            'repassword.same' => 'Mật Khẩu Không Khớp.',
            'phone.required' => 'Số Điện Thoại Không Được Bỏ Trống.',
            'phone.alpha_num' => 'Số Điện Thoại Phải Là Dữ Liệu Số.',
            'phone.digits' => 'Số Điện Thoại Phải Đủ 10 Chữ Số.',
        ];
        $this->validate($request, [
            
            'name' => 'required',
            'username' => 'required|unique:nguoidungs,TenDangNhap|regex:/^[a-zA-Z0-9]+(_]?[a-zA-Z0-9]+)*$/i',
            'password' => 'required|min:8',
            'repassword' => 'same:password',
            'phone' => 'required|alpha_num|digits:10',
        ], $messages);
        //tạo người dùng

        return redirect()->route('dangnhap')->with('success', 'Đăng ký thành công.');
    }
}