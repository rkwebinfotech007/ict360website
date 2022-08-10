<header class="top_header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="main_menu_area">
                    <div class="mainmenu">
                        <!-- <nav style="display: block;float:left;width:100%">
                            <ul id="nav" class="call_time">
                                <li><a href="mailto:info@mbx.co.in" style="line-height:17px; text-align:left; text-transform: lowercase;">
                                        <i class="fa fa-phone" aria-hidden="true"></i> +(022) 42018000<br>
                                        <i class="fa fa-envelope" aria-hidden="true"></i> info@mbx.co.in</a>
                                </li>
                                <li><a href="#" style="line-height:17px; width:212px; text-align:left;"><img src="{{asset('public/images/clock.png')}}" style="float:left; margin-right:10px;"> WE ARE OPEN!<br>
                                        Mon-Fri 9:30-6:00</a></li>
                            </ul>
                        </nav> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<header id="header-part" class="header-four">
    <div class="navigation">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{route('index')}}">
                            <img src="{{asset('public/images/ICT_360_logo.png')}}" alt="Logo" style="max-height: 120px;">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li>
                                    <a class="{{ Request::path() == '/' ? 'active' : '' }} our_solution" href="{{route('index')}}">Our solutions</a>
                                </li>
                                <li>
                                    <a class="{{ Request::path() == 'about' ? 'active' : '' }}" href="{{route('about')}}">About us</a>
                                </li>
                                <!-- <li>
                                        <a href="#">Pricing</a>
                                    </li> -->
                                <li>
                                    <a class="{{ Request::path() == 'competition' ? 'active' : '' }}" href="{{route('competition')}}">competitions</a>
                                </li>
                                <li>
                                    <a class="{{ Request::path() == 'blog' ? 'active' : '' }}" href="{{route('blog')}}">blogs</a>
                                </li>
                                <li>
                                    <a href="#contact">contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav> <!-- nav -->
                </div>

            </div> <!-- row -->
        </div> <!-- container -->

    </div>
</header>