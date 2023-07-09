 
<!--  -->
<div class="header">
    <div class="header-top">
        <div class="wrap-content">
            <div class="header__navbar">
                <ul class="header__navbar-list">
                    <a href="https://bom.so/pPF8sq" class="header__navbar-item header__navbar-item--separate "
                        target="new">
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
                        <a href="{{route('tintuc')}}" class="header__navbar-item-link">
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
                                        <span> <img class="header__notify-img" src="./assets/images/logo/logo.png"
                                                alt="" class="header__notify-img">
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
                                        <span> <img class="header__notify-img" src="./assets/images/logo/logo.png"
                                                alt="" class="header__notify-img">
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
                                        <span> <img class="header__notify-img" src="./assets/images/logo/logo.png"
                                                alt="" class="header__notify-img">
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
                                <a href="{{route('tintuc')}}" class="header__notify-footer-btn">Xem tất cả</a>
                            </div>
                        </div>

                    </li>
                    <li class="header__navbar-item">
                        <a href="" class="header__navbar-item-link">
                            <i class="header__navbar-icon fa-solid fa-circle-question"></i>
                            Trợ Giúp
                        </a>
                    </li>
                     
                    @if (isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']== 1)
                    <li class="header__navbar-item">
                        <a href="{{route('thongtinnguoidung')}}">
                            <div class="header__navbar-item">Xin chào: {{ $user1[0]->HoTenND }}</div>
                        </a>
                        <div class="header__navbar-item header__navbar-item--separate">|</div>
                        <a href="{{ route('dangxuat') }}" class="header__navbar-item">
                            Đăng xuất
                        </a>
                    </li>
                    @else
                    <li class="header__navbar-item">
                        <a href="{{ route('dangki') }}" class="header__navbar-item">
                            Đăng kí
                        </a>
                        <div class="header__navbar-item header__navbar-item--separate">|</div>
                        <a href="{{ route('dangnhap') }}" class="header__navbar-item">
                            Đăng nhập
                        </a>
                    </li>

                    @endif
                </ul>

            </div>
        </div>
    </div>
    <!-- Header with search -->
    <div class="header-bottom">
        <div class="wrap-content">
            <div class="header-with-search ">
                <div class="logo">
                    <div class="header__logo  ">
                        <div class=" ">
                        <a class=" " href="{{route('index')}}">
                            <img class="header__logo-img"
                                src="{{asset('assets/images/logo/logo.png')}}" alt=""></a>
                        </div>
                        <div class="info-company">
                            <div class="header__cpnname">LT Bookstore</div>
                            <div class="company_desc">Tri thức là sức mạnh</div>
                        </div> 
                    </div>
                </div>
                <form method="post" action="{{route('search')}}" class="header__search">
                    @csrf
                    <div class="header__search-input-wrap">
                        <input type="text" name ="search" id ="search" class="header__search-input" placeholder="Nhập từ khóa để tìm kiếm">
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
                    <button class="header__search-btn" type="submit">
                        <i class="header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
                <!-- Cart -->  
                <div class="header__cart">
                    <a href="{{route('giohang')}}">
                        <div class="header__cart-wrap"><i class="header__cart-icon fa-solid fa-cart-shopping"></i>
                            <span class="header__cart-notice">
                                @php
                                if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged']==1 ){
                                    echo count($cartcount);
                                } else if(session('cart') != null) {
                                    echo count(session('cart'));
                                } else {
                                    echo 0;
                                }
                                @endphp
                            </span>

                        </div> 
                            <!-- No cart: header__cart-list-no-cart-->
                        <div class="header__cart-list-no-cart">
                            
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>