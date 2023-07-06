@extends('layouts.app')
@section('content')
<!-- Thông tin user -->
<div class="form-add-top">
    <div class="title-name1">Thông tin tài khoản</div>
    <div>Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
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
        <div class="user-infor-img">
            <div class="box-user-infor-img">
                <img
                    src="https://cdn.tgdd.vn/2020/07/content/bo-anh-yasuo-lol-dep-va-chat-de-lam-hinh-nen-dien-thoai-may1-800x450.jpg"
                    alt>
            </div>
            <form action="#">
                <input type="file" id="myFile" name="filename">
                <div>Dụng lượng file tối đa 1 MB
                    Định dạng:.JPEG, .PNG</div>
            </form>

        </div>
    </form>
</div>
@include ('index_partials.js')   
@endsection