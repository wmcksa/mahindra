<header class="header_style2 nav-stacked affix-top" data-spy="affix" data-offset-top="1">
    <!-- Navigation -->
    <nav id="navigation_bar" class="navbar navbar-expand-lg">
        <div class="container custom-con">
            <div class="row header-row padding-remove">
                <div class="navbar-header">
                    <div class="logo">
                        <a href="{{url('/home-en')}}">
                            @if($appSetting_en->site_logo)
                            <img src="{{ asset('storage/' . $appSetting_en->site_logo  ) }}" width="200" />
                            @else
                            <img src="{{asset('assets/images/logo/Mahindra-Logo_Red.png')}}" width="200" />
                            @endif </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav" style="white-space: nowrap;">
                        <li>
                            <a href="{{url('/home-en')}}">
                                <span id=" lblHome">Home</span></a>
                        </li>
                        <li>
                            <a href="{{url('/about-en')}}">
                                <span id="lblAboutMenu">About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/vehicles-en')}}">
                                <span id=" lblVehicles">Vehicles</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dealerlocator-en')}}">
                                <span id="lblDealerLocator">Dealer Locator</span>
                            </a>
                        </li>
                        <li><a href="{{url('/contact-en')}}">
                                <span id="lblContactMenu">Contact us</span></a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                                <span id="lblContactMenu">Inquiries</span></a>

                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li>
                                        <button class="dropdown-item" style="color: #fff;" type="button" data-bs-toggle="modal" data-bs-target="#schedule">
                                            <i class="fa fa-car" aria-hidden="true"></i>
                                            Schedule Test Drive
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" style="color: #fff;" type="button" data-bs-toggle="modal" data-bs-target="#make_offer">
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                            Request Offer 
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" style="color: #fff;" type="button" data-bs-toggle="modal" data-bs-target="#more_info">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                            Request More Info 
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" style="color: #fff;" type="button" data-bs-toggle="modal" data-bs-target="#miantenanec_time">
                                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                            Book a Maintenance Appointment  
                                        </button>
                                    </li>
                                </ul>
                        </li>

                        <li style="display: none">
                            <a href="{{url('/home-en')}}">
                                <span id="Label1">عربي</span>
                            </a>
                        </li>


                    </ul>

                </div>

                <div class="header_wrap margin-remove">


                    <div class="login_btn">
                        <a id="lbChangeLang" class="btn btn-xs uppercase" href="../index.php">
                            <span id="lbllang">عربي</span>
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </nav>

    <!-- Navigation end -->

<!--Schedule-Test-Drive -->
<div class="modal fade" id="schedule">
    <livewire:frontend.en.vehicles-detail.test-drive />
</div>
<!--/Schedule-Test-Drive -->

<!--Make-Offer -->
<div class="modal fade" id="make_offer">
    <livewire:frontend.en.vehicles-detail.offer />
</div>
<!--/Make-Offer -->


<!--Request-More-Info -->
<div class="modal fade" id="more_info">
    <livewire:frontend.en.vehicles-detail.request-more />
</div>
<!--/Request-More-Info -->

{{-- حجز موعد صيانة--}}
<div class="modal fade" id="miantenanec_time">
    <livewire:frontend.en.vehicles-detail.miantenanec-time />
</div>


</header>