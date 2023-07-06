@extends('layouts.app')
@section('content')
<!-- Thông tin user -->
<div class="form-add-top">
    <div class="title-name1">Thông tin tài khoản</div>
    <div>Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
    <div><a href="{{ route('lichsumuahang') }}">Lịch sử mua hàng</a></div>
    <form class="flex-user-infor" action>
        <div class="user-infor-detail">
            <label for>Tên đăng nhập:</label><span> kyter39</span>

            <div class="form-group">
                <!-- Set khi đăng nhập r thì hiện thông tin vào form sửa thì click vào r đổi thôi -->
                <label for>Họ và tên: </label>
                <input type="id" class="form-control"
                    id
                    aria-describedby="<!--  -->"
                    placeholder="Nhập họ và tên">
                <small id="<!--  -->"
                    class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for>Email: </label>
                <input type="id" class="form-control"
                    id
                    aria-describedby="<!--  -->"
                    placeholder="Nhập email">
                <small id="<!--  -->"
                    class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for>Số điện thoại: </label>
                <input type="id" class="form-control"
                    id
                    aria-describedby="<!--  -->"
                    placeholder="Nhập số điện thoại">
                <small id="<!--  -->"
                    class="form-text text-muted"></small>
            </div>
            <div class="flex-btn">
                <button type="submit" class="btn btn-success">Thay đổi</button>
                <button type="submit" class="btn btn-danger">Hủy</button>
            </div>

        </div> 
    </form>
</div>
@include ('index_partials.js')   
@endsection