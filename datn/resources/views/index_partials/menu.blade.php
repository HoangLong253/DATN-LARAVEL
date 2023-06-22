<div class=" menu  " id="menu-scroll">
    <div class="wrap-content">
        <ul class="  d-flex justify-content-between align-items-center">
            <li><a href="{{ route('index') }}">Trang chủ</a></li>
            <li class="line"></li>
            <li><a href="{{ route('gioithieu') }}">Giới Thiệu</a></li>
            <li class="line"></li>
            <li><a href="{{ route('collections')}}">Sản Phẩm</a>
                <ul>
                    <li>
                        <a class="has-child transition" title="" href=" ">Sản phẩm 1</a>
                        <ul>
                            <li>
                                <a class="has-child transition" title=" " href=" "> sản phẩm 2</a>
                                <ul>
                                    <li>
                                        <a class="has-child transition" title=" " href=" "> sản phẩm 3</a>
                                        <ul>
                                            <li>
                                                <a class="transition" title=" " href=" "> sản phẩm 4</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="line"></li>
            <li><a href="{{ route('tintuc') }}">Tin Tức</a></li>
            <li class="line"></li>
            <li><a href="{{ route('dichvu') }}">Dịch Vụ</a></li>
            <li class="line"></li>
            <li><a href="{{ route('lienhe') }}">Liên hệ</a></li>
        </ul>
    </div>
</div>