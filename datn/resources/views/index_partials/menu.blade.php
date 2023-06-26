<div class=" menu  " id="menu-scroll">
    <div class="wrap-content">
        <ul class="  d-flex justify-content-between align-items-center">
            <li><a href="{{ route('index') }}">Trang chủ</a></li>
            <li class="line"></li>
            <li><a href="{{ route('gioithieu') }}">VỀ CHÚNG TÔI</a></li>
                <li class="line"></li>
                <li><a href="{{ route('collections')}}">Sản Phẩm</a>
                <ul>
                    <li>
                        <a class="has-child transition" title="" href="{{route('GK')}}">Sách giáo khoa</a>
                        <a class="has-child transition" title="" href="{{route('TK')}}">Sách tham khảo</a>
                         <ul>
                            <li>
                                <a class="has-child transition" title=" " href="#"> sản phẩm 2</a>
                                <a class="has-child transition" title=" " href="#"> sản phẩm 2</a>
                                <a class="has-child transition" title=" " href="#"> sản phẩm 2</a>
                                <ul>
                                    <li>
                                        <a class="has-child transition" title=" " href="#"> sản phẩm 3</a>
                                        <a class="has-child transition" title=" " href="#"> sản phẩm 3</a>
                                        <a class="has-child transition" title=" " href="#"> sản phẩm 3</a>
                                        <ul>
                                            <li>
                                                <a class="transition" title=" " href="#"> sản phẩm 4</a>
                                                <a class="transition" title=" " href="#"> sản phẩm 4</a>
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