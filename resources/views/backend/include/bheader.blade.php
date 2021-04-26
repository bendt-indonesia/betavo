<header class="main-header">
    <!-- Logo -->
    <a href="{{route('backend')}}" class="logo bg-white">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="{{asset('/bendt/images/logo-n.png')}}"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="{{asset('/bendt/images/logo-r.png')}}"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar blue-bg navbar-static-top">
        <!-- Sidebar toggle button-->
        <ul class="nav navbar-nav pull-left">
            <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
        </ul>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/" title="View Website" target="_blank"> <i class="fa fa-globe"></i>
                        <div class="notify">
                            <span class="heartbit"></span> <span class="point"></span>
                        </div>
                    </a>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu p-ph-res">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">Adminstrator</span>
                        <span><i class="fa fa-sign-out"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <p class="text-left">{{Auth::user()->name}} <small>{{Auth::user()->email}}</small> </p>
                        </li>
                        <li><a href="{{route('backend.account.change-password')}}">Change Password</a></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
