@extends('layouts.admin')
@section('header_content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Sửa Nhân Viên</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Quản Lý</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin_employee') }}">Nhân Viên</a></li>
                    <li class="breadcrumb-item active">Sửa Nhân Viên</li>
                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('main_content')
    <!-- Form thêm nhân viên -->
<form action="" method="POST">
    @csrf
    <div class="form-add-staff">
        <div class="form-group">
            <label for="">Mã nhân viên: </label>
            <input type="text" class="form-control" 
                id="id" name="id"
                value="{{$nv[0]->MaNV}}"
                placeholder="Nhập Mã nhân viên">
        </div>
        @error('id')
            <p class="">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="namebook">Tên nhân viên: </label>
            <input type="id" class="form-control" 
                id="emplname" name="name"
                value="{{$nv[0]->HoTenNV}}"
                placeholder="Nhập tên nhân viên">
            <small id="<!--  -->" class="form-text text-muted"> .</small>
        </div>
        @error('name')
            <p class="">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="inputPassword" class="  col-form-label">Mật khẩu:</label>
            <div class=" ">
            <input type="password" class="form-control" 
                id="password" name="password"
                value="{{$nv[0]->MatKhau}}"
                placeholder="Nhập mật khẩu">
            </div>
        </div>
        @error('password')
            <p class="">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="">Số điện thoại: </label>
            <input type="number" class="form-control" 
                id="phone" name="phone"
                value="{{$nv[0]->SDT}}"
                placeholder="Nhập Số điện thoại">
        </div>
        @error('phone')
            <p class="">{{ $message }}</p>
        @enderror
        <!-- Thao tác -->
        <div class="flex-control">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" 
                    id="active" name="active"
                    @if ($nv[0]->TrangThai)
                    checked
                    @endif
                    >
                <label class="form-check-label" for="defaultCheck1">
                    Trạng thái
                </label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" 
                    id="active" name="active"
                    @if ($nv[0]->LaAdmin)
                    checked
                    @endif
                    >
                <label class="form-check-label" for="defaultCheck1">
                    Quản trị viên
                </label>
            </div>
            <div class="flex-btn">
                <button type="submit" class="btn btn-primary">Sửa</button>
                <!--<button type="button" class="btn btn-danger">Hủy</button>-->
                <a href="{{route('admin_employee')}}" class="btn btn-danger">Huỷ</a>
            </div>
        </div>
    </div>
</form>
@endsection
