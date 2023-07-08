@extends('layouts.app')
@section('content')
<!-- Thông tin user -->
<div class="form-add-top">
    <div class="title-name1">Thông tin tài khoản</div>
    <div>Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
    <div><a href="{{ route('lichsumuahang') }}">Lịch sử mua hàng</a></div>
    <form class="flex-user-infor" action="{{route('capnhatthongtin')}}" method="POST">
        <div class="user-infor-detail">
            <div class="form-group">
                <!-- Set khi đăng nhập r thì hiện thông tin vào form sửa thì click vào r đổi thôi -->
                <label for>Tên đăng nhập: </label>
                <input type="text" class="form-control"
                    id="username" name="username"
                    value="{{$user1[0]->TenDangNhapND}}"
                    placeholder="Nhập tên đăng nhập">
            </div>
            <div class="form-group">
                <!-- Set khi đăng nhập r thì hiện thông tin vào form sửa thì click vào r đổi thôi -->
                <label for>Họ và tên: </label>
                <input type="text" class="form-control"
                    id="name" name="name"
                    value="{{$user1[0]->HoTenND}}"
                    placeholder="Nhập họ và tên">
            </div>
            <div class="form-group">
                <label for>Email: </label>
                <input type="text" class="form-control"
                    id="email" name="email"
                    value="{{$user1[0]->Email}}"
                    placeholder="Nhập email">
            </div>
            <div class="form-group">
                <label for>Mật khẩu: </label>
                <input type="password" class="form-control text-sm"
                    id="id_password" name="password"
                    value="{{$user1[0]->MatKhau}}"
                    placeholder="Nhập mật khẩu">
                <i class="far fa-eye matkhau" id="togglePassword"></i>
            </div>
            <div class="form-group">
                <label for>Số điện thoại: </label>
                <input type="number" class="form-control"
                    id="phone" name="phone"
                    value="{{$user1[0]->SDT}}"
                    placeholder="Nhập số điện thoại">
            </div>
            <div class="flex-btn">
                <button type="submit" class="btn btn-success">Cập nhật</button>
                <button type="submit" class="btn btn-danger">Hủy</button>
            </div>

        </div> 
    </form>
</div>
@include ('index_partials.js')   
@endsection