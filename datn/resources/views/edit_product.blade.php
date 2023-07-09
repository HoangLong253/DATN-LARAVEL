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
            <h1 class="m-0">Sửa Sách</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Quản Lý</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin_product')}}">Sách</a></li>
                <li class="breadcrumb-item active">Sửa Sách</li>
            </ol>
        </div>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('main_content')
<!-- Thêm sản phẩm -->
<form action="{{route('func_edit_product', ['id' => $sach[0]->MaSach])}}" method="post">
    @csrf
    <div class="form-add-top">
        <div class="whole-box-sp-img">
            <label for="image">Hình ảnh sản phẩm: </label>
            <!--<div>Width: 260 px - Height: 300 px (.jpg|.gif|.png|.jpeg|.gif)</div>-->
            <input type="file" id="imagefile" name="imagefile">
        </div>
        <div class="box-info">
            <div class="whole-box-sp-info">
                <div class="form-group">
                    <label for="bookid">Mã sách: </label>
                    <input type="text" class="form-control" id="bookid" name="bookid"
                        value="{{$sach[0]->MaSach}}"
                        placeholder="Nhập mã sách">
                </div>
                @error('bookname')
                    <p class="mess-respon">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for="namebook">Tên sách: </label>
                    <input type="id" class="form-control chuhoa" id="bookname" name="bookname"
                        value="{{ $sach[0]->TenSach }}"
                        placeholder="Nhập tên sách">
                </div>
                @error('bookname')
                    <p class="mess-respon">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Loại sách: </label>
                    <select class="form-control" id="booktype" name="booktype">
                        @foreach ($loaisach as $item)
                            <option value="{{$item->MaLoaiSach}}">{{$item->TenLoaiSach}}</option>
                        @endforeach
                    </select>
                </div>
                @error('booktype')
                    <p class="mess-respon">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nhà xuất bản: </label>
                    <select class="form-control" id="publisher" name="publisher">
                        @foreach($nxb as $item)
                            <option value="{{$item->MaNXB}}">{{$item->TenNXB}}</option>
                        @endforeach
                    </select>
                </div>
                @error('publisher')
                    <p class="mess-respon">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for>Giá bán: </label>
                    <input type="number" class="form-control" id="price" name="price"
                        value="{{ $sach[0]->DonGiaSach }}"
                        placeholder="Nhập giá bán">
                </div>
                @error('price')
                    <p class="mess-respon">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for>Chiết khấu: </label>
                    <input type="number" class="form-control" id="percent" name="percent"
                    value="{{ $sach[0]->PhanTramGiam }}"
                        placeholder="Nhập chiết khấu">
                </div>
                @error('percent')
                    <p class="mess-respon">{{ $message }}</p>
                @enderror
                <!-- Tự tính chiết khấu dựa vào giá bán - giá mới -->
                <div class="form-group">
                    <label for>Nội dung: </label>
                    <input type="text" class="form-control" id="content" name="content"
                        value="{{ $sach[0]->MoTa }}"
                        placeholder="Nhập nội dung">
                </div>
                @error('content')
                    <p class="mess-respon">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-add-bottom">
            <div>
                <input 
                    type="checkbox" 
                    name="active" 
                    id="active"  
                    @if ($sach[0]->TrangThaiS)
                        checked
                    @endif>
                Trạng thái
                <input type="checkbox" name="star" id="star"
                    @if ($sach[0]->NoiBat)
                    checked
                    @endif>
                Nổi bật
            </div>
            <!--<div class="title-name1">Hình ảnh đọc thử</div>
                                <form action="/action_page.php">
                                    <input type="file" id="myFile" name="filename">
                                    <input type="submit">
                                </form>-->
            <!-- Thao tác -->
            <div class="flex-control">
                <div class="flex-btn">
                    <button type="submit" class="btn btn-primary">Sửa</button>
                    <!--<button type="button" class="btn btn-danger">Hủy</button>-->
                    <a href="{{route('admin_product')}}" class="btn btn-danger">Huỷ</a>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End thêm sản phẩm -->
@endsection