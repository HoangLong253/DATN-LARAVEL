@extends('layouts.app')
@section('content')
<!-- Main -->

<!-- bỏ all sản phẩm, bên trái là danh mục sản phẩm, 
                 ở dưới có thể có tìm theo mức giá, dưới nữa có thể 
                 lọc theo nhà xuất bản bla bla, bên phải là sản phẩm -->

<!--Bên trái-->
<nav aria-label="breadcrumb"></nav>
<div class="wrap-content">  
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">Danh mục</li>
        <li class="breadcrumb-item active" aria-current="page">Tất cả các sách</li>
    </ol>
</div>
</nav>
<div class="wrap-main">
    <div class="wrap-content">

        <div class="content-main flex-sp-dm">
            <div class="danhmuc-sp">
                <div class="danhmuc-sp-list">
                    <div class="title-main-sub">
                        DANH MỤC SẢN PHẨM
                    </div>
                    <ul>
                        <li class="danhmuc-sp-list-item">
                            <a href="">Sách Giáo Khoa</a>
                            <ul>
                                <li>
                                    <a href="">Cấp 2</a>
                                    <ul>
                                        <li><a href="">Lớp 6</a></li>
                                        <li><a href="">Lớp 7</a></li>
                                        <li><a href="">Lớp 8</a></li>
                                        <li><a href="">Lớp 9</a></li>
                                    </ul>
                                </li> 
                                <li>
                                    <a href="">Cấp 3</a>
                                    <ul>
                                        <li><a href="">Lớp 10</a></li>
                                        <li><a href="">Lớp 11</a></li>
                                        <li><a href="">Lớp 12</a></li>
                                    </ul>
                                </li> 
                            </ul>
                        </li>

                        <li class="danhmuc-sp-list-item">
                            <a href="">Sách Tham khảo</a>
                        </li> 

                        <li class="danhmuc-sp-list-item">
                            <a href="">Sách Khoa Học Tự Nhiên</a>
                        </li> 
                    </ul>
                </div>   
                
            </div>
            <div class="width-collection">
                <div class="title-main">
                    TẤT CẢ SẢN PHẨM
                </div>
                <div class="grid-product ">
                    @foreach ($all as $all)
                    <a href="{{route('chitietsach', ['ma' => $all->MaSach, 'tensach' => $all->TenSach, 'loai' => $all->MaLoaiSach])}}"
                        class="box-product">
                        @if($all->PhanTramGiam != 0)
                        <div class="product-sale-oustanding ">
                            <span class="sale-lb img_hover">{{$all->PhanTramGiam * 100}}%</span>
                        </div>
                        @endif
                        <div class=" scale-img img_hover img-none-full">
                            <img alt="ảnh lỗi" class="w-100"
                                src="{{ asset('assets/images/sach/' . $all->MaLoaiSach . '/' . $all->HinhAnh)}}"
                                width="200" height="300"></img>
                        </div>
                        <div class="infor-product">

                        </div>
                        @if($all->PhanTramGiam != 0)
                        <div class="name-product">{{$all->TenSach}}</div>
                        <div class="price-product">@convert($all->DonGia - ($all->DonGia * $all->PhanTramGiam),0)đ</div>
                        <div class="price-product"><del>@convert($all->DonGia,0)đ</del></div>
                        @else
                        <div class="name-product">{{$all->TenSach}}</div>
                        <div class="price-product">@convert($all->DonGia,0)đ</div>
                        @endif

                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection