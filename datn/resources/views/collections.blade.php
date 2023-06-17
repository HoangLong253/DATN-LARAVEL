<!DOCTYPE html>
<html lang="vn">
 
<!-- Head -->
@include ('index_partials.head')

<body>
    <div class="containerr">
        <div class="main">

             <!-- Header -->
             @include ('index_partials.header')
             <!-- Menu  -->
             @include ('index_partials.menu')
            <!-- Main -->

            <!-- bỏ all sản phẩm, bên trái là danh mục sản phẩm, 
                 ở dưới có thể có tìm theo mức giá, dưới nữa có thể 
                 lọc theo nhà xuất bản bla bla, bên phải là sản phẩm -->

            <!--Bên trái-->

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="http://127.0.0.1:8000">Trang chủ</a></li>
                  <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/collections">Danh mục</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tất cả các sách</li>
                </ol>
            </nav>
                
            <div class="wrap-main">
                <div class="wrap-content">
                    <div class="title-main">
                        TẤT CẢ SẢN PHẨM
                    </div>
                    <div class="content-main">
                        <div class="grid-product">
                            <!-- Code lấy tất cả sản phẩm --> 
                        </div>
                     </div>
                </div>
            </div>
           

            

            <!-- Footer -->
            @include ('index_partials.footer')
        </div>
    </div>
</body>
@include ('index_partials.js')
</html>