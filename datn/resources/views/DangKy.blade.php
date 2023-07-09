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
        <!-- Đăng ký -->
        <div class="wrap-userdk">
            <div class="box-regis">
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
                <div class="title-user">
                    <span>Đăng ký</span>
                </div>
                <form class="form-user validation-user" novalidate="" method="post" action="{{route('check_register')}}"
                    enctype="multipart/form-data">
                    @csrf
                    <label>Tên đăng nhập</label>
                    <div class="input-group input-user">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                        </div>
                        <input type="text" class="form-control text-sm" id="username" name="username"
                            placeholder="Nhập họ tên của bạn" value="" required="">
                        <div class="invalid-feedback">Vui lòng nhập tên đăng nhập</div>
                    </div>
                    @error('username')
                    <p class="mess-respon">{{ $message }}</p>
                    @enderror
                    <label>Họ tên</label>
                    <div class="input-group input-user">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                        </div>
                        <input type="text" class="form-control text-sm" id="fullname" name="fullname"
                            placeholder="Nhập họ tên của bạn" value="" required="">
                        <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                    </div>
                    @error('fullname')
                    <p class="mess-respon">{{ $message }}</p>
                    @enderror
                    
                    <label>Mật khẩu</label>
                    <div class="input-group input-user">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-lock"></i></div>
                        </div>
                        <input type="password" class="form-control text-sm" id="id_password" name="password"
                            placeholder="Nhập mật khẩu (trên 8 kí tự)" required="">
                        <i class="far fa-eye" id="togglePassword"></i>
                        <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
                    </div>
                    @error('password')
                    <p class="">{{ $message }}</p>
                    @enderror
                    <label>Nhập lại mật khẩu</label>
                    <div class="input-group input-user">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-lock"></i></div>
                        </div>
                        <input type="password" class="form-control text-sm" id="id_repassword" name="repassword"
                            placeholder="Nhập lại mật khẩu" required="">
                            <i class="far fa-eye" id="togglerePassword"></i>
                        <div class="invalid-feedback">Vui lòng nhập lại mật khẩu</div>
                    </div>
                    @error('repassword')
                    <p class="">{{ $message }}</p>
                    @enderror
                    <label>Email</label>
                    <div class="input-group input-user">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                        </div>
                        <input type="email" class="form-control text-sm" id="email" name="email"
                            placeholder="Nhập địa chỉ email của bạn" value="" required="">
                        <div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>
                    </div>
                    @error('email')
                    <p class="">{{ $message }}</p>
                    @enderror
                    <label>Điện thoại</label>
                    <div class="input-group input-user">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-phone-square"></i></div>
                        </div>
                        <input type="number" class="form-control text-sm" id="phone" name="phone"
                            placeholder="Nhập số điện thoại" value="" required="">
                        <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                    </div>
                    @error('phone')
                    <p class="">{{ $message }}</p>
                    @enderror
                     
                    <div class="button-user">
                        <input type="submit" class="btn btn-primary btn-block" name="check-register" value="Đăng ký">
                    </div>
                </form> 
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
$('input.input-qty').each(function() {
    var $this = $(this),
        qty = $this.parent().find('.is-form'),
        min = Number($this.attr('min')),
        max = Number($this.attr('max'))
    if (min == 0) {
        var d = 0
    } else d = min
    $(qty).on('click', function() {
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

<script>
    const togglerePassword = document.querySelector('#togglerePassword');
  const repassword = document.querySelector('#id_repassword');

  togglerePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = repassword.getAttribute('type') === 'password' ? 'text' : 'password';
    repassword.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa fa-eye-slash');
});
</script>

</html>