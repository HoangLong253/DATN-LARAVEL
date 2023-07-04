@extends('layouts.admin')
@section('header_content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Thêm Sản Phẩm</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Quản Lý</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin_product')}}">Sách</a></li>
                <li class="breadcrumb-item active">Thêm Sách</li>
            </ol>
        </div>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('main_content')
<!-- Thêm sản phẩm -->
<div class="form-add-top">
    <div class="box-info">
        <div class="whole-box-sp-img">
            <div class="title-name2">Hình ảnh sản phẩm</div>
            <!--<div>Width: 260 px - Height: 300 px (.jpg|.gif|.png|.jpeg|.gif)</div>-->
            <form action="#">
                <input type="file" id="myFile" name="filename">
            </form>
        </div>
        <div class="whole-box-sp-info">
            <div class="form-group">
                <label for="idbook">Mã sách: </label>
                <input type="text" class="form-control" id="idbook"
                    aria-describedby="<!--  -->"
                    placeholder="Nhập mã sách">
                <small id="<!--  -->" class="form-text text-muted"> .</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Loại sách: </label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Sách Giáo Khoa</option>
                    <option>Sách Tham Khảo</option>
                    <option>Sách Giáo Khoa</option>
                    <option>Sách Tham Khảo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="namebook">Tên sách: </label>
                <input type="id" class="form-control" id="namebook"
                    aria-describedby="<!--  -->"
                    placeholder="Nhập tên sách">
                <small id="<!--  -->" class="form-text text-muted"> .</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Nhà xuất bản: </label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>NXB Giáo Dục</option>
                    <option>NXB Kim Đồng</option>
                    <option>NXB Giáo Dục</option>
                    <option>NXB Kim Đồng</option>
                </select>
            </div>
            <div class="form-group">
                <label for>Giá bán: </label>
                <input type="number" class="form-control" id
                    aria-describedby="<!--  -->"
                    placeholder="Nhập giá bán">
                <small id="<!--  -->" class="form-text text-muted"> .</small>
            </div>
            <div class="form-group">
                <label for>Giá mới: </label>
                <input type="number" class="form-control" id
                    aria-describedby="<!--  -->"
                    placeholder="Nhập giá mới">
                <small id="<!--  -->" class="form-text text-muted"> .</small>
            </div>
            <!-- Tự tính chiết khấu dựa vào giá bán - giá mới -->
            <div class="form-group">
                <label for>Chiết khấu: </label>
                <input type="number" class="form-control" id
                    aria-describedby="<!--  -->"
                    placeholder="Chiết khấu">
                <small id="<!--  -->" class="form-text text-muted"> .</small>
            </div>
        </div>
    </div>
    <div class="form-add-bottom">
        <div class="title-name1">Hình ảnh kèm theo</div>
        <form action="/action_page.php">
            <input type="file" id="myFile" name="filename">
            <input type="submit">
        </form>
        <!--<div class="title-name1">Hình ảnh đọc thử</div>
                            <form action="/action_page.php">
                                <input type="file" id="myFile" name="filename">
                                <input type="submit">
                            </form>-->
        <!-- Thao tác -->
        <div class="flex-control">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value
                    id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Nổi bật
                </label>
            </div>
            <!-- 
                                     <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Trạng thái
                                    </label>
                                </div>
                                 -->
            <div class="flex-btn">
                <button type="button" class="btn btn-primary">Thêm</button>
                <button type="button" class="btn btn-danger">Hủy</button>
            </div>
        </div>
    </div>
</div>
<!-- End thêm sản phẩm -->
<!-- Thêm sửa hóa đơn nhập -->
<div class="form-add-top">
    <div class="form-add-invoice">
        <div class="title-name1">Thông tin cơ bản Thêm sửa hóa đơn nhập</div>
        <form action>
            <div class="form-group">
                <label for>Mã hóa đơn nhập: </label>
                <input type="number" class="form-control w300px" id
                    aria-describedby="<!--  -->"
                    placeholder="Nhập Mã hóa đơn nhập">
                <small id="<!--  -->"
                    class="form-text text-muted"> .</small>
            </div>
            <div class="form-group">
                <label for>Mã sách cần nhập: </label>
                <input type="number" class="form-control w300px" id
                    aria-describedby="<!--  -->"
                    placeholder="Nhập Mã sách cần nhập">
                <small id="<!--  -->"
                    class="form-text text-muted"> .</small>
            </div>
            <div class="form-group">
                <label for>Số lượng: </label>
                <input type="number" class="form-control w300px" id
                    aria-describedby="<!--  -->"
                    placeholder="Nhập Số lượng">
                <small id="<!--  -->"
                    class="form-text text-muted"> .</small>
            </div>
            <div class="form-group">
                <label for>Tổng tiền: </label>
                <input type="number" class="form-control w300px" id
                    aria-describedby="<!--  -->"
                    placeholder="Nhập Tổng tiền">
                <small id="<!--  -->"
                    class="form-text text-muted"> .</small>
            </div>
            <div class="flex-control">
                <div class="form-check">
                    <input class="form-check-input"
                        type="checkbox" value id="defaultCheck1">
                    <label class="form-check-label"
                        for="defaultCheck1">
                        Trạng thái
                    </label>
                </div>
                <div class="flex-btn">
                    <button type="submit"
                        class="btn btn-primary">Thêm</button>
                    <button type="submit" class="btn btn-danger">Hủy</button>
                </div>
            </div>

        </form>
    </div>
</div>
<!--  -->
<!-- Thêm sửa hóa đơn bán -->
<div class="form-add-top">
    <div class="form-add-invoice">
        <div class="title-name1">Thông tin cơ bản Thêm sửa hóa đơn bán </div>
        <form action>
            <div class="whole-box-form-info">

                <div class="form-group">
                    <label for="idbook">Mã hóa đơn bán: </label>
                    <input type="text" class="form-control" id="idbook"
                        aria-describedby="<!--  -->"
                        placeholder="Nhập mã hóa đơn bán">
                    <small id="<!--  -->" class="form-text text-muted"> .</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Trạng thái giao hàng:
                    </label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Đã giao hàng</option>
                        <option>Đang tiến hành giao hàng</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="namebook">Mã nhân viên: </label>
                    <input type="id" class="form-control" id="namebook"
                        aria-describedby="<!--  -->"
                        placeholder="Nhập Mã nhân viên">
                    <small id="<!--  -->" class="form-text text-muted"> .</small>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Trạng thái thanh toán
                    </label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Đã thanh toán</option>
                        <option>Chưa thanh toán</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="namebook">Mã người dùng: </label>
                    <input type="id" class="form-control" id="namebook"
                        aria-describedby="<!--  -->"
                        placeholder="Nhập Mã người dùng">
                    <small id="<!--  -->" class="form-text text-muted"> .</small>
                </div>
                <div class="form-group">
                    <label for>Tổng tiền: </label>
                    <input type="number" class="form-control" id
                        aria-describedby="<!--  -->"
                        placeholder="Nhập Tổng tiền">
                    <small id="<!--  -->" class="form-text text-muted"> .</small>
                </div>

            </div>
            <div class="flex-btn">
                <button type="submit" class="btn btn-primary">Thêm</button>
                <button type="submit" class="btn btn-danger">Hủy</button>
            </div>
        </form>
    </div>
</div>
<!-- Thông tin giao hàng -->
<div class="form-add-top">
    <div class="title-name1">Thông tin giao hàng</div>
    <div class="flex-infor-giaohang">
        <div class="step">
            <div class="step-sections steps-onepage" step="1">

                <div class="section">
                    <div class="section-header">
                        <h2 class="section-title">Thông tin giao hàng</h2>
                    </div>
                    <!-- Begin đã có tk -->
                    <div class="section-content section-customer-information ">
                        <div class="fieldset">
                            <div class="infor-user-in-fieldset">
                                <div class="img-user-in-fieldset">
                                    <img
                                        src="https://theme.hstatic.net/200000287623/1000948667/14/logo_checkout.jpg?v=265"
                                        alt>
                                </div>
                                <div class="detail-user-in-fieldset">
                                    <div class="text-in-fieldset">Lê Thanh Tú
                                    </div>
                                    <div><a href>Đăng xuất</a></div>
                                </div>
                            </div>
                            <div class="infor-in-fieldset">
                                <label for>Họ và tên: </label>
                                <span class="text-in-fieldset">Lê Thanh Tú
                                </span>
                            </div>
                            <div class="infor-in-fieldset">
                                <label for>Số điện thoại:</label>
                                <span class="text-in-fieldset">0768848015</span>
                            </div>
                            <div class="infor-in-fieldset">
                                <label for>Địa chỉ</label>
                                <span class="text-in-fieldset">30/8 Nhất Chi
                                    Mai, Phường 13, Tân Bình, Tp. HCM</span>
                            </div>

                        </div>
                    </div>
                    <!-- End đã có tk -->
                    <!-- cái phần thanh toán ra làm 2 r xóa 1 trong 2 đã có tk vs chưa có tk ra 2 form thanh taán đã dk vs chưa dk  -->
                    <!-- Begin chưa có tk -->
                    <div class="section-content section-customer-information ">

                        <p class="section-content-text">
                            Bạn đã có tài khoản?
                            <a
                                href="/account/login?urlredirect=%2Fcheckouts%2F341793fd37ff478b870d4674675e8533%3Fstep%3D1">Đăng
                                nhập</a>
                        </p>

                        <div class="fieldset">

                            <div class="form-group">
                                <label for="namebook">Họ và tên: </label>
                                <input type="id" class="form-control"
                                    id="namebook"
                                    aria-describedby="<!--  -->"
                                    placeholder="Nhập họ và tên">
                                <small id="<!--  -->"
                                    class="form-text text-muted"></small>
                            </div>

                            <div class="form-group">
                                <label for="namebook">Emal: </label>
                                <input type="id" class="form-control"
                                    id="namebook"
                                    aria-describedby="<!--  -->"
                                    placeholder="Nhập emal">
                                <small id="<!--  -->"
                                    class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="namebook">Số điện thoại: </label>
                                <input type="number" class="form-control"
                                    id="namebook"
                                    aria-describedby="<!--  -->"
                                    placeholder="Nhập số điện thoại">
                                <small id="<!--  -->"
                                    class="form-text text-muted"></small>
                            </div>
                        </div>
                    </div>
                    <!-- End chưa có tk -->
                    <div class="section-content">
                        <div class="fieldset">

                            <form autocomplete="off"
                                id="form_update_shipping_method" class="field "
                                accept-charset="UTF-8" method="post">
                                <input name="utf8" type="hidden" value="✓">
                                <div class="content-box mt0">

                                    <div class="radio-wrapper content-box-row">
                                        <label class="radio-label">
                                            <div class="radio-input">
                                                <input type="radio"
                                                    id="customer_pick_at_location_false"
                                                    name="customer_pick_at_location"
                                                    class="input-radio"
                                                    value="false" checked>
                                            </div>
                                            <span class="radio-label-primary">Giao
                                                tận nơi</span>
                                        </label>
                                    </div>

                                    <div
                                        id="form_update_location_customer_shipping"
                                        class="order-checkout__loading radio-wrapper content-box-row content-box-row-padding content-box-row-secondary "
                                        for="customer_pick_at_location_false">
                                        <input name="utf8" type="hidden"
                                            value="✓">
                                        <div
                                            class="order-checkout__loading--box">
                                            <div
                                                class="order-checkout__loading--circle"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="namebook">Nhập địa chỉ:
                                            </label>
                                            <input type="id"
                                                class="form-control"
                                                id="namebook"
                                                aria-describedby="<!--  -->"
                                                placeholder="Nhập nhập địa chỉ">
                                            <small id="<!--  -->"
                                                class="form-text text-muted">
                                            </small>
                                        </div>

                                    </div>
                                    <div class="radio-wrapper content-box-row">
                                        <label class="radio-label">
                                            <div class="radio-input">
                                                <input type="radio"
                                                    id="customer_pick_at_location_true"
                                                    name="customer_pick_at_location"
                                                    class="input-radio"
                                                    value="true">
                                            </div>
                                            <span class="radio-label-primary">Nhận
                                                tại cửa hàng 65 Huỳnh Thúc
                                                Kháng, P
                                                Bến Nghé, Q 1, TP HCM </span>
                                        </label>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="change_pick_location_or_shipping">
                        <div class="inventory_location">
                            <!-- Khúc này sau khi chọn địa chỉ sẽ ra phí ship phần 
                                    chọn địa chỉ là ajax cop chỉ ra text thôi nên phí ship 
                                chỗ này ông nghĩ cách đi k thì bỏ -->
                        </div>
                        <div id="section-payment-method" class="section">
                            <div class="order-checkout__loading--box">
                                <div class="order-checkout__loading--circle"></div>
                            </div>
                            <div class="section-header">
                                <h2 class="section-title">Phương thức thanh toán</h2>
                            </div>
                            <div class="section-content">
                                <div class="content-box">
                                    <div class="radio-wrapper content-box-row">
                                        <label class="radio-label"
                                            for="payment_method_id_1002715834">
                                            <div
                                                class="radio-input payment-method-checkbox">
                                                <input type-id="2"
                                                    id="payment_method_id_1002715834"
                                                    class="input-radio"
                                                    name="payment_method_id"
                                                    type="radio"
                                                    value="1002715834"
                                                    checked>
                                            </div>
                                            <div class="radio-content-input">
                                                <img class="main-img"
                                                    src="https://hstatic.net/0/0/global/design/seller/image/payment/other.svg?v=4">
                                                <div>
                                                    <span
                                                        class="radio-label-primary">Chuyển
                                                        khoản qua ngân hàng</span>
                                                    <span
                                                        class="quick-tagline hidden"></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>

                                    <div
                                        class="radio-wrapper content-box-row content-box-row-secondary "
                                        for="payment_method_id_1002715834">
                                        <div class="blank-slate">
                                            Bạn vui lòng chuyển 100% giá
                                            trị
                                            đơn hàng (bao gồm phí ship) vào
                                            tài
                                            khoản dưới đây:
                                            Chủ tài khoản: CÔNG TY CỔ PHẦN
                                            XUẤT BẢN VÀ TRUYỀN THÔNG IPM
                                            STK: 19037014304012
                                            Ngân hàng Thương mại Cổ phần kỹ
                                            thương Việt Nam (TECHCOMBANK)
                                            Khi chuyển khoản, vui lòng đề
                                            rõ
                                            Tên – Mã Đơn hàng – SĐT vào phần
                                            Nội
                                            dung chuyển khoản.
                                            Đối với đơn hàng từ 1.500.000 VNĐ
                                            TRỞ
                                            LÊN, quý khách vui lòng Thanh toán
                                            bằng
                                            phương thức CHUYỂN KHOẢN QUA NGÂN
                                            HÀNG.

                                        </div>
                                    </div>
                                    <div class="radio-wrapper content-box-row">
                                        <label class="radio-label"
                                            for="payment_method_id_1003394133">
                                            <div
                                                class="radio-input payment-method-checkbox">
                                                <input type-id="1"
                                                    id="payment_method_id_1003394133"
                                                    class="input-radio"
                                                    name="payment_method_id"
                                                    type="radio"
                                                    value="1003394133">
                                            </div>
                                            <div class="radio-content-input">
                                                <img class="main-img"
                                                    src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=4">
                                                <div>
                                                    <span
                                                        class="radio-label-primary">Thanh
                                                        toán khi giao hàng (COD)</span>
                                                    <span
                                                        class="quick-tagline hidden"></span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div
                                        class="radio-wrapper content-box-row content-box-row-secondary hidden"
                                        for="payment_method_id_1003394133">
                                        <div class="blank-slate">
                                            Khi chọn phương thức Thanh toán khi
                                            giao
                                            hàng (COD), bạn vui lòng kiểm tra kĩ
                                            hàng trước khi nhận hàng và thanh
                                            toán
                                            toàn bộ giá trị đơn hàng cho
                                            shipper.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="step-footer d-flex justify-content-between"
                id="step-footer-checkout">

                <div>
                    <a class="step-footer-previous-link" href="/cart">
                        Giỏ hàng
                    </a>
                </div>
                <form id="form_next_step" accept-charset="UTF-8" method="post">
                    <input name="utf8" type="hidden" value="✓">
                    <button type="button" class="btn btn-success">Hoàn tất đơn
                        hàng</button>
                </form>
            </div>
        </div>
        <div class="step2">
            <div class="product-table-list">
                <div class="product-inlist">
                    <div class="img-product-inlist">
                        <img
                            src="https://product.hstatic.net/200000287623/product/roi_hoa_se_no_1_dac_biet_715x1080_copy_2_4d66198bfbd747d79c727d481b20de48_small.jpg"
                            alt>
                    </div>
                    <div class="info-product-inlist">
                        <div class="name-product-inlist">Toán 12</div>
                        <div class="type-product-inlist">Sách giáo khoa</div>
                    </div>
                    <div class="price-product-inlist">
                        76,500₫
                    </div>
                </div>
                <div class="product-inlist">
                    <div class="img-product-inlist">
                        <img
                            src="https://product.hstatic.net/200000287623/product/roi_hoa_se_no_1_dac_biet_715x1080_copy_2_4d66198bfbd747d79c727d481b20de48_small.jpg"
                            alt>
                    </div>
                    <div class="info-product-inlist">
                        <div class="name-product-inlist">Toán 12</div>
                        <div class="type-product-inlist">Sách giáo khoa</div>
                    </div>
                    <div class="price-product-inlist">
                        76,500₫
                    </div>
                </div>
                <div class="product-inlist">
                    <div class="img-product-inlist">
                        <img
                            src="https://product.hstatic.net/200000287623/product/roi_hoa_se_no_1_dac_biet_715x1080_copy_2_4d66198bfbd747d79c727d481b20de48_small.jpg"
                            alt>
                    </div>
                    <div class="info-product-inlist">
                        <div class="name-product-inlist">Toán 12</div>
                        <div class="type-product-inlist">Sách giáo khoa</div>
                    </div>
                    <div class="price-product-inlist">
                        76,500₫
                    </div>
                </div>
                <div class="discount-code-product ">
                    <form action>
                        <div class="form-group">
                            <input type="id" class="form-control" id="namebook"
                                aria-describedby="<!--  -->"
                                placeholder="Nhập mã giảm giá">
                            <small id="<!--  -->" class="form-text text-muted"></small>
                        </div>
                        <button type="button" class="btn btn-info">Sử dụng</button>
                    </form>
                </div>
                <div class="total-price-product">
                    <div class="flex-total-price-product">
                        <div class="name-total-price-product">Tạm tính</div>
                        <div class="price-total-price-product">76,500₫</div>
                    </div>
                    <div class="flex-total-price-product">
                        <div class="name-total-price-product">Phí vận chuyển</div>
                        <div class="price-total-price-product">76,500₫</div>
                    </div>
                    <div class="flex-total-price-product">
                        <div class="name-total-price-product">Tổng cộng</div>
                        <div class="price-total-price-product">76,500₫</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Thông tin giao hàng -->
<div>Lịch sử mua hàng dùng thì xóa dòng này</div>
<!-- Lịch sử mua hàng -->
<div class="form-add-top">
    <span class="title-name1">Tài khoản của bạn</span> <a href> Thoát
        <!-- Nút đăng xuất user --></a>
    <div class="grid-history-buy grid-5">
        <div class="grid1">
            <div class="grid-name">Mã đơn hàng:</div>
            <div class="grid-infor">#008000</div>
        </div>
        <div class="grid2">
            <div class="grid-name">Ngày đặt</div>
            <div class="grid-infor">Th6, 10, 2023</div>

        </div>
        <div class="grid3">
            <div class="grid-name">Trạng thái thanh toán</div>
            <div class="grid-infor">Đã thanh toán</div>
        </div>
        <div class="grid5">
            <div class="grid-name">Tình trạng vận chuyển</div>
            <div class="grid-infor">Đã giao hàng cho vận chuyển</div>
        </div>
        <div class="grid5">
            <div class="grid-name">Tổng tiền</div>
            <div class="grid-infor">350.00đ</div>
        </div>
    </div>
</div>
<!-- End Lịch sử mua hàng -->
<!-- Thông tin user -->
<div class="form-add-top">
    <div class="title-name1">Thông tin tài khoản</div>
    <div>Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
    <form class="flex-user-infor" action>
        <div class="user-infor-detail">
            <label for>Tên đăng nhập:</label><span> kyter39</span>

            <div class="form-group">
                <!-- Set khi đăng nhập r thì hiện thông tin vào form sửa thì click vào r đổi thôi -->
                <label for>Họ và tên: </label>
                <input type="id" class="form-control"
                    id
                    aria-describedby="<!--  -->"
                    placeholder="Nhập họ và tên">
                <small id="<!--  -->"
                    class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for>Email: </label>
                <input type="id" class="form-control"
                    id
                    aria-describedby="<!--  -->"
                    placeholder="Nhập email">
                <small id="<!--  -->"
                    class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for>Số điện thoại: </label>
                <input type="id" class="form-control"
                    id
                    aria-describedby="<!--  -->"
                    placeholder="Nhập số điện thoại">
                <small id="<!--  -->"
                    class="form-text text-muted"></small>
            </div>
            <div class="flex-btn">
                <button type="submit" class="btn btn-success">Thay đổi</button>
                <button type="submit" class="btn btn-danger">Hủy</button>
            </div>

        </div>
        <div class="user-infor-img">
            <div class="box-user-infor-img">
                <img
                    src="https://cdn.tgdd.vn/2020/07/content/bo-anh-yasuo-lol-dep-va-chat-de-lam-hinh-nen-dien-thoai-may1-800x450.jpg"
                    alt>
            </div>
            <form action="#">
                <input type="file" id="myFile" name="filename">
                <div>Dụng lượng file tối đa 1 MB
                    Định dạng:.JPEG, .PNG</div>
            </form>

        </div>
    </form>
</div>
<!-- Thông tin đơn hàng -->
<div class="form-add-top">
    <div class="title-name1">Thông tin đơn hàng</div>
    <div class="title-bill">ĐƠN HÀNG: <span class="id-bill">#008000</span>, ĐẶT
        LÚC: <span class="time-bill">10 06, 2023 09:05SA</span></div>
    <div class="flex-infor-bill">
        <div class="infor-bill">
            <div class="title-name2">Địa chỉ nhận thanh toán</div>
            <div class="infor-bill-item">
                Tình trạng thanh toán: <span>paid</span>
            </div>
            <div class="infor-bill-item">Âu Dương Hoàng Long </div>
            <div class="infor-bill-item">39/8 Nhất Chi Mai, P13, Tân Bình, Tp,
                HCM</div>
            <div class="infor-bill-item">Vietnam</div>
            <div class="infor-bill-item">0768848015</div>
        </div>
        <div class="infor-bill">
            <div class="title-name2">Địa chỉ gửi hàng</div>
            <div class="infor-bill-item">
                Vận chuển: <span>fullfield</span>
            </div>
            <div class="infor-bill-item">Âu Dương Hoàng Long </div>
            <div class="infor-bill-item">39/8 Nhất Chi Mai, P13, Tân Bình, Tp,
                HCM</div>
            <div class="infor-bill-item">Vietnam</div>
            <div class="infor-bill-item">0768848015</div>
        </div>
    </div>
    <div class="grid-product-inbill-list">
        <div class="gridspname">
            <div class="title-name2">Sản phẩm</div>
            <div class="grid-product-inbill-list-info">
                <div>Thương nhớ trà long</div>
                <div>Tiểu thuyết</div>
            </div>
            <div class="grid-product-inbill-list-info">
                <div>Thương nhớ trà long2</div>
                <div>Tiểu thuyết2</div>
            </div>
        </div>
        <div class="gridspid">
            <div class="title-name2">Mã sản phẩm</div>
            <div class="grid-product-inbill-list-info">
                <div>#008000</div>
                <div>#00800das0</div>
            </div>
        </div>
        <div class="gridspprice">
            <div class="title-name2">Giá</div>
            <div class="grid-product-inbill-list-info">
                <div>30000đ </div>
                <div>50000đ </div>
            </div>
        </div>
        <div class="gridspquanty">
            <div class="title-name2">Số lượng</div>
            <div class="grid-product-inbill-list-info">
                <div>3</div>
                <div>2</div>
            </div>
        </div>
        <div class="gridsptotalprice">
            <div class="title-name2">Tổng cộng</div>
            <div class="grid-product-inbill-list-info">
                <div>90000đ</div>
                <div>60000đ</div>
            </div>
        </div>
    </div>
</div>
<!--  -->
@endsection