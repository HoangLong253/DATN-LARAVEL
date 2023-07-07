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
                        <a class="" title="" href="{{route('TK')}}">Sách tham khảo</a>
                         <ul>
                            <li>
                                <a class="has-child transition" title=" " href="{{route('c2')}}"> Cấp 2</a>
                                <ul>
                                    <li>
                                        <a class="has-child transition" title=" " href="{{route('l6')}}"> lớp 6</a>
                                        <a class="has-child transition" title=" " href="{{route('l7')}}"> lớp 7</a>
                                        <a class="has-child transition" title=" " href="{{route('l8')}}"> lớp 8</a>
                                        <a class="has-child transition" title=" " href="{{route('l9')}}"> lớp 9</a>
                                    </li>
                                </ul>
                                <a class="has-child transition" title=" " href="{{route('c3')}}"> Cấp 3</a>
                                <ul>
                                    <li>
                                        <a class="has-child transition" title=" " href="{{route('l10')}}"> lớp 10</a>
                                        <a class="has-child transition" title=" " href="{{route('l11')}}"> lớp 11</a>
                                        <a class="has-child transition" title=" " href="{{route('l12')}}"> lớp 12</a>
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
             
        </ul>
    </div>
</div>