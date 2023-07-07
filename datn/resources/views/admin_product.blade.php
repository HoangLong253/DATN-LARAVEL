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
        <h1 class="m-0">Sách</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('admin')}}">Quản Lý</a></li>
          <li class="breadcrumb-item active">Sách</li>
        </ol>
      </div>
      <div>
        <a href="{{route('add_product')}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i>Thêm</a>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
@section('main_content')
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Hình Ảnh</th>
            <th>Tên Sách</th>
            <th>Nhà Xuất Bản</th>
            <th>Nổi Bật</th>
            <th>Đơn Giá</th>
            <th>Phần Trăm Giảm (%)</th>
            <th>Giá Giảm</th>
            <th>Trạng Thái</th>
            <th>Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alls as $all)
        <tr>
            <td>
                <img alt="ảnh lỗi"
                    src="{{ asset('./assets/images/sach/' . $all->MaLoaiSach . '/' . $all->HinhAnh)}}"
                    width="70" height="100"></img>
            </td>
            <td class="chuhoa"> {{$all->TenSach}} </td>
            <td class="chuhoa"> {{$all->TenNXB}} </td>
            @if($all->NoiBat)
            <td>
                <input type="checkbox" id="NoiBat" name="NoiBat" value="yes" checked
                    onclick="return false;" />
            </td>
            @else
            <td>
                <input type="checkbox" id="NoiBat" name="NoiBat" value="yes"
                    onclick="return false;" />
            </td>
            @endif
            <td> @convert($all->DonGia, 0)đ </td>
            <td> @convert($all->PhanTramGiam * 100, 0)%</td>
            <td> @convert($all->DonGia - $all->DonGia * $all->PhanTramGiam, 0)đ </td>
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
                <a id="update_btn" href="{{route('edit_product', ['id' => $all->MaSach])}}" class="mr-3 func_icon !important" title="Cập nhật"
                    data-toggle="tooltip"><span class="fa fa-pen"></span></a>
                <a id="del_btn" href="{{route('func_delete_product', ['id' => $all->MaSach])}}" title="Xoá"
                    data-toggle="tooltip"><span class="fa fa-trash"></span></a>
              </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection