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
            <h1 class="m-0">Thêm Chi Tiết Hoá Đơn Nhập</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Quản Lý</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin_invoice_import')}}">Hoá Đơn Nhập</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin_invoice_detail_import', ['id' => $hdn[0]->MaHDNhap])}}">Chi Tiết Hoá Đơn Nhập</a></li>
                <li class="breadcrumb-item active">Thêm Chi Tiết Hoá Đơn Nhập</li>
            </ol>
        </div>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('main_content')
<!-- Thêm sửa hóa đơn bán -->
<div class="form-add-top">
    <div class="form-add-invoice">
        <form action="{{route('func_add_invoice_detail_import', ['id' => $hdn[0]->MaHDNhap])}}" method="POST">
            @csrf
            <div class="whole-box-form-info">
                <div class="form-group">
                    <label for="namebook">Sách cần nhập </label>
                    <!--làm thẻ select option-->
                    <select name="namebook" id="namebook" class="form-control">
                        @foreach ($sach as $sach)
                            <option value="{{$sach->MaSach}}">{{$sach->TenSach}}</option>
                        @endforeach
                    </select>
                </div>
                @error('name')
                    <p class="mess-respon">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for>Số lượng: </label> 
                    <input type="number" class="form-control" 
                        id="total" name="total"
                        placeholder="Nhập số lượng nhập">
                </div>
                @error('total')
                    <p class="mess-respon">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for>Đơn giá nhập: </label> 
                    <input type="number" class="form-control" 
                        id="total" name="total"
                        placeholder="Nhập đơn giá">
                </div>
                @error('total')
                    <p class="mess-respon">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex-btn">
                <button type="submit" class="btn btn-primary">Thêm</button>
                <a href="{{route('admin_invoice_import')}}" class="btn btn-danger">Huỷ</a>
            </div>
        </form>
    </div>
</div>
<!--  -->
@endsection