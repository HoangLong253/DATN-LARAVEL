@extends('layouts.admin')
@section('header_content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Thêm Hoá Đơn Nhập</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Quản Lý</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin_product')}}">Hoá Đơn Nhập</a></li>
                <li class="breadcrumb-item active">Thêm Hoá Đơn Nhập</li>
            </ol>
        </div>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('main_content')
<!-- Thêm sửa hóa đơn bán -->
<div class="form-add-top">
    <div class="form-add-invoice">
        <div class="title-name1">Thêm Hóa Đơn Nhập</div>
        <form action="#" method="POST">
            @csrf
            <div class="whole-box-form-info">
                <div class="form-group">
                    <label for="idbook">Mã hóa đơn nhập: </label>
                    <input type="text" class="form-control" id="id" name="id"
                        aria-describedby="<!--  -->"
                        placeholder="Nhập mã hóa đơn bán">
                    <small id="<!--  -->" class="form-text text-muted"> .</small>
                </div>
                @error('id')
                    <p class="">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for="namebook">Tên nhân viên: </label>
                    <!--làm thẻ select option-->
                    <input type="id" class="form-control" id="name" name="name"
                        aria-describedby="<!--  -->"
                        placeholder="Nhập Mã nhân viên">
                    <small id="<!--  -->" class="form-text text-muted"> .</small>
                </div>
                @error('name')
                    <p class="">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for>Tổng tiền: </label> 
                    <input type="number" class="form-control" id="total" name="total"
                        aria-describedby="<!--  -->"
                        placeholder="Nhập Tổng tiền">
                    <small id="<!--  -->" class="form-text text-muted"> .</small>
                </div>
                @error('total')
                    <p class="">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex-btn">
                <button type="submit" class="btn btn-primary">Thêm</button>
                <!--<button type="button" class="btn btn-danger">Hủy</button>-->
                <a href="{{route('admin_invoice_import')}}" class="btn btn-danger">Huỷ</a>
            </div>
        </form>
    </div>
</div>
<!--  -->
@endsection