<header id="fh5co-header" role="banner">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header"> 
                <!-- Mobile Toggle Menu Button -->
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                <a class="navbar-brand" href="index.html">LaraSCI</a>
            </div>
            <div id="fh5co-navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{ url('/') }}"><span>Home <span class="border"></span></span></a></li>
                    <!-- For authenticated users, we show members and logout links -->
                    @if(Auth::check())
                    <li><a href="{{ url('members') }}"><span>Members <span class="border"></span></span></a></li>
                    <li><a href="{{ url('logout') }}"><span>Logout <span class="border"></span></span></a></li>
                    <!-- else we show only login link -->
                    @else
                    <li><a href="{{ url('login') }}"><span>Login <span class="border"></span></span></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- END .header -->