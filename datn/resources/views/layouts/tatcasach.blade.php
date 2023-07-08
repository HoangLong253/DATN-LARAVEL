@extends('layouts.app')
@section('content')
<!-- Main -->

<!-- bỏ all sản phẩm, bên trái là danh mục sản phẩm, 
                 ở dưới có thể có tìm theo mức giá, dưới nữa có thể 
                 lọc theo nhà xuất bản bla bla, bên phải là sản phẩm -->

<!--Bên trái-->
<nav aria-label="breadcrumb"></nav>
@yield('breadcrumb')
</nav>
<div class="wrap-main">
    <div class="wrap-content">

        <div class="content-main flex-sp-dm">
            <div class="danhmuc-sp">
                <div class="danhmuc-sp-list">
                    <div class="title-main-sub">
                        DANH MỤC SẢN PHẨM
                    </div>
                    <ul>
                        <li>
                            <a href="{{route('GK')}}">Sách Giáo Khoa</a>
                            <ul>
                                <li>
                                    <a href="{{route('c2')}}">Cấp 2</a>
                                    <ul>
                                        <li><a href="{{route('l6')}}">Lớp 6</a></li>
                                        <li><a href="{{route('l7')}}">Lớp 7</a></li>
                                        <li><a href="{{route('l8')}}">Lớp 8</a></li>
                                        <li><a href="{{route('l9')}}">Lớp 9</a></li>
                                    </ul>
                                </li> 
                                <li>
                                    <a href="{{route('c3')}}">Cấp 3</a>
                                    <ul>
                                        <li><a href="{{route('l10')}}">Lớp 10</a></li>
                                        <li><a href="{{route('l11')}}">Lớp 11</a></li>
                                        <li><a href="{{route('l12')}}">Lớp 12</a></li>
                                    </ul>
                                </li> 
                            </ul>
                        </li>

                        <li>
                            <a href="{{route('TK')}}">Sách Tham khảo</a>
                        </li> 

                        <li>
                            <a href="{{route('KHTN')}}">Sách Khoa Học Tự Nhiên</a>
                        </li> 
                    </ul>
                    <div class="title-main-sub">
                        NHÀ XUẤT BẢN
                    </div>
                    <ul>
                        <li>
                            <a href="{{route('GD')}}">Giáo Dục</a>
                        </li>
                        <li>
                            <a href="{{route('DN')}}">Đồng Nai</a>
                        </li>
                        <li>
                            <a href="{{route('TN')}}">Thanh Niên</a>
                        </li>
                        <li>
                            <a href="{{route('THTPHCM')}}">Tổng Hợp Thành Phố Hồ Chí Minh</a>
                        </li>
                        <li>
                            <a href="{{route('DHQGHN')}}">Đại Học Quốc Gia Hà Nội</a>
                        </li> 
                    </ul>
                </div>   
            </div>
            @yield('main')
        </div>
    </div>
</div>
@endsection