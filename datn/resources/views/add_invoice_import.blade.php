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
<!-- Thêm sửa hóa đơn bán -->
<div class="form-add-top">
    <div class="form-add-invoice">
        <div class="title-name1">Sửa Hóa Đơn Bán </div>
        <form action>
            <div class="whole-box-form-info">

                <div class="form-group">
                    <label for="idbook">Mã hóa đơn bán: </label>
                    <input type="text" class="form-control" id="idbook"
                        aria-describedby="<!--  -->"
                        placeholder="Nhập mã hóa đơn bán">
                    <small id="<!--  -->" class="form-text text-muted"> .</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Trạng thái giao hàng:
                    </label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Đã giao hàng</option>
                        <option>Đang tiến hành giao hàng</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="namebook">Mã nhân viên: </label>
                    <input type="id" class="form-control" id="namebook"
                        aria-describedby="<!--  -->"
                        placeholder="Nhập Mã nhân viên">
                    <small id="<!--  -->" class="form-text text-muted"> .</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Trạng thái thanh toán
                    </label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Đã thanh toán</option>
                        <option>Chưa thanh toán</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="namebook">Mã người dùng: </label>
                    <input type="id" class="form-control" id="namebook"
                        aria-describedby="<!--  -->"
                        placeholder="Nhập Mã người dùng">
                    <small id="<!--  -->" class="form-text text-muted"> .</small>
                </div>
                <div class="form-group">
                    <label for>Tổng tiền: </label>
                    <input type="number" class="form-control" id
                        aria-describedby="<!--  -->"
                        placeholder="Nhập Tổng tiền">
                    <small id="<!--  -->" class="form-text text-muted"> .</small>
                </div>

            </div>
            <div class="flex-btn">
                <button type="submit" class="btn btn-primary">Thêm</button>
                <button type="submit" class="btn btn-danger">Hủy</button>
            </div>
        </form>
    </div>
</div>
<!--  -->
@endsection