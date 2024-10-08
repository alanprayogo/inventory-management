<aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Prisaflag</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel d-flex mb-3 mt-3 pb-3">
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->fullname }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                @if (Auth::check())
                    @if (Auth::user()->role == 'Admin')
                        {{-- Admin Sidebar --}}
                        <li class="nav-item">
                            <a href="{{ route('dashboard-admin') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Master Management
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('manage-product') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('manage-vendor') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Vendor</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('manage-member') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Member</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('discount-member') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Discount Member</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Inventory Management
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('stock-product') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Stock</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('procurement') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Procurement</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('receiving') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Receiving</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sales') }}" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Sales
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Return
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sales Return</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Purchase Return</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @elseif(Auth::user()->role == 'Member')
                        {{-- Member Sidebar --}}
                        <li class="nav-item">
                            <a href="{{ route('dashboard-member') }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Product
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('order') }}" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Order
                                </p>
                            </a>
                        </li>
                    @endif
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <div class="sidebar-custom">
        <a href="#" class="btn btn-link"><i class="fas fa-cogs"></i></a>
        <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Help</a>
    </div>
    <!-- /.sidebar-custom -->
</aside>
