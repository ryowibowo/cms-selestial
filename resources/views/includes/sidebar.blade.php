 <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('dashboard') }}"><i class
                            ="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                     <li class="menu-title">User</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{ route('users.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat User</a>
                    </li>
                    <li class="">
                        <a href="{{ route('users.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah USer</a>
                    </li>

                    <li class="menu-title">Kriteria</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{ route('products.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Kriteria</a>
                    </li>
                    <li class="">
                        <a href="{{ route('products.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Kriteria</a>
                    </li>

                    <li class="menu-title">Transaksi</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{ route('transactions.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Transaksi</a>

                        <a href="{{ route('transactions.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Transaksi</a>
                    </li>

                    <li class="menu-title">Laporan</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{ route('reports.index') }}"> <i class="menu-icon fa fa-list"></i>Lihat Transaksi</a>

                    </li>

                    <li class="">
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->