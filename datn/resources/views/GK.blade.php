<!DOCTYPE html>
<html lang="vn">
<!-- Head -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1366">
    <title>BookStore</title>
    <!-- <link rel="stylesheet" href="../assets/font/.."> -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/bootstrap-5.0.2-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/bootstrap-5.0.2-dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/style.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/base.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/fonts.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/preview.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/style_book.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/wow_book.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <script src="http://127.0.0.1:8000/assets/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/wow_book.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>
<!-- Body -->

<body>
    <div class="containerr">
        <div class="main">

        @include ('index_partials.header')
            <!-- Menu  -->
            @include ('index_partials.menu')
            <!-- Main -->

            <!-- bỏ all sản phẩm, bên trái là danh mục sản phẩm, 
                 ở dưới có thể có tìm theo mức giá, dưới nữa có thể 
                 lọc theo nhà xuất bản bla bla, bên phải là sản phẩm -->

            <!--Bên trái-->

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="http://127.0.0.1:8000">Trang chủ</a></li>
                  <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/collections">Sản phẩm</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Nhà xuât bản</li>
                  <li class="breadcrumb-item active" aria-current="page">Giáo dục</li> 
                </ol>
            </nav>
                
            <!--Bên phải-->         
            <div class="all-right">
                <div class="wrap-product padding50">
                    <div class="wrap-content">
                        <div class="product-list">
                            
                            @foreach ($gks as $all)
                            <a href="./collections/sach-giao-khoa/lop-6/am-nhac-va-mi-thuat-lop-6" class="box-product">
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