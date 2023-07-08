@extends('layouts.admin')
@section('header_content')
    <div class="container-fluid">
        <div class="return">
            @if ($message = Session::get('success'))
            <div>
                <div style="color: #12c300;
                font-size: 1.2em;font-weight: bold;">{{ $message }}</div>
            </div>
            @endif
            @if ($message = Session::get('fail'))
            <div>
                <div style="color: #dd0505;
                font-size: 1.2em;font-weight: bold;">{{ $message }}</div>
            </div>
            @endif
        </div>
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Hoá Đơn Bán</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Quản Lý</a></li>
                    <li class="breadcrumb-item active">Hoá Đơn Bán</li>
                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('main_content')
@if ($alls == null)
    <div>Không có dữ liệu</div>
@else
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Mã Hoá Đơn Bán</th>
                <th>Họ Tên Nhân Viên</th>
                <th>Họ Tên Người Dùng</th>
                <th>Tổng Tiền</th>
                <th>Trạng Thái Giao Hàng</th>
                <th>Trạng Thái Thanh Toán</th>
                <th>Trạng Thái</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alls as $all)
                <tr>
                    <td> {{ $all->MaHDBan }} </td>
                    <td> {{ $all->HoTenNV }} </td>
                    <td> {{ $all->HoTenND }} </td>
                    <td> @convert($all->TongTienHDB)đ </td>
                    @switch($all->TrangThaiGiaoHang)
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
                    @switch($all->TrangThaiThanhToan)
                        @case(0)
                            <td> Chưa thanh toán </td>
                        @break

                        @case(1)
                            <td> Đã thanh toán </td>
                        @break
                    @endswitch
                    @if($all->TrangThaiHDB)
                    <td>
                        <input type="checkbox" id="TrangThai" name="TrangThai" value="yes" checked
                            onclick="return false;" />
                    </td>
                    @else
                    <td>
                        <input type="checkbox" id="TrangThai" name="TrangThai" value="yes"
                            onclick="return false;" />
                    </td>
                    @endif
                    <td>
                        <a id="update_btn" href="{{route('edit_invoice_sale', ['id' => $all->MaHDBan])}}" class="mr-3 func_icon !important" title="Cập nhật"
                            data-toggle="tooltip"><span class="fa fa-pen"></span></a>
                        <!--<a id="del_btn" class="mr-3 func_icon" href="#" title="Xoá" data-toggle="tooltip">
                            <span
                                class="fa fa-trash">
                            </span>
                        </a>-->
                        <a href="{{route('admin_invoice_detail_sale', ['id' => $all->MaHDBan])}}"  title="Dẫn qua chi tiết">
                            <span class="fa fa-long-arrow-alt-right"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
@endsection
