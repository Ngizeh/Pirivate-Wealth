 <header class="style2">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-5 header-info">
                        <span class="hidden-xs">
                         <i class="fa fa-map-marker"></i>
                         New Muthaiga Mall, Opposite Thigiri Ridge, Nairobi, Kenya
                        </span>

                        <span class="visible-xs"> <i class="fa fa-map-marker"></i> <a href="#"> View location</a> </span>
                    </div>
                    <!--left-->

                    <div class="col-md-6 col-sm-6 col-xs-7">
                        <ul class="header-links pull-right">
                            <li><a href="/about">About Us</a></li>
                            <li><a href="#" class="modal-login" data-toggle="modal" data-target=".myModal">Login</a></li>
                          <!--   <li><a href="#" class="modal-register" data-toggle="modal" data-target=".myModal">Register </a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--header top-->

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                     <!--    <img src="{{asset('assets/images/logo-white.png')}}" alt="" class="logo1"> -->
                        <img src="{{asset('assets/images/logo-green.png')}}" width=62 height=170 alt="" class="logo2">
                    </a>
                </div>
                <!-- button -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="current-menu-item dropdown">
                            <a href="/">Home</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle">Properties<span class="caret"></span></a>
                            <ul class="sub-menu dropdown-menu">
                                <li><a href="/property">For Sale</a></li>
                                <li><a href="/property">For Rent</a></li>
                                <li><a href="/property">Commercial Properties</a></li>
                                <li><a href="/property">Residential Properties</a></li>
                            </ul>
                        </li>

                        <li>
                          <a href="/lands">Lands</a>
                        </li>

                        <li>
                            <a href="/contact">Contact</a>
                        </li>

                        <li class="nav-btn">
                            <a href="#"><i class="fa fa-phone"></i> +254-715-008-946</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    @include('layouts.modal')
    <!--header-->
