@extends('layouts.admin')
@section('header_content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Hoá Đơn Nhập</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Quản Lý</a></li>
                    <li class="breadcrumb-item active">Hoá Đơn Nhập</li>
                </ol>
            </div>
            <div>
                <a href="{{ route('add_invoice_import') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i>Nhập</a>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('main_content')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Mã Hoá Đơn Nhập</th>
                <th>Tên Nhân Viên</th>
                <th>Tổng Tiền</th>
                <th>Trạng Thái</th>
                <th>Chức Năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alls as $all)
                <tr>
                    <td> {{ $all->MaHDNhap }} </td>
                    <td> {{ $all->HoTenNV }} </td>
                    <td> {{ $all->TongTien }} </td>
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
                      <a id="del_btn" href="#" class="mr-3 func_icon" title="Xoá"
                          data-toggle="tooltip"><span class="fa fa-trash"></span></a>
                        <a href="{{route('admin_invoice_detail_import', ['id' => $all->MaHDNhap])}}"  title="Dẫn qua chi tiết">
                            <span class="fa fa-long-arrow-alt-right"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
