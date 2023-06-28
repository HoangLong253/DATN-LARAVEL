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
                        <div class="title-name">Thông tin cơ bản</div>
                        <div class="box-info">
                            <div class="box-add-img">
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="content">
                <div class="container-fluid">

                </div>
            </div>


            <!-- /.content -->
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