<!DOCTYPE html>
<html lang="vn">
<!-- Head -->
@include ('index_partials.head')
<body>
    <div class="wrap-login-adm">
        <div class="wrap-content"> 
            <body class="sidebar-mini text-sm login-page" style="min-height: 263px;">

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

                <!-- Wrapper -->
                <div class="login-box">
                    <div class="card">
                        <div class="card-body login-card-body">
                            <p class="login-box-msg">Đăng nhập hệ thống</p>
                            <form enctype="multipart/form-data" method="post" action="{{route('adm_login')}}">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-append login-input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control text-sm" name="username" id="username"
                                        placeholder="Tài khoản *" autocomplete="off">
                                </div>
                                @error('username')
                                    <p class="">{{ $message }}</p>
                                @enderror
                                <div class="input-group mb-3">
                                    <div class="input-group-append login-input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                    <input type="password" class="form-control text-sm" name="password"
                                        id="password" placeholder="Mật khẩu *" autocomplete="off">
                                    <i class="far fa-eye" id="togglePassword"></i>
                                    <div class="input-group-append">
                                        <div class="input-group-text show-password">
                                            <span class="fas fa-eye"></span>
                                        </div>
                                    </div>
                                </div>
                                @error('password')
                                    <p class="">{{ $message }}</p>
                                @enderror
                                <button type="submit"
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
                <div class="login-view-website text-sm"><a href="{{route('index')}}" target="_blank" title="Xem website"><i
                    class="fas fa-reply mr-2"></i>Xem website</a>
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
    this.classList.toggle('fa-eye-slash');
});
</script>
</html>