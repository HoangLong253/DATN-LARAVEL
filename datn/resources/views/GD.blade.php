@extends('layouts.tatcasach')
@section('breadcrum')
<div class="wrap-content">  
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a></li>
          <li class="breadcrumb-item"><a href="{{route('collections')}}">Sản phẩm</a></li>
          <li class="breadcrumb-item active" aria-current="page">Nhà xuất bản</li>
          <li class="breadcrumb-item active" aria-current="page">Giáo dục</li> 
        </ol>
    </nav>
</div>
@endsection
@section('main')
<div class="width-collection">
    <div class="title-main">
        GIÁO DỤC
    </div>
    <div class="grid-product ">
        @foreach ($gks as $all)
        <a href="{{route('chitietsach', ['ma' => $all->MaSach, 'tensach' => $all->TenSach, 'loai' => $all->MaLoaiSach])}}" class="box-product">
            @if($all->PhanTramGiam != 0)
                <div class="product-sale-oustanding ">
                    <span class="sale-lb img_hover">{{$all->PhanTramGiam * 100}}%</span>
                </div>
            @endif
            <div class=" scale-img img_hover">
                <img alt="ảnh lỗi" src="{{ asset('./assets/images/sach/' . $all->MaLoaiSach . '/' . $all->HinhAnh)}}"
                width="200" height="300"></img>
            </div>
            <div class="infor-product">
                
            </div>
            @if($all->PhanTramGiam != 0)
                <div class="name-product chuhoa">{{$all->TenSach}}</div>
                <div class="price-product">@convert($all->DonGia - ($all->DonGia * $all->PhanTramGiam))đ</div> 
                <div class="price-product"><del>@convert($all->DonGia)đ</del></div> 
            @else
                <div class="name-product chuhoa">{{$all->TenSach}}</div>
                <div class="price-product">@convert($all->DonGia)đ</div>
            @endif
            
        </a>
        @endforeach
    </div>
</div>
@endsection