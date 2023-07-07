@extends('layouts.app')
@section('content')
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
                            @if(isset($_COOKIE['is_logged']) && $_COOKIE['is_logged'] == 1)
                            <div class="infor-user-in-fieldset">
                                <div class="detail-user-in-fieldset">
                                    <div class="text-in-fieldset">
                                        Tên đăng nhập: {{$user1[0]->TenDangNhapND}}
                                    </div>
                                    <div><a href>Đăng xuất</a></div>
                                </div>
                            </div>
                            <form action="#" method="POST">
                                <div class="section-content section-customer-information ">

                                    <div class="fieldset">
            
                                        <div class="form-group">
                                            <label for="namebook">Họ và tên: </label>
                                            <input type="id" class="form-control"
                                                id="name" name="name"
                                                value="{{$user1[0]->HoTenND}}"
                                                placeholder="Nhập họ và tên">
                                        </div>
            
                                        <div class="form-group">
                                            <label for="namebook">Email: </label>
                                            <input type="id" class="form-control"
                                                id="email" name="email"
                                                value="{{$user1[0]->Email}}"
                                                placeholder="Nhập emal">
                                        </div>
                                        <div class="form-group">
                                            <label for="namebook">Số điện thoại: </label>
                                            <input type="number" class="form-control"
                                                id="phone" name="phone"
                                                value="{{$user1[0]->SDT}}"
                                                placeholder="Nhập số điện thoại">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @else
                            <p class="section-content-text">
                                Bạn đã có tài khoản?
                                <a
                                    href="/account/login?urlredirect=%2Fcheckouts%2F341793fd37ff478b870d4674675e8533%3Fstep%3D1">Đăng
                                    nhập</a>
                            </p>
                            <form action="#" method="POST">
                                <div class="section-content section-customer-information ">

                                    <div class="fieldset">
            
                                        <div class="form-group">
                                            <label for="namebook">Họ và tên: </label>
                                            <input type="id" class="form-control"
                                                id="name" name="name"
                                                placeholder="Nhập họ và tên">
                                        </div>
            
                                        <div class="form-group">
                                            <label for="namebook">Email: </label>
                                            <input type="id" class="form-control"
                                                id="email" name="email"
                                                placeholder="Nhập emal">
                                        </div>
                                        <div class="form-group">
                                            <label for="namebook">Số điện thoại: </label>
                                            <input type="number" class="form-control"
                                                id="phone" name="phone"
                                                placeholder="Nhập số điện thoại">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @endif

                        </div>
                    </div>
                    <!-- End đã có tk -->
                    <!-- cái phần thanh toán ra làm 2 r xóa 1 trong 2 đã có tk vs chưa có tk ra 2 form thanh taán đã dk vs chưa dk  -->
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
                                            <input type="text"
                                                class="form-control"
                                                id="address" name="address"
                                                value="{{$user1[0]->DiaChi}}"
                                                placeholder="Nhập địa chỉ">
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
@include ('index_partials.js')   
@endsection