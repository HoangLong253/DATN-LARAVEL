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
    <link rel="stylesheet" href="../assets/css/cart.css">
    <link rel="stylesheet" href="../assets/css/account.css"> 
    <link rel="stylesheet" href="../assets/css/adminlte.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
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
<!-- Đăng ký -->
<div class="wrap-user">
        <div class="title-user">
            <span>Đăng ký</span>
        </div>
        <form class="form-user validation-user" novalidate="" method="post" action="account/dang-ky" enctype="multipart/form-data">
                    <label>Họ tên</label>
            <div class="input-group input-user">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                </div>
                <input type="text" class="form-control text-sm" id="fullname" name="fullname" placeholder="Nhập họ tên của bạn" value="" required="">
                <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
            </div>
            <label>Tài khoản</label>
            <div class="input-group input-user">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                </div>
                <input type="text" class="form-control text-sm" id="username" name="username" placeholder="Nhập tài khoản của bạn" value="" required="">
                <div class="invalid-feedback">Vui lòng nhập tài khoản</div>
            </div>
            <label>Mật khẩu</label>
            <div class="input-group input-user">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-lock"></i></div>
                </div>
                <input type="password" class="form-control text-sm" id="password" name="password" placeholder="Nhập mật khẩu (5-15 ký tự)" required="">
                <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
            </div>
            <label>Nhập lại mật khẩu</label>
            <div class="input-group input-user">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-lock"></i></div>
                </div>
                <input type="password" class="form-control text-sm" id="repassword" name="repassword" placeholder="Nhập lại mật khẩu" required="">
                <div class="invalid-feedback">Vui lòng nhập lại mật khẩu</div>
            </div>
            <label>Giới tính</label>
            <div class="input-group input-user">
                            <div class="radio-user custom-control custom-radio">
                    <input type="radio" id="nam" name="gender" class="custom-control-input" value="1" required="">
                    <label class="custom-control-label" for="nam">Nam</label>
                </div>
                <div class="radio-user custom-control custom-radio">
                    <input type="radio" id="nu" name="gender" class="custom-control-input" value="2" required="">
                    <label class="custom-control-label" for="nu">Nữ</label>
                </div>
            </div>
            <label>Ngày sinh</label>
            <div class="input-group input-user">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-lock"></i></div>
                </div>
                <input type="text" class="form-control text-sm" id="birthday" name="birthday" placeholder="Nhập ngày sinh" value="" required="" autocomplete="off">
                <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
            </div>
            <label>Email</label>
            <div class="input-group input-user">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                </div>
                <input type="email" class="form-control text-sm" id="email" name="email" placeholder="Nhập địa chỉ email của bạn" value="" required="">
                <div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>
            </div>
            <label>Điện thoại</label>
            <div class="input-group input-user">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-phone-square"></i></div>
                </div>
                <input type="number" class="form-control text-sm" id="phone" name="phone" placeholder="Nhập số điện thoại" value="" required="">
                <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
            </div>
            <label>Địa chỉ</label>
            <div class="input-group input-user">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-map"></i></div>
                </div>
                <input type="text" class="form-control text-sm" id="address" name="address" placeholder="Nhập địa chỉ của bạn" value="" required="">
                <div class="invalid-feedback">Vui lòng nhập địa chỉ</div>
            </div>
            <div class="button-user">
                <input type="submit" class="btn btn-primary btn-block" name="registration-user" value="Đăng ký">
            </div>
        </form>
    </div>
        <!-- <div class="row justify-content-center">
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

        </div> -->
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
                            <div class="infor-product-inter-title">Mô tả sản phẩm:</div>
                            .
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
        <!-- Thêm sản phẩm -->
        <div class="wrap-add-product">
            <section class="content">
                <form class="validation-form" novalidate="" method="post"
                    action="index.php?com=product&amp;act=save&amp;type=san-pham" enctype="multipart/form-data">
                    <div class="card-footer text-sm sticky-top">
                        <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                                class="far fa-save mr-2"></i>Lưu</button>
                        <button type="submit" class="btn btn-sm bg-gradient-success submit-check" name="save-here"><i
                                class="far fa-save mr-2"></i>Lưu tại trang</button>
                        <button type="reset" class="btn btn-sm bg-gradient-secondary"><i
                                class="fas fa-redo mr-2"></i>Làm lại</button>
                        <a class="btn btn-sm bg-gradient-danger"
                            href="index.php?com=product&amp;act=man&amp;type=san-pham" title="Thoát"><i
                                class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
                    </div>


                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card card-primary card-outline text-sm">
                                <div class="card-header">
                                    <h3 class="card-title">Đường dẫn</h3>
                                    <span class="pl-2 text-danger">(Vui lòng không nhập trùng tiêu đề)</span>
                                </div>
                                <div class="card-body card-slug">

                                    <input type="hidden" class="slug-id" value="">
                                    <input type="hidden" class="slug-copy" value="0">

                                    <div class="card card-primary card-outline card-outline-tabs">
                                        <div class="card-header p-0 border-bottom-0">
                                            <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="tabs-lang" data-toggle="pill"
                                                        href="#tabs-sluglang-vi" role="tab"
                                                        aria-controls="tabs-sluglang-vi" aria-selected="true">Tiếng
                                                        Việt</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="tabs-lang" data-toggle="pill"
                                                        href="#tabs-sluglang-en" role="tab"
                                                        aria-controls="tabs-sluglang-en" aria-selected="true">Tiếng
                                                        Anh</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                                                <div class="tab-pane fade show active" id="tabs-sluglang-vi"
                                                    role="tabpanel" aria-labelledby="tabs-lang">
                                                    <div class="form-gourp mb-0">
                                                        <label class="d-block">Đường dẫn mẫu (vi):<span
                                                                class="pl-2 font-weight-normal"
                                                                id="slugurlpreviewvi">http://localhost/masterpdo/<strong
                                                                    class="text-info"></strong></span></label>
                                                        <input type="text"
                                                            class="form-control slug-input no-validate text-sm"
                                                            name="slugvi" id="slugvi" placeholder="Đường dẫn (vi)"
                                                            value="" required="">
                                                        <input type="hidden" id="slug-defaultvi" value="">
                                                        <p class="alert-slugvi text-danger d-none mt-2 mb-0"
                                                            id="alert-slug-dangervi">
                                                            <i class="fas fa-exclamation-triangle mr-1"></i>
                                                            <span>Đường dẫn đã tồn tại. Đường dẫn truy cập mục này có
                                                                thể bị trùng lặp.</span>
                                                        </p>
                                                        <p class="alert-slugvi text-success d-none mt-2 mb-0"
                                                            id="alert-slug-successvi">
                                                            <i class="fas fa-check-circle mr-1"></i>
                                                            <span>Đường dẫn hợp lệ.</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade show " id="tabs-sluglang-en" role="tabpanel"
                                                    aria-labelledby="tabs-lang">
                                                    <div class="form-gourp mb-0">
                                                        <label class="d-block">Đường dẫn mẫu (en):<span
                                                                class="pl-2 font-weight-normal"
                                                                id="slugurlpreviewen">http://localhost/masterpdo/<strong
                                                                    class="text-info"></strong></span></label>
                                                        <input type="text"
                                                            class="form-control slug-input no-validate text-sm"
                                                            name="slugen" id="slugen" placeholder="Đường dẫn (en)"
                                                            value="" required="">
                                                        <input type="hidden" id="slug-defaulten" value="">
                                                        <p class="alert-slugen text-danger d-none mt-2 mb-0"
                                                            id="alert-slug-dangeren">
                                                            <i class="fas fa-exclamation-triangle mr-1"></i>
                                                            <span>Đường dẫn đã tồn tại. Đường dẫn truy cập mục này có
                                                                thể bị trùng lặp.</span>
                                                        </p>
                                                        <p class="alert-slugen text-success d-none mt-2 mb-0"
                                                            id="alert-slug-successen">
                                                            <i class="fas fa-check-circle mr-1"></i>
                                                            <span>Đường dẫn hợp lệ.</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary card-outline text-sm">
                                <div class="card-header">
                                    <h3 class="card-title">Nội dung Sản Phẩm</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card card-primary card-outline card-outline-tabs">
                                        <div class="card-header p-0 border-bottom-0">
                                            <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="tabs-lang" data-toggle="pill"
                                                        href="#tabs-lang-vi" role="tab" aria-controls="tabs-lang-vi"
                                                        aria-selected="true">Tiếng Việt</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " id="tabs-lang" data-toggle="pill"
                                                        href="#tabs-lang-en" role="tab" aria-controls="tabs-lang-en"
                                                        aria-selected="true">Tiếng Anh</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body card-article">
                                            <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                                                <div class="tab-pane fade show active" id="tabs-lang-vi" role="tabpanel"
                                                    aria-labelledby="tabs-lang">
                                                    <div class="form-group">
                                                        <label for="namevi">Tiêu đề (vi):</label>
                                                        <input type="text" class="form-control for-seo text-sm"
                                                            name="data[namevi]" id="namevi" placeholder="Tiêu đề (vi)"
                                                            value="" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="descvi">Mô tả (vi):</label>
                                                        <textarea class="form-control for-seo text-sm "
                                                            name="data[descvi]" id="descvi" rows="5"
                                                            placeholder="Mô tả (vi)"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="contentvi">Nội dung (vi):</label>
                                                        <textarea class="form-control for-seo text-sm "
                                                            name="data[descvi]" id="descvi" rows="5"
                                                            placeholder="Nội dung (vi)"></textarea>

                                                    </div>
                                                </div>
                                                <div class="tab-pane fade show " id="tabs-lang-en" role="tabpanel"
                                                    aria-labelledby="tabs-lang">
                                                    <div class="form-group">
                                                        <label for="nameen">Tiêu đề (en):</label>
                                                        <input type="text" class="form-control for-seo text-sm"
                                                            name="data[nameen]" id="nameen" placeholder="Tiêu đề (en)"
                                                            value="" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="descen">Mô tả (en):</label>
                                                        <textarea class="form-control for-seo text-sm "
                                                            name="data[descen]" id="descen" rows="5"
                                                            placeholder="Mô tả (en)"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="contenten">Nội dung (en):</label>
                                                        <textarea
                                                            class="form-control for-seo text-sm form-control-ckeditor"
                                                            name="data[contenten]" id="contenten" rows="5"
                                                            placeholder="Nội dung (en)"
                                                            style="visibility: hidden; display: none;"></textarea>
                                                        <div id="cke_contenten"
                                                            class="cke_2 cke cke_reset cke_chrome cke_editor_contenten cke_ltr cke_browser_webkit"
                                                            dir="ltr" lang="vi" role="application"
                                                            aria-labelledby="cke_contenten_arialbl"
                                                            style="width: auto;"><span id="cke_contenten_arialbl"
                                                                class="cke_voice_label">Bộ soạn thảo văn bản có định
                                                                dạng, contenten</span>
                                                            <div class="cke_inner cke_reset" role="presentation"><span
                                                                    id="cke_2_top" class="cke_top cke_reset_all"
                                                                    role="presentation"
                                                                    style="height: auto; user-select: none;"><span
                                                                        id="cke_124" class="cke_voice_label">Thanh công
                                                                        cụ</span><span id="cke_2_toolbox"
                                                                        class="cke_toolbox" role="group"
                                                                        aria-labelledby="cke_124"
                                                                        onmousedown="return false;"><span id="cke_130"
                                                                            class="cke_toolbar"
                                                                            aria-labelledby="cke_130_label"
                                                                            role="toolbar"><span id="cke_130_label"
                                                                                class="cke_voice_label">Tài
                                                                                liệu</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_131"
                                                                                    class="cke_button cke_button__source cke_button_off"
                                                                                    href="javascript:void('Mã HTML')"
                                                                                    title="Mã HTML" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_131_label"
                                                                                    aria-describedby="cke_131_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(235,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(236,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(237,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__source_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1848px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_131_label"
                                                                                        class="cke_button_label cke_button__source_label"
                                                                                        aria-hidden="false">Mã
                                                                                        HTML</span><span
                                                                                        id="cke_131_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><span
                                                                                    class="cke_toolbar_separator"
                                                                                    role="separator"></span><a
                                                                                    id="cke_132"
                                                                                    class="cke_button cke_button__newpage cke_button_off"
                                                                                    href="javascript:void('Trang mới')"
                                                                                    title="Trang mới" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_132_label"
                                                                                    aria-describedby="cke_132_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(238,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(239,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(240,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__newpage_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1464px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_132_label"
                                                                                        class="cke_button_label cke_button__newpage_label"
                                                                                        aria-hidden="false">Trang
                                                                                        mới</span><span
                                                                                        id="cke_132_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_133"
                                                                                    class="cke_button cke_button__preview cke_button_off"
                                                                                    href="javascript:void('Xem trước')"
                                                                                    title="Xem trước" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_133_label"
                                                                                    aria-describedby="cke_133_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(241,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(242,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(243,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__preview_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1656px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_133_label"
                                                                                        class="cke_button_label cke_button__preview_label"
                                                                                        aria-hidden="false">Xem
                                                                                        trước</span><span
                                                                                        id="cke_133_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_134"
                                                                                    class="cke_button cke_button__print cke_button_off"
                                                                                    href="javascript:void('In')"
                                                                                    title="In" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_134_label"
                                                                                    aria-describedby="cke_134_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(244,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(245,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(246,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__print_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1680px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_134_label"
                                                                                        class="cke_button_label cke_button__print_label"
                                                                                        aria-hidden="false">In</span><span
                                                                                        id="cke_134_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><span
                                                                                    class="cke_toolbar_separator"
                                                                                    role="separator"></span><a
                                                                                    id="cke_135"
                                                                                    class="cke_button cke_button__templates cke_button_off"
                                                                                    href="javascript:void('Mẫu dựng sẵn')"
                                                                                    title="Mẫu dựng sẵn" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_135_label"
                                                                                    aria-describedby="cke_135_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(247,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(248,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(249,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__templates_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -456px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_135_label"
                                                                                        class="cke_button_label cke_button__templates_label"
                                                                                        aria-hidden="false">Mẫu dựng
                                                                                        sẵn</span><span
                                                                                        id="cke_135_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_136" class="cke_toolbar"
                                                                            aria-labelledby="cke_136_label"
                                                                            role="toolbar"><span id="cke_136_label"
                                                                                class="cke_voice_label">Clipboard/Undo</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_137"
                                                                                    class="cke_button cke_button__cut cke_button_disabled "
                                                                                    href="javascript:void('Cắt')"
                                                                                    title="Cắt (Ctrl+X)" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_137_label"
                                                                                    aria-describedby="cke_137_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="true"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(250,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(251,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(252,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__cut_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -312px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_137_label"
                                                                                        class="cke_button_label cke_button__cut_label"
                                                                                        aria-hidden="false">Cắt</span><span
                                                                                        id="cke_137_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Phím tắt
                                                                                        Ctrl+X</span></a><a id="cke_138"
                                                                                    class="cke_button cke_button__copy cke_button_disabled "
                                                                                    href="javascript:void('Sao chép')"
                                                                                    title="Sao chép (Ctrl+C)"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_138_label"
                                                                                    aria-describedby="cke_138_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="true"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(253,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(254,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(255,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__copy_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -264px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_138_label"
                                                                                        class="cke_button_label cke_button__copy_label"
                                                                                        aria-hidden="false">Sao
                                                                                        chép</span><span
                                                                                        id="cke_138_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Phím tắt
                                                                                        Ctrl+C</span></a><a id="cke_139"
                                                                                    class="cke_button cke_button__paste cke_button_off"
                                                                                    href="javascript:void('Dán')"
                                                                                    title="Dán (Ctrl+V)" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_139_label"
                                                                                    aria-describedby="cke_139_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(256,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(257,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(258,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__paste_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -360px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_139_label"
                                                                                        class="cke_button_label cke_button__paste_label"
                                                                                        aria-hidden="false">Dán</span><span
                                                                                        id="cke_139_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Phím tắt
                                                                                        Ctrl+V</span></a><a id="cke_140"
                                                                                    class="cke_button cke_button__pastetext cke_button_off"
                                                                                    href="javascript:void('Dán theo định dạng văn bản thuần')"
                                                                                    title="Dán theo định dạng văn bản thuần (Ctrl+Shift+V)"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_140_label"
                                                                                    aria-describedby="cke_140_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(259,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(260,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(261,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__pastetext_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1560px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_140_label"
                                                                                        class="cke_button_label cke_button__pastetext_label"
                                                                                        aria-hidden="false">Dán theo
                                                                                        định dạng văn bản
                                                                                        thuần</span><span
                                                                                        id="cke_140_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Phím tắt
                                                                                        Ctrl+Shift+V</span></a><a
                                                                                    id="cke_141"
                                                                                    class="cke_button cke_button__pastefromword cke_button_off"
                                                                                    href="javascript:void('Dán với định dạng Word')"
                                                                                    title="Dán với định dạng Word"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_141_label"
                                                                                    aria-describedby="cke_141_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(262,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(263,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(264,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__pastefromword_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1608px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_141_label"
                                                                                        class="cke_button_label cke_button__pastefromword_label"
                                                                                        aria-hidden="false">Dán với định
                                                                                        dạng Word</span><span
                                                                                        id="cke_141_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><span
                                                                                    class="cke_toolbar_separator"
                                                                                    role="separator"></span><a
                                                                                    id="cke_142"
                                                                                    class="cke_button cke_button__undo cke_button_disabled "
                                                                                    href="javascript:void('Khôi phục thao tác')"
                                                                                    title="Khôi phục thao tác (Ctrl+Z)"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_142_label"
                                                                                    aria-describedby="cke_142_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="true"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(265,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(266,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(267,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__undo_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -2016px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_142_label"
                                                                                        class="cke_button_label cke_button__undo_label"
                                                                                        aria-hidden="false">Khôi phục
                                                                                        thao tác</span><span
                                                                                        id="cke_142_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Phím tắt
                                                                                        Ctrl+Z</span></a><a id="cke_143"
                                                                                    class="cke_button cke_button__redo cke_button_disabled "
                                                                                    href="javascript:void('Làm lại thao tác')"
                                                                                    title="Làm lại thao tác (Ctrl+Y)"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_143_label"
                                                                                    aria-describedby="cke_143_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="true"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(268,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(269,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(270,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__redo_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1968px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_143_label"
                                                                                        class="cke_button_label cke_button__redo_label"
                                                                                        aria-hidden="false">Làm lại thao
                                                                                        tác</span><span
                                                                                        id="cke_143_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Phím tắt
                                                                                        Ctrl+Y</span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_144" class="cke_toolbar"
                                                                            aria-labelledby="cke_144_label"
                                                                            role="toolbar"><span id="cke_144_label"
                                                                                class="cke_voice_label">Chỉnh
                                                                                sửa</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_145"
                                                                                    class="cke_button cke_button__find cke_button_off"
                                                                                    href="javascript:void('Tìm kiếm')"
                                                                                    title="Tìm kiếm" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_145_label"
                                                                                    aria-describedby="cke_145_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(271,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(272,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(273,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__find_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -552px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_145_label"
                                                                                        class="cke_button_label cke_button__find_label"
                                                                                        aria-hidden="false">Tìm
                                                                                        kiếm</span><span
                                                                                        id="cke_145_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_146"
                                                                                    class="cke_button cke_button__replace cke_button_off"
                                                                                    href="javascript:void('Thay thế')"
                                                                                    title="Thay thế" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_146_label"
                                                                                    aria-describedby="cke_146_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(274,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(275,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(276,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__replace_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -576px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_146_label"
                                                                                        class="cke_button_label cke_button__replace_label"
                                                                                        aria-hidden="false">Thay
                                                                                        thế</span><span
                                                                                        id="cke_146_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><span
                                                                                    class="cke_toolbar_separator"
                                                                                    role="separator"></span><a
                                                                                    id="cke_147"
                                                                                    class="cke_button cke_button__selectall cke_button_off"
                                                                                    href="javascript:void('Chọn tất cả')"
                                                                                    title="Chọn tất cả" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_147_label"
                                                                                    aria-describedby="cke_147_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(277,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(278,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(279,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__selectall_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1752px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_147_label"
                                                                                        class="cke_button_label cke_button__selectall_label"
                                                                                        aria-hidden="false">Chọn tất
                                                                                        cả</span><span
                                                                                        id="cke_147_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><span
                                                                                    class="cke_toolbar_separator"
                                                                                    role="separator"></span><a
                                                                                    id="cke_148"
                                                                                    class="cke_button cke_button__scayt cke_button_off cke_button_expandable"
                                                                                    href="javascript:void('Kiểm tra chính tả')"
                                                                                    title="Kiểm tra chính tả"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_148_label"
                                                                                    aria-describedby="cke_148_description"
                                                                                    aria-haspopup="menu"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(280,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(281,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(282,this);return false;"
                                                                                    aria-expanded="false"><span
                                                                                        class="cke_button_icon cke_button__scayt_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1896px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_148_label"
                                                                                        class="cke_button_label cke_button__scayt_label"
                                                                                        aria-hidden="false">Kiểm tra
                                                                                        chính tả ngay khi gõ chữ
                                                                                        (SCAYT)</span><span
                                                                                        id="cke_148_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span><span
                                                                                        class="cke_button_arrow"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_149"
                                                                            class="cke_toolbar cke_toolbar_last"
                                                                            aria-labelledby="cke_149_label"
                                                                            role="toolbar"><span id="cke_149_label"
                                                                                class="cke_voice_label">Bảng
                                                                                biểu</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_150"
                                                                                    class="cke_button cke_button__form cke_button_off"
                                                                                    href="javascript:void('Biểu mẫu')"
                                                                                    title="Biểu mẫu" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_150_label"
                                                                                    aria-describedby="cke_150_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(283,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(284,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(285,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__form_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -672px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_150_label"
                                                                                        class="cke_button_label cke_button__form_label"
                                                                                        aria-hidden="false">Biểu
                                                                                        mẫu</span><span
                                                                                        id="cke_150_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_151"
                                                                                    class="cke_button cke_button__checkbox cke_button_off"
                                                                                    href="javascript:void('Nút kiểm')"
                                                                                    title="Nút kiểm" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_151_label"
                                                                                    aria-describedby="cke_151_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(286,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(287,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(288,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__checkbox_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -648px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_151_label"
                                                                                        class="cke_button_label cke_button__checkbox_label"
                                                                                        aria-hidden="false">Nút
                                                                                        kiểm</span><span
                                                                                        id="cke_151_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_152"
                                                                                    class="cke_button cke_button__radio cke_button_off"
                                                                                    href="javascript:void('Nút chọn')"
                                                                                    title="Nút chọn" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_152_label"
                                                                                    aria-describedby="cke_152_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(289,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(290,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(291,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__radio_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -744px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_152_label"
                                                                                        class="cke_button_label cke_button__radio_label"
                                                                                        aria-hidden="false">Nút
                                                                                        chọn</span><span
                                                                                        id="cke_152_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_153"
                                                                                    class="cke_button cke_button__textfield cke_button_off"
                                                                                    href="javascript:void('Trường văn bản')"
                                                                                    title="Trường văn bản" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_153_label"
                                                                                    aria-describedby="cke_153_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(292,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(293,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(294,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__textfield_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -888px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_153_label"
                                                                                        class="cke_button_label cke_button__textfield_label"
                                                                                        aria-hidden="false">Trường văn
                                                                                        bản</span><span
                                                                                        id="cke_153_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_154"
                                                                                    class="cke_button cke_button__textarea cke_button_off"
                                                                                    href="javascript:void('Vùng văn bản')"
                                                                                    title="Vùng văn bản" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_154_label"
                                                                                    aria-describedby="cke_154_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(295,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(296,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(297,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__textarea_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -840px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_154_label"
                                                                                        class="cke_button_label cke_button__textarea_label"
                                                                                        aria-hidden="false">Vùng văn
                                                                                        bản</span><span
                                                                                        id="cke_154_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_155"
                                                                                    class="cke_button cke_button__select cke_button_off"
                                                                                    href="javascript:void('Ô chọn')"
                                                                                    title="Ô chọn" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_155_label"
                                                                                    aria-describedby="cke_155_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(298,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(299,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(300,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__select_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -792px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_155_label"
                                                                                        class="cke_button_label cke_button__select_label"
                                                                                        aria-hidden="false">Ô
                                                                                        chọn</span><span
                                                                                        id="cke_155_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_156"
                                                                                    class="cke_button cke_button__button cke_button_off"
                                                                                    href="javascript:void('Nút')"
                                                                                    title="Nút" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_156_label"
                                                                                    aria-describedby="cke_156_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(301,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(302,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(303,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__button_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -624px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_156_label"
                                                                                        class="cke_button_label cke_button__button_label"
                                                                                        aria-hidden="false">Nút</span><span
                                                                                        id="cke_156_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_157"
                                                                                    class="cke_button cke_button__imagebutton cke_button_off"
                                                                                    href="javascript:void('Nút hình ảnh')"
                                                                                    title="Nút hình ảnh" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_157_label"
                                                                                    aria-describedby="cke_157_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(304,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(305,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(306,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__imagebutton_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -720px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_157_label"
                                                                                        class="cke_button_label cke_button__imagebutton_label"
                                                                                        aria-hidden="false">Nút hình
                                                                                        ảnh</span><span
                                                                                        id="cke_157_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_158"
                                                                                    class="cke_button cke_button__hiddenfield cke_button_off"
                                                                                    href="javascript:void('Trường ẩn')"
                                                                                    title="Trường ẩn" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_158_label"
                                                                                    aria-describedby="cke_158_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(307,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(308,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(309,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__hiddenfield_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -696px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_158_label"
                                                                                        class="cke_button_label cke_button__hiddenfield_label"
                                                                                        aria-hidden="false">Trường
                                                                                        ẩn</span><span
                                                                                        id="cke_158_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            class="cke_toolbar_break"></span><span
                                                                            id="cke_159" class="cke_toolbar"
                                                                            aria-labelledby="cke_159_label"
                                                                            role="toolbar"><span id="cke_159_label"
                                                                                class="cke_voice_label">Kiểu cơ
                                                                                bản</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_160"
                                                                                    class="cke_button cke_button__bold cke_button_off"
                                                                                    href="javascript:void('Đậm')"
                                                                                    title="Đậm (Ctrl+B)" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_160_label"
                                                                                    aria-describedby="cke_160_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(310,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(311,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(312,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__bold_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -24px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_160_label"
                                                                                        class="cke_button_label cke_button__bold_label"
                                                                                        aria-hidden="false">Đậm</span><span
                                                                                        id="cke_160_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Phím tắt
                                                                                        Ctrl+B</span></a><a id="cke_161"
                                                                                    class="cke_button cke_button__italic cke_button_off"
                                                                                    href="javascript:void('Nghiêng')"
                                                                                    title="Nghiêng (Ctrl+I)"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_161_label"
                                                                                    aria-describedby="cke_161_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(313,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(314,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(315,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__italic_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -48px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_161_label"
                                                                                        class="cke_button_label cke_button__italic_label"
                                                                                        aria-hidden="false">Nghiêng</span><span
                                                                                        id="cke_161_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Phím tắt
                                                                                        Ctrl+I</span></a><a id="cke_162"
                                                                                    class="cke_button cke_button__underline cke_button_off"
                                                                                    href="javascript:void('Gạch chân')"
                                                                                    title="Gạch chân (Ctrl+U)"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_162_label"
                                                                                    aria-describedby="cke_162_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(316,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(317,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(318,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__underline_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -144px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_162_label"
                                                                                        class="cke_button_label cke_button__underline_label"
                                                                                        aria-hidden="false">Gạch
                                                                                        chân</span><span
                                                                                        id="cke_162_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Phím tắt
                                                                                        Ctrl+U</span></a><a id="cke_163"
                                                                                    class="cke_button cke_button__strike cke_button_off"
                                                                                    href="javascript:void('Gạch xuyên ngang')"
                                                                                    title="Gạch xuyên ngang"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_163_label"
                                                                                    aria-describedby="cke_163_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(319,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(320,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(321,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__strike_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -72px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_163_label"
                                                                                        class="cke_button_label cke_button__strike_label"
                                                                                        aria-hidden="false">Gạch xuyên
                                                                                        ngang</span><span
                                                                                        id="cke_163_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_164"
                                                                                    class="cke_button cke_button__subscript cke_button_off"
                                                                                    href="javascript:void('Chỉ số dưới')"
                                                                                    title="Chỉ số dưới" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_164_label"
                                                                                    aria-describedby="cke_164_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(322,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(323,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(324,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__subscript_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -96px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_164_label"
                                                                                        class="cke_button_label cke_button__subscript_label"
                                                                                        aria-hidden="false">Chỉ số
                                                                                        dưới</span><span
                                                                                        id="cke_164_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_165"
                                                                                    class="cke_button cke_button__superscript cke_button_off"
                                                                                    href="javascript:void('Chỉ số trên')"
                                                                                    title="Chỉ số trên" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_165_label"
                                                                                    aria-describedby="cke_165_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(325,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(326,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(327,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__superscript_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -120px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_165_label"
                                                                                        class="cke_button_label cke_button__superscript_label"
                                                                                        aria-hidden="false">Chỉ số
                                                                                        trên</span><span
                                                                                        id="cke_165_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><span
                                                                                    class="cke_toolbar_separator"
                                                                                    role="separator"></span><a
                                                                                    id="cke_166"
                                                                                    class="cke_button cke_button__copyformatting cke_button_off"
                                                                                    href="javascript:void('Copy Formatting')"
                                                                                    title="Copy Formatting (Ctrl+Shift+C)"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_166_label"
                                                                                    aria-describedby="cke_166_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(328,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(329,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(330,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__copyformatting_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -480px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_166_label"
                                                                                        class="cke_button_label cke_button__copyformatting_label"
                                                                                        aria-hidden="false">Copy
                                                                                        Formatting</span><span
                                                                                        id="cke_166_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Phím tắt
                                                                                        Ctrl+Shift+C</span></a><a
                                                                                    id="cke_167"
                                                                                    class="cke_button cke_button__removeformat cke_button_off"
                                                                                    href="javascript:void('Xoá định dạng')"
                                                                                    title="Xoá định dạng" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_167_label"
                                                                                    aria-describedby="cke_167_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(331,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(332,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(333,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__removeformat_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1704px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_167_label"
                                                                                        class="cke_button_label cke_button__removeformat_label"
                                                                                        aria-hidden="false">Xoá định
                                                                                        dạng</span><span
                                                                                        id="cke_167_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_168" class="cke_toolbar"
                                                                            aria-labelledby="cke_168_label"
                                                                            role="toolbar"><span id="cke_168_label"
                                                                                class="cke_voice_label">texttransform</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_169"
                                                                                    class="cke_button cke_button__transformtexttouppercase cke_button_off"
                                                                                    href="javascript:void('Transform Text to Uppercase')"
                                                                                    title="Transform Text to Uppercase"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_169_label"
                                                                                    aria-describedby="cke_169_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(334,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(335,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(336,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__transformtexttouppercase_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/texttransform/images/transformToUpper.png?t=JB9C');background-position:0 0px;background-size:16px;">&nbsp;</span><span
                                                                                        id="cke_169_label"
                                                                                        class="cke_button_label cke_button__transformtexttouppercase_label"
                                                                                        aria-hidden="false">Transform
                                                                                        Text to Uppercase</span><span
                                                                                        id="cke_169_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_170"
                                                                                    class="cke_button cke_button__transformtexttolowercase cke_button_off"
                                                                                    href="javascript:void('Transform Text to Lowercase')"
                                                                                    title="Transform Text to Lowercase"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_170_label"
                                                                                    aria-describedby="cke_170_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(337,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(338,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(339,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__transformtexttolowercase_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/texttransform/images/transformToLower.png?t=JB9C');background-position:0 0px;background-size:16px;">&nbsp;</span><span
                                                                                        id="cke_170_label"
                                                                                        class="cke_button_label cke_button__transformtexttolowercase_label"
                                                                                        aria-hidden="false">Transform
                                                                                        Text to Lowercase</span><span
                                                                                        id="cke_170_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_171"
                                                                                    class="cke_button cke_button__transformtextcapitalize cke_button_off"
                                                                                    href="javascript:void('Capitalize Text')"
                                                                                    title="Capitalize Text"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_171_label"
                                                                                    aria-describedby="cke_171_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(340,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(341,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(342,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__transformtextcapitalize_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/texttransform/images/transformCapitalize.png?t=JB9C');background-position:0 0px;background-size:16px;">&nbsp;</span><span
                                                                                        id="cke_171_label"
                                                                                        class="cke_button_label cke_button__transformtextcapitalize_label"
                                                                                        aria-hidden="false">Capitalize
                                                                                        Text</span><span
                                                                                        id="cke_171_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_172"
                                                                                    class="cke_button cke_button__transformtextswitcher cke_button_off"
                                                                                    href="javascript:void('Transform Text Switcher')"
                                                                                    title="Transform Text Switcher"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_172_label"
                                                                                    aria-describedby="cke_172_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(343,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(344,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(345,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__transformtextswitcher_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/texttransform/images/transformSwitcher.png?t=JB9C');background-position:0 0px;background-size:16px;">&nbsp;</span><span
                                                                                        id="cke_172_label"
                                                                                        class="cke_button_label cke_button__transformtextswitcher_label"
                                                                                        aria-hidden="false">Transform
                                                                                        Text Switcher</span><span
                                                                                        id="cke_172_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_173" class="cke_toolbar"
                                                                            aria-labelledby="cke_173_label"
                                                                            role="toolbar"><span id="cke_173_label"
                                                                                class="cke_voice_label">Đoạn</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_174"
                                                                                    class="cke_button cke_button__numberedlist cke_button_off"
                                                                                    href="javascript:void('Chèn/Xoá Danh sách có thứ tự')"
                                                                                    title="Chèn/Xoá Danh sách có thứ tự"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_174_label"
                                                                                    aria-describedby="cke_174_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(346,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(347,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(348,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__numberedlist_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1392px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_174_label"
                                                                                        class="cke_button_label cke_button__numberedlist_label"
                                                                                        aria-hidden="false">Chèn/Xoá
                                                                                        Danh sách có thứ tự</span><span
                                                                                        id="cke_174_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_175"
                                                                                    class="cke_button cke_button__bulletedlist cke_button_off"
                                                                                    href="javascript:void('Chèn/Xoá Danh sách không thứ tự')"
                                                                                    title="Chèn/Xoá Danh sách không thứ tự"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_175_label"
                                                                                    aria-describedby="cke_175_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(349,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(350,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(351,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__bulletedlist_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1344px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_175_label"
                                                                                        class="cke_button_label cke_button__bulletedlist_label"
                                                                                        aria-hidden="false">Chèn/Xoá
                                                                                        Danh sách không thứ
                                                                                        tự</span><span
                                                                                        id="cke_175_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><span
                                                                                    class="cke_toolbar_separator"
                                                                                    role="separator"></span><a
                                                                                    id="cke_176"
                                                                                    class="cke_button cke_button__outdent cke_button_disabled "
                                                                                    href="javascript:void('Dịch ra ngoài')"
                                                                                    title="Dịch ra ngoài" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_176_label"
                                                                                    aria-describedby="cke_176_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="true"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(352,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(353,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(354,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__outdent_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1056px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_176_label"
                                                                                        class="cke_button_label cke_button__outdent_label"
                                                                                        aria-hidden="false">Dịch ra
                                                                                        ngoài</span><span
                                                                                        id="cke_176_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_177"
                                                                                    class="cke_button cke_button__indent cke_button_off"
                                                                                    href="javascript:void('Dịch vào trong')"
                                                                                    title="Dịch vào trong" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_177_label"
                                                                                    aria-describedby="cke_177_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(355,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(356,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(357,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__indent_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1008px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_177_label"
                                                                                        class="cke_button_label cke_button__indent_label"
                                                                                        aria-hidden="false">Dịch vào
                                                                                        trong</span><span
                                                                                        id="cke_177_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><span
                                                                                    class="cke_toolbar_separator"
                                                                                    role="separator"></span><a
                                                                                    id="cke_178"
                                                                                    class="cke_button cke_button__blockquote cke_button_off"
                                                                                    href="javascript:void('Khối trích dẫn')"
                                                                                    title="Khối trích dẫn" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_178_label"
                                                                                    aria-describedby="cke_178_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(358,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(359,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(360,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__blockquote_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -216px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_178_label"
                                                                                        class="cke_button_label cke_button__blockquote_label"
                                                                                        aria-hidden="false">Khối trích
                                                                                        dẫn</span><span
                                                                                        id="cke_178_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_179"
                                                                                    class="cke_button cke_button__creatediv cke_button_off"
                                                                                    href="javascript:void('Tạo khối các thành phần')"
                                                                                    title="Tạo khối các thành phần"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_179_label"
                                                                                    aria-describedby="cke_179_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(361,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(362,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(363,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__creatediv_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -504px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_179_label"
                                                                                        class="cke_button_label cke_button__creatediv_label"
                                                                                        aria-hidden="false">Tạo khối các
                                                                                        thành phần</span><span
                                                                                        id="cke_179_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><span
                                                                                    class="cke_toolbar_separator"
                                                                                    role="separator"></span><a
                                                                                    id="cke_180"
                                                                                    class="cke_button cke_button__justifyleft cke_button_off"
                                                                                    href="javascript:void('Canh trái')"
                                                                                    title="Canh trái" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_180_label"
                                                                                    aria-describedby="cke_180_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(364,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(365,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(366,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__justifyleft_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1152px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_180_label"
                                                                                        class="cke_button_label cke_button__justifyleft_label"
                                                                                        aria-hidden="false">Canh
                                                                                        trái</span><span
                                                                                        id="cke_180_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_181"
                                                                                    class="cke_button cke_button__justifycenter cke_button_off"
                                                                                    href="javascript:void('Giữa')"
                                                                                    title="Giữa" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_181_label"
                                                                                    aria-describedby="cke_181_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(367,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(368,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(369,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__justifycenter_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1128px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_181_label"
                                                                                        class="cke_button_label cke_button__justifycenter_label"
                                                                                        aria-hidden="false">Giữa</span><span
                                                                                        id="cke_181_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_182"
                                                                                    class="cke_button cke_button__justifyright cke_button_off"
                                                                                    href="javascript:void('Canh phải')"
                                                                                    title="Canh phải" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_182_label"
                                                                                    aria-describedby="cke_182_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(370,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(371,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(372,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__justifyright_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1176px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_182_label"
                                                                                        class="cke_button_label cke_button__justifyright_label"
                                                                                        aria-hidden="false">Canh
                                                                                        phải</span><span
                                                                                        id="cke_182_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_183"
                                                                                    class="cke_button cke_button__justifyblock cke_button_off"
                                                                                    href="javascript:void('Sắp chữ')"
                                                                                    title="Sắp chữ" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_183_label"
                                                                                    aria-describedby="cke_183_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(373,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(374,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(375,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__justifyblock_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1104px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_183_label"
                                                                                        class="cke_button_label cke_button__justifyblock_label"
                                                                                        aria-hidden="false">Sắp
                                                                                        chữ</span><span
                                                                                        id="cke_183_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><span
                                                                                    class="cke_toolbar_separator"
                                                                                    role="separator"></span><a
                                                                                    id="cke_184"
                                                                                    class="cke_button cke_button__bidiltr cke_button_off"
                                                                                    href="javascript:void('Văn bản hướng từ trái sang phải')"
                                                                                    title="Văn bản hướng từ trái sang phải"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_184_label"
                                                                                    aria-describedby="cke_184_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(376,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(377,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(378,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__bidiltr_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -168px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_184_label"
                                                                                        class="cke_button_label cke_button__bidiltr_label"
                                                                                        aria-hidden="false">Văn bản
                                                                                        hướng từ trái sang
                                                                                        phải</span><span
                                                                                        id="cke_184_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_185"
                                                                                    class="cke_button cke_button__bidirtl cke_button_off"
                                                                                    href="javascript:void('Văn bản hướng từ phải sang trái')"
                                                                                    title="Văn bản hướng từ phải sang trái"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_185_label"
                                                                                    aria-describedby="cke_185_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(379,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(380,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(381,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__bidirtl_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -192px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_185_label"
                                                                                        class="cke_button_label cke_button__bidirtl_label"
                                                                                        aria-hidden="false">Văn bản
                                                                                        hướng từ phải sang
                                                                                        trái</span><span
                                                                                        id="cke_185_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_186"
                                                                                    class="cke_button cke_button__language cke_button_expandable cke_button_off"
                                                                                    href="javascript:void('Thiết lập ngôn ngữ')"
                                                                                    title="Thiết lập ngôn ngữ"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_186_label"
                                                                                    aria-describedby="cke_186_description"
                                                                                    aria-haspopup="menu"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(382,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(383,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(384,this);return false;"
                                                                                    aria-expanded="false"><span
                                                                                        class="cke_button_icon cke_button__language_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1200px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_186_label"
                                                                                        class="cke_button_label cke_button__language_label"
                                                                                        aria-hidden="false">Thiết lập
                                                                                        ngôn ngữ</span><span
                                                                                        id="cke_186_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span><span
                                                                                        class="cke_button_arrow"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_187" class="cke_toolbar"
                                                                            aria-labelledby="cke_187_label"
                                                                            role="toolbar"><span id="cke_187_label"
                                                                                class="cke_voice_label">Liên
                                                                                kết</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_188"
                                                                                    class="cke_button cke_button__link cke_button_off"
                                                                                    href="javascript:void('Chèn/Sửa liên kết')"
                                                                                    title="Chèn/Sửa liên kết (Ctrl+K)"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_188_label"
                                                                                    aria-describedby="cke_188_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(385,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(386,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(387,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__link_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1272px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_188_label"
                                                                                        class="cke_button_label cke_button__link_label"
                                                                                        aria-hidden="false">Chèn/Sửa
                                                                                        liên kết</span><span
                                                                                        id="cke_188_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Phím tắt
                                                                                        Ctrl+K</span></a><a id="cke_189"
                                                                                    class="cke_button cke_button__unlink cke_button_disabled "
                                                                                    href="javascript:void('Xoá liên kết')"
                                                                                    title="Xoá liên kết" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_189_label"
                                                                                    aria-describedby="cke_189_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="true"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(388,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(389,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(390,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__unlink_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1296px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_189_label"
                                                                                        class="cke_button_label cke_button__unlink_label"
                                                                                        aria-hidden="false">Xoá liên
                                                                                        kết</span><span
                                                                                        id="cke_189_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_190"
                                                                                    class="cke_button cke_button__anchor cke_button_off"
                                                                                    href="javascript:void('Chèn/Sửa điểm neo')"
                                                                                    title="Chèn/Sửa điểm neo"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_190_label"
                                                                                    aria-describedby="cke_190_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(391,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(392,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(393,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__anchor_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1248px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_190_label"
                                                                                        class="cke_button_label cke_button__anchor_label"
                                                                                        aria-hidden="false">Chèn/Sửa
                                                                                        điểm neo</span><span
                                                                                        id="cke_190_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_191"
                                                                            class="cke_toolbar cke_toolbar_last"
                                                                            aria-labelledby="cke_191_label"
                                                                            role="toolbar"><span id="cke_191_label"
                                                                                class="cke_voice_label">Chèn</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_192"
                                                                                    class="cke_button cke_button__image cke_button_off"
                                                                                    href="javascript:void('Hình ảnh')"
                                                                                    title="Hình ảnh" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_192_label"
                                                                                    aria-describedby="cke_192_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(394,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(395,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(396,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__image_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -960px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_192_label"
                                                                                        class="cke_button_label cke_button__image_label"
                                                                                        aria-hidden="false">Hình
                                                                                        ảnh</span><span
                                                                                        id="cke_192_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_193"
                                                                                    class="cke_button cke_button__flash cke_button_off"
                                                                                    href="javascript:void('Flash')"
                                                                                    title="Flash" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_193_label"
                                                                                    aria-describedby="cke_193_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(397,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(398,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(399,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__flash_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -600px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_193_label"
                                                                                        class="cke_button_label cke_button__flash_label"
                                                                                        aria-hidden="false">Flash</span><span
                                                                                        id="cke_193_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_194"
                                                                                    class="cke_button cke_button__youtube cke_button_off"
                                                                                    href="javascript:void('Embed Youtube Video')"
                                                                                    title="Embed Youtube Video"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_194_label"
                                                                                    aria-describedby="cke_194_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(400,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(401,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(402,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__youtube_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/youtube/images/icon.png?t=JB9C');background-position:0 0px;background-size:16px;">&nbsp;</span><span
                                                                                        id="cke_194_label"
                                                                                        class="cke_button_label cke_button__youtube_label"
                                                                                        aria-hidden="false">Embed
                                                                                        Youtube Video</span><span
                                                                                        id="cke_194_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_195"
                                                                                    class="cke_button cke_button__videodetector cke_button_off"
                                                                                    href="javascript:void('Insert a Youtube, Vimeo or Dailymotion video')"
                                                                                    title="Insert a Youtube, Vimeo or Dailymotion video"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_195_label"
                                                                                    aria-describedby="cke_195_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(403,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(404,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(405,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__videodetector_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/videodetector//icons/icon_black.png?t=JB9C');background-position:0 0px;background-size:16px;">&nbsp;</span><span
                                                                                        id="cke_195_label"
                                                                                        class="cke_button_label cke_button__videodetector_label"
                                                                                        aria-hidden="false">Insert a
                                                                                        Youtube, Vimeo or Dailymotion
                                                                                        video</span><span
                                                                                        id="cke_195_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_196"
                                                                                    class="cke_button cke_button__html5video cke_button_off"
                                                                                    href="javascript:void('Insert HTML5 video')"
                                                                                    title="Insert HTML5 video"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_196_label"
                                                                                    aria-describedby="cke_196_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(406,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(407,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(408,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__html5video_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/html5video/icons/html5video.png?t=JB9C');background-position:0 0px;background-size:16px;">&nbsp;</span><span
                                                                                        id="cke_196_label"
                                                                                        class="cke_button_label cke_button__html5video_label"
                                                                                        aria-hidden="false">Insert HTML5
                                                                                        video</span><span
                                                                                        id="cke_196_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_197"
                                                                                    class="cke_button cke_button__video cke_button_off"
                                                                                    href="javascript:void('Video')"
                                                                                    title="Video" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_197_label"
                                                                                    aria-describedby="cke_197_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(409,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(410,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(411,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__video_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/video/icons/video.png?t=JB9C');background-position:0 0px;background-size:16px;">&nbsp;</span><span
                                                                                        id="cke_197_label"
                                                                                        class="cke_button_label cke_button__video_label"
                                                                                        aria-hidden="false">Video</span><span
                                                                                        id="cke_197_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_198"
                                                                                    class="cke_button cke_button__html5audio cke_button_off"
                                                                                    href="javascript:void('Insert HTML5 audio')"
                                                                                    title="Insert HTML5 audio"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_198_label"
                                                                                    aria-describedby="cke_198_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(412,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(413,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(414,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__html5audio_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/html5audio/icons/html5audio.png?t=JB9C');background-position:0 0px;background-size:16px;">&nbsp;</span><span
                                                                                        id="cke_198_label"
                                                                                        class="cke_button_label cke_button__html5audio_label"
                                                                                        aria-hidden="false">Insert HTML5
                                                                                        audio</span><span
                                                                                        id="cke_198_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_199"
                                                                                    class="cke_button cke_button__iframe cke_button_off"
                                                                                    href="javascript:void('Iframe')"
                                                                                    title="Iframe" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_199_label"
                                                                                    aria-describedby="cke_199_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(415,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(416,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(417,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__iframe_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -936px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_199_label"
                                                                                        class="cke_button_label cke_button__iframe_label"
                                                                                        aria-hidden="false">Iframe</span><span
                                                                                        id="cke_199_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_200"
                                                                                    class="cke_button cke_button__table cke_button_off"
                                                                                    href="javascript:void('Bảng')"
                                                                                    title="Bảng" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_200_label"
                                                                                    aria-describedby="cke_200_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(418,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(419,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(420,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__table_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1920px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_200_label"
                                                                                        class="cke_button_label cke_button__table_label"
                                                                                        aria-hidden="false">Bảng</span><span
                                                                                        id="cke_200_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_201"
                                                                                    class="cke_button cke_button__horizontalrule cke_button_off"
                                                                                    href="javascript:void('Chèn đường phân cách ngang')"
                                                                                    title="Chèn đường phân cách ngang"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_201_label"
                                                                                    aria-describedby="cke_201_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(421,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(422,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(423,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__horizontalrule_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -912px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_201_label"
                                                                                        class="cke_button_label cke_button__horizontalrule_label"
                                                                                        aria-hidden="false">Chèn đường
                                                                                        phân cách ngang</span><span
                                                                                        id="cke_201_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_202"
                                                                                    class="cke_button cke_button__smiley cke_button_off"
                                                                                    href="javascript:void('Hình biểu lộ cảm xúc (mặt cười)')"
                                                                                    title="Hình biểu lộ cảm xúc (mặt cười)"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_202_label"
                                                                                    aria-describedby="cke_202_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(424,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(425,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(426,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__smiley_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1080px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_202_label"
                                                                                        class="cke_button_label cke_button__smiley_label"
                                                                                        aria-hidden="false">Hình biểu lộ
                                                                                        cảm xúc (mặt cười)</span><span
                                                                                        id="cke_202_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_203"
                                                                                    class="cke_button cke_button__specialchar cke_button_off"
                                                                                    href="javascript:void('Chèn ký tự đặc biệt')"
                                                                                    title="Chèn ký tự đặc biệt"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_203_label"
                                                                                    aria-describedby="cke_203_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(427,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(428,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(429,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__specialchar_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1872px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_203_label"
                                                                                        class="cke_button_label cke_button__specialchar_label"
                                                                                        aria-hidden="false">Chèn ký tự
                                                                                        đặc biệt</span><span
                                                                                        id="cke_203_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_204"
                                                                                    class="cke_button cke_button__pagebreak cke_button_off"
                                                                                    href="javascript:void('Chèn ngắt trang')"
                                                                                    title="Chèn ngắt trang"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_204_label"
                                                                                    aria-describedby="cke_204_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(430,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(431,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(432,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__pagebreak_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1512px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_204_label"
                                                                                        class="cke_button_label cke_button__pagebreak_label"
                                                                                        aria-hidden="false">Chèn ngắt
                                                                                        trang</span><span
                                                                                        id="cke_204_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            class="cke_toolbar_break"></span><span
                                                                            id="cke_205" class="cke_toolbar"
                                                                            aria-labelledby="cke_205_label"
                                                                            role="toolbar"><span id="cke_205_label"
                                                                                class="cke_voice_label">Kiểu</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                id="cke_125"
                                                                                class="cke_combo cke_combo__styles cke_combo_off"
                                                                                role="presentation"><span
                                                                                    id="cke_125_label"
                                                                                    class="cke_combo_label">Kiểu</span><a
                                                                                    class="cke_combo_button"
                                                                                    title="Phong cách định dạng"
                                                                                    tabindex="-1"
                                                                                    href="javascript:void('Phong cách định dạng')"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_125_label"
                                                                                    aria-haspopup="listbox"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(434,event,this);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(435,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(433,this);return false;"><span
                                                                                        id="cke_125_text"
                                                                                        class="cke_combo_text cke_combo_inlinelabel">Kiểu</span><span
                                                                                        class="cke_combo_open"><span
                                                                                            class="cke_combo_arrow"></span></span></a></span><span
                                                                                id="cke_126"
                                                                                class="cke_combo cke_combo__format cke_combo_off"
                                                                                role="presentation"><span
                                                                                    id="cke_126_label"
                                                                                    class="cke_combo_label">Định
                                                                                    dạng</span><a
                                                                                    class="cke_combo_button"
                                                                                    title="Định dạng" tabindex="-1"
                                                                                    href="javascript:void('Định dạng')"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_126_label"
                                                                                    aria-haspopup="listbox"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(437,event,this);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(438,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(436,this);return false;"><span
                                                                                        id="cke_126_text"
                                                                                        class="cke_combo_text cke_combo_inlinelabel">Định
                                                                                        dạng</span><span
                                                                                        class="cke_combo_open"><span
                                                                                            class="cke_combo_arrow"></span></span></a></span><span
                                                                                id="cke_127"
                                                                                class="cke_combo cke_combo__font cke_combo_off"
                                                                                role="presentation"><span
                                                                                    id="cke_127_label"
                                                                                    class="cke_combo_label">Phông</span><a
                                                                                    class="cke_combo_button"
                                                                                    title="Phông" tabindex="-1"
                                                                                    href="javascript:void('Phông')"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_127_label"
                                                                                    aria-haspopup="listbox"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(440,event,this);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(441,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(439,this);return false;"><span
                                                                                        id="cke_127_text"
                                                                                        class="cke_combo_text cke_combo_inlinelabel">Phông</span><span
                                                                                        class="cke_combo_open"><span
                                                                                            class="cke_combo_arrow"></span></span></a></span><span
                                                                                id="cke_128"
                                                                                class="cke_combo cke_combo__fontsize cke_combo_off"
                                                                                role="presentation"><span
                                                                                    id="cke_128_label"
                                                                                    class="cke_combo_label">Cỡ
                                                                                    chữ</span><a
                                                                                    class="cke_combo_button"
                                                                                    title="Cỡ chữ" tabindex="-1"
                                                                                    href="javascript:void('Cỡ chữ')"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_128_label"
                                                                                    aria-haspopup="listbox"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(443,event,this);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(444,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(442,this);return false;"><span
                                                                                        id="cke_128_text"
                                                                                        class="cke_combo_text cke_combo_inlinelabel">Cỡ
                                                                                        chữ</span><span
                                                                                        class="cke_combo_open"><span
                                                                                            class="cke_combo_arrow"></span></span></a></span><span
                                                                                id="cke_129"
                                                                                class="cke_combo cke_combo__lineheight cke_combo_off"
                                                                                role="presentation"><span
                                                                                    id="cke_129_label"
                                                                                    class="cke_combo_label">Line
                                                                                    Height</span><a
                                                                                    class="cke_combo_button"
                                                                                    title="Line Height" tabindex="-1"
                                                                                    href="javascript:void('Line Height')"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_129_label"
                                                                                    aria-haspopup="listbox"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(446,event,this);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(447,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(445,this);return false;"><span
                                                                                        id="cke_129_text"
                                                                                        class="cke_combo_text cke_combo_inlinelabel">Line
                                                                                        Height</span><span
                                                                                        class="cke_combo_open"><span
                                                                                            class="cke_combo_arrow"></span></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_206" class="cke_toolbar"
                                                                            aria-labelledby="cke_206_label"
                                                                            role="toolbar"><span id="cke_206_label"
                                                                                class="cke_voice_label">Màu
                                                                                sắc</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_207"
                                                                                    class="cke_button cke_button__textcolor cke_button_off cke_button_expandable"
                                                                                    href="javascript:void('Màu chữ')"
                                                                                    title="Màu chữ" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_207_label"
                                                                                    aria-describedby="cke_207_description"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(448,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(449,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(450,this);return false;"
                                                                                    aria-expanded="false"><span
                                                                                        class="cke_button_icon cke_button__textcolor_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -408px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_207_label"
                                                                                        class="cke_button_label cke_button__textcolor_label"
                                                                                        aria-hidden="false">Màu
                                                                                        chữ</span><span
                                                                                        id="cke_207_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span><span
                                                                                        class="cke_button_arrow"></span></a><a
                                                                                    id="cke_208"
                                                                                    class="cke_button cke_button__bgcolor cke_button_off cke_button_expandable"
                                                                                    href="javascript:void('Màu nền')"
                                                                                    title="Màu nền" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_208_label"
                                                                                    aria-describedby="cke_208_description"
                                                                                    aria-haspopup="listbox"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(451,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(452,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(453,this);return false;"
                                                                                    aria-expanded="false"><span
                                                                                        class="cke_button_icon cke_button__bgcolor_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -384px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_208_label"
                                                                                        class="cke_button_label cke_button__bgcolor_label"
                                                                                        aria-hidden="false">Màu
                                                                                        nền</span><span
                                                                                        id="cke_208_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span><span
                                                                                        class="cke_button_arrow"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_209" class="cke_toolbar"
                                                                            aria-labelledby="cke_209_label"
                                                                            role="toolbar"><span id="cke_209_label"
                                                                                class="cke_voice_label">Công
                                                                                cụ</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_210"
                                                                                    class="cke_button cke_button__maximize cke_button_off"
                                                                                    href="javascript:void('Phóng to tối đa')"
                                                                                    title="Phóng to tối đa"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_210_label"
                                                                                    aria-describedby="cke_210_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(454,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(455,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(456,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__maximize_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1416px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_210_label"
                                                                                        class="cke_button_label cke_button__maximize_label"
                                                                                        aria-hidden="false">Phóng to tối
                                                                                        đa</span><span
                                                                                        id="cke_210_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_211"
                                                                                    class="cke_button cke_button__showblocks cke_button_off"
                                                                                    href="javascript:void('Hiển thị các khối')"
                                                                                    title="Hiển thị các khối"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_211_label"
                                                                                    aria-describedby="cke_211_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(457,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(458,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(459,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__showblocks_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 -1800px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_211_label"
                                                                                        class="cke_button_label cke_button__showblocks_label"
                                                                                        aria-hidden="false">Hiển thị các
                                                                                        khối</span><span
                                                                                        id="cke_211_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_212"
                                                                            class="cke_toolbar cke_toolbar_last"
                                                                            aria-labelledby="cke_212_label"
                                                                            role="toolbar"><span id="cke_212_label"
                                                                                class="cke_voice_label">about</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_213"
                                                                                    class="cke_button cke_button__about cke_button_off"
                                                                                    href="javascript:void('Thông tin về CKEditor 4')"
                                                                                    title="Thông tin về CKEditor 4"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_213_label"
                                                                                    aria-describedby="cke_213_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(460,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(461,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(462,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__about_icon"
                                                                                        style="background-image:url('http://localhost/masterpdo/admin/ckeditor/plugins/icons.png?t=JB9C');background-position:0 0px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_213_label"
                                                                                        class="cke_button_label cke_button__about_label"
                                                                                        aria-hidden="false">Thông tin về
                                                                                        CKEditor 4</span><span
                                                                                        id="cke_213_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span></span></span>
                                                                <div id="cke_2_contents" class="cke_contents cke_reset"
                                                                    role="presentation" style="height: 620px;"><span
                                                                        id="cke_217" class="cke_voice_label">Nhấn ALT +
                                                                        0 để được giúp đỡ</span><iframe src=""
                                                                        frameborder="0"
                                                                        class="cke_wysiwyg_frame cke_reset"
                                                                        title="Bộ soạn thảo văn bản có định dạng, contenten"
                                                                        aria-describedby="cke_217" tabindex="0"
                                                                        allowtransparency="true"
                                                                        style="width: 100%; height: 100%;"></iframe>
                                                                </div><span id="cke_2_bottom"
                                                                    class="cke_bottom cke_reset_all" role="presentation"
                                                                    style="user-select: none;"><span id="cke_2_resizer"
                                                                        class="cke_resizer cke_resizer_vertical cke_resizer_ltr"
                                                                        title="Kéo rê để thay đổi kích cỡ"
                                                                        onmousedown="CKEDITOR.tools.callFunction(233, event)">◢</span><span
                                                                        id="cke_2_path_label"
                                                                        class="cke_voice_label">Nhãn thành
                                                                        phần</span><span id="cke_2_path"
                                                                        class="cke_path" role="group"
                                                                        aria-labelledby="cke_2_path_label"><span
                                                                            class="cke_path_empty">&nbsp;</span></span>
                                                                    <div class="cke_wordcount" style=""
                                                                        title="Statistics"><span
                                                                            id="cke_wordcount_contenten"
                                                                            class="cke_path_item">Paragraphs: 0, Words:
                                                                            0, Characters: 0</span></div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card card-primary card-outline text-sm">
                                <div class="card-header">
                                    <h3 class="card-title">Danh mục Sản Phẩm</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">

                                </div>
                            </div>

                            <div class="card card-primary card-outline text-sm">
                                <div class="card-header">
                                    <h3 class="card-title">Hình ảnh Sản Phẩm</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="photoUpload-zone">
                                        <div class="photoUpload-detail" id="photoUpload-preview">
                                            <img class="rounded"
                                                onerror="this.src='http://localhost/masterpdo/thumbs/250x250x1/assets/images/noimage.png';"
                                                src="http://localhost/masterpdo/assets/images/noimage.png"
                                                alt="Alt Photo">
                                        </div>
                                        <label class="photoUpload-file" id="photo-zone" for="file-zone">
                                            <input type="file" name="file" id="file-zone">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <p class="photoUpload-drop">Kéo và thả hình vào đây</p>
                                            <p class="photoUpload-or">hoặc</p>
                                            <p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
                                        </label>
                                        <div class="photoUpload-dimension">Width: 270 px - Height: 270 px
                                            (.jpg|.gif|.png|.jpeg|.gif)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline text-sm">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin Sản Phẩm</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-group d-inline-block mb-2 mr-2">
                                    <label for="noibat-checkbox" class="d-inline-block align-middle mb-0 mr-2">Nổi
                                        bật:</label>
                                    <div class="custom-control custom-checkbox d-inline-block align-middle">
                                        <input type="checkbox" class="custom-control-input noibat-checkbox"
                                            name="status[noibat]" id="noibat-checkbox" checked="" value="noibat">
                                        <label for="noibat-checkbox" class="custom-control-label"></label>
                                    </div>
                                </div>
                                <div class="form-group d-inline-block mb-2 mr-2">
                                    <label for="hienthi-checkbox" class="d-inline-block align-middle mb-0 mr-2">Hiển
                                        thị:</label>
                                    <div class="custom-control custom-checkbox d-inline-block align-middle">
                                        <input type="checkbox" class="custom-control-input hienthi-checkbox"
                                            name="status[hienthi]" id="hienthi-checkbox" checked="" value="hienthi">
                                        <label for="hienthi-checkbox" class="custom-control-label"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="numb" class="d-inline-block align-middle mb-0 mr-2">Số thứ tự:</label>
                                <input type="number"
                                    class="form-control form-control-mini d-inline-block align-middle text-sm" min="0"
                                    name="data[numb]" id="numb" placeholder="Số thứ tự" value="1">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="d-block" for="code">Mã sản phẩm:</label>
                                    <input type="text" class="form-control text-sm" name="data[code]" id="code"
                                        placeholder="Mã sản phẩm" value="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="d-block" for="regular_price">Giá bán:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control format-price regular_price text-sm"
                                            name="data[regular_price]" id="regular_price" placeholder="Giá bán"
                                            value="">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><strong>VNĐ</strong></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="d-block" for="sale_price">Giá mới:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control format-price sale_price text-sm"
                                            name="data[sale_price]" id="sale_price" placeholder="Giá mới" value="">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><strong>VNĐ</strong></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="d-block" for="discount">Chiết khấu:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control discount text-sm" name="data[discount]"
                                            id="discount" placeholder="Chiết khấu" value="" maxlength="3" readonly="">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><strong>%</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline text-sm">
                        <div class="card-header">
                            <h3 class="card-title">Bộ sưu tập Sản Phẩm</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="filer-gallery" class="label-filer-gallery mb-3">Album hình:
                                    (.jpg|.gif|.png|.jpeg|.gif)</label>
                                <div class="jFiler jFiler-theme-dragdropbox"><input type="file" name="files[]"
                                        id="filer-gallery" multiple="multiple"
                                        data-params="Y29tPXByb2R1Y3QmYWN0PWFkZCZ0eXBlPXNhbi1waGFt"
                                        data-hash="gZrgLfj3PC"
                                        style="position: absolute; left: -9999px; top: -9999px; z-index: -9999;">
                                    <div class="jFiler-input-dragDrop">
                                        <div class="jFiler-input-inner">
                                            <div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div>
                                            <div class="jFiler-input-text">
                                                <h3>Kéo và thả hình vào đây</h3> <span
                                                    style="display:inline-block; margin: 15px 0">hoặc</span>
                                            </div><a class="jFiler-input-choose-btn blue">Chọn hình</a>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" class="col-filer"
                                    value="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                                <input type="hidden" class="act-filer" value="man">
                                <input type="hidden" class="folder-filer" value="product">
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-sm">
                        <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                                class="far fa-save mr-2"></i>Lưu</button>
                        <button type="submit" class="btn btn-sm bg-gradient-success submit-check" name="save-here"><i
                                class="far fa-save mr-2"></i>Lưu tại trang</button>
                        <button type="reset" class="btn btn-sm bg-gradient-secondary"><i
                                class="fas fa-redo mr-2"></i>Làm lại</button>
                        <a class="btn btn-sm bg-gradient-danger"
                            href="index.php?com=product&amp;act=man&amp;type=san-pham" title="Thoát"><i
                                class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
                        <input type="hidden" name="id" value="">
                    </div>
                    <input type="hidden" name="hash" value="gZrgLfj3PC">
                </form>
            </section>
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
<script>
    //<![QUANTITYPICK[
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
//]]>
</script>

</html>