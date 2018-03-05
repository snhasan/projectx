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
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                    @import "https://fonts.googleapis.com/css?family=Raleway";
                    *
                    {
                        font-family: Raleway,sans-serif;
                    }
                    .card.profile-card {

                        box-shadow: 0px 0px 20px #DFDFDF;
                        border: none;
                        border-radius: 0;
                    }

                    input.fab {
                        display: none
                    }

                    .img-profile {

                        max-width:220px;
                        -webkit-clip-path: circle(52% at 70% 38%);
                        -moz-clip-path: circle(52% at 70% 38%);
                        clip-path: circle(52% at 70% 38%);
                        transition: all .3s linear;
                    }
                    .img-profile:hover {
                        -webkit-clip-path: circle(100% at 60% 38%);
                        clip-path: circle(100% at 60% 38%);
                    }
                    .profile-card .fab+.toggle {
                        top: 63%;
                        z-index: 10;
                        right: 0;
                        width: 50px;
                        height: 50px;
                        cursor: pointer;
                        font-size: 60px;
                        line-height: 50px;
                        text-align: center;
                        border-radius: 50%;
                        position: absolute;
                        color: #fff;
                        background: #F44336;
                        -webkit-user-select: none;
                        box-shadow: 0 4px 4px #666;
                        transition: all 0.3s ease-in-out 0s;
                    }

                    .fab:checked+.toggle {
                        color: #fff;
                        background: #F44336;
                        transform: rotate(135deg);
                        box-shadow: 2px -2px 4px #333;
                        transition: all 0.3s ease-in-out 0s;
                    }
                </style>


                <section class="bg-faded container-fluid">
                    <div class="row py-3 flex-items-sm-center">
                        <!--
                    User Card
                    -->
                        <div class="col-xs-12 col-sm-3 py-2 clearfix">
                            <div class="card profile-card">
                                <figure>

                                    <img src="images/{{Auth::user()->image  }}" class="img-fluid img-profile" alt="Card image">
                                </figure>

                            </div>
                        </div>
                    </div>
                </section>
            </li>

            <li>
                <a href="{{url('/home')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{url('/BDEprofile')}}"><i class="fa fa-user fa-fw"></i>Profile</a>

                <!-- /.nav-second-level -->
            </li>



        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>