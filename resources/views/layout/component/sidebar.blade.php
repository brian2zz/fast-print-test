<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Fast Print Indonesia</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-item {{ Request::is('produk') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ url('/produk') }}">
                    <i class="align-middle" data-feather="box"></i> <span class="align-middle">Produk</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
