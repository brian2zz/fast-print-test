<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Fast Print Indonesia</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-item {{ Request::is('produk') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('/produk') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Produk</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('kategori') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('/kategori') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">kategori</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
