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

        @show
    </ul>
</aside>
