<!DOCTYPE html>
<html lang="vn">
<!-- Head -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1366">
    <title>BookStore</title>
    <!-- <link rel="stylesheet" href="../assets/font/.."> -->
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/..">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/preview.css">
    <link rel="stylesheet" href="../assets/css/style_book.css">
    <link rel="stylesheet" href="../assets/css/wow_book.css">
    <link rel="stylesheet" href="../assets/fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <script src="../assets/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="../assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="../assets/js/wow_book.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>
<!-- Body -->

<body>
    <div class="containerr">
        <div class="main">

            <!-- Header -->
            <div class="header">
                <div class="header-top">
                    <div class="wrap-content">
                        <div class="header__navbar">
                            <ul class="header__navbar-list">
                                <a href="https://bom.so/pPF8sq"
                                    class="header__navbar-item header__navbar-item--separate " target="new">
                                    <i class="header__navbar-icon fa-solid fa-location-dot"></i>
                                    65 Huỳnh Thúc Kháng, P Bến Nghé, Q 1, TP HCM
                                </a>

                                <li class="header__navbar-item">
                                    <span class="header__navbar-title--no-pointer">Kết nối</span>
                                    <a href="https://bom.so/tyvGGr" class="header__navbar-icon-link">
                                        <i class="header__navbar-icon fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="" class="header__navbar-icon-link">
                                        <i class="header__navbar-icon fa-brands fa-square-instagram"></i>
                                    </a>
                                </li>
                            </ul>

                            <ul class="header__navbar-list">
                                <li class="header__navbar-item">
                                    <a href="" class="header__navbar-item-link">
                                        <i class="header__navbar-icon fa-solid fa-bell"></i>
                                        Thông Báo
                                    </a>
                                    <!-- Click vào chuông hiện thông báo -->
                                    <div class="header__notify">
                                        <header class="header__notify-header">
                                            <h3>Thông báo mới nhận</h3>
                                        </header>
                                        <ul class="header__notify-list">
                                            <li class="header__notify-item header__notify-item--viewed">
                                                <a class="header__notify-link" href="">
                                                    <span> <img class="header__notify-img"
                                                            src="./assets/images/logo/logo.png" alt=""
                                                            class="header__notify-img">
                                                    </span>
                                                    <div class="header__notify-infor">
                                                        <span class="header__notify-name">Mắt Biếc Xuất Bản 2019</span>
                                                        <span class="header__notify-desc">Tác giả Nguyễn Nhật
                                                            Ánh...</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="header__notify-item header__notify-item--viewed">
                                                <a class="header__notify-link" href="">
                                                    <span> <img class="header__notify-img"
                                                            src="./assets/images/logo/logo.png" alt=""
                                                            class="header__notify-img">
                                                    </span>
                                                    <div class="header__notify-infor">
                                                        <span class="header__notify-name">Mắt Biếc Xuất Bản 2019</span>
                                                        <span class="header__notify-desc">Tác giả Nguyễn Nhật
                                                            Ánh...</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="header__notify-item header__notify-item--viewed">
                                                <a class="header__notify-link" href="">
                                                    <span> <img class="header__notify-img"
                                                            src="./assets/images/logo/logo.png" alt=""
                                                            class="header__notify-img">
                                                    </span>
                                                    <div class="header__notify-infor">
                                                        <span class="header__notify-name">Mắt Biếc Xuất Bản 2019</span>
                                                        <span class="header__notify-desc">Tác giả Nguyễn Nhật
                                                            Ánh...</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="header__notify-footer">
                                            <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                        </div>
                                    </div>

                                </li>
                                <li class="header__navbar-item">
                                    <a href="" class="header__navbar-item-link">
                                        <i class="header__navbar-icon fa-solid fa-circle-question"></i>
                                        Trợ Giúp
                                    </a>
                                </li>
                                <!-- đăng kí đăng nhập Tú làm sao hover vô nó đậm lên nhá, 
                        với lại làm cái separate đừng trùng với tên nút đăng nhập luôn-->
                                <a href="{{ route('dangki') }}">
                                    <li class="header__navbar-item header__navbar-item--separate">
                                        Đăng Ký
                                    </li>
                                </a>
                                <a href="{{ route('dangnhap') }}">
                                    <li class="header__navbar-item">
                                        Đăng Nhập
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Header with search -->
                <div class="header-bottom">
                    <div class="wrap-content">
                        <div class="header-with-search ">
                            <a href="http://localhost/DATN/web/DATN-MAIN">
                                <div class="header__logo d-flex ">
                                    <img class="header__logo-img " src="./assets/images/logo/logo.png" alt="">
                                    <div class="header__cpnname">Delicate Dragon BookStore </div>
                                </div>
                            </a>
                            <div class="header__search">
                                <div class="header__search-input-wrap">
                                    <input type="text" class="header__search-input"
                                        placeholder="Nhập từ khóa để tìm kiếm">
                                    <!-- Search history -->
                                    <div class="header__search-history">
                                        <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                                        <ul class="header__search-history-list">
                                            <li class="header__search-history-items">
                                                <a href="">Thương nhớ Trà Long</a>
                                            </li>
                                            <li class="header__search-history-items">
                                                <a href="">Cô gái đến từ hôm qua</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button class="header__search-btn">
                                    <i class="header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                            <!-- Cart -->
                            <!-- FadeIn chưa chuẩn -->
                            <div class="header__cart">
                                <div class="header__cart-wrap"><i
                                        class="header__cart-icon fa-solid fa-cart-shopping"></i>
                                    <span class="header__cart-notice">
                                        3
                                    </span>
                                    <!-- No cart: header__cart-list-no-cart-->
                                    <div class="header__cart-list ">
                                        <img src="./assets/images/chi-tiet/no-cart.png" alt=""
                                            class="header__cart-no-cart-img">
                                        <span class="header__cart-list-no-cart-msg">Chưa có sản phẩm</span>

                                        <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                                        <ul class="header__cart-list-item">
                                            <!-- Cart item -->
                                            <li class="header__cart-item">
                                                <img src="https://salt.tikicdn.com/cache/100x100/ts/review/9e/80/22/ff1656d3fbc597360c5cce278d4b838c.jpg.webp"
                                                    alt="" class="header__cart-img">
                                                <div class="header__cart-item-info -wrap">
                                                    <div class="header__cart-item-head">
                                                        <div class="header__cart-item-name">Thương nhớ Trà Long</div>
                                                        <div class="header__cart-item-price-wrap">
                                                            <span class="header__cart-item-price">100.000vnd</span>
                                                            <span class="header__cart-item-x">x</span>
                                                            <span class="header__cart-item-qnt">2</span>
                                                        </div>
                                                    </div>
                                                    <div class="header__cart-item-body">
                                                        <span class="header__cart-item-desc">Loại sản phẩm: Tiểu
                                                            thuyết</span>
                                                        <span class="header__cart-item-remove">Xóa</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="header__cart-item">
                                                <img src="https://salt.tikicdn.com/cache/100x100/ts/review/9e/80/22/ff1656d3fbc597360c5cce278d4b838c.jpg.webp"
                                                    alt="" class="header__cart-img ">
                                                <div class="header__cart-item-info -wrap">
                                                    <div class="header__cart-item-head">
                                                        <div class="header__cart-item-name">Thương nhớ Trà Long</div>
                                                        <div class="header__cart-item-price-wrap">
                                                            <span class="header__cart-item-price">100.000vnd</span>
                                                            <span class="header__cart-item-x">x</span>
                                                            <span class="header__cart-item-qnt">2</span>
                                                        </div>
                                                    </div>
                                                    <div class="header__cart-item-body">
                                                        <span class="header__cart-item-desc">Loại sản phẩm: Tiểu
                                                            thuyết</span>
                                                        <span class="header__cart-item-remove">Xóa</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="header__cart-item">
                                                <img src="https://salt.tikicdn.com/cache/100x100/ts/review/9e/80/22/ff1656d3fbc597360c5cce278d4b838c.jpg.webp"
                                                    alt="" class="header__cart-img">
                                                <div class="header__cart-item-info -wrap">
                                                    <div class="header__cart-item-head">
                                                        <div class="header__cart-item-name">Thương nhớ Trà Long</div>
                                                        <div class="header__cart-item-price-wrap">
                                                            <span class="header__cart-item-price">100.000vnd</span>
                                                            <span class="header__cart-item-x">x</span>
                                                            <span class="header__cart-item-qnt">2</span>
                                                        </div>
                                                    </div>
                                                    <div class="header__cart-item-body">
                                                        <span class="header__cart-item-desc">Loại sản phẩm: Tiểu
                                                            thuyết</span>
                                                        <span class="header__cart-item-remove">Xóa</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <a href="#" class="header__cart-view-cart btn btn-primary">Xem Giỏ Hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu  -->
            <div class="wrap-menu">
                <div class="wrap-content">
                    <ul class="d-flex justify-content-between align-items-center">
                        <li><a href="" class="active">Trang chủ</a></li>
                        <li class="line"></li>
                        <li><a href="">Giới Thiệu</a></li>
                        <li class="line"></li>
                        <li><a href="">Danh Mục</a></li>
                        <li class="line"></li>
                        <li><a href="">Tin Tức</a></li>
                        <li class="line"></li>
                        <li><a href="">Dịch Vụ</a></li>
                        <li class="line"></li>
                        <li><a href="">Tiêu Chí</a></li>
                        <li class="line"></li>
                        <li><a href="">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
            <!-- slide -->
            <div class="wrap-slideshow">
                <div class="owl-slideshow owl-carousel owlCarousel">
                    <div><img src="./assets/images/slideshow/slide.png" alt=""></div>
                    <div><img src="./assets/images/slideshow/banner_02.png" alt=""></div>
                    <div><img src="./assets/images/slideshow/slide1.png" alt=""></div>
                    <div><img src="./assets/images/slideshow/slideshow_02.png" alt=""></div>
                </div>
            </div>
            <!-- Đối tác -->
            <div class="wrap-partner">
                <div class="wrap-content">
                    <div class="main-title-text">ĐỐI TÁC CỦA CHÚNG TÔI <img class="offcial-img"
                            src="./assets/images/ho-tro/offical.png" alt=""></div>
                    <div class="wrap-slide-partner ">
                        <div class="owl-partner owl-carousel owlCarousel ">
                            <div><img class="scale-img img_hover" src="./assets/images/doi-tac/DHQGHN.jpg" alt=""></div>
                            <div><img class="scale-img img_hover" src="./assets/images/doi-tac/DN.jpg" alt=""></div>
                            <div><img class="scale-img img_hover" src="./assets/images/doi-tac/KD.jpg" alt=""></div>
                            <div><img class="scale-img img_hover" src="./assets/images/doi-tac/THTPHCM.jpg" alt="">
                            </div>
                            <div><img class="scale-img img_hover" src="./assets/images/doi-tac/TN.jpg" alt=""></div>
                            <div><img class="scale-img img_hover" src="./assets/images/doi-tac/Tre.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main -->
            <!-- Sản phẩm nổi bật -->
            <div class="wrap-spnb">
                <div class="wrap-content">
                    <div class="main-title-text">SẢN PHẨM NỔI BẬT</div>
                    <div class="wrap-slide-spnb">
                        <div class="owl-spnb owl-carousel owlCarousel">
                            @foreach ($noibats as $noibat)
                            <a href="#" class="box-product">
                                <div class="scale-img img_hover">
                                    <img alt="ảnh lỗi" src="{{ asset('./assets/images/sach/GK/' . $noibat->HinhAnh)}}"
                                        width="200" height="300"></img>
                                </div>
                                <div class="infor-product">
                                    <div class="name-product">{{$noibat->TenSach}}</div>
                                    <div class="price-product">{{$noibat->DonGia}}đ</div>
                                </div>
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
                            @foreach ($sgks as $sgk)
                            <a href="#" class="box-product">
                                <div class="scale-img img_hover">
                                    <img alt="ảnh lỗi" src="{{ asset('./assets/images/sach/GK/' . $sgk->HinhAnh)}}"
                                        width="200" height="300"></img>
                                </div>
                                <div class="infor-product">
                                    <div class="name-product">{{$sgk->TenSach}}</div>
                                    <div class="price-product">{{$sgk->DonGia}}đ</div>
                                </div>
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
                            @foreach ($thamkhaos as $noibat)
                            <a href="#" class="box-product">
                                <div class="scale-img img_hover">
                                    <img alt="ảnh lỗi" src="{{ asset('./assets/images/sach/TK/' . $noibat->HinhAnh)}}"
                                        width="200" height="300"></img>
                                </div>
                                <div class="infor-product">
                                    <div class="name-product">{{$noibat->TenSach}}</div>
                                    <div class="price-product">{{$noibat->DonGia}}đ</div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- IDEAD1 -->
            <div class="wrap-idea">
                <div class="wrap-content">

                    <!-- Để 3D BOX ở đây có thể dùng thay đổi cho slick tin tức -->
                    <div class="wrap-news-test">

                        <figure>
                            <img src="https://thumbs.dreamstime.com/b/beautiful-sunset-over-water-tree-silhouette-nature-landscape-amazing-orange-yellow-sky-night-scene-wallpaper-birds-flying-154424473.jpg"
                                alt="">
                            <figcaption>
                                <div class="news-name">Lorem ipsum dolor sit amet.</div>
                                <div class="news-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius
                                    repellat aliquam quidem, voluptatem sed nostrum recusandae.</div>
                            </figcaption>
                        </figure>

                        <figure>
                            <img src="https://thumbs.dreamstime.com/b/beautiful-sunset-over-water-tree-silhouette-nature-landscape-amazing-orange-yellow-sky-night-scene-wallpaper-birds-flying-154424473.jpg"
                                alt="">
                            <figcaption>
                                <div class="news-name">Lorem ipsum dolor sit amet.</div>
                                <div class="news-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius
                                    repellat aliquam quidem, voluptatem sed nostrum recusandae.</div>
                            </figcaption>
                        </figure>

                        <figure>
                            <img src="https://thumbs.dreamstime.com/b/beautiful-sunset-over-water-tree-silhouette-nature-landscape-amazing-orange-yellow-sky-night-scene-wallpaper-birds-flying-154424473.jpg"
                                alt="">
                            <figcaption>
                                <div class="news-name">Lorem ipsum dolor sit amet.</div>
                                <div class="news-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius
                                    repellat aliquam quidem, voluptatem sed nostrum recusandae.</div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <!-- IDEA2 -->
            <div class="wrap-thuc-don padding50">
                <div class="wrap-content">
                    <div class="wrap_title">
                        <div class="title-main-thuc-don"><span>BOOK</span></div>
                    </div>
                    <div class="book-menu position-relative padding30">
                        <div id="container">
                            <div id="main">
                                <div id="features">
                                    <div><img src="./assets/images/slideshow/slide.png" alt=""></div>
                                    <div><img src="./assets/images/slideshow/banner_02.png" alt=""></div>
                                    <div><img src="./assets/images/slideshow/slide1.png" alt=""></div>
                                    <div><img src="./assets/images/slideshow/slideshow_02.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <nav class="book-nav">
                            <ul>
                                <li><a id='first' href="#" title='goto first page'>First page</a></li>
                                <li><a id='back' href="#" title='go back one page'>Back</a></li>
                                <li><a id='next' href="#" title='go foward one page'>Next</a></li>
                                <li><a id='last' href="#" title='goto last page'>last page</a></li>
                                <li><a id='zoomin' href="#" title='zoom in'>Zoom In</a></li>
                                <li><a id='zoomout' href="#" title='zoom out'>Zoom Out</a></li>
                                <li><a id='slideshow' href="#" title='start slideshow'>Slide Show</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- <div class="book-menu-mobile padding30">
                        <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:0" data-sm-items="1:0"
                            data-md-items="1:0" data-lg-items="1:0" data-xlg-items="1:0" data-rewind="1"
                            data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                            data-smartspeed="800" data-autoplayspeed="800" data-autoplaytimeout="5000" data-dots="0"
                            data-animations="animate__fadeInDown, animate__backInUp, animate__backInRight, animate__zoomInUp, animate__backInLeft, animate__backInDown, animate__zoomInDown, animate__fadeInUp, animate__zoomIn"
                            data-nav="1"
                            data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                            data-navcontainer=".control-video">
                            <div><img src="./assets/images/slideshow/slide.png" alt=""></div>
                            <div><img src="./assets/images/slideshow/banner_02.png" alt=""></div>
                            <div><img src="./assets/images/slideshow/slide1.png" alt=""></div>
                            <div><img src="./assets/images/slideshow/slideshow_02.png" alt=""></div>
                        </div>
                    </div> -->
                </div>

            </div>
            <!-- Video News -->
            <div class="wrap-video-news">
                <div class="wrap-content">
                    <div class="main-title-text">TIN TỨC & VIDEO</div>
                    <div class="wrap-vidnews-items">
                        <div class="wrap-video">
                            <div class="fotorama" data-nav="thumbs" data-autoplay="true" data-width="100%"
                                data-height="100%" data-thumbwidth="145" data-thumbheight="90">
                                <a href="https://youtu.be/Q2T2JuQgob4"></a>
                                <a href="https://youtu.be/WdCMqN2ukaA"></a>
                                <a href="https://youtu.be/kWCEaNgTCdY"></a>
                                <a href="https://youtu.be/CyKmrNhXM3o"></a>
                            </div>
                        </div>
                        <div class="wrap-news">
                            <div class="news-slick">
                                <div class="news-box">
                                    <div class="news-img"><img
                                            src="https://thumbs.dreamstime.com/b/beautiful-sunset-over-water-tree-silhouette-nature-landscape-amazing-orange-yellow-sky-night-scene-wallpaper-birds-flying-154424473.jpg"
                                            alt=""></div>
                                    <div class="news-text">
                                        <div class="news-name">Lorem ipsum dolor sit amet.</div>
                                        <div class="news-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Eius repellat aliquam quidem, voluptatem sed nostrum recusandae.</div>
                                        <!-- <div class="news-content"></div> -->
                                    </div>
                                </div>
                                <div class="news-box">
                                    <div class="news-img"><img
                                            src="https://thumbs.dreamstime.com/b/beautiful-sunset-over-water-tree-silhouette-nature-landscape-amazing-orange-yellow-sky-night-scene-wallpaper-birds-flying-154424473.jpg"
                                            alt=""></div>
                                    <div class="news-text">
                                        <div class="news-name">Lorem ipsum dolor sit amet.</div>
                                        <div class="news-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Eius repellat aliquam quidem, voluptatem sed nostrum recusandae.</div>
                                        <!-- <div class="news-content"></div> -->
                                    </div>
                                </div>
                                <div class="news-box">
                                    <div class="news-img"><img
                                            src="https://thumbs.dreamstime.com/b/beautiful-sunset-over-water-tree-silhouette-nature-landscape-amazing-orange-yellow-sky-night-scene-wallpaper-birds-flying-154424473.jpg"
                                            alt=""></div>
                                    <div class="news-text">
                                        <div class="news-name">Lorem ipsum dolor sit amet.</div>
                                        <div class="news-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Eius repellat aliquam quidem, voluptatem sed nostrum recusandae.</div>
                                        <!-- <div class="news-content"></div> -->
                                    </div>
                                </div>
                                <div class="news-box">
                                    <div class="news-img"><img
                                            src="https://thumbs.dreamstime.com/b/beautiful-sunset-over-water-tree-silhouette-nature-landscape-amazing-orange-yellow-sky-night-scene-wallpaper-birds-flying-154424473.jpg"
                                            alt=""></div>
                                    <div class="news-text">
                                        <div class="news-name">Lorem ipsum dolor sit amet.</div>
                                        <div class="news-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Eius repellat aliquam quidem, voluptatem sed nostrum recusandae.</div>
                                        <!-- <div class="news-content"></div> -->
                                    </div>
                                </div>
                                <div class="news-box">
                                    <div class="news-img"><img
                                            src="https://thumbs.dreamstime.com/b/beautiful-sunset-over-water-tree-silhouette-nature-landscape-amazing-orange-yellow-sky-night-scene-wallpaper-birds-flying-154424473.jpg"
                                            alt=""></div>
                                    <div class="news-text">
                                        <div class="news-name">Lorem ipsum dolor sit amet.</div>
                                        <div class="news-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Eius repellat aliquam quidem, voluptatem sed nostrum recusandae.</div>
                                        <!-- <div class="news-content"></div> -->
                                    </div>
                                </div>
                                <div class="news-box">
                                    <div class="news-img"><img
                                            src="https://thumbs.dreamstime.com/b/beautiful-sunset-over-water-tree-silhouette-nature-landscape-amazing-orange-yellow-sky-night-scene-wallpaper-birds-flying-154424473.jpg"
                                            alt=""></div>
                                    <div class="news-text">
                                        <div class="news-name">Lorem ipsum dolor sit amet.</div>
                                        <div class="news-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Eius repellat aliquam quidem, voluptatem sed nostrum recusandae.</div>
                                        <!-- <div class="news-content"></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>







            <!-- Footer -->

            <div class="footer">
                <div class="footer-article ">
                    <div class="wrap-content">
                        <div class="footer-row d-flex justify-content-between align-items-center">
                            <div class="footer-news">
                                <div class="footer-title-text">DELICATE DRAGON BOOKSTORE</div>
                                <div class="footer-text">Mã số doanh nghiệp: 315498634</div>
                                <div class="footer-text">Địa chỉ: 65 Huỳnh Thúc Kháng, P Bến Nghé, Q 1, TP HCM</div>
                                <div class="footer-text">Điện thoại: 0768848015 - 0768848014</div>
                                <div class="footer-text">Fax: 024.38294781</div>
                                <div class="footer-text">Email: ddbookstore@gmail.com</div>
                            </div>
                            <!-- Số dòng của các footer-... nên bằng nhau vì khi ko bằng sẽ lệch / Not done yet! -->
                            <div class="footer-policy">
                                <div class="footer-title-text">CHÍNH SÁCH</div>
                                <ul>
                                    <li><a class="footer-text" href="">Chính sách khách hàng</a></li>
                                    <li><a class="footer-text" href="">Chính sách bảo mật</a></li>
                                    <li><a class="footer-text" href="">Chính sách đổi trả</a></li>
                                    <li><a class="footer-text" href="">Chính sách thanh toán</a></li>
                                    <li><a class="footer-text" href="">Chính sách giao hàng</a></li>
                                </ul>
                            </div>
                            <div class="footer-fanpage">
                                <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100089910812626"
                                    data-tabs="timeline" data-width="350" data-height="200" data-small-header="false"
                                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/profile.php?id=100089910812626"
                                        class="fb-xfbml-parse-ignore"><a
                                            href="https://www.facebook.com/profile.php?id=100089910812626">Delicate
                                            Dragon Bookstore</a></blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-tags"></div>
                <div class="footer-powered ">
                    <div class="wrap-content ">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="footer-copyright">2023 Copyright DELICATE DRAGON BOOKSTORE. Design by TL Corp

                            </div>
                            <div class="footer-statistic "><span>Online: </span><span>Tháng: </span><span>Tổng truy cập:
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5132741062075!2d106.69907491462253!3d10.771944792324629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f40c7a0f411%3A0xe272a9c70ba4a66e!2zNjUgxJAuIEh14buzbmggVGjDumMgS2jDoW5nLCBC4bq_biBOZ2jDqSwgUXXhuq1uIDEsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1680179298716!5m2!1svi!2s"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0"
    nonce="wCtUy2oT"></script>
<script>
$('.owl-slideshow').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
    }
})
$('.owl-partner').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 7
        },
    }
})
$('.owl-spnb').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 5
        },
    }
})
$('.owl-carousel').owlCarousel({
    items: 1,
    merge: true,
    loop: true,
    margin: 10,
    video: true,
    lazyLoad: true,
    center: true,
    responsive: {
        480: {
            items: 2
        },
        600: {
            items: 4
        }
    }
});

$('.news-slick').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 500,
    arrows: false,
    vertical: true,
    verticalSwiping: true,
    centerMode: true,
    centerPadding: '0',
    dots: false,
    infinite: false,
    focusOnSelect: true,

});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#features').wowBook({
        height: 595,
        width: 1188,
        centeredWhenClosed: true,
        hardcovers: true,
        turnPageDuration: 1000,
        numberedPages: [1, -2],
        controls: {
            zoomIn: '#zoomin',
            zoomOut: '#zoomout',
            next: '#next',
            back: '#back',
            first: '#first',
            last: '#last',
            slideShow: '#slideshow',
            flipSound: '#flipsound',
            thumbnails: '#thumbs',
            fullscreen: '#fullscreen'
        },
        scaleToFit: "#container",
        thumbnailsPosition: 'bottom',
        onFullscreenError: function() {
            var msg = "Fullscreen failed.";
            if (self != top) msg =
                "The frame is blocking full screen mode. Click on 'remove frame' button above and try to go full screen again."
            alert(msg);
        }
    }).css({
        'display': 'none',
        'margin': 'auto'
    }).fadeIn(1000);

    $("#cover").click(function() {
        $.wowBook("#features").advance();
    });

    var book = $.wowBook("#features");

    function rebuildThumbnails() {
        book.destroyThumbnails()
        book.showThumbnails()
        $("#thumbs_holder").css("marginTop", -$("#thumbs_holder").height() / 2)
    }
    $("#thumbs_position button").on("click", function() {
        var position = $(this).text().toLowerCase()
        if ($(this).data("customized")) {
            position = "top"
            book.opts.thumbnailsParent = "#thumbs_holder";
        } else {
            book.opts.thumbnailsParent = "body";
        }
        book.opts.thumbnailsPosition = position
        rebuildThumbnails();
    })
    $("#thumb_automatic").click(function() {
        book.opts.thumbnailsSprite = null
        book.opts.thumbnailWidth = null
        rebuildThumbnails();
    })
    $("#thumb_sprite").click(function() {
        book.opts.thumbnailsSprite = "images/thumbs.jpg"
        book.opts.thumbnailWidth = 136
        rebuildThumbnails();
    })
    $("#thumbs_size button").click(function() {
        var factor = 0.02 * ($(this).index() ? -1 : 1);
        book.opts.thumbnailScale = book.opts.thumbnailScale + factor;
        rebuildThumbnails();
    })

});
</script>

</html>