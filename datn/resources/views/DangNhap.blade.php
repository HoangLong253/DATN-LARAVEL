<!DOCTYPE html>
<html lang="en">
@include ('index_partials.head')

<body class="bg-dn">

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
        <div class="return">
            @if ($message = Session::get('success'))
            <div>
                <div style="color: #12c300;
                font-size: 1.2em;font-weight: bold;">{{ $message }}</div>
            </div>
            @endif
            @if ($message = Session::get('fail'))
            <div>
                <div style="color: #dd0505;
                font-size: 1.2em;font-weight: bold;">{{ $message }}</div>
            </div>
            @endif
        </div>

        <!-- login -->
        <div class="wrap-userdn">
            <div class="box-login">
                <div class="title-user d-flex align-items-end justify-content-between">
                    <span>Đăng nhập</span>
                    <a href="" title="Quên mật khẩu">Quên mật khẩu</a>
                </div>
                <form class="form-user validation-user" novalidate="" method="post" action="{{route('check_login')}}"
                    enctype="">
                    @csrf
                    <div class="input-group input-user">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                        </div>
                        <input type="text" class="form-control text-sm" id="username" name="username"
                            placeholder="Tài khoản" required="">
                        <div class="invalid-feedback">Vui lòng nhập tài khoản</div>
                    </div>
                    <div class="input-group input-user">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-lock"></i></div>
                        </div>
                        <input type="password" class="form-control text-sm" id="password" name="password"
                            placeholder="Mật khẩu" required="">

                        @error('username')
                        <p class="">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="button-user d-flex align-items-center justify-content-between">
                        <!--nút đăng nhập-->
                        <input type="submit" class="btn btn-primary" name="login-user" value="Đăng nhập">
                        <!--nút nhớ mật khẩu-->
                        <div class="checkbox-user custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="remember-user" id="remember-user"
                                value="1">
                            <label class="custom-control-label" for="remember-user">Nhớ mật khẩu</label>
                        </div>
                    </div>
                    <div class="note-user">
                        <span>Bạn chưa có tài khoản ! </span>
                        <a href="#" title="Đăng ký">Đăng ký</a>
                    </div>
                </form>
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
            </div>
        </div>
        <!-- Login admin     -->
        <div class="wrap-login-adm">
            <div class="wrap-content"> 
                <body class="sidebar-mini text-sm login-page" style="min-height: 263px;">
                    
                    <!-- Wrapper -->
                    <div class="login-view-website text-sm"><a href="../" target="_blank" title="Xem website"><i
                                class="fas fa-reply mr-2"></i>Xem website</a></div>
                    <div class="login-box">
                        <div class="card">
                            <div class="card-body login-card-body">
                                <p class="login-box-msg">Đăng nhập hệ thống</p>
                                <form enctype="multipart/form-data">
                                    <div class="input-group mb-3">
                                        <div class="input-group-append login-input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control text-sm" name="username" id="username"
                                            placeholder="Tài khoản *" autocomplete="off">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-append login-input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                        <input type="password" class="form-control text-sm" name="password"
                                            id="password" placeholder="Mật khẩu *" autocomplete="off">
                                        <div class="input-group-append">
                                            <div class="input-group-text show-password">
                                                <span class="fas fa-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button"
                                        class="btn btn-sm bg-gradient-danger btn-block btn-login text-sm p-2">
                                        <div class="sk-chase d-none">
                                            <div class="sk-chase-dot"></div>
                                            <div class="sk-chase-dot"></div>
                                            <div class="sk-chase-dot"></div>
                                            <div class="sk-chase-dot"></div>
                                            <div class="sk-chase-dot"></div>
                                            <div class="sk-chase-dot"></div>
                                        </div>
                                        <span>Đăng nhập</span>
                                    </button>
                                    <div class="alert my-alert alert-login d-none text-center text-sm p-2 mb-0 mt-2"
                                        role="alert"></div>
                                </form>
                            </div>
                        </div>
                    </div> 
            </div>

</body>

</html>