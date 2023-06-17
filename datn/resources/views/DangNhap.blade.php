<!DOCTYPE html>
<html lang="en"> 
@include ('index_partials.head') 
<body>

    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Dedicated Dragon BookStore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

        <!-- login -->
    <div class="wrap-user">
        <div class="title-user d-flex align-items-end justify-content-between">
            <span>Đăng nhập</span>
            <a href=" " title="Quên mật khẩu">Quên mật khẩu</a>
        </div>
        <form class="form-user validation-user" novalidate="" method="post" action="account/dang-nhap" enctype="multipart/form-data">
                    <div class="input-group input-user">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                </div>
                <input type="text" class="form-control text-sm" id="username" name="username" placeholder="Tài khoản" required="">
                <div class="invalid-feedback">Vui lòng nhập tài khoản</div>
            </div>
            <div class="input-group input-user">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-lock"></i></div>
                </div>
                <input type="password" class="form-control text-sm" id="password" name="password" placeholder="Mật khẩu" required="">
                <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
            </div>
            <div class="button-user d-flex align-items-center justify-content-between">
                <input type="submit" class="btn btn-primary" name="login-user" value="Đăng nhập">
                <div class="checkbox-user custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="remember-user" id="remember-user" value="1">
                    <label class="custom-control-label" for="remember-user">Nhớ mật khẩu</label>
                </div>
            </div>
            <div class="note-user">
                <span>Bạn chưa có tài khoản  ! </span>
                <a href="{{route('validated-login')}}" title="Đăng ký">Đăng ký</a>
            </div>
        </form>
    </div>
    
    
</body>
</html>

