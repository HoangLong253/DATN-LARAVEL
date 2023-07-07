<!-- Sản phẩm nổi bật -->
<div class="wrap-spnb">
    <div class="wrap-content">
        <div class="main-title-text">SẢN PHẨM NỔI BẬT</div>
        <div class="wrap-slide-spnb">
            <div class="owl-spnb owl-carousel owlCarousel">
                @foreach ($noibats as $noibat)
                <a href="{{route('chitietsach', ['ma' => $noibat->MaSach, 'tensach' => $noibat->TenSach, 'loai' => $noibat->MaLoaiSach])}}"
                    class="box-product" ">
                    @if($noibat->PhanTramGiam != 0)
                    <div class=" product-sale-oustanding ">
                        <span class=" sale-lb img_hover">{{ $noibat->PhanTramGiam * 100}}%</span>
            </div>
            @endif
            <div class=" scale-img img_hover">
                <img alt="ảnh lỗi"
                    src="{{ asset('assets/images/sach/' . $noibat->MaLoaiSach . '/' . $noibat->HinhAnh)}}" width="200"
                    height="300"></img>
            </div>
            <div class="infor-product">

            </div>
            @if($noibat->PhanTramGiam != 0)
            <div class="name-product text-split-1">{{$noibat->TenSach}}</div>
            <div class="price-product">@convert($noibat->DonGia - ($noibat->DonGia *
                $noibat->PhanTramGiam),0)đ</div>
            <div class="price-product"><del>@convert($noibat->DonGia,0)đ</del></div>
            @else
            <div class="name-product text-split-1">{{$noibat->TenSach}}</div>
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
    <div class="wrap-content wow animate__fadeInLeft" data-wow-duration="2s""">
        <div class="main-title-text">SÁCH GIÁO KHOA</div>
        <div class="wrap-slide-spnb">
            <div class="owl-spnb owl-carousel owlCarousel">
                @foreach ($sgks as $sgks)
                <a href="{{route('chitietsach', ['ma' => $sgks->MaSach, 'tensach' => $sgks->TenSach, 'loai' => $sgks->MaLoaiSach])}}"
                    class="box-product">
                    @if($sgks->PhanTramGiam != 0)
                    <div class="product-sale-oustanding ">
                        <span class="sale-lb img_hover">{{$sgks->PhanTramGiam * 100}}%</span>
                    </div>
                    @endif
                    <div class=" scale-img img_hover">
                        <img alt="ảnh lỗi" src="{{ asset('assets/images/sach/GK/' . $sgks->HinhAnh)}}" width="200"
                            height="300"></img>
                    </div>
                    <div class="infor-product">

                    </div>
                    @if($sgks->PhanTramGiam != 0)
                    <div class="name-product text-split-1 chuhoa">{{$sgks->TenSach}}</div>
                    <div class="price-product">@convert($sgks->DonGia - ($sgks->DonGia *
                        $sgks->PhanTramGiam),0)đ</div>
                    <div class="price-product"><del>@convert($sgks->DonGia,0)đ</del></div>
                    @else
                    <div class="name-product text-split-1 chuhoa">{{$sgks->TenSach}}</div>
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
                <a href="{{route('chitietsach', ['ma' => $thamkhao->MaSach, 'tensach' => $thamkhao->TenSach, 'loai' => $thamkhao->MaLoaiSach])}}"
                    class="box-product">
                    @if($thamkhao->PhanTramGiam != 0)
                    <div class="product-sale-oustanding ">
                        <span class="sale-lb img_hover">{{$thamkhao->PhanTramGiam * 100}}%</span>
                    </div>
                    @endif
                    <div class=" scale-img img_hover">
                        <img alt="ảnh lỗi"
                            src="{{ asset('assets/images/sach/' . $thamkhao->MaLoaiSach . '/' . $thamkhao->HinhAnh)}}"
                            width="200" height="300"></img>
                    </div>
                    <div class="infor-product">

                    </div>
                    @if($thamkhao->PhanTramGiam != 0)
                    <div class="name-product text-split-1 chuhoa">{{$thamkhao->TenSach}}</div>
                    <div class="price-product">@convert($thamkhao->DonGia - ($noibat->DonGia *
                        $thamkhao->PhanTramGiam),0)đ</div>
                    <div class="price-product"><del>@convert($thamkhao->DonGia,0)đ</del></div>
                    @else
                    <div class="name-product text-split-1 chuhoa">{{$thamkhao->TenSach}}</div>
                    <div class="price-product">@convert($thamkhao->DonGia,0)đ</div>
                    @endif

                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!--Xem thêm-->
<div class="xemthem-btn">
    <a href="{{route('collections')}}" class="btn btn-success"> Xem thêm</a>
</div>
<!--<button type="button" href="http://127.0.0.1:8000/collections" class="btn btn-success" >Xem thêm</button>-->

<!-- Video News -->
<div class="wrap-video-news">
    <div class="wrap-content">
        <div class="main-title-text">TIN TỨC & VIDEO</div>
        <div class="wrap-vidnews-items">
            <div class="wrap-video">
                <div class="fotorama" data-nav="thumbs" data-autoplay="true" data-width="100%" data-height="380"
                    data-thumbwidth="115" data-thumbheight="90">
                    <a href="https://youtu.be/Q2T2JuQgob4"></a>
                    <a href="https://youtu.be/WdCMqN2ukaA"></a>
                    <a href="https://youtu.be/kWCEaNgTCdY"></a>
                    <a href="https://youtu.be/CyKmrNhXM3o"></a>
                </div>
            </div>
            <div class="wrap-news">
                <div class="news-slick">
                    <div class="news">
                        <a href="">
                            <div class="news-box">
                                <div class="news-img-in">
                                    <img src="assets/images/ho-tro/news1.jpg" alt="">
                                </div>
                                <div class="news-text-in">
                                    <div class="news-name-in "> HƯỞNG ỨNG NGÀY MÔI TRƯỜNG THẾ GIỚI (05/6) VÀ
                                        NGÀY ĐẠI DƯƠNG THẾ GIỚI (08/6) </div>
                                    <div class="news-desc-in text-split-3">Năm 2023, Bộ Tài nguyên và Môi trường phát động
                                        Tuần
                                        lễ Biển và Hải đảo Việt Nam (từ ngày 01- 08/6/2023) với chủ đề “Khai thác, sử dụng
                                        bền
                                        vững tài nguyên, bảo vệ môi trường biển và hải đảo”.</div>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="news">
                        <a href="">
                            <div class="news-box">
                                <div class="news-img-in">
                                    <img src="assets/images/ho-tro/news2.jpg" alt="">
                                </div>
                                <div class="news-text-in">
                                    <div class="news-name-in "> Hợp tác chặt chẽ trong công tác phòng, chống in lậu
                                        sách</div>
                                    <div class="news-desc-in text-split-3">Vừa qua, Nhà sách TL Bookstore đã có văn bản gửi Tổng cục
                                        Quản lý thị trường - Bộ Công thương về việc phối hợp trong công tác phòng chống in lậu sách
                                        giáo dục</div>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="news">
                        <a href="">
                            <div class="news-box">
                                <div class="news-img-in">
                                    <img src="assets/images/ho-tro/news3.jpg" alt="">
                                </div>
                                <div class="news-text-in">
                                    <div class="news-name-in "> SÁCH GIÁO KHOA TÁI BẢN ĐÃ SẴN SÀNG TẠI CÁC CỬA
                                        HÀNG </div>
                                    <div class="news-desc-in text-split-3">Nhà sách TL Bookstore đã nỗ lực triển khai in gấp, nhập
                                        nhanh để có sách giáo khoa tái bản của các lớp 1,2,3,6,7,10 theo chương trình GDPT 2018 và
                                        các lớp 5,9,12 theo chương trình...</div>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="news">
                        <a href="">
                            <div class="news-box">
                                <div class="news-img-in">
                                    <img src="assets/images/ho-tro/news4.jpg" alt="">
                                </div>
                                <div class="news-text-in">
                                    <div class="news-name-in "> Sự kiện “Tuần lễ nhận diện sách giáo dục và đồ
                                        chơi an toàn cho trẻ em” </div>
                                    <div class="news-desc-in text-split-3">Ngày 30/5/2023 đã diễn ra “Tuần lễ nhận diện sách
                                        giáo dục và đồ chơi an toàn cho trẻ em” tại Thành Phố Hồ Chí Minh </div>
                                </div>
                            </div>
                        </a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>