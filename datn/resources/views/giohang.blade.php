<!DOCTYPE html>
<html lang="vn">
<!-- Head -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1366">
    <title>BookStore</title>
    <!-- <link rel="stylesheet" href="../assets/font/.."> -->
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/preview.css">
    <link rel="stylesheet" href="../assets/css/cart.css">
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
                            <a href="http://127.0.0.1:8000/">
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
                        <li><a href="http://127.0.0.1:8000" >Trang chủ</a></li>
                        <li class="line"></li>
                        <li><a href="">Giới Thiệu</a></li>
                        <li class="line"></li>
                        <li><a href="http://127.0.0.1:8000/collections">Sản Phẩm</a></li>
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

                
            <!--Giỏ hàng-->

            <!-- Cart -->
    <div class="wrap-gio-hang">
        <div class="wrap-content">
            <div class="wrap-cart">
                <div class="row">
                    <div class="top-cart col-12 col-lg-7">
                        <p class="title-cart">Giỏ hàng của bạn:</p>
                        <div class="list-procart">
                            <div class="procart procart-label">
                                <div class="form-row">
                                    <div class="pic-procart col-3 col-md-2">Hình ảnh</div>
                                    <div class="info-procart col-6 col-md-5">Tên sản phẩm</div>
                                    <div class="quantity-procart col-3 col-md-2">
                                        <p>Số lượng</p>
                                        <p>Thành tiền</p>
                                    </div>
                                    <div class="price-procart col-3 col-md-3">Thành tiền</div>
                                </div>
                            </div>
                            <div class="procart  ">
                                <div class="form-row">
                                    <div class="pic-procart col-3 col-md-2">
                                        <a class="text-decoration-none" href=" " target="_blank" title="ÁO THUN  ">
                                            <img class="lazy loaded" onerror="this.src=' " data-was-processed="true">
                                        </a>
                                        <a class="del-procart text-decoration-none" data-code="">
                                            <i class="fa fa-times-circle"></i>
                                            <span>Xóa</span>
                                        </a>
                                    </div>
                                    <div class="info-procart col-6 col-md-5">
                                        <h3 class="name-procart"><a class="text-decoration-none" href="" target="_blank"
                                                title="ÁO THUN ">ÁO THUN </a></h3>
                                        <div class="properties-procart">
                                        </div>
                                    </div>
                                    <div class="quantity-procart col-3 col-md-2">
                                        <div class="price-procart price-procart-rp">
                                            <p class="price-new-cart load-price-new-">
                                                235.000₫ </p>
                                            <p class="price-old-cart load-price-">
                                                245.000₫ </p>
                                        </div>
                                        <div
                                            class="quantity-counter-procart quantity-counter-procart- d-flex align-items-stretch justify-content-between">
                                            <span class="counter-procart-minus counter-procart">-</span>
                                            <input type="number" class="quantity-procart" min="1" value="1"
                                                data-pid="17" data-code="">
                                            <span class="counter-procart-plus counter-procart">+</span>
                                        </div>
                                    </div>
                                    <div class="price-procart col-3 col-md-3">
                                        <p class="price-new-cart load-price-new-">
                                            235.000₫ </p>
                                        <p class="price-old-cart load-price-">
                                            245.000₫ </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="money-procart">
                            <div class="total-procart d-flex align-items-center justify-content-between">
                                <p>Tổng tiền:</p>
                                <p class="total-price load-price-total">235.000₫</p>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-cart col-12 col-lg-5">
                        <div class="section-cart">
                            <p class="title-cart">Hình thức thanh toán:</p>
                            <div class="information-cart">
                            </div>
                            <p class="title-cart">THÔNG TIN NGƯỜI MUA:</p>
                            <div class="information-cart">
                                <div class="form-row">
                                    <div class="input-cart col-md-6">
                                        <input type="text" class="form-control text-sm" id="namemua"
                                            name="dataOrder[namemua]" placeholder="Họ tên" value="" required="">
                                        <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                                    </div>
                                    <div class="input-cart col-md-6">
                                        <input type="number" class="form-control text-sm" id="phonemua"
                                            name="dataOrder[phonemua]" placeholder="Số điện thoại" value="" required="">
                                        <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                                    </div>
                                </div>
                                <div class="input-cart">
                                    <input type="email" class="form-control text-sm" id="emailmua"
                                        name="dataOrder[emailmua]" placeholder="Email" value="" required="">
                                    <div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>
                                </div>
                            </div>
                            <p class="title-cart">THÔNG TIN NGƯỜI NHẬN:</p>
                            <div class="information-cart">
                                <div class="form-row">
                                    <div class="input-cart col-md-6">
                                        <input type="text" class="form-control text-sm" id="fullname"
                                            name="dataOrder[fullname]" placeholder="Họ tên" value="" required="">
                                        <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                                    </div>
                                    <div class="input-cart col-md-6">
                                        <input type="number" class="form-control text-sm" id="phone"
                                            name="dataOrder[phone]" placeholder="Số điện thoại" value="" required="">
                                        <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                                    </div>
                                </div>
                                <div class="input-cart">
                                    <input type="email" class="form-control text-sm" id="email" name="dataOrder[email]"
                                        placeholder="Email" value="" required="">
                                    <div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>
                                </div>
                                <div class="form-row">
                                    <div class="input-cart col-md-4">
                                        <select class="select-city-cart custom-select text-sm" required="" id="city"
                                            name="dataOrder[city]">
                                            <option value="">Tỉnh/thành phố</option>

                                        </select>
                                        <div class="invalid-feedback">Vui lòng chọn tỉnh thành</div>
                                    </div>
                                    <div class="input-cart col-md-4">
                                        <select class="select-district-cart select-district custom-select text-sm"
                                            required="" id="district" name="dataOrder[district]">
                                            <option value="">Quận/huyện</option>
                                        </select>
                                        <div class="invalid-feedback">Vui lòng chọn quận huyện</div>
                                    </div>
                                    <div class="input-cart col-md-4">
                                        <select class="select-ward-cart select-ward custom-select text-sm" required=""
                                            id="ward" name="dataOrder[ward]">
                                            <option value="">Phường/xã</option>
                                        </select>
                                        <div class="invalid-feedback">Vui lòng chọn phường xã</div>
                                    </div>
                                </div>
                                <div class="input-cart">
                                    <input type="text" class="form-control text-sm" id="address"
                                        name="dataOrder[address]" placeholder="Địa chỉ" value="" required="">
                                    <div class="invalid-feedback">Vui lòng nhập địa chỉ</div>
                                </div>
                                <div class="input-cart">
                                    <textarea class="form-control text-sm" id="requirements"
                                        name="dataOrder[requirements]"
                                        placeholder="Yêu cầu khác (không bắt buộc)"></textarea>
                                </div>
                            </div>
                            <input type="submit" class="btn-cart btn btn-primary btn-lg btn-block" name="thanhtoan"
                                value="Thanh toán">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart no product -->
    <div class="wrap-cart-no-product">
        <div class="wrap-content">

            <form class="form-cart validation-cart" novalidate="" method="post" action="" enctype="multipart/form-data">
                <div class="wrap-cart">
                    <div class="row">
                        <a href="" class="empty-cart text-decoration-none w-100">
                            <i class="fa fa-cart-arrow-down"></i>
                            <p>Không tồn tại sản phẩm nào trong giỏ hàng !</p>
                            <span>Về trang chủ</span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

            <!--Kết thúc giỏ hàng-->


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