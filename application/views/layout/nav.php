<!--start top-bar-->
<div class="top_bar_travel hidden-xs text-center">
    <div class="container">
        <div class="row">
        <div class="col-md-3 col-sm-6">
            <!-- <ul class="list-unstyled list-inline top_contact">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <img src="<?php echo base_url('assets/front/img/r-flag.png')?>" alt="flag">English
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><img src="<?= base_url('assets/front/img/frence-flag.ico')?>" alt="flag">Fransh</a></li>
                        <li><a href="#"><img src="<?= base_url('assets/front/img/turkey-flag.ico')?>" alt="flag">Spanish </a></li>
                        <li><a href="#"><img src="<?= base_url('assets/front/img/russia-flag.ico')?>" alt="flag">Russian</a></li>
                        <li><a href="#"><img src="<?= base_url('assets/front/img/garmen-flg.png')?>" alt="flag">German</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-usd"></i> USD
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-usd"></i> ERU</a></li>
                        <li><a href="#"><i class="fa fa-gbp"></i> PR</a></li>
                        <li><a href="#"><i class="fa fa-eur"></i> ERU</a></li>
                        <li><a href="#"><i class="fa fa-inr"></i> RS</a></li>
                    </ul>
                </li>
            </ul> -->
        </div>
        <div class="col-md-5 hidden-sm">
            <div class="top_search">
                <form>
                    <input type="text" placeholder="Search here...">
                    <button class="email-btn"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="top_email">
                <ul class="list-unstyled list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>

            </div>
        </div>

        </div>
    </div>
</div>
<!--end top-bar-->
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="<?= base_url('assets/front/img/logo-v2.png')?>" alt="logo" height="40px" width="130px"></a>
        </div>
        <!--navbar-collapse-->
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <!--Home-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;"> <i class="fa fa-home"></i>Home
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;"> Home
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/home/inner-home/home_flight.html"><i class="fa fa-certificate"></i> Home Flight</a></li>
                                <li><a href="html/home/inner-home/home_hotel.html"><i class="fa fa-certificate "></i> Home Hotel</a></li>
                                <li><a href="html/home/inner-home/home-travel.html"><i class="fa fa-certificate"></i> Home Travel</a></li>
                            </ul>
                        </li>
                        <li><a href="html/home/layout_one.html">  Home version-1</a></li>
                        <li><a href="html/home/layout_two.html">  Home version-2</a></li>
                        <li ><a href="html/home/layout_three.html" class="no-border">  Home version-3</a></li>
                    </ul>
                </li>
                <!--Flights-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;"><i class="fa fa-plane"></i>Flights
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu mega-dropdown-menu row">
                        <li class="col-md-3 col-sm-12">
                            <ul>
                                <li><a href="html/flight/home-flight.html">Home Flight</a></li>
                                <!--<li class="divider"></li>-->

                                <li class="dropdown-header">Flights list one</li>
                                <li><a href="html/flight/flights_list_one/left_sidebar.html">Left Side bar</a></li>
                                <li><a href="html/flight/flights_list_one/right_sidebar.html">Right Side bar</a></li>
                                <li><a href="html/flight/flights_list_one/full_width.html">Full Width</a></li>
                                <!--<li class="divider"></li>-->
                                <li class="dropdown-header">Flights list Two</li>
                                <li><a href="html/flight/flights_list_two/left_sidebar.html">Left Side bar</a></li>
                                <li><a href="html/flight/flights_list_two/right_sidebar.html">Right Side bar</a></li>
                                <li><a href="html/flight/flights_list_two/full_width.html">Full Width</a></li>

                            </ul>
                        </li>
                        <li class="col-md-3 col-sm-12">
                            <ul>
                                <!--<li class="divider"></li>-->

                                <li class="dropdown-header">Flights Detail one</li>
                                <li><a href="html/flight/flights_details_one/left_sidebar.html">Left Side bar</a></li>
                                <li><a href="html/flight/flights_details_one/right_sidebar.html">Right Side bar</a></li>
                                <li><a href="html/flight/flights_details_one/full_width.html">Full Width</a></li>
                                <!--<li class="divider"></li>-->

                                <li class="dropdown-header">Flights Detail Two</li>
                                <li><a href="html/flight/flights_details_two/left_sidebar.html">Left Side bar</a></li>
                                <li><a href="html/flight/flights_details_two/right_sidebar.html">Right Side bar</a></li>
                                <li><a href="html/flight/flights_details_one/full_width.html">Full Width</a></li>

                            </ul>
                        </li>
                        <li class="col-md-3 col-sm-12">
                            <ul>
                                <!--<li class="divider"></li>-->

                                <li class="dropdown-header">Flights Booking one</li>
                                <li><a href="html/flight/flights_booking_one/left_sidebar.html">Left Side bar</a></li>
                                <li><a href="html/flight/flights_booking_one/right_sidebar.html">Right Side bar</a></li>
                                <li><a href="html/flight/flights_booking_one/full_width.html">Full Width</a></li>
                                <!--<li class="divider"></li>-->

                                <li class="dropdown-header">Flights Booking Two</li>
                                <li><a href="html/flight/flights_booking_two/left_sidebar.html">Left Side bar</a></li>
                                <li><a href="html/flight/flights_booking_two/right_sidebar.html">Right Side bar</a></li>
                                <li><a href="html/flight/flights_booking_two/full_width.html">Full Width</a></li>

                            </ul>
                        </li>
                        <li class="col-md-3 col-sm-12">
                            <ul>
                                <!--<li class="divider"></li>-->

                                <li class="dropdown-header">Maps</li>
                                <li><a href="html/flight/maps/map_style_one.html">Map Style One</a></li>
                                <li><a href="html/flight/maps/map_style_two.html">Map Style Two</a></li>
                                <li><a href="html/flight/maps/half_map.html">Half Map</a></li>
                                <!--<li class="divider"></li>-->

                                <li class="dropdown-header">Confirm Booking</li>
                                <li><a href="html/flight/confirm_booking/layout_one.html">Layout One</a></li>
                                <li><a href="html/flight/confirm_booking/layout_two.html">Layout two</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!--Hotels-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;"><i class="fa fa-hotel"></i>Hotels
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="html/hotel/home_hotel.html">  Home Hotel</a></li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Hotels Lists One
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/hotel/hotels_list_one/left_sidebar.html"><i class="fa fa-certificate "></i>Left Sidebar</a></li>
                                <li><a href="html/hotel/hotels_list_one/right_sidebar.html"><i class="fa fa-certificate "></i>Right Sidebar</a></li>
                                <li><a href="html/hotel/hotels_list_one/full_width.html"><i class="fa fa-certificate "></i>Full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Hotels Lists Two
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/hotel/hotels_list_two/left_sidebar.html"><i class="fa fa-certificate "></i>Left Sidebar</a></li>
                                <li><a href="html/hotel/hotels_list_two/right_sidebar.html"><i class="fa fa-certificate "></i>Right Sidebar</a></li>
                                <li><a href="html/hotel/hotels_list_two/full_width.html"><i class="fa fa-certificate "></i>Full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Hotels Details One
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/hotel/hotels_details_one/left_sidebar.html"><i class="fa fa-certificate "></i>Left Sidebar</a></li>
                                <li><a href="html/hotel/hotels_details_one/right_sidebar.html"><i class="fa fa-certificate "></i>Right Sidebar</a></li>
                                <li><a href="html/hotel/hotels_details_one/full_width.html"><i class="fa fa-certificate "></i>Full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Hotels Details Two
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/hotel/hotels_details_two/left_sidebar.html"><i class="fa fa-certificate "></i>Left Sidebar</a></li>
                                <li><a href="html/hotel/hotels_details_two/right_sidebar.html"><i class="fa fa-certificate "></i>Right Sidebar</a></li>
                                <li><a href="html/hotel/hotels_details_two/full_width.html"><i class="fa fa-certificate "></i>Full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Hotels Booking One
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/hotel/hotels_booking_one/left_sidebar.html"><i class="fa fa-certificate "></i>Left Sidebar</a></li>
                                <li><a href="html/hotel/hotels_booking_one/right_sidebar.html"><i class="fa fa-certificate "></i>Right Sidebar</a></li>
                                <li><a href="html/hotel/hotels_booking_one/full_width.html"><i class="fa fa-certificate "></i>Full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Hotels Booking Two
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/hotel/hotels_booking_two/left_sidebar.html"><i class="fa fa-certificate "></i>Left Sidebar</a></li>
                                <li><a href="html/hotel/hotels_booking_two/right_sidebar.html"><i class="fa fa-certificate "></i>Right Sidebar</a></li>
                                <li><a href="html/hotel/hotels_booking_two/full_width.html"><i class="fa fa-certificate "></i>Full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Maps
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/hotel/maps/map_style_one.html"><i class="fa fa-certificate "></i>Map Style One</a></li>
                                <li><a href="html/hotel/maps/map_style_two.html"><i class="fa fa-certificate "></i>Map Style Two</a></li>
                                <li><a href="html/hotel/maps/half_map.html"><i class="fa fa-certificate "></i>Half Map</a></li>
                                <li><a href="html/hotel/maps/full_map.html"><i class="fa fa-certificate "></i>FUll Map</a></li>
                            </ul>
                        </li>

                        <li class=" dropdown-submenu">
                            <a class="test no-border"  data-toggle="dropdown" href="javascript:;" >  Confirm Booking
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/hotel/confirm_booking/layout_one.html"><i class="fa fa-certificate "></i>Layout One</a></li>
                                <li><a href="html/hotel/confirm_booking/layout_two.html"><i class="fa fa-certificate "></i>Layout Two</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!--Travels-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;"><i class="fa fa-car"></i>Travels
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="html/travel/home-travel.html">  Home Travel</a></li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Travels Lists One
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/travel/travels_list_one/left_sidebar.html"><i class="fa fa-certificate "></i>Left Sidebar</a></li>
                                <li><a href="html/travel/travels_list_one/right_sidebar.html"><i class="fa fa-certificate "></i>Right Sidebar</a></li>
                                <li><a href="html/travel/travels_list_one/full_width.html"><i class="fa fa-certificate "></i>Full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Travels Lists Two
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/travel/travels_list_two/left_sidebar.html"><i class="fa fa-certificate "></i>Left Sidebar</a></li>
                                <li><a href="html/travel/travels_list_two/right_sidebar.html"><i class="fa fa-certificate "></i>Right Sidebar</a></li>
                                <li><a href="html/travel/travels_list_two/full_width.html"><i class="fa fa-certificate "></i>Full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Travels Details One
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/travel/travels_details_one/left_sidebar.html"><i class="fa fa-certificate "></i>Left Sidebar</a></li>
                                <li><a href="html/travel/travels_details_one/right_sidebar.html"><i class="fa fa-certificate "></i>Right Sidebar</a></li>
                                <li><a href="html/travel/travels_details_one/full_width.html"><i class="fa fa-certificate "></i>Full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Travels Details Two
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/travel/travels_details_two/left_sidebar.html"><i class="fa fa-certificate "></i>Left Sidebar</a></li>
                                <li><a href="html/travel/travels_details_two/right_sidebar.html"><i class="fa fa-certificate "></i>Right Sidebar</a></li>
                                <li><a href="html/travel/travels_details_two/full_width.html"><i class="fa fa-certificate "></i>Full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Travels Booking One
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/travel/travels_booking_one/left_sidebar.html"><i class="fa fa-certificate "></i>Left Sidebar</a></li>
                                <li><a href="html/travel/travels_booking_one/right_sidebar.html"><i class="fa fa-certificate "></i>Right Sidebar</a></li>
                                <li><a href="html/travel/travels_booking_one/full_width.html"><i class="fa fa-certificate "></i>Full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Travels Booking Two
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/travel/travels_booking_two/left_sidebar.html"><i class="fa fa-certificate "></i>Left Sidebar</a></li>
                                <li><a href="html/travel/travels_booking_two/right_sidebar.html"><i class="fa fa-certificate "></i>Right Sidebar</a></li>
                                <li><a href="html/travel/travels_booking_two/full_width.html"><i class="fa fa-certificate "></i>Full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Maps
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/travel/maps/map_style_one.html"><i class="fa fa-certificate "></i>Map Style One</a></li>
                                <li><a href="html/travel/maps/map_style_two.html"><i class="fa fa-certificate "></i>Map Style Two</a></li>
                                <li><a href="html/travel/maps/half_map.html"><i class="fa fa-certificate "></i>Half Map</a></li>
                                <li><a href="html/travel/maps/full_map.html"><i class="fa fa-certificate "></i>FUll Map</a></li>
                            </ul>
                        </li>

                        <li class="dropdown-submenu">
                            <a class="test no-border"  data-toggle="dropdown" href="javascript:;">  Confirm Booking
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop1">
                                <li><a href="html/travel/confirm_booking/layout_one.html"><i class="fa fa-certificate "></i>Layout One</a></li>
                                <li><a href="html/travel/confirm_booking/layout_two.html"><i class="fa fa-certificate "></i>Layout Two</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!--ShortCodes-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;"> <i class="fa fa-th-list"></i>ShortCodes
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="html/shortcodes/typography.html">  Typography</a></li>
                        <li><a href="html/shortcodes/forms.html">  Form</a></li>
                        <li><a href="html/shortcodes/icons.html">  Icons</a></li>
                        <li><a href="html/shortcodes/buttons.html">  Buttons</a></li>
                        <li><a href="html/shortcodes/animation.html">  Animation</a></li>
                        <li><a href="html/shortcodes/toggles.html">  Toggles</a></li>
                        <li><a href="html/shortcodes/alerts.html">  Alerts</a></li>
                        <li><a href="html/shortcodes/tabs.html">  Tabs</a></li>
                        <li><a href="html/shortcodes/tables.html" class="no-border">  tables</a></li>
                    </ul>
                </li>
                <!--Pages-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;"> <i class="fa fa-briefcase"></i>Pages
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Headers
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop2">
                                <li><a href="html/pages/headers/header_one.html"><i class="fa fa-certificate"></i>Header One</a></li>
                                <li><a href="html/pages/headers/header_two.html"><i class="fa fa-certificate"></i>Header Two</a></li>
                                <li><a href="html/pages/headers/header_three.html"><i class="fa fa-certificate"></i>Header Three</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Footers
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop2">
                                <li><a href="html/pages/footers/footer_one.html"><i class="fa fa-certificate "></i>Footers One</a></li>
                                <li><a href="html/pages/footers/footer_two.html"><i class="fa fa-certificate "></i>Footers Two</a></li>
                                <li><a href="html/pages/footers/footer_three.html"><i class="fa fa-certificate "></i>Footers Three</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;">  Search Styles
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop2">
                                <li><a href="html/pages/search-styles/search_one.html"><i class="fa fa-certificate "></i>Search One</a></li>
                                <li><a href="html/pages/search-styles/search_two.html"><i class="fa fa-certificate "></i>Search Two</a></li>
                                <li><a href="html/pages/search-styles/search_three.html"><i class="fa fa-certificate "></i>Search Three</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="test"  data-toggle="dropdown" href="javascript:;"> Contact Us
                                <span class="fa fa-caret-right pull-right"></span></a>
                            <ul class="dropdown-menu drop2">
                                <li><a href="html/pages/contact_us.html"><i class="fa fa-certificate "></i>Contact One</a></li>
                                <li><a href="html/pages/contact_us_two.html"><i class="fa fa-certificate "></i>Contact Two</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url('login') ?>">  Log In</a></li>
                        <li><a href="html/pages/sign_up.html">  Sign Up</a></li>
                        <li><a href="html/pages/about_us.html">  About Us</a></li>
                        <li><a href="html/pages/coming_soon.html">  Coming Soon</a></li>
                        <li><a href="html/pages/FAQ.html">  FAQ</a></li>
                        <li><a href="html/pages/404.html" class="no-border">  404</a></li>
                    </ul>
                </li>
                <!--Find My Flight-->
                <li class="visible-lg"><span><a href="html/flight/flights_list_two/left_sidebar.html" class="btn btn_order_now">Find My Flight</a></span></li>
            </ul>
        </div>
    </div>
</nav>