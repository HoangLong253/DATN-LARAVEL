@extends('layouts.app')
@section('content')
<!-- Lịch sử mua hàng -->
<div class="form-add-top">
    <span class="title-name1">Tài khoản của bạn</span> <a href> Thoát
        <!-- Nút đăng xuất user -->
    </a> 
    @if($hdb == null)
    <div>Bạn chưa mua sản phẩm nào !</div>
    @else
    <table class="w-100">
        <tr>
            <th>Mã đơn hàng:</th>
            <th>Ngày đặt</th>
            <th>Trạng thái thanh toán</th>
            <th>Tình trạng vận chuyển</th>
            <th>Tổng tiền</th>
        </tr>
        @foreach($hdb as $hdb)
        <tr>
            <td>
                <a href="{{route('chitietlichsumuahang', ['id' => $hdb->MaHDBan])}}">
                    {{$hdb->MaHDBan}}
                </a>
            </td>
            <td>{{$hdb->created_at}}</td>
            @if($hdb->TrangThaiThanhToan == 1)
                <td>Đã thanh toán</td>
            @else
                <td>Chưa thanh toán</td>
            @endif
            @switch($hdb->TrangThaiGiaoHang)
            @case(0)
                <td> Đơn hàng đang chờ duyệt </td>
            @break

            @case(1)
                <td> Đơn hàng đã được duyệt </td>
            @break

            @case(2)
                <td> Đơn hàng đang được vận chuyển </td>
            @break

            @case(3)
                <td> Đơn hàng đã vận chuyển thành công</td>
            @break
        @endswitch
        @switch($hdb->TrangThaiThanhToan)
            @case(0)
                <td> Chưa thanh toán </td>
            @break

            @case(1)
                <td> Đã thanh toán </td>
            @break
        @endswitch
            <td>@convert($hdb->TongTienHDB)đ</td>
        </tr>
        @endforeach
    </table> 
    @endif
</div>
<!-- End Lịch sử mua hàng -->
@include ('index_partials.js')
@endsection