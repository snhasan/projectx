<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div >
                    <h3>Ontik Technology</h3>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{url('/home')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-user fa-fw"></i>Profile<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/AdminSEList')}}">Sales Executives</a>
                    </li>
                    <li>
                        <a href="{{url('/AdminBDEList')}}">Business Development Executives</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Checklist <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/AdminFollowupList')}}">Follow Up</a>
                    </li>
                  
                    <li>
                        <a href="{{url('/AdminMeetingList')}}">Meetings</a>
                    </li>
                    
                    
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{url('/AdminClients')}}"><i class="fa fa-user fa-fw"></i> Clients</a>
            </li>



        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>