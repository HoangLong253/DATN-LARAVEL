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
                <h1 class="m-0">Sửa Loại Sách</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Quản Lý</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin_product_type') }}">Loại Sách</a></li>
                    <li class="breadcrumb-item active">Sửa Loại Sách</li>
                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('main_content')
    <!-- Form thêm nhân viên -->
    <form class="margin-adm" action="{{route('func_edit_product_type', ['id' => $pt[0]->MaLoaiSach])}}" method="POST">
        @csrf
        <div class="form-add-staff">
            <div class="form-group">
                <label for="">Mã Loại Sách: </label>
                <input type="text" class="form-control" 
                    id="id" name="id"
                    value="{{$pt[0]->MaLoaiSach}}"
                    placeholder="Nhập Mã loại sách">
            </div>
            @error('id')
                <p class="mess-respon">{{ $message }}</p>
            @enderror
            <div class="form-group">
                <label for="namebook">Tên Loại Sách: </label>
                <input type="text" class="form-control" 
                    id="name" name="name"
                    value="{{$pt[0]->TenLoaiSach}}"
                    placeholder="Nhập tên loại sách">
            </div>
            @error('name')
                <p class="mess-respon">{{ $message }}</p>
            @enderror 
            <!-- Thao tác -->
            <div class="flex-control">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" 
                        id="active" name="active"
                        @if ($pt[0]->TrangThaiLS)
                        checked
                        @endif
                        >
                    <label class="form-check-label" for="defaultCheck1">
                        Trạng thái
                    </label>
                </div>
                <div class="flex-btn">
                    <button type="submit" class="btn btn-primary">Sửa</button>
                    <!--<button type="button" class="btn btn-danger">Hủy</button>-->
                    <a href="{{route('admin_product_type')}}" class="btn btn-danger">Huỷ</a>
                </div>
            </div>
        </div>
    </form>
@endsection
