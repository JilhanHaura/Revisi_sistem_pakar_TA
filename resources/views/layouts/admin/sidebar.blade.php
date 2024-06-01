<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Sistem Pakar</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SP</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-link active">
                <a href="{{ route('admin/home') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">History </li>
            <li><a class="nav-link" href="#"><i class="fas fa-history"></i><span>Riwayat User</span></a></li>
            <li class="menu-header">Main </li>
            <li><a class="nav-link" href="{{ url('/admin/gejala') }}"><i class="fas fa-columns"></i><span>DATA
                        GEJALA</span></a></li>
            <li><a class="nav-link" href="{{ url('/admin/pernyataan') }}"><i class="fas fa-th"></i> <span>DATA
                        PERNYATAAN</span></a>
            </li>
            <li><a class="nav-link" href="{{ url('/admin/rule') }}"><i class="fas fa-th-large"></i> <span>BASIS
                        RULE</span></a></li>

        </ul>
    </aside>
</div>
