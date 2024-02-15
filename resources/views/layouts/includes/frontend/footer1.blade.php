<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h6>
                        <span id="lblmahindrauae">{{$appSetting->name}}</span>
                    </h6>
                    <div class="newsletter-form">
                        <div class="navbar-header">
                            <div class="logo">
                                <a href="{{url('/')}}">
                                    @if($appSetting->site_logo)
                                    <img src="{{ asset('storage/' . $appSetting->site_logo  ) }}" width="200" />
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
                            <a href="{{url('/')}}">
                                <span id="lblHomeFooter">الصفحة الرئيسية</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/about')}}">
                                <span id="lblAboutUsFooterLink">معلومات عن الشركة</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/vehicles')}}">
                                <span id="lblVehiclesFooter">السيارات</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/dealerlocator')}}">
                                <span id="lblDealerLocatorFooter">فروعنا</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/contact')}}">
                                <span id="lblContactusFooter">اتصل بنا</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <p class="copy-right">
                            <span id="lblCopyright">جميع الحقوق محفوظه &copy; 2023 mahindra.</span>
                        </p>
                    </div>

                    <div class="col-md-6">
                        <div class="footer_widget text-center">
                            <p>
                                <span id="lblConnectwithUs">اتصل بنا:</span>
                            </p>
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100086457727248" id="lbfacebook"
                                        target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                </li>

                                <li><a href="https://twitter.com/mahindra_saudi" id="lbtwitter" target="_blank"><i
                                            class="fa fa-twitter-square" aria-hidden="true"></i></a></li>

                                <li><a href="https://www.snapchat.com/add/mahindra_saudi?share_id=o83NEKg_4Fc&locale=en-JO"
                                        id="lbsnapchat" target="_blank"><i class="fa fa-snapchat"
                                            aria-hidden="true"></i></a>
                                </li>

                                <li><a href="https://www.instagram.com/mahindra_saudi?r=nametag" id="lbinstagram"
                                        target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UC3jTMgwOWIMX1HkU8u-YqDA"
                                        target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a href="http://tiktok.com/@mahindra_saudi" target="_blank"><i class="fab fa-tiktok"
                                            aria-hidden="true"></i></a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>