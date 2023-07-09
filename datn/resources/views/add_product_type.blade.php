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
                <h1 class="m-0">Thêm Loại Sách</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Quản Lý</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin_product_type') }}">Loại Sách</a></li>
                    <li class="breadcrumb-item active">Thêm Loại Sách</li>
                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('main_content')
    <!-- Form thêm nhân viên -->
    <form class="margin-adm" action="{{route('func_add_product_type')}}" method="POST">
        @csrf
        <div class="form-add-staff">
            <div class="form-group">
                <label for="">Mã Loại Sách: </label>
                <input type="number" class="form-control" id="id" name="name" aria-describedby="<!--  -->"
                    placeholder="Nhập Mã loại sách">
                <small id="<!--  -->" class="form-text text-muted"> .</small>
            </div>
            @error('id')
                <p class="mess-respon">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <label for="namebook">Tên Loại Sách: </label>
                <input type="id" class="form-control" id="name" name="name" aria-describedby="<!--  -->"
                    placeholder="Nhập tên nhân viên">
                <small id="<!--  -->" class="form-text text-muted"> .</small>
            </div>
            @error('name')
                <p class="mess-respon">{{ $message }}</p>
            @enderror 
            <!-- Thao tác -->
            <div class="flex-control">
                <div class="flex-btn">
                    <button type="submit" class="btn btn-primary">Thêm</button>
                    <!--<button type="button" class="btn btn-danger">Hủy</button>-->
                    <a href="{{route('admin_product_type')}}" class="btn btn-danger">Huỷ</a>
                </div>
            </div>
        </div>
    </form>
@endsection
