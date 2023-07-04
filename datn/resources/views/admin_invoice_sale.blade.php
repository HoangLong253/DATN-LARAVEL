@extends('layouts.admin')
@section('header_content')
    <div class="container-fluid">
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
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Mã Hoá Đơn Bán</th>
                <th>Mã Nhân Viên</th>
                <th>Mã Người Dùng</th>
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
                    <td> {{ $all->MaNV }} </td>
                    <td> {{ $all->MaNgDung }} </td>
                    <td> {{ $all->TongTien }} </td>
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
                    @if($all->TrangThai)
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
                        <a id="update_btn" href="#" class="mr-3 func_icon !important" title="Cập nhật"
                            data-toggle="tooltip"><span class="fa fa-pen"></span></a>
                        <a id="del_btn" class="mr-3 func_icon" href="#" title="Xoá" data-toggle="tooltip">
                            <span
                                class="fa fa-trash">
                            </span>
                        </a>
                        <a href="#"  title="Dẫn qua chi tiết">
                            <span class="fa fa-long-arrow-alt-right"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
