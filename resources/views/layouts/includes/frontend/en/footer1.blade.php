<footer>

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h6>
                        <span id="lblmahindrauae">{{$appSetting_en->name}}</span>
                    </h6>
                    <div class="newsletter-form">

                        <div class="navbar-header">
                            <div class="logo">
                                <a href="{{url('/home-en')}}">
                                    @if($appSetting_en->site_logo)
                                    <img src="{{ asset('storage/' . $appSetting_en->site_logo  ) }}" width="200" />
                                    @else
                                    <img src="{{asset('assets/images/logo/Mahindra-Logo_Red.png')}}" width="200" />
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <ul>
                        <li>
                            <a href="{{url('/home-en')}}">
                                <span id=" lblHomeFooter">Home</span></a>
                        </li>
                        <li><a href="{{url('/about-en')}}">
                                <span id="lblAboutUsFooterLink">About Us</span></a></li>
                        <li><a href="{{url('/vehicles-en')}}">
                                <span id="lblVehiclesFooter">Vehicles</span></a></li>
                        <li><a href="{{url('/dealerLocator-en')}}">
                                <span id="lblDealerLocatorFooter">Dealer Locator</span></a></li>
                        <li><a href="{{url('/contact-en')}}">
                                <span id="lblContactusFooter">Contact us</span></a></li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p class="copy-right">
                            <span id="lblCopyright">Copyright &copy; 2023 mahindra. All Rights Reserved</span>
                        </p>
                    </div>



                    <div class="col-md-6">
                        <div class="footer_widget">

                            <p>
                                <span id="lblConnectwithUs">Connect with Us:</span>
                            </p>

                            <ul>

                                <li><a href="https://www.facebook.com/profile.php?id=100086457727248" id="lbfacebook"
                                        target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                </li>

                                <li><a href="https://twitter.com/mahindra_saudi" id="lbtwitter" target="_blank"><i
                                            class="fa fa-twitter-square" aria-hidden="true"></i></a></li>

                                <li><a href="https://www.snapchat.com/add/mahindra_saudi?share_id=o83NEKg_4Fc&locale=en-JO"
                                        id="lbsnapchat" target="_blank"><i class="fa fa-snapchat"
                                            aria-hidden="true"></i></a></li>

                                <li><a href="https://www.instagram.com/mahindra_saudi?r=nametag" id="lbinstagram"
                                        target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UC3jTMgwOWIMX1HkU8u-YqDA"
                                        target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a href="http://tiktok.com/@mahindra_saudi" target="_blank"><i class="fab fa-tiktok"
                                            aria-hidden="true"></i></a></li>

                            </ul>


                        </div>


                    </div>

                </div>




            </div>

        </div>

    </div>



</footer>