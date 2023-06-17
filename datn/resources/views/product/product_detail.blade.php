<!DOCTYPE html>
<html lang="vn">
<!-- Head -->
@include ('index_partials.head')
<!-- Body -->

<body>
    <div class="containerr">
        <div class="main">
            <!-- Header -->
            @include ('index_partials.header')
            <!-- Menu  -->
            @include ('index_partials.menu')
            <!-- Breadcrumb  -->
            @include ('index_partials.breadcrumb')
            <!-- Content -->
            <div class="wrap-product-page">
                <div class="wrap-content">  
                    <div class="wrap-product-whole">
                        <div class="product-images-info">
                            <div class="img-product">
                                <div class="img-main-product">
                                    <img src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                        alt="">
                                </div>
                                <div class="slide-product">
                                    <div class="wrap-slide-product">
                                        <div class="owl-product owl-carousel owlCarousel">
                                            <div class="owl-product-items"><img
                                                    src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                                    alt=""></div>
                                            <div class="owl-product-items"><img
                                                    src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                                    alt=""></div>
                                            <div class="owl-product-items"><img
                                                    src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                                    alt=""></div>
                                            <div class="owl-product-items"><img
                                                    src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                                    alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="infor-product">
                                <div class="infor-product-left">
                                    <div class="title-product">Ngữ văn 6 tập 1</div>
                                    <div class="share-product-icon">
                                        <!-- Thay bằng ảnh -->
                                        <span class="share-icon-items"><a href=""><i
                                                    class="fa-brands fa-square-facebook"></i></a></span>
                                        <span class="share-icon-items"><a href=""><i
                                                    class="fa-brands fa-square-instagram"></i></a></span>
                                        <span class="share-icon-items"><a href=""><i
                                                    class="fa-brands fa-square-twitter"></i></a></span>
                                        <span class="share-icon-items"><a href=""><i
                                                    class="fa-brands fa-square-youtube"></i></a></span>
                                    </div>
                                    <div class="infor-product-inter">
                                        <div class="infor-product-inter-title">Thông tin chung:</div>
                                        <div class="grid-info-product">
                                            <div class="name-text1"> Tên tác giả: <span class="name-text-infor">Nhiều
                                                    tác
                                                    giả</span>
                                            </div>
                                            <div class="name-text1"> Nhà xuất bản: <span class="name-text-infor">Giáo
                                                    dục</span>
                                            </div>
                                            <div class="name-text1"> Năm xuất bản: <span
                                                    class="name-text-infor">2023</span>
                                            </div>
                                            <div class="name-text1"> Loại sách: <span class="name-text-infor">Sách giáo
                                                    khoa</span>
                                            </div>
                                            <div class="name-text1"> Tình trạng: <span class="name-text-infor">Còn
                                                    hàng</span>
                                            </div>
                                            <div class="name-text1"> Kích thước: <span class="name-text-infor">Kích
                                                    thước</span>
                                            </div>
                                        </div>
                                        <div class="flex-price-product">
                                            <span class="price-new">Giá khuyến mãi: <span
                                                    class="price-bold">50.000đ</span></span>
                                            <!-- Format monney tự cách hoặc chấm + Auto set "Đ" sau giá -->
                                            <span class="price-old">Giá gốc: <span
                                                    class="price-strikethrough">70.000đ</span></span>
                                        </div>
                                        <div class="quantity-pick">Số lượng:
                                            <span class="buttons_added">
                                                <input class="minus is-form" type="button" value="-">
                                                <input aria-label="quantity" class="input-qty" max="10" min="1" name=""
                                                    type="number" value="1">
                                                <input class="plus is-form" type="button" value="+">
                                            </span>
                                        </div>
                                        <div class="flex-btn-product">
                                            <div class="add-cart-btn"><button type="button" class="btn btn-danger">Thêm
                                                    vào
                                                    giỏ
                                                    hàng
                                                    <i class="fa-solid fa-bag-shopping"></i></button></div>
                                            <button type="button" class="btn btn-primary">Mua ngay <i
                                                    class="fa-solid fa-credit-card"></i></button>
                                        </div>
                                        <div class="policy-go-with">
                                            <div class="policy-go-with-title">
                                                Chính sách của chúng tôi
                                            </div>
                                            <div class="policy-gw-items">
                                                <i class="fa-solid fa-check"></i> <a class="plc-gw" href="">Bookcare</a>
                                                Sách
                                                bọc
                                                màng có bảo vệ + đóng hộp carton 3 lớp
                                            </div>
                                            <div class="policy-gw-items">
                                                <i class="fa-solid fa-check"></i> Được <a <a class="plc-gw" href="">Kiểm
                                                    tra
                                                    hàng</a> trước khi nhận
                                            </div>
                                            <div class="policy-gw-items">
                                                <i class="fa-solid fa-check"></i> Hoàn tiền <a <a class="plc-gw"
                                                    href="">100%</a> nếu
                                                sản phẩm lỗi
                                            </div>
                                            <div class="policy-gw-items">
                                                <i class="fa-solid fa-check"></i> Hỗ trợ xuất hóa đơn <a <a
                                                    class="plc-gw" href="">VAT
                                                </a> theo yêu cầu
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="infor-product-right">
                                    <div class="infor-product-inter-title">Mô tả sản phẩm:</div>
                                    .
                                </div>
                            </div>
                        </div>
                        <div class="wrap-product-comment-infor">
                            <div class="wrap-product-infor">
                                <div class="wrap-product-infor_title">Thông tin chi tiết</div>
                                <div class="wrap-product-content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis venenatis
                                    elit.
                                    Cras a eros vel lectus placerat maximus eget non velit. Pelle
                                    ntesque et convallis erat. In tristique, quam at luctus viverra, augue nibh volutpat
                                    nisl,
                                    nec euismod nisi ex vel sem. Nulla facilisi. Vivamus at mauris d
                                    ignissim, varius eros sed, euismod nisi. Mauris in elit congue, fermentum ligula
                                    sagittis,
                                    pulvinar erat. In fringilla pulvinar consequat. Pellentesque in s
                                    apien arcu. Donec posuere est ut pharetra ultricies. Vestibulum posuere libero vitae
                                    odio
                                    mattis, non pellentesque nulla rhoncus. Duis pharetra felis vel odio elementum
                                    rutrum.
                                    Proin imperdiet odio justo, vitae sodales augue tempus eget. Ut lobortis turpis ut
                                    ullamcorper molestie. Pellentesque consectetur iaculis odio, id
                                    scelerisque purus fringilla a. Pellentesque eget nibh iaculis magna malesuada
                                    rhoncus
                                    quis
                                    quis est. Nunc non purus id nulla sollicitudin pulvinar. Aen
                                    ean id placerat orci. Duis efficitur rhoncus magna sed faucibus. Aenean porta velit
                                    lacus,
                                    at venenatis ex suscipit a. Nulla nibh purus, aliquam porttitor urna id, auctor
                                    gravid
                                    a lacus. Maecenas id rhoncus sem. Maecenas sit amet pretium massa. Nunc eros dolor,
                                    tincidunt a euismod a, auctor ac nunc. Pellentesque placerat nec ante ut accumsan.
                                    Suspendisse ac tempor sapien.
                                    Cras nec purus fermentum, lobortis lectus vel, pulvinar ex. Cras ullamcorper
                                    placerat
                                    leo,
                                    blandit mollis odio vehicula at. Proin condimentu
                                    m porta diam non varius. Cras sed varius sapien. Maecenas et enim vel quam auctor
                                    aliquam.
                                    Aliquam interdum nec sem laoreet laoreet.
                                    Nullam auctor, odio sed condimentum eleifend, sem ligula semper massa, in
                                    sollicitudin
                                    magna
                                    magna sit amet turpis.
                                    Nullam imperdiet condimentum ultricies. Mauris venenatis pharetra elit, et placerat
                                    dui
                                    mattis quis. Nam vulputate vestibulum sodales. Do
                                    nec non ultricies magna, id vestibulum mauris. Nulla vel nisl et enim mattis
                                    finibus.
                                    Aliquam erat volutpat. Nulla facilisi.
                                </div>
                            </div>
                            <div class="wrap-product-comment">
                                <div class="wrap-product-comment_title">Đánh giá sản phẩm</div>
                                <div class="whole-stars-product">
                                    <div class="rate-stars">
                                        <span class="stars-product-text">4.7 Trên 5
                                        </span> <span class="stars-product-num">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="cus-rate-whole">
                                    <div class="cus-rate-img">
                                        <img src="https://cand.com.vn/Files/Image/linhchi/2016/09/19/47ca7ab5-f6d4-43ac-a6dd-24c48bd0647c.jpg"
                                            alt="">
                                    </div>
                                    <div class="cus-rate-info">
                                        <div class="cus-rate-name">Nguyễn Nhật Ánh

                                        </div>
                                        <div class="cus-rate-star   ">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <div class="cus-rate-date   ">
                                            Thời gian: 20:30 ngày 11 tháng 09 năm 2023
                                        </div>
                                        <div class="cus-rate-comment   ">
                                            Sản phẩm tuyệt vời
                                        </div>
                                        <div class="cus-rate-post-img   ">
                                            <img src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                                alt="">
                                            <img src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                                alt="">
                                            <img src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                                alt="">
                                            <img src="https://sachvip.net/wp-content/uploads/2020/11/sach-giao-khoa-ngu-van-lop-6-.jpg"
                                                alt="">
                                        </div> 
                                    </div>
                                </div> 
                            </div>
                            <div class="wrap-product-same">
                                <div class="wrap-product-same-title">
                                    Sản phẩm cùng loại
                                </div>
                                <div class="wrap-product-same-grid grid-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            @include ('index_partials.footer')
        </div>
    </div>
    </div>
</body>
@include ('index_partials.js')


</html>