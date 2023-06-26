@extends('layouts.app')
@section('content')
<!--slide show-->
@include ('index_partials.slideshow') 
<!--partner-->
@include ('index_partials.partner') 
<!-- Sản phẩm nổi bật -->
<div class="wrap-spnb">
    <div class="wrap-content">
        <div class="main-title-text">SẢN PHẨM NỔI BẬT</div>
        <div class="wrap-slide-spnb">
            <div class="owl-spnb owl-carousel owlCarousel">
                @foreach ($noibats as $noibat)
                <a href="#" class="box-product">
                    @if($noibat->PhanTramGiam != 0)
                    <div class="product-sale-oustanding ">
                        <span class="sale-lb img_hover">{{$noibat->PhanTramGiam * 100}}%</span>
                    </div>
                    @endif
                    <div class=" scale-img img_hover">
                        <img alt="ảnh lỗi" src="{{ asset('assets/images/sach/GK/' . $noibat->HinhAnh)}}" width="200"
                            height="300"></img>
                    </div>
                    <div class="infor-product">

                    </div>
                    @if($noibat->PhanTramGiam != 0)
                    <div class="name-product">{{$noibat->TenSach}}</div>
                    <div class="price-product">@convert($noibat->DonGia - ($noibat->DonGia *
                        $noibat->PhanTramGiam),0)đ</div>
                    <div class="price-product"><del>@convert($noibat->DonGia,0)đ</del></div>
                    @else
                    <div class="name-product">{{$noibat->TenSach}}</div>
                    <div class="price-product">@convert($noibat->DonGia,0)đ</div>
                    @endif

                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!--Sach giao khoa-->
<div class="wrap-spnb">
    <div class="wrap-content">
        <div class="main-title-text">SÁCH GIÁO KHOA</div>
        <div class="wrap-slide-spnb">
            <div class="owl-spnb owl-carousel owlCarousel">
                @foreach ($sgks as $sgks)
                <a href="#" class="box-product">
                    @if($sgks->PhanTramGiam != 0)
                    <div class="product-sale-oustanding ">
                        <span class="sale-lb img_hover">{{$sgks->PhanTramGiam * 100}}%</span>
                    </div>
                    @endif
                    <div class=" scale-img img_hover">
                        <img alt="ảnh lỗi" src="{{ asset('./assets/images/sach/GK/' . $sgks->HinhAnh)}}" width="200"
                            height="300"></img>
                    </div>
                    <div class="infor-product">

                    </div>
                    @if($sgks->PhanTramGiam != 0)
                    <div class="name-product">{{$sgks->TenSach}}</div>
                    <div class="price-product">@convert($sgks->DonGia - ($sgks->DonGia *
                        $sgks->PhanTramGiam),0)đ</div>
                    <div class="price-product"><del>@convert($sgks->DonGia,0)đ</del></div>
                    @else
                    <div class="name-product">{{$sgks->TenSach}}</div>
                    <div class="price-product">@convert($sgks->DonGia,0)đ</div>
                    @endif

                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!--Sach tham khao-->
<div class="wrap-spnb">
    <div class="wrap-content">
        <div class="main-title-text">SÁCH THAM KHẢO</div>
        <div class="wrap-slide-spnb">
            <div class="owl-spnb owl-carousel owlCarousel">
                @foreach ($thamkhaos as $thamkhao)
                <a href="#" class="box-product">
                    @if($thamkhao->PhanTramGiam != 0)
                    <div class="product-sale-oustanding ">
                        <span class="sale-lb img_hover">{{$thamkhao->PhanTramGiam * 100}}%</span>
                    </div>
                    @endif
                    <div class=" scale-img img_hover">
                        <img alt="ảnh lỗi"
                            src="{{ asset('./assets/images/sach/' . $thamkhao->MaLoaiSach . '/' . $thamkhao->HinhAnh)}}"
                            width="200" height="300"></img>
                    </div>
                    <div class="infor-product">

                    </div>
                    @if($thamkhao->PhanTramGiam != 0)
                    <div class="name-product">{{$thamkhao->TenSach}}</div>
                    <div class="price-product">@convert($thamkhao->DonGia - ($noibat->DonGia *
                        $thamkhao->PhanTramGiam),0)đ</div>
                    <div class="price-product"><del>@convert($thamkhao->DonGia,0)đ</del></div>
                    @else
                    <div class="name-product">{{$thamkhao->TenSach}}</div>
                    <div class="price-product">@convert($thamkhao->DonGia,0)đ</div>
                    @endif

                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@include ('index_partials.js')   
@endsection