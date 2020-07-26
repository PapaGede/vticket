<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{route('dashboard.index')}}"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard</a>

                    <a class="nav-link" href="{{route('region.index')}}"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Regions</a>

                    <a class="nav-link" href="{{route('trips.index')}}"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Trips</a>

                    <a class="nav-link" href="{{route('passengers.index')}}"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Passenger Details</a>
                    <a class="nav-link" href="{{route('orders.index')}}"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Trips Order</a>
                        <a class="nav-link" href="{{route('buses.index')}}"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Bus Availability</a>
           </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">@yield('name')</h1>
                @yield('contents')

            </div>
        </main>
        @include('partials._dashFooter')
    </div>


</div>

