@extends('layouts.tatcasach')
@section('breadcrum')
<div class="wrap-content">  
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{route('collections')}}">Sách</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sách tham khảo</li>
        </ol>
    </nav>
</div>
@endsection
@section('main')
<div class="width-collection">
    <div class="title-main">
        SÁCH THAM KHẢO
    </div>
    <div class="grid-product ">
        @foreach ($tks as $all)
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
            <div class="price-product">@convert($all->DonGia - ($all->DonGia * $all->PhanTramGiam))đ</div>
            <div class="price-product"><del>@convert($all->DonGia)đ</del></div>
            @else
            <div class="name-product">{{$all->TenSach}}</div>
            <div class="price-product">@convert($all->DonGia)đ</div>
            @endif

        </a>
        @endforeach
    </div>
</div>
@endsection