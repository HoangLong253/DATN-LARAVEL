@extends('layouts.tatcasach')
@section('breadcrum')
<div class="wrap-content">  
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{route('collections')}}">Sách</a></li>
            <li class="breadcrumb-item"><a href="{{route('c3')}}">Cấp 3</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lớp 12</li>
        </ol>
    </nav>
</div>
@endsection
@section('main')
<div class="width-collection">
    <div class="title-main">
        LỚP 12
    </div>
    @if($l12s == null)
    <div>Không có dữ liệu</div>
    @else
    <div class="grid-product ">
        @foreach ($l12s as $all)
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
            <div class="flex-price">
            <div class="price-product core-price">@convert($all->DonGiaSach - ($all->DonGiaSach * $all->PhanTramGiam))đ</div>
            <div class="price-product line-price"><del>@convert($all->DonGiaSach)đ</del></div>
            </div>
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