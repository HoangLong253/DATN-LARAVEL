<!DOCTYPE html>

<html lang="en">
    <!-- Head -->
    @include ('index_partials.head')

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('adm_partials.header')
            @include('adm_partials.sliderbar')
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <!-- Thêm sản phẩm -->
                        <div class="form-add-top">
                            <div class="title-name1">Thông tin cơ bản</div>
                            <div class="box-info">
                                <div class="whole-box-sp-img">
                                    <div class="title-name2">Hình ảnh sản phẩm</div>
                                    <div class="box-add-img">
                                        Hình ảnh sản phẩm
                                    </div>
                                    <div>Width: 260 px - Height: 300 px
                                        (.jpg|.gif|.png|.jpeg|.gif)</div>
                                    <form action="/action_page.php">
                                        <input type="file" id="myFile"
                                            name="filename">
                                        <input type="submit">
                                    </form>
                                </div>
                                <div class="whole-box-sp-info">
                                    <div class="form-group">
                                        <label for="idbook">Mã sách: </label>
                                        <input type="text" class="form-control"
                                            id="idbook"
                                            aria-describedby="<!--  -->"
                                            placeholder="Nhập mã sách">
                                        <small id="<!--  -->"
                                            class="form-text text-muted"> .</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Loại
                                            sách: </label>
                                        <select class="form-control"
                                            id="exampleFormControlSelect1">
                                            <option>Sách Giáo Khoa</option>
                                            <option>Sách Tham Khảo</option>
                                            <option>Sách Giáo Khoa</option>
                                            <option>Sách Tham Khảo</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="namebook">Tên sách: </label>
                                        <input type="id" class="form-control"
                                            id="namebook"
                                            aria-describedby="<!--  -->"
                                            placeholder="Nhập tên sách">
                                        <small id="<!--  -->"
                                            class="form-text text-muted"> .</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Nhà
                                            xuất bản: </label>
                                        <select class="form-control"
                                            id="exampleFormControlSelect1">
                                            <option>NXB Giáo Dục</option>
                                            <option>NXB Kim Đồng</option>
                                            <option>NXB Giáo Dục</option>
                                            <option>NXB Kim Đồng</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for>Giá bán: </label>
                                        <input type="number"
                                            class="form-control" id
                                            aria-describedby="<!--  -->"
                                            placeholder="Nhập giá bán">
                                        <small id="<!--  -->"
                                            class="form-text text-muted"> .</small>
                                    </div>
                                    <div class="form-group">
                                        <label for>Giá mới: </label>
                                        <input type="number"
                                            class="form-control" id
                                            aria-describedby="<!--  -->"
                                            placeholder="Nhập giá mới">
                                        <small id="<!--  -->"
                                            class="form-text text-muted"> .</small>
                                    </div>
                                    <!-- Tự tính chiết khấu dựa vào giá bán - giá mới -->
                                    <div class="form-group">
                                        <label for>Chiết khấu: </label>
                                        <input type="number"
                                            class="form-control" id
                                            aria-describedby="<!--  -->"
                                            placeholder="Chiết khấu">
                                        <small id="<!--  -->"
                                            class="form-text text-muted"> .</small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-add-bottom">
                                <div class="title-name1">Hình ảnh kèm theo</div>
                                <form action="/action_page.php">
                                    <input type="file" id="myFile"
                                        name="filename">
                                    <input type="submit">
                                </form>
                                <div class="title-name1">Hình ảnh đọc thử</div>
                                <form action="/action_page.php">
                                    <input type="file" id="myFile"
                                        name="filename">
                                    <input type="submit">
                                </form>
                                <!-- Thao tác -->
                                <div class="flex-control">
                                    <div class="form-check">
                                        <input class="form-check-input"
                                            type="checkbox" value
                                            id="defaultCheck1">
                                        <label class="form-check-label"
                                            for="defaultCheck1">
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
                                        <button type="button"
                                            class="btn btn-primary">Thêm</button>
                                        <button type="button"
                                            class="btn btn-danger">Hủy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End thêm sản phẩm -->
                        <!-- Form thêm nhân viên -->
                        <div class="form-add-staff">
                            <div class="title-name1">Thông tin cơ bản</div>
                            <div class="form-group">
                                <label for>Mã nhân viên: </label>
                                <input type="number" class="form-control" id
                                    aria-describedby="<!--  -->"
                                    placeholder="Nhập Mã nhân viên">
                                <small id="<!--  -->"
                                    class="form-text text-muted"> .</small>
                            </div>
                            <div class="form-group">
                                <label for="namebook">Tên nhân viên: </label>
                                <input type="id" class="form-control"
                                    id="namebook" aria-describedby="<!--  -->"
                                    placeholder="Nhập tên nhân viên">
                                <small id="<!--  -->"
                                    class="form-text text-muted"> .</small>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword"
                                    class="  col-form-label">Mật khẩu:</label>
                                <div class=" ">
                                    <input type="password" class="form-control"
                                        id="inputPassword"
                                        placeholder="Nhập mật khẩu">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Công
                                    việc: </label>
                                <select class="form-control"
                                    id="exampleFormControlSelect1">
                                    <option>Quản lý</option>
                                    <option>Cửa hàng trưởng</option>
                                    <option>Nhân viên bán hàng</option>
                                    <option>Nhân viên giao hàng...</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for>Số điện thoại: </label>
                                <input type="number" class="form-control" id
                                    aria-describedby="<!--  -->"
                                    placeholder="Nhập Số điện thoại">
                                <small id="<!--  -->"
                                    class="form-text text-muted"> .</small>
                            </div>
                            <!-- Thao tác -->
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
                                    <button type="button"
                                        class="btn btn-primary">Thêm</button>
                                    <button type="button" class="btn btn-danger">Hủy</button>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <!-- /.content-wrapper -->

                <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                    <!-- Control sidebar content goes here -->
                    <div class="p-3">
                        <h5>Title</h5>
                        <p>Sidebar content</p>
                    </div>
                </aside>
                <!-- /.control-sidebar -->

                @include('adm_partials.footer')
            </div>
            <!-- ./wrapper -->

            <!-- REQUIRED SCRIPTS -->
            @include('adm_partials.js')
        </body>

    </html>