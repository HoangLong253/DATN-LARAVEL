@extends('layouts.app')
@section('content')
    <!--Chi tiết sách-->
    <div class="wrap-content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Trang chủ</a></li>
              <li class="breadcrumb-item"><a href="{{route('GK')}}">Sách giáo khoa</a></li>
              <li class="breadcrumb-item"><a href="#">Lớp 6</a></li>
              <li class="breadcrumb-item active" aria-current="page">Âm nhạc và mĩ thuật lớp 6</li>
            </ol>
        </nav>
    </div>
    <div class="wrap-product-whole">
        <div class="product-images-info">
            <div class="img-product">
                <div class="img-main-product">
                    <img src="{{asset('assets/images/sach/' . $chitietsach[0]->MaLoaiSach . '/' . $chitietsach[0]->HinhAnh )}}"
                        alt="sach-giao-khoa">
                </div>
                <!--đọc thử ở đây-->
                
                <div class="slide-product">
                    <div class="wrap-slide-product">
                        <div class="owl-product owl-carousel owlCarousel">
                            <div class="owl-product-items"><img
                                    src="{{asset('assets/images/sach/' . $chitietsach[0]->MaLoaiSach . '/' . $chitietsach[0]->HinhAnh )}}"
                                    alt=""></div>
                            <div class="owl-product-items"><img
                                    src="{{asset('assets/images/sach/' . $chitietsach[0]->MaLoaiSach . '/' . $chitietsach[0]->HinhAnh )}}"
                                    alt=""></div>
                            <div class="owl-product-items"><img
                                    src="{{asset('assets/images/sach/' . $chitietsach[0]->MaLoaiSach . '/' . $chitietsach[0]->HinhAnh )}}"
                                    alt=""></div>
                            <div class="owl-product-items"><img
                                    src="{{asset('assets/images/sach/' . $chitietsach[0]->MaLoaiSach . '/' . $chitietsach[0]->HinhAnh )}}"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="infor-product">
                <div class="infor-product-left">
                    <div class="title-product">{{$chitietsach[0]->TenSach}}</div>
                    <!--<div class="share-product-icon">
                        
                        <span class="share-icon-items"><a href=""><i
                                    class="fa-brands fa-square-facebook"></i></a></span>
                        <span class="share-icon-items"><a href=""><i
                                    class="fa-brands fa-square-instagram"></i></a></span>
                        <span class="share-icon-items"><a href=""><i
                                    class="fa-brands fa-square-twitter"></i></a></span>
                        <span class="share-icon-items"><a href=""><i
                                    class="fa-brands fa-square-youtube"></i></a></span>
                    </div>-->
                    <div class="infor-product-inter">
                        <div class="infor-product-inter-title">Thông tin chung:</div>
                        <div class="grid-info-product">
                            <div class="name-text1"> Tên tác giả: <span class="name-text-infor">Nhiều tác
                                    giả</span>
                            </div>
                            <div class="name-text1"> Nhà xuất bản: <span class="name-text-infor">{{$chitietsach[0]->TenNXB}}</span>
                            </div>
                            <div class="name-text1"> Năm xuất bản: <span class="name-text-infor">2023</span>
                            </div>
                            <div class="name-text1"> Loại sách: <span class="name-text-infor">{{$tenloai[0]->TenLoaiSach}}</span>
                            </div>
                            <div class="name-text1"> Tình trạng: <span class="name-text-infor">Còn hàng</span>
                            </div>
                            <div class="name-text1"> Kích thước: <span class="name-text-infor">Kích thước</span>
                            </div>
                        </div>
                        <!--<div class="flex-price-product">
                            <span class="price-new">Giá khuyến mãi: <span
                                    class="price-bold"></span></span>
                            <span class="price-old">Giá gốc: <span
                                    class="price-strikethrough"></span></span>
                        </div>-->
                        @if($chitietsach[0]->PhanTramGiam)
                        <div class="flex-price-product">
                            <span class="price-new">Giá khuyến mãi: <span
                                    class="price-bold">@convert($chitietsach[0]->DonGia - ($chitietsach[0]->DonGia * $chitietsach[0]->PhanTramGiam),0)đ</span></span>
                            <!-- Format monney tự cách hoặc chấm + Auto set "Đ" sau giá -->
                            <span class="price-old">Giá gốc: <span
                                    class="price-strikethrough">@convert($chitietsach[0]->DonGia,0)đ</span></span>
                        </div>
                        @else
                        <div class="flex-price-product">
                            <!-- Format monney tự cách hoặc chấm + Auto set "Đ" sau giá -->
                            <span class="price-new">Giá gốc: <span
                                    class="price">@convert($chitietsach[0]->DonGia,0)đ</span></span>
                        </div>
                        @endif
                        <div class="quantity-pick">Số lượng:
                            <span class="buttons_added">
                                <input class="minus is-form" type="button" value="-">
                                <input aria-label="quantity" class="input-qty" max="10" min="1" name=""
                                    type="number" value="1">
                                <input class="plus is-form" type="button" value="+">
                            </span>
                        </div>
                        <div class="flex-btn-product">
                            <div class="add-cart-btn"><button type="button" class="btn btn-danger">Thêm vào giỏ
                                    hàng
                                    <i class="fa-solid fa-bag-shopping"></i></button></div>
                            <button type="button" class="btn btn-primary">Mua ngay <i
                                    class="fa-solid fa-credit-card"></i></button>
                        </div>
                        <div class="policy-go-with">
                            <div class="policy-go-with-title">
                                Chính sách của chúng tôi
                            </div>
                            <div class="policy-gw-items">
                                <i class="fa-solid fa-check"></i> <a class="plc-gw" href="">Bookcare</a> Sách
                                bọc
                                màng có bảo vệ + đóng hộp carton 3 lớp
                            </div>
                            <div class="policy-gw-items">
                                <i class="fa-solid fa-check"></i> Được <a <a class="plc-gw" href="">Kiểm tra
                                    hàng</a> trước khi nhận
                            </div>
                            <div class="policy-gw-items">
                                <i class="fa-solid fa-check"></i> Hoàn tiền <a <a class="plc-gw"
                                    href="">100%</a> nếu sản phẩm lỗi
                            </div>
                            <div class="policy-gw-items">
                                <i class="fa-solid fa-check"></i> Hỗ trợ xuất hóa đơn <a <a class="plc-gw"
                                    href="">VAT </a> theo yêu cầu
                            </div>
                        </div>
                    </div>
                </div>
                <div class="infor-product-right">
                    <div></div>
                </div>
            </div>
        </div>
        <div class="wrap-product-comment-infor">
            <div class="wrap-product-infor">
                <div class="wrap-product-infor_title">Thông tin chi tiết</div>
                <div class="wrap-product-content">
                    {{$chitietsach[0]->MoTa}}
                </div>
            </div>
            <div class="wrap-product-comment">
                <div class="wrap-product-comment_title">Đánh giá sản phẩm</div>
                <div class="whole-stars-product">
                    <div class="rate-stars">
                        <span class="stars-product-text">4.7 Trên 5
                        </span> <span class="stars-product-num">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </span>
                    </div>
                </div>
                <div class="cus-rate-whole">
                    <div class="cus-rate-img">
                        <img src="http://127.0.0.1:8000/assets/images/no-avatar.png"
                            alt="avatar">
                    </div>
                    <div class="cus-rate-info">
                        <div class="cus-rate-name">Nguyễn Nhật Ánh

                        </div>
                        <div class="cus-rate-star   ">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="cus-rate-date   ">
                            Thời gian: 20:30 ngày 11 tháng 09 năm 2023
                        </div>
                        <div class="cus-rate-comment   ">
                            Sản phẩm tuyệt vời
                        </div>
                        <div class="cus-rate-post-img   ">
                            <img src="http://127.0.0.1:8000/assets/images/sach/GK/an-v6.jpg"
                                alt="">
                            <img src="http://127.0.0.1:8000/assets/images/sach/GK/an-v6.jpg"
                                alt="">
                            <img src="http://127.0.0.1:8000/assets/images/sach/GK/an-v6.jpg"
                                alt="">
                        </div>

                    </div>
                </div>

            </div>
            <div class="wrap-product-same">
                <div class="wrap-spnb">
                    <div class="wrap-content">
                        <div class="main-title-text">SẢN PHẨM TƯƠNG TỰ</div>
                        <div class="wrap-slide-spnb">
                            <div class="owl-spnb owl-carousel owlCarousel">
                                @foreach ($sgks as $sgk)
                                <a href="{{route('chitietsach', ['ma' => $sgk->MaSach, 'tensach' => $sgk->TenSach, 'loai' => $sgk->MaLoaiSach])}}" class="box-product">
                                    @if($sgk->PhanTramGiam != 0)
                                    <div class="product-sale-oustanding ">
                                        <span class="sale-lb img_hover">{{ $sgk->PhanTramGiam * 100}}%</span>
                                    </div>
                                    @endif
                                    <div class="scale-img img_hover">
                                        <img alt="ảnh lỗi" src="{{ asset('./assets/images/sach/GK/' . $sgk->HinhAnh)}}"
                                            width="200" height="300"></img>
                                    </div>
                                    <div class="infor-product">
                                        
                                    </div>
                                    @if($sgk->PhanTramGiam != 0) 
                                    <div class="name-product text-split-1">{{$sgk->TenSach}}</div>
                                    <div class="price-product">@convert($sgk->DonGia - ($sgk->DonGia *
                                        $sgk->PhanTramGiam),0)đ</div>
                                    <div class="price-product"><del>@convert($sgk->DonGia,0)đ</del></div>
                                    @else
                                    <div class="name-product text-split-1">{{$sgk->TenSach}}</div>
                                    <div class="price-product">@convert($sgk->DonGia,0)đ</div>
                                    @endif
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-product-same-grid grid-4">
                    

                </div>
            </div>

        </div>
    </div>
@endsection