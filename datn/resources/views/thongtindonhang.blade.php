@extends('layouts.app')
@section('content')
<!-- Thông tin đơn hàng -->
<div class="form-add-top">
    <div class="title-name1">Thông tin đơn hàng</div>
    <div class="title-bill">ĐƠN HÀNG: <span class="id-bill">#008000</span>, ĐẶT
        LÚC: <span class="time-bill">10 06, 2023 09:05SA</span></div>
    <div class="flex-infor-bill">
        <div class="infor-bill">
            <div class="title-name2">Địa chỉ nhận thanh toán</div>
            <div class="infor-bill-item">
                Tình trạng thanh toán: <span>paid</span>
            </div>
            <div class="infor-bill-item">Âu Dương Hoàng Long </div>
            <div class="infor-bill-item">39/8 Nhất Chi Mai, P13, Tân Bình, Tp,
                HCM</div>
            <div class="infor-bill-item">Vietnam</div>
            <div class="infor-bill-item">0768848015</div>
        </div>
        <div class="infor-bill">
            <div class="title-name2">Địa chỉ gửi hàng</div>
            <div class="infor-bill-item">
                Vận chuển: <span>fullfield</span>
            </div>
            <div class="infor-bill-item">Âu Dương Hoàng Long </div>
            <div class="infor-bill-item">39/8 Nhất Chi Mai, P13, Tân Bình, Tp,
                HCM</div>
            <div class="infor-bill-item">Vietnam</div>
            <div class="infor-bill-item">0768848015</div>
        </div>
    </div>
    <div class="grid-product-inbill-list">
        <div class="gridspname">
            <div class="title-name2">Sản phẩm</div>
            <div class="grid-product-inbill-list-info">
                <div>Thương nhớ trà long</div>
                <div>Tiểu thuyết</div>
            </div>
            <div class="grid-product-inbill-list-info">
                <div>Thương nhớ trà long2</div>
                <div>Tiểu thuyết2</div>
            </div>
        </div>
        <div class="gridspid">
            <div class="title-name2">Mã sản phẩm</div>
            <div class="grid-product-inbill-list-info">
                <div>#008000</div>
                <div>#00800das0</div>
            </div>
        </div>
        <div class="gridspprice">
            <div class="title-name2">Giá</div>
            <div class="grid-product-inbill-list-info">
                <div>30000đ </div>
                <div>50000đ </div>
            </div>
        </div>
        <div class="gridspquanty">
            <div class="title-name2">Số lượng</div>
            <div class="grid-product-inbill-list-info">
                <div>3</div>
                <div>2</div>
            </div>
        </div>
        <div class="gridsptotalprice">
            <div class="title-name2">Tổng cộng</div>
            <div class="grid-product-inbill-list-info">
                <div>90000đ</div>
                <div>60000đ</div>
            </div>
        </div>
    </div>
</div>
@include ('index_partials.js')   
@endsection