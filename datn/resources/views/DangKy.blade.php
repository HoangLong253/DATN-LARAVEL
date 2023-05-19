<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dedicated Dragon BookStore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/..">




    <link rel="stylesheet" href="../assets/fontawesome-free-6.3.0-web/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <script src="../assets/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="../assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="../assets/js/wow_book.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Dedicated Dragon BookStore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">
                    @guest

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dangnhap') }}">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dangki') }}">Đăng Ký</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Trang chủ</a>
                    </li>

                    @else

                    <li class="nav-item">
                        <a class="nav-link" href="#">Đăng Xuất</a>
                    </li>

                    @endguest
                </ul>

            </div>
        </div>
    </nav>
    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Đăng Ký</div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Tên" />
                                @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="email" class="form-control" placeholder="Địa chỉ email" />
                                @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Mật khẩu" />
                                @if($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Đăng Ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="wrap-product-page">
            <div class="wrap-content">
                <div class="wrap-breadcrumb"><span><a href="">Trang chủ</a></span> / <span><a href="">Sách giáo
                            khoa</a></span> / <span><a href="">Ngữ Văn</a></span> / <span><a href="">Ngữ văn lớp 6 tập
                            1</a></span></div>
            </div>
            <div class="wrap-product-whole">
                <div class="product-images-info">
                    <div class="img-product">
                        <div class="img-main-product">
                            <img src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                alt="">
                        </div>
                        <div class="slide-product">
                            <div class="wrap-slide-product">
                                <div class="owl-product owl-carousel owlCarousel">
                                    <div class="owl-product-items"><img
                                            src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                            alt=""></div>
                                    <div class="owl-product-items"><img
                                            src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                            alt=""></div>
                                    <div class="owl-product-items"><img
                                            src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                            alt=""></div>
                                    <div class="owl-product-items"><img
                                            src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                            alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="infor-product">
                        <div class="infor-product-left">
                            <div class="title-product">Ngữ văn 6 tập 1</div>
                            <div class="share-product-icon">
                                <!-- Thay bằng ảnh -->
                                <span class="share-icon-items"><a href=""><i
                                            class="fa-brands fa-square-facebook"></i></a></span>
                                <span class="share-icon-items"><a href=""><i
                                            class="fa-brands fa-square-instagram"></i></a></span>
                                <span class="share-icon-items"><a href=""><i
                                            class="fa-brands fa-square-twitter"></i></a></span>
                                <span class="share-icon-items"><a href=""><i
                                            class="fa-brands fa-square-youtube"></i></a></span>
                            </div>
                            <div class="infor-product-inter">
                                <div class="infor-product-inter-title">Thông tin chung:</div>
                                <div class="grid-info-product">
                                    <div class="name-text1"> Tên tác giả: <span class="name-text-infor">Nhiều tác
                                            giả</span>
                                    </div>
                                    <div class="name-text1"> Nhà xuất bản: <span class="name-text-infor">Giáo dục</span>
                                    </div>
                                    <div class="name-text1"> Năm xuất bản: <span class="name-text-infor">2023</span>
                                    </div>
                                    <div class="name-text1"> Loại sách: <span class="name-text-infor">Sách giáo
                                            khoa</span>
                                    </div>
                                    <div class="name-text1"> Tình trạng: <span class="name-text-infor">Còn hàng</span>
                                    </div>
                                    <div class="name-text1"> Kích thước: <span class="name-text-infor">Kích thước</span>
                                    </div>
                                </div>
                                <div class="flex-price-product">
                                    <span class="price-new">Giá khuyến mãi: <span
                                            class="price-bold">50.000đ</span></span>
                                    <!-- Format monney tự cách hoặc chấm + Auto set "Đ" sau giá -->
                                    <span class="price-old">Giá gốc: <span
                                            class="price-strikethrough">70.000đ</span></span>
                                </div>
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
                            <div>IDEA </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-product-comment-infor">
                    <div class="wrap-product-infor">
                        <div class="wrap-product-infor_title">Thông tin chi tiết</div>
                        <div class="wrap-product-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis venenatis elit.
                            Cras a eros vel lectus placerat maximus eget non velit. Pelle
                            ntesque et convallis erat. In tristique, quam at luctus viverra, augue nibh volutpat nisl,
                            nec euismod nisi ex vel sem. Nulla facilisi. Vivamus at mauris d
                            ignissim, varius eros sed, euismod nisi. Mauris in elit congue, fermentum ligula sagittis,
                            pulvinar erat. In fringilla pulvinar consequat. Pellentesque in s
                            apien arcu. Donec posuere est ut pharetra ultricies. Vestibulum posuere libero vitae odio
                            mattis, non pellentesque nulla rhoncus. Duis pharetra felis vel odio elementum rutrum.
                            Proin imperdiet odio justo, vitae sodales augue tempus eget. Ut lobortis turpis ut
                            ullamcorper molestie. Pellentesque consectetur iaculis odio, id
                            scelerisque purus fringilla a. Pellentesque eget nibh iaculis magna malesuada rhoncus quis
                            quis est. Nunc non purus id nulla sollicitudin pulvinar. Aen
                            ean id placerat orci. Duis efficitur rhoncus magna sed faucibus. Aenean porta velit lacus,
                            at venenatis ex suscipit a. Nulla nibh purus, aliquam porttitor urna id, auctor gravid
                            a lacus. Maecenas id rhoncus sem. Maecenas sit amet pretium massa. Nunc eros dolor,
                            tincidunt a euismod a, auctor ac nunc. Pellentesque placerat nec ante ut accumsan.
                            Suspendisse ac tempor sapien.
                            Cras nec purus fermentum, lobortis lectus vel, pulvinar ex. Cras ullamcorper placerat leo,
                            blandit mollis odio vehicula at. Proin condimentu
                            m porta diam non varius. Cras sed varius sapien. Maecenas et enim vel quam auctor aliquam.
                            Aliquam interdum nec sem laoreet laoreet.
                            Nullam auctor, odio sed condimentum eleifend, sem ligula semper massa, in sollicitudin magna
                            magna sit amet turpis.
                            Nullam imperdiet condimentum ultricies. Mauris venenatis pharetra elit, et placerat dui
                            mattis quis. Nam vulputate vestibulum sodales. Do
                            nec non ultricies magna, id vestibulum mauris. Nulla vel nisl et enim mattis finibus.
                            Aliquam erat volutpat. Nulla facilisi.
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
                                <img src="https://cand.com.vn/Files/Image/linhchi/2016/09/19/47ca7ab5-f6d4-43ac-a6dd-24c48bd0647c.jpg"
                                    alt="">
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
                                    <img src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                        alt="">
                                    <img src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                        alt="">
                                    <img src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                        alt="">
                                    <img src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                        alt="">
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="wrap-product-same">
                        <div class="wrap-product-same-title">
                            Sản phẩm cùng loại
                        </div>
                        <div class="wrap-product-same-grid grid-4">
                            

                        </div>
                    </div>

                </div>



            </div>
        </div>


</body>
<script>
    $('.owl-product').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 4
            },
        }
    })

</script>
<script>//<![QUANTITYPICK[
    $('input.input-qty').each(function () {
        var $this = $(this),
            qty = $this.parent().find('.is-form'),
            min = Number($this.attr('min')),
            max = Number($this.attr('max'))
        if (min == 0) {
            var d = 0
        } else d = min
        $(qty).on('click', function () {
            if ($(this).hasClass('minus')) {
                if (d > min) d += -1
            } else if ($(this).hasClass('plus')) {
                var x = Number($this.val()) + 1
                if (x <= max) d += 1
            }
            $this.attr('value', d).val(d)
        })
    })
    //]]></script>

</html>