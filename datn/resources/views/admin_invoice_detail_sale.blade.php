@extends('layouts.admin')
@section('header_content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Chi Tiết Hoá Đơn Bán</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Quản Lý</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('admin_invoice_sale') }}">Hoá Đơn Bán</a></li>
                    <li class="breadcrumb-item active">Chi Tiết Hoá Đơn Bán</li>
                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('main_content')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Hình Ảnh</th>
                <th>Tên Sách</th>
                <th>Đơn Giá</th>
                <th>Số Lượng</th>
                <th>Trạng Thái</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alls as $all)
                <tr>
                    <td>
                        <img alt="ảnh lỗi"
                            src="{{ asset('./assets/images/sach/' . $all->MaLoaiSach . '/' . $all->HinhAnh)}}"
                            width="70" height="100"></img>
                    </td>
                    <td class="chuhoa"> {{$all->TenSach}} </td>
                    <td> {{ $all->DonGia }}đ </td>
                    <td> {{$all->Sluong}} </td>
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
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
