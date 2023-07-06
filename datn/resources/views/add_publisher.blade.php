@extends('layouts.admin')
@section('header_content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Thêm Nhà Xuất Bản</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Quản Lý</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin_publisher') }}">Nhà Xuất Bản</a></li>
                    <li class="breadcrumb-item active">Thêm Nhà Xuất Bản</li>
                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('main_content')
    <form action="#" method="POST">
        <div class="form-add-staff">
            <div class="form-group">
                <label for="">Mã Nhà Xuất Bản: </label>
                <input type="number" class="form-control" id="id" name="name" aria-describedby="<!--  -->"
                    placeholder="Nhập Mã loại sách">
                <small id="<!--  -->" class="form-text text-muted"> .</small>
            </div>
            @error('id')
                <p class="">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <label for="namebook">Tên Nhà Xuất Bản: </label>
                <input type="id" class="form-control" id="name" name="name" aria-describedby="<!--  -->"
                    placeholder="Nhập tên nhân viên">
                <small id="<!--  -->" class="form-text text-muted"> .</small>
            </div>
            @error('name')
                <p class="">{{ $message }}</p>
            @enderror
            <!-- Thao tác -->
            <div class="flex-control">
                <div class="flex-btn">
                    <button type="submit" class="btn btn-primary">Thêm</button>
                    <!--<button type="button" class="btn btn-danger">Hủy</button>-->
                    <a href="{{ route('admin_publisher') }}" class="btn btn-danger">Huỷ</a>
                </div>
            </div>
        </div>
    </form>
@endsection
