@extends('layouts.tatcasach')
@section('breadcrum')
<div class="wrap-content">  
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a></li>
          <li class="breadcrumb-item"><a href="{{route('collections')}}">Sản phẩm</a></li>
          <li class="breadcrumb-item active" aria-current="page">Sách giáo khoa</li>
        </ol>
    </nav>
</div>
@endsection
@section('main')
<div class="width-collection">
    <div class="title-main">
        SÁCH GIÁO KHOA
    </div>
    @if($gks == null)
    <div>Không có dữ liệu</div>
    @else
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
                <div class="name-product">{{$all->TenSach}}</div>
                <div class="price-product">@convert($all->DonGiaSach - ($all->DonGiaSach * $all->PhanTramGiam))đ</div> 
                <div class="price-product"><del>@convert($all->DonGiaSach)đ</del></div> 
            @else
                <div class="name-product">{{$all->TenSach}}</div>
                <div class="price-product">@convert($all->DonGiaSach)đ</div>
            @endif
            
        </a>
        @endforeach
    </div>
    @endif
</div>
@endsection