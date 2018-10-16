<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        @if (env('SIDEBAR_IMAGE_PANEL') == true)
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        @endif
        <!-- search form -->
        @if (env('SEARCH_FORM') == true)
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
        @endif
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU UTAMA</li>
            <li>
                <a href="{{ url('/') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            @hasanyrole('User|Admin|Superadmin')
            <li class="header">MENU MASTER</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-database"></i>
                    <span>Master Data</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('jenis-cetak.index') }}"><i class="fa fa-angle-right"></i> Data Jenis
                            Cetakan</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Data Jenis Satuan</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Data Bahan</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Data Mesin</a></li>
                    <li><a href="{{ route('jenispaket.index') }}"><i class="fa fa-angle-right"></i> Data Jenis Paket</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Data Jenis Bayar</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Data Jenis Cetak</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('pelanggan.index') }}">
                    <i class="fa fa-user-plus"></i>
                    <span>Master Pelanggan</span>
                </a>
            </li>
            @endhasanyrole
            @hasanyrole('Admin|Superadmin')
            <li class="header">MENU PENGGUNA</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-plus"></i>
                    <span>Data Pengguna</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    @can('Manage Users')
                        <li><a href="{{ route('users.index') }}"><i class="fa fa-angle-right"></i> Pengguna</a></li>
                    @endcan
                    @can("Manage Roles","Administer Roles & Users")
                        <li><a href="{{ route('roles.index') }}"><i class="fa fa-angle-right"></i> Roles</a></li>
                    @endcan
                    @can("Manage Permissions")
                        <li><a href="{{ route('permissions.index') }}"><i class="fa fa-angle-right"></i> Permissions</a></li>
                    @endcan
                </ul>
            </li>
            @endhasanyrole
            @hasanyrole('User|Admin|Superadmin')
            <li class="header">MENU PRODUKSI</li>
            @can('Manage Cetakan')
            <li>
                <a href="{{ route('order.index') }}">
                    <i class="fa fa-pie-chart"></i>
                    <span>Order Cetakan</span>
                </a>
            </li>
            @endcan
            <li>
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Status Order</span>
                </a>
            </li>
            @endhasanyrole
            @hasanyrole('User|Admin|Superadmin')
            {{--@role('User|Admin')--}}
            <li class="header">MENU KASIR</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-angle-right"></i> Order Cetakan</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Pembayaran</a></li>
                </ul>
            </li>
            @endhasanyrole
            @hasanyrole('User|Admin|Superadmin')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-line-chart"></i> <span>Laporan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-angle-right"></i> Harian</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Bulanan</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Tahunan</a></li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-angle-right"></i> Level One
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-angle-right"></i> Level Two</a></li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-angle-right"></i> Level Two
                                    <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Level One</a></li>
                </ul>
            </li>
            @endhasanyrole
            {{--@endcan--}}
            {{--@endrole--}}

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
