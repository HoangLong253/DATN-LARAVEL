@extends('layouts.app')
@section('content')
<!-- Lịch sử mua hàng -->
<div class="form-add-top">
    <span class="title-name1">Tài khoản của bạn</span> <a href> Thoát
        <!-- Nút đăng xuất user --></a>
    <div class="grid-history-buy grid-5">
        <div class="grid1">
            <div class="grid-name">Mã đơn hàng:</div>
            <div class="grid-infor">#008000</div>
        </div>
        <div class="grid2">
            <div class="grid-name">Ngày đặt</div>
            <div class="grid-infor">Th6, 10, 2023</div>

        </div>
        <div class="grid3">
            <div class="grid-name">Trạng thái thanh toán</div>
            <div class="grid-infor">Đã thanh toán</div>
        </div>
        <div class="grid5">
            <div class="grid-name">Tình trạng vận chuyển</div>
            <div class="grid-infor">Đã giao hàng cho vận chuyển</div>
        </div>
        <div class="grid5">
            <div class="grid-name">Tổng tiền</div>
            <div class="grid-infor">350.00đ</div>
        </div>
    </div>
</div>
<!-- End Lịch sử mua hàng -->
@include ('index_partials.js')   
@endsection