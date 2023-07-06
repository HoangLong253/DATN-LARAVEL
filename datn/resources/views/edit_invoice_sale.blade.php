@extends('layouts.admin')
@section('header_content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Thêm Sản Phẩm</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Quản Lý</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin_product')}}">Sách</a></li>
                <li class="breadcrumb-item active">Thêm Sách</li>
            </ol>
        </div>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('main_content')
<!-- Thêm sửa hóa đơn nhập -->
<div class="form-add-top">
    <div class="form-add-invoice">
        <div class="title-name1"> Thêm sửa hóa đơn nhập</div>
        <form action>
            <div class="form-group">
                <label for>Mã hóa đơn nhập: </label>
                <input type="number" class="form-control w300px" id
                    aria-describedby="<!--  -->"
                    placeholder="Nhập Mã hóa đơn nhập">
                <small id="<!--  -->"
                    class="form-text text-muted"> .</small>
            </div>
            <div class="form-group">
                <label for>Mã sách cần nhập: </label>
                <input type="number" class="form-control w300px" id
                    aria-describedby="<!--  -->"
                    placeholder="Nhập Mã sách cần nhập">
                <small id="<!--  -->"
                    class="form-text text-muted"> .</small>
            </div>
            <div class="form-group">
                <label for>Số lượng: </label>
                <input type="number" class="form-control w300px" id
                    aria-describedby="<!--  -->"
                    placeholder="Nhập Số lượng">
                <small id="<!--  -->"
                    class="form-text text-muted"> .</small>
            </div>
            <div class="form-group">
                <label for>Tổng tiền: </label>
                <input type="number" class="form-control w300px" id
                    aria-describedby="<!--  -->"
                    placeholder="Nhập Tổng tiền">
                <small id="<!--  -->"
                    class="form-text text-muted"> .</small>
            </div>
            <div class="flex-control">
                <div class="form-check">
                    <input class="form-check-input"
                        type="checkbox" value id="defaultCheck1">
                    <label class="form-check-label"
                        for="defaultCheck1">
                        Trạng thái
                    </label>
                </div>
                <div class="flex-btn">
                    <button type="submit"
                        class="btn btn-primary">Thêm</button>
                    <button type="submit" class="btn btn-danger">Hủy</button>
                </div>
            </div>

        </form>
    </div>
</div>
<!--  -->
@endsection