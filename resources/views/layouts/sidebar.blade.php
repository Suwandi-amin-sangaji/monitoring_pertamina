<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{'/home'}}">
        <img src="{{asset('assets/img/logo-login.png')}}" alt="" width="150">
        </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{'/home'}}">
            <img src="{{asset('assets/img/logo-login.png')}}" alt="" width="50">
        </a>
    </div>
    <ul class="sidebar-menu">
        @section('sidebar')
        <li class="menu-header">Dashboard</li>
        <li ><a href="{{'/home'}}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
        <li class="menu-header">Data Master</li>
    <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Management Users</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="{{'/pengguna'}}">Data Pengguna</a></li>
    </ul>
    </li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-university"></i><span>Lembaga Penyalur</span></a>
        <ul class="dropdown-menu">
            <li ><a class="nav-link" href="{{'/penyalur'}}"><i class="fa fa-truck"></i> <span>Penyaluran</span></a></li>
        </ul>
        </li>
    <li class="menu-header">Laporan</li>
    <li ><a class="nav-link" href="credits.html"><i class="fas fa-download"></i> <span>Penyaluran</span></a></li>
    <li ><a class="nav-link" href="credits.html"><i class="fas fa-upload"></i> <span>Penerimaan</span></a></li>

    <li class="menu-header">SPBU</li>
    <li ><a class="nav-link" href="{{'spbu'}}"><i class="fas fa-gas-pump"></i> <span>Data Spbu</span></a></li>
    </li>
        @show
    </ul>
</aside>
