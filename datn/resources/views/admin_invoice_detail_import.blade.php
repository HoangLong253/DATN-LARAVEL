@extends('layouts.admin')
@section('header_content')
    <div class="container-fluid">
        <div class="row mb-2">
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
            <div class="col-sm-6">
                <h1 class="m-0">Chi Tiết Hoá Đơn Nhập</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Quản Lý</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('admin_invoice_import') }}">Hoá Đơn Nhập</a></li>
                    <li class="breadcrumb-item active">Chi Tiết Hoá Đơn Nhập</li>
                </ol>
            </div>
            <div>
                <a href="{{route('add_invoice_detail_import', ['id' => $hdn[0]->MaHDNhap])}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i>Thêm</a>
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
                <th>Hình Ảnh</th>
                <th>Tên Sách</th>
                <th>Đơn Giá</th>
                <th>Số Lượng</th>
                <th>Trạng Thái</th>
                <th>Chức Năng</th>
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
                    <td class="chuhoa"> {{ $all->TenSach }} </td>
                    <td> @convert($all->DonGiaCTHDN)đ </td>
                    <td> {{ $all->SLCTHDN }} </td>
                    @if($all->TrangThaiCTHDN)
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
                        <a id="update_btn" href="{{route('edit_invoice_detail_import', ['id' => $hdn[0]->MaHDNhap, 'num' => $all->id])}}" class="mr-3 func_icon !important" title="Cập nhật"
                            data-toggle="tooltip"><span class="fa fa-pen"></span></a>
                        <a id="del_btn" href="#" title="Xoá"
                            data-toggle="tooltip"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
@endsection
