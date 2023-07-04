@extends('layouts.admin')
@section('header_content')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Người Dùng</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('admin')}}">Quản Lý</a></li>
          <li class="breadcrumb-item active">Người Dùng</li>
        </ol>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
@section('main_content')
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Mã Người Dùng</th>
            <th>Mã Giỏ Hàng</th>
            <th>Họ Tên</th>
            <th>SĐT</th>
            <th>Địa Chỉ</th>
            <th>Trạng Thái</th>
            <th>Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alls as $all)
        <tr>
            <td> {{$all->MaNgDung}} </td>
            <td> {{$all->MaGioHang}} </td>
            <td> {{$all->HoTen}} </td>
            <td> {{$all->SDT}} </td>
            <td> {{$all->DiaChi}} </td>
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
              <a id="del_btn" href="#" title="Xoá"
                  data-toggle="tooltip"><span class="fa fa-trash"></span></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection