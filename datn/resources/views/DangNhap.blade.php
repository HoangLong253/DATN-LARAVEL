<!DOCTYPE html>
<html lang="en">
@include ('index_partials.head')

<body class="bg-dn">

    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="{{ route('index') }}">LT BookStore</a>
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
                    @error('username')
                        <p class="">{{ $message }}</p>
                    @enderror
                    <div class="input-group input-user">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-lock"></i></div>
                        </div>
                        <input type="password" class="form-control text-sm" id="id_password" name="password"
                            placeholder="Mật khẩu" required="">
                        <i class="far fa-eye matkhau" id="togglePassword"></i>
                    </div>
                    @error('password')
                        <p class="">{{ $message }}</p>
                    @enderror
                    <div class="button-user d-flex align-items-center justify-content-between">
                        <!--nút đăng nhập-->
                        <input type="submit" class="btn btn-primary" name="login-user" value="Đăng nhập">
                    </div>
                    <div class="note-user">
                        <span>Bạn chưa có tài khoản ! </span>
                        <a href="{{route('dangki')}}" title="Đăng ký">Đăng ký</a>
                    </div>
                </form>
            </div>
        </div>
</body>
<script>
    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa fa-eye-slash');
});
</script>
</html>