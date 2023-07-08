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
        <h1 class="m-0">Nhà Xuất Bản</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('admin')}}">Quản lý</a></li>
          <li class="breadcrumb-item active">Nhà Xuất Bản</li>
        </ol>
      </div>
      <div>
        <a href="{{route('add_publisher')}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i>Thêm</a>
      </div><!-- /.col -->
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
            <th>Mã Nhà Xuất Bản</th>
            <th>Nhà Xuất Bản</th>
            <th>Trạng Thái</th>
            <th>Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alls as $all)
        <tr>
            <td> {{$all->MaNXB}} </td>
            <td class="chuhoa"> {{$all->TenNXB}} </td>
            @if($all->TrangThaiNXB)
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
              <a id="update_btn" href="{{route('edit_publisher', ['id' => $all->MaNXB])}}" class="mr-3 func_icon !important" title="Cập nhật"
                  data-toggle="tooltip"><span class="fa fa-pen"></span></a>
              <a id="del_btn" href="{{route('func_delete_publisher', ['id' => $all->MaNXB])}}" title="Xoá"
                  data-toggle="tooltip"><span class="fa fa-trash"></span></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection