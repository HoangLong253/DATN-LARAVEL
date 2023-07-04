<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin') }}" class="brand-link">
        <img src="{{ asset('admin_assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin_assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ $admin[0]->HoTen }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!--<div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>-->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <!--Thử-->
                <!--li thổng kê-->
                <li class="nav-item">
                    <a href="{{ route('admin') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Thống kê
                        </p>
                    </a>
                </li>
                <!--end li thổng kê-->
                <!--li sản phẩm-->

                <!--end li sản phẩm-->
                <!--li con người-->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Đối tượng
                        </p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_user') }}" class="nav-link">
                                <i class="nav-icon"></i>
                                <p>
                                    Người dùng
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin_employee') }}" class="nav-link">
                                <i class="nav-icon"></i>
                                <p>
                                    Nhân viên
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin_product') }}" class="nav-link">
                                <i class="nav-icon"></i>
                                <p>
                                    Sách
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin_product_type') }}" class="nav-link">
                                <i class="nav-icon"></i>
                                <p>
                                    Loại sách
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin_publisher') }}" class="nav-link">
                                <i class="nav-icon"></i>
                                <p>
                                    Nhà xuất bản
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin_employee') }}" class="nav-link">
                                <i class="nav-icon"></i>
                                <p>
                                    Bảng tin
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--end li con người-->
                <!--li hoá đơn-->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Hoá đơn
                        </p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin_invoice_import')}}" class="nav-link">
                                <i class="nav-icon fas "></i>
                                <p>
                                    Nhập
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin_invoice_sale')}}" class="nav-link">
                                <i class="nav-icon fas "></i>
                                <p>
                                  Bán
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--end li hoá đơn-->
                <!--li khác-->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-hashtag"></i>
                        <p>
                            Khác
                        </p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Trang chủ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas "></i>
                                <p>
                                    Về chúng tôi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Tin tức
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas "></i>
                                <p>
                                    Dịch vụ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas "></i>
                                <p>
                                    Liên hệ
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--end li khác-->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
