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
                        <div class="fb-google-btn">
                            <a href="" class="fb-google-btn--fb btn btn--size-s btn--with-icon">
                                <i class=" fb-google-btn-icon fa-brands fa-square-facebook"></i>
                                <span class="fb-google-btn-title">Kết nối với Facebook</span>
                            </a>
                            <a href="" class="fb-google-btn--gg btn btn--size-s btn--with-icon">
                                <i class="fb-google-btn-icon fa-brands fa-google"></i>
                                <span class="fb-google-btn-title">Kết nối với Google</span>
            
                            </a>
                        </div>
                        <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark btn-block">Đăng Ký</button>
                        </div>
                        </form>
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