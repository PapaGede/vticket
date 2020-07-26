<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container-fluid topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand topnav vtick" href="/" style="font-style:italic;color:white">V-Ticket</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item {{ Request::is('about') ? "active":""}}" >
                    <a href="about" target=""><b>About</b></a>
                </li>
                <li class="nav-item {{ Request::is('services') ? "active":""}}">
                    <a href="services" target=""><b>Services</b></a>
                </li>
                <li>
                    <a href="mailto:sblignam@gmail.com" target="">Contact</a>
                </li>
                @if(Auth::check())


                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a></li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                @else
                <li>
                    <a href="{{route('login')}}" target="">Login/Register</a>
                </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
