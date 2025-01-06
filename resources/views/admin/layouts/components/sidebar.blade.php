<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                <span>Dashboard</span>
            </a>
        </li>

        @if (Auth::user()->role == 'admin')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('pengguna') }}">
                    <span>Pengguna</span>
                </a>
            </li>
        @endif

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('category-service') }}">
                <span>Kategori Pelayanan</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('service') }}">
                <span>Pelayanan</span>
            </a>
        </li>

    </ul>

</aside>
