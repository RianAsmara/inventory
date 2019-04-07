<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="dashboard-ecommerce.html">bumdesmart</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="dashboard-ecommerce.html">bmart</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href="{{ url('dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span>
                        Dashboard</span></a></li>
            <li class="menu-header">Transaksi</li>
            <li><a class="nav-link" href="{{ url('supplier') }}"><i class="fas fa-dollar-sign"></i> <span> Transaksi
                        Pengiriman</span></a></li>
            <li><a class="nav-link" href="{{ url('supplier') }}"><i class="fas fa-dollar-sign"></i> <span> Transaksi
                        Pembelian</span></a></li>
            <li><a class="nav-link" href="{{ url('supplier') }}"><i class="fas fa-exchange-alt"></i> <span> Transaksi Retur</span></a></li>
            <li class="menu-header">Master Data</li>
            <li><a class="nav-link" href="{{ route('baranggudang.bgudang') }}"><i class="fas fa-box"></i> <span> Data Barang </span></a></li>
            <li><a class="nav-link" href="{{ route('gudang.supplier') }}"><i class="fas fa-warehouse"></i> <span>Supplier</span></a></li>
            {{-- <li><a class="nav-link" href="{{ url('toko') }}"><i class="fas fa-store"></i> <span> Toko</span></a></li> --}}
            <li><a class="nav-link" href="{{ route('kategori') }}"><i class="fas fa-table"></i> <span> Kategori Barang</span></a></li>
        </ul>
    </aside>
</div>