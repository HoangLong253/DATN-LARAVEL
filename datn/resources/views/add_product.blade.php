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
                    <!-- Thêm sản phẩm -->
                    <div class="form-add-top">
                        <div class="box-info">
                            <div class="whole-box-sp-img">
                                <div class="title-name2">Hình ảnh sản phẩm</div>
                                <!--<div>Width: 260 px - Height: 300 px (.jpg|.gif|.png|.jpeg|.gif)</div>-->
                                <form action="#">
                                    <input type="file" id="myFile" name="filename">
                                </form>
                            </div>
                            <div class="whole-box-sp-info">
                                <div class="form-group">
                                    <label for="idbook">Mã sách: </label>
                                    <input type="text" class="form-control" id="idbook" aria-describedby="<!--  -->"
                                        placeholder="Nhập mã sách">
                                    <small id="<!--  -->" class="form-text text-muted"> .</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Loại sách: </label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Sách Giáo Khoa</option>
                                        <option>Sách Tham Khảo</option>
                                        <option>Sách Giáo Khoa</option>
                                        <option>Sách Tham Khảo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="namebook">Tên sách: </label>
                                    <input type="id" class="form-control" id="namebook" aria-describedby="<!--  -->"
                                        placeholder="Nhập tên sách">
                                    <small id="<!--  -->" class="form-text text-muted"> .</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Nhà xuất bản: </label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>NXB Giáo Dục</option>
                                        <option>NXB Kim Đồng</option>
                                        <option>NXB Giáo Dục</option>
                                        <option>NXB Kim Đồng</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Giá bán: </label>
                                    <input type="number" class="form-control" id="" aria-describedby="<!--  -->"
                                        placeholder="Nhập giá bán">
                                    <small id="<!--  -->" class="form-text text-muted"> .</small>
                                </div>
                                <div class="form-group">
                                    <label for="">Giá mới: </label>
                                    <input type="number" class="form-control" id="" aria-describedby="<!--  -->"
                                        placeholder="Nhập giá mới">
                                    <small id="<!--  -->" class="form-text text-muted"> .</small>
                                </div>
                                <!-- Tự tính chiết khấu dựa vào giá bán - giá mới -->
                                <div class="form-group">
                                    <label for="">Chiết khấu: </label>
                                    <input type="number" class="form-control" id="" aria-describedby="<!--  -->"
                                        placeholder="Chiết khấu">
                                    <small id="<!--  -->" class="form-text text-muted"> .</small>
                                </div>
                            </div>
                        </div>
                        <div class="form-add-bottom">
                            <div class="title-name1">Hình ảnh kèm theo</div>
                            <form action="/action_page.php">
                                <input type="file" id="myFile" name="filename">
                                <input type="submit">
                            </form>
                            <!--<div class="title-name1">Hình ảnh đọc thử</div>
                            <form action="/action_page.php">
                                <input type="file" id="myFile" name="filename">
                                <input type="submit">
                            </form>-->
                            <!-- Thao tác -->
                            <div class="flex-control">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Nổi bật
                                    </label>
                                </div>
                                <!-- 
                                     <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Trạng thái
                                    </label>
                                </div>
                                 -->
                                <div class="flex-btn">
                                    <button type="button" class="btn btn-primary">Thêm</button>
                                    <button type="button" class="btn btn-danger">Hủy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End thêm sản phẩm -->
@endsection