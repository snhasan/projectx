<ul class="nav navbar-top-links navbar-right">


    <!-- /.dropdown -->

    <!-- /.dropdown -->

    <!-- /.dropdown -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> {{Auth::user()->name}}<i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="/adminprofile"><i class="fa fa-user fa-fw"></i> User Profile</a>
            <li class="divider"></li>
            <li><a href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">

                    <i class="fa fa-sign-out fa-fw"></i> Logout</a>

                <form action="{{route('logout')}}" method="POST" id="logoutForm">
                    @csrf

                </form>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>