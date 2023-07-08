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
    <form action="{{route('func_add_publisher')}}" method="POST">
        <div class="form-add-staff">
            <div class="form-group">
                <label for="">Mã Nhà Xuất Bản: </label>
                <input type="text" class="form-control" 
                    id="id" name="id" 
                    placeholder="Nhập Mã Nhà Xuất Bản">
            </div>
            @error('id')
                <p class="">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <label for="namebook">Tên Nhà Xuất Bản: </label>
                <input type="text" class="form-control" 
                    id="name" name="name"
                    placeholder="Nhập Tên Nhà Xuất Bản">
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
