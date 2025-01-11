<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item">
        <a href="{{ route('admin.dashboard') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Menu</span>
    </li>

    <!-- Undian Umum -->
    <li class="menu-item {{ request()->routeIs('admin.peserta-umum.index') || request()->routeIs('admin.pemenang-undian-umum.index') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-data"></i>
            <div data-i18n="Undian Umum">Undian Umum</div>
        </a>

        <ul class="menu-sub">
            <li class="menu-item {{ request()->routeIs('admin.peserta-umum.index') ? 'active' : '' }}">
                <a href="{{ route('admin.peserta-umum.index') }}" class="menu-link">
                    <div data-i18n="Peserta">Peserta</div>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.pemenang-undian-umum.index') ? 'active' : '' }}">
                <a href="{{ route('admin.pemenang-undian-umum.index') }}" class="menu-link">
                    <div data-i18n="Pemenang Undian">Pemenang Undian</div>
                </a>
            </li>
        </ul>
    </li>

    <!-- Undian Grand Price -->
    <li class="menu-item {{ request()->routeIs('admin.peserta-grandprice.index') || request()->routeIs('admin.pemenang-undian-grandprice.index') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-data"></i>
            <div data-i18n="Undian Grand Price">Undian Grand Price</div>
        </a>

        <ul class="menu-sub">
            <li class="menu-item {{ request()->routeIs('admin.peserta-grandprice.index') ? 'active' : '' }}">
                <a href="{{ route('admin.peserta-grandprice.index') }}" class="menu-link">
                    <div data-i18n="Peserta">Peserta</div>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.pemenang-undian-grandprice.index') ? 'active' : '' }}">
                <a href="{{ route('admin.pemenang-undian-grandprice.index') }}" class="menu-link">
                    <div data-i18n="Pemenang Undian">Pemenang Undian</div>
                </a>
            </li>
        </ul>
    </li>

    <!-- Undian Umum Lima -->
    <li class="menu-item {{ request()->routeIs('admin.peserta-umum-lima.index') || request()->routeIs('admin.pemenang-undian-umum-lima.index') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-data"></i>
            <div data-i18n="Undian Umum Lima">Undian Umum Lima</div>
        </a>

        <ul class="menu-sub">
            <li class="menu-item {{ request()->routeIs('admin.peserta-umum-lima.index') ? 'active' : '' }}">
                <a href="{{ route('admin.peserta-umum-lima.index') }}" class="menu-link">
                    <div data-i18n="Peserta">Peserta</div>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.pemenang-undian-umum-lima.index') ? 'active' : '' }}">
                <a href="{{ route('admin.pemenang-undian-umum-lima.index') }}" class="menu-link">
                    <div data-i18n="Pemenang Undian">Pemenang Undian</div>
                </a>
            </li>
        </ul>
    </li>
</ul>
