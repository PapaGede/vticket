<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark top-nav">
<a class="navbar-brand" href="{{route('dashboard.index')}}">Vticket Admin</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
    ><!-- Navbar Search-->

    <!-- Navbar-->

    <ul class="nav navbar-nav ml-auto">
        <a class="nav-link" href="#" id="" role="" data-toggle="" aria-haspopup="true" aria-expanded="false">
            {{Auth::user()->name}}
          </a>
        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right " aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>


            </div>
        </li>
    </ul>
</nav>
