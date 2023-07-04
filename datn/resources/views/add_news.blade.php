@extends('layouts.admin')
@section('header_content')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Thêm Nhân Viên</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('admin')}}">Quản Lý</a></li>
          <li class="breadcrumb-item"><a href="{{route('admin_employee')}}">Nhân Viên</a></li>
          <li class="breadcrumb-item active">Thêm Nhân Viên</li>
        </ol>
      </div>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
                        <!-- Form thêm nhân viên -->
                        <div class="form-add-staff">
                            <div class="title-name1">Thông tin cơ bản</div>
                            <div class="form-group">
                                <label for="">Mã nhân viên: </label>
                                <input type="number" class="form-control" id="" aria-describedby="<!--  -->"
                                    placeholder="Nhập Mã nhân viên">
                                <small id="<!--  -->" class="form-text text-muted"> .</small>
                            </div>
                            <div class="form-group">
                                <label for="namebook">Tên nhân viên: </label>
                                <input type="id" class="form-control" id="namebook" aria-describedby="<!--  -->"
                                    placeholder="Nhập tên nhân viên">
                                <small id="<!--  -->" class="form-text text-muted"> .</small>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="  col-form-label">Mật khẩu:</label>
                                <div class=" ">
                                    <input type="password" class="form-control" id="inputPassword"
                                        placeholder="Nhập mật khẩu">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Công việc: </label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Quản lý</option>
                                    <option>Nhân viên bán hàng</option>
                                    <option>Nhân viên giao hàng...</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Số điện thoại: </label>
                                <input type="number" class="form-control" id="" aria-describedby="<!--  -->"
                                    placeholder="Nhập Số điện thoại">
                                <small id="<!--  -->" class="form-text text-muted"> .</small>
                            </div>
                            <!-- Thao tác -->
                            <div class="flex-control">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Trạng thái
                                        </label>
                                    </div> 
                                    <div class="flex-btn">
                                        <button type="button" class="btn btn-primary">Thêm</button>
                                        <button type="button" class="btn btn-danger">Hủy</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
@endsection