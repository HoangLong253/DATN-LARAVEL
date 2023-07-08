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
            <h1 class="m-0">Sửa Hoá Đơn Bán</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Quản Lý</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin_invoice_sale')}}">Hoá Đơn Bán</a></li>
                <li class="breadcrumb-item active">Sửa Hoá Đơn Bán</li>
            </ol>
        </div>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('main_content')
<!-- Sửa sửa hóa đơn nhập -->
<div class="form-add-top">
    <div class="form-add-invoice">
        <div class="title-name1"> Sửa Hoá Đơn Bán</div>
        <form action="{{route('func_edit_invoice_sale', ['id' => $hdb[0]->MaHDBan])}}" method="POST">
            @csrf
            <div class="form-group">
                <label for>Nhân viên quản lý đơn hàng: </label>
                <select class="form-control w300px" name="employee" id="employee">
                    @foreach($nv as $nv)
                        <option value="{{$nv->MaNV}}">{{$nv->HoTenNV}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for>Trạng thái giao hàng: </label>
                <select class="form-control w300px" name="shippingstatus" id="shippingstatus">
                    <option value="0">Đơn hàng đang chờ duyệt</option>
                    <option value="1">Đơn hàng đã được duyệt</option>
                    <option value="2">Đơn hàng đang được vận chuyển</option>
                    <option value="3">Đơn hàng đã vận chuyển thành công</option>
                </select>
            </div>
            <div class="form-group">
                <label for>Trạng thái thanh toán: </label>
                <select class="form-control w300px" name="paycheckstatus" id="paycheckstatus">
                    <option value="0">Chưa thanh toán</option>
                    <option value="1">Đã thanh toán</option>
                </select>
            </div>
            <div class="flex-control">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" 
                        id="active" name="active"
                        @if ($hdb[0]->TrangThaiHDB)
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
                    <a href="{{ route('admin_publisher') }}" class="btn btn-danger">Huỷ</a>
                </div>
            </div>
        </form>
    </div>
</div>
<!--  -->
@endsection