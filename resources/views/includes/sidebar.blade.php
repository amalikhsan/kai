<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/img/icons/kai-color.png') }}" width="30%" alt="">
        </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/img/icons/kai-color.png') }}" width="30%" alt="">
        </a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Main Menu</li>
        <li class="{{ Route::is('dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fire"></i>
                <span>Dashboard</span>
            </a>
        </li>
        {{-- <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i>
                <span>Dropdown Menu</span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown Item</a></li>
            </ul>
        </li> --}}

        @can('admin')
            <li class="menu-header">Administrator</li>
            <li class="{{ Route::is('user*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Kelola Pengguna</span>
                </a>
            </li>
        @endcan
        @can('pimpinan')
            <li class="menu-header">Pimpinan</li>
            <li class="{{ Route::is('dataAngbar*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dataAngbar.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Data Angbar</span>
                </a>
            </li>
            <li class="{{ Route::is('dataAngfas*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dataAngfas.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Data Angfas</span>
                </a>
            </li>
            <li class="{{ Route::is('dataAset*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dataAset.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Data Aset</span>
                </a>
            </li>
        @endcan
        @can('manager')
            <li class="menu-header">Manager</li>
            <li class="{{ Route::is('dataAngbar*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dataAngbar.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Data Angbar</span>
                </a>
            </li>
            <li class="{{ Route::is('dataAngfas*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dataAngfas.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Data Angfas</span>
                </a>
            </li>
            <li class="{{ Route::is('dataAset*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dataAset.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Data Aset</span>
                </a>
            </li>
        @endcan
        @can('angbar')
            <li class="menu-header">Angkutan Barang</li>
            <li class="{{ Route::is('dataAngbar*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dataAngbar.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Data Angbar</span>
                </a>
            </li>
        @endcan
        @can('angfas')
            <li class="menu-header">Angkutan Fasilitas</li>
            <li class="{{ Route::is('dataAngfas*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dataAngfas.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Data Angfas</span>
                </a>
            </li>
        @endcan
        @can('aset')
            <li class="menu-header">Aset</li>
            <li class="{{ Route::is('dataAset*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dataAset.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Data Aset</span>
                </a>
            </li>
        @endcan
    </ul>
</aside>
