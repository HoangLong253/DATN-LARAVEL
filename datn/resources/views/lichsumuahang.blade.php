@extends('layouts.app')
@section('content')
<!-- Lịch sử mua hàng -->
<div class="form-add-top">
    <span class="title-name1">Tài khoản của bạn</span> <a href> Thoát
        <!-- Nút đăng xuất user -->
    </a> 
    <table class="w-100">
        <tr>
            <th>Mã đơn hàng:</th>
            <th>Ngày đặt</th>
            <th>Trạng thái thanh toán</th>
            <th>Tình trạng vận chuyển</th>
            <th>Tổng tiền</th>
        </tr>
        <tr>
            <td>#daasfsa</td>
            <td>Th6, 10, 2023</td>
            <td>Đã thanh toán</td>
            <td>Đã giao hàng cho vận chuyển</td>
            <td>350.00đ</td>
        </tr>
        <tr>
            <td>#daasfsa</td>
            <td>Th6, 10, 2023</td>
            <td>Đã thanh toán</td>
            <td>Đã giao hàng cho vận chuyển</td>
            <td>350.00đ</td>
        </tr>
        <tr>
            <td>#daasfsa</td>
            <td>Th6, 10, 2023</td>
            <td>Đã thanh toán</td>
            <td>Đã giao hàng cho vận chuyển</td>
            <td>350.00đ</td>
        </tr>
    </table> 
</div>
<!-- End Lịch sử mua hàng -->
@include ('index_partials.js')
@endsection