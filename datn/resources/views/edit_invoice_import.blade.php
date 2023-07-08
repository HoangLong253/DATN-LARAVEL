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
            <h1 class="m-0">Sửa Hoá Đơn Nhập</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Quản Lý</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin_invoice_import')}}">Hoá Đơn Nhập</a></li>
                <li class="breadcrumb-item active">Sửa Hoá Đơn Nhập</li>
            </ol>
        </div>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('main_content')
<!-- Sửa sửa hóa đơn bán -->
<div class="form-add-top">
    <div class="form-add-invoice">
        <form action="{{route('func_edit_invoice_import', ['id' => $hdn[0]->MaHDNhap])}}" method="POST">
            @csrf
            <div class="whole-box-form-info">
                <div class="form-group">
                    <label for="namebook">Tên nhân viên: </label>
                    <!--làm thẻ select option-->
                    <select name="employee" id="employee" class="form-control">
                        @foreach ($nv as $nv)
                            <option value="{{$nv->MaNV}}">{{$nv->HoTenNV}}</option>
                        @endforeach
                    </select>
                </div>
                @error('name')
                    <p class="">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for>Tổng tiền: </label> 
                    <input type="number" class="form-control" 
                        id="total" name="total"
                        value="{{$hdn[0]->TongTienHDN}}"
                        placeholder="Nhập tổng tiền">
                </div>
                @error('total')
                    <p class="">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex-btn">
                <div>
                    <input 
                        type="checkbox" 
                        name="active" 
                        id="active"  
                        @if ($hdn[0]->TrangThaiHDN)
                            checked
                        @endif>
                    Trạng thái
                </div>
                <button type="submit" class="btn btn-primary">Sửa</button>
                <a href="{{route('admin_invoice_import')}}" class="btn btn-danger">Huỷ</a>
            </div>
        </form>
    </div>
</div>
<!--  -->
@endsection