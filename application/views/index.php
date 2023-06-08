<?php $this->load->view('layout/header')?>
<?php $this->load->view('layout/nav')?>

<div class="inner-body">
    <div class="wrapper-index">
        <div class="wrapper-inner">
            <!--text-box-->
            <div class="row scroll-text hidden-xs">
                <div class="col-sm-12">
                    <div class="text-box">
                        <h3>
                            <i class="fa fa-plane"></i> <span>Flights</span>  <br>
                            WHERE YOU WANT TO GO? <br>
                            Fly With Us
                        </h3>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="text-box hidden-xs">
                        <h3>
                            <span>Travel</span>  <br>
                            THE WORLD YOU <br> NEVER SEEN <i class="fa fa-car"></i> <br>

                        </h3>

                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="text-box">
                        <h3>
                             <span>Hotels</span> <br>
                            We Provide best    <span><i class="fa fa-globe"></i> </span> quality?
                        </h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <!--main-fill-->
                <div class="main-fill ">
                    <!--tabs-->
                    <div class="panel">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tabtravel" data-toggle="tab"><i class="fa fa-plane"></i> Flight</a></li>
                                <li><a href="#tabhotel" data-toggle="tab"> <i class="fa fa-hotel"></i> Hotel</a></li>
                                <li><a href="#tabtour" data-toggle="tab"> <i class="fa fa-car"></i> Travel</a></li>
                            </ul>
                        </div>
                        <!--panel-body-->
                        <div class="panel-body">
                            <!--tab-content-->
                            <div class="tab-content">
                                <!--tabtravel-->
                                <form method="post" action="<?php echo base_url('hasil_pencarian')?>">
                                <div class="tab-pane fade in active" id="tabtravel">
                                    <h3>Come Fly With Us</h3>
                                    <ul class="list-inline list-unstyled">
                                        <li>
                                            <div class="form-group">
                                                <select name="keberangkatan" class="form-control">
                                                    <option>Dari</option>
                                                      <?php 
                  foreach ($rute as $row) {?>
                                                    <option value="<?php echo $row->city;?>"><?php echo $row->city;?></option>
                                                <?php }?>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <select name="tujuan" class="form-control">
                                                    <option>Tujuan</option>
                                                     <?php 
                  foreach ($rute as $row) {?>
                                                    <option value="<?php echo $row->city;?>"><?php echo $row->city;?></option>
                                                <?php }?>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control"  placeholder="Check In" id="datepicker" required/>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control"  placeholder="Check Off" id="datepicker2" required/>
                                            </div>
                                        <li>
                                            <select class="select-one" name="kelas_penerbangan">
                                                <option selected="selected">Select Class</option> 
                                                <?php foreach($rute_db as $row){?>
                                                    <option value="<?= $row->kelas_penerbangan ?>"><?= $row->kelas_penerbangan ?></option>
                                                <?php }?>
                                            </select>
                                        </li>

                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">1 Dewasa</option>
                                                <option>1 Dewasa</option>
                                                <option> 2 Dewasa</option>
                                                <option>3 Dewasa</option>

                                            </select>
                                        </li>
                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">1 Anak-Anak</option>
                                                <option>1 Anak-Anak</option>
                                                <option>2 Anak-Anak</option>
                                                <option>3 Anak-Anak</option>

                                            </select>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Max budget">
                                            </div>
                                        </li>

                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">Trip Type</option>
                                                <option>One Way</option>
                                                <option>Round</option>
                                                <option>Multi City</option>

                                            </select>
                                        </li>
                                        <li>
                                            <button type="submit" class="btn btn-search-travel">Cari Sekarang</button>
                                           
                                        </li>
                                    </ul>
                                </div>
</form>
                                <!--tabhotel-->
                                <div class="tab-pane fade in" id="tabhotel">
                                    <h3>Search and Book Hotels</h3>
                                    <ul class="list-inline list-unstyled">
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Enter Your Hotel Name?" required>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control"  placeholder="Check In" id="datepicker3" required/>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control"  placeholder="Check Off" id="datepicker4" required/>
                                            </div>
                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">1 Room</option>
                                                <option>2 Room</option>
                                                <option>3 Room</option>
                                                <option>4 Room</option>

                                            </select>
                                        </li>

                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">1 Guest</option>
                                                <option>1 Guest</option>
                                                <option> 2 Guest</option>
                                                <option>No One</option>

                                            </select>
                                        </li>
                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">1 Anak-Anak</option>
                                                <option>1 Anak-Anak</option>
                                                <option>2 Anak-Anak</option>
                                                <option>3 Anak-Anak</option>
                                                <option>No One</option>

                                            </select>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Max budget (Optional)">
                                            </div>
                                        </li>
                                        <li>
                                            <a href="html/hotel/hotels_list_one/left_sidebar.html" class="btn btn-search-travel">Cari Sekarang</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--tabtour-->
                                <div class="tab-pane fade in" id="tabtour">
                                    <h3>Where do you want to go (Searching For Car)?</h3>
                                    <ul class="list-inline list-unstyled">
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Picking up?" required>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Dropping Off?" required>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control"  placeholder="Pick Up Date" id="datepicker5" required/>
                                            </div>
                                        </li>

                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">Pick Up Time</option>
                                                <option>11.30 PM</option>
                                                <option>12.00 PM</option>
                                                <option>01.30 PM</option>
                                                <option>02.00 PM</option>
                                                <option>03.30 PM</option>
                                                <option>04.00 PM</option>
                                                <option>04.30 PM</option>
                                                <option>05.00 PM</option>

                                            </select>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control"  placeholder="Drop Off Date" id="datepicker6" required/>
                                            </div>
                                        </li>
                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">Drop Off Time</option>
                                                <option>11.30 PM</option>
                                                <option>12.00 PM</option>
                                                <option>01.30 PM</option>
                                                <option>02.00 PM</option>
                                                <option>03.30 PM</option>
                                                <option>04.00 PM</option>
                                                <option>04.30 PM</option>
                                                <option>05.00 PM</option>

                                            </select>
                                        </li>
                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">1 Car</option>
                                                <option>1 Car</option>
                                                <option>2 Car</option>
                                                <option>3 Car</option>

                                            </select>
                                        </li>
                                        <li>
                                            <select class="select-one">
                                                <option selected="selected">1 Anak-Anak</option>
                                                <option>1 Anak-Anak</option>
                                                <option>2 Anak-Anak</option>
                                                <option>3 Anak-Anak</option>

                                            </select>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Max budget">
                                            </div>
                                        </li>

                                        <li>
                                            <a href="html/travel/travels_list_one/left_sidebar.html" target="_blank" class="btn btn-search-travel">Cari Sekarang</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--end panel body-->
                    </div>
                    <!--end tabs-->
                </div>
            </div>
        </div>
    </div>
    <!--wrapper index-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="name_pakg text-left ">Featured <span>Tour</span> Packages</div>
            </div>
            <div class="col-md-4 col-sm-6">
                <!--tour_pak-->
                <div class="tour_pak  ">
                    <div class="overflow-outer">
                        <div class="overflow-inner">
                            <span class="pull-left"><a href="#">Florence day</a></span>
                            <span class="pull-right">$<span class="counter">540.00</span></span>
                        </div>
                    </div>
                    <img src="<?= base_url('assets/front/img/tour-pak-2.jpg')?>" alt="tour img" class="img-responsive">
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <!--tour_pak-->
                <div class="tour_pak  ">
                    <div class="overflow-outer">
                        <div class="overflow-inner">
                            <span class="pull-left"><a href="#">Rome City Tour</a></span>
                            <span class="pull-right">$<span class="counter">3340.00</span></span>
                        </div>
                    </div>
                    <img src="<?= base_url('assets/front/img/tour-pak-3.jpg')?>" alt="tour img" class="img-responsive">
                </div>
            </div>
            <div class="col-md-4 hidden-sm">
                <!--tour_pak-->
                <div class="tour_pak ">
                    <div class="overflow-outer">
                        <div class="overflow-inner">
                            <span class="pull-left"><a href="#">Colosseum</a></span>
                            <span class="pull-right">$<span class="counter">540.00</span></span>
                        </div>
                    </div>
                    <img src="<?= base_url('assets/front/img/tour-pak-1.jpg')?>" alt="tour img" class="img-responsive">
                    <span class="pop-feat-two hidden-xs">10% Discount</span>
                </div>
            </div>
            <div class="col-md-12">
                <!--btn_view_all-->
                <div class="btn_view_all">
                    <p> <a href="#" class="btn btn-view-all"> <i class="fa fa-eye"></i>View All Packages(<span class="counter">60</span>)</a></p>
                </div>
            </div>
        </div>
    </div>
    <!--wrapper_inspiration-->
    <div class="wrapper_inspiration hidden-sm hidden-xs">
        <div class="container">
            <div class="div ">
                <h3> Need <span>Inspiration</span> for Your Next Tour?</h3>
                <p>
                    Nunc cursus libero purusac congue arcu cursus utsed vitae pulvinar massa idporta neque purusaongue aae pulvinar mas pulvinar massa idporta neque purusaongue aae pulvinar massa idporta neque purusaongue arcu cursus utsed vitae pulvinar massa idporta neque purusac Etiam elerisque mi id faucibus iaculis vitae pulvinar.
                </p>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-sm-12 col-md-offset-2">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <a href="html/home/inner-home/home_flight.html" target="_blank" class="btn btn-search-v2">Visit Flight Detail</a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <a href="html/home/inner-home/home-travel.html" target="_blank" class="btn btn-search-v2">Check travel Page</a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <a href="html/home/inner-home/home_hotel.html" target="_blank" class="btn btn-search-v2">Visit Hotels List</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--end wrapper_inspiration-->

    <div class="container-fluid no-margin">
        <div class="name_pakg text-center "><span>Gallery</span> images</div>
        <div class="row">
            <div data-js-module="filtering-demo">
                <div class="filter-button-group">
                    <button class="btn btn_isotops-v2 active" data-filter="*">All</button>
                    <button class="btn btn_isotops-v2" data-filter=".hotels">Hotels</button>
                    <button class="btn btn_isotops-v2" data-filter=".flights">Flights</button>
                    <button class="btn btn_isotops-v2" data-filter=".travel">Travel</button>
                </div>
                <div class="grid-view">
                    <div class="col-sm-4 col-md-3 col-xs-6 no-padding">
                        <div class="img-box-v2">
                            <img class="img-responsive" src="assets/front/img/iso-1.jpg" alt="hotels">
                            <div class="overlay">
                                <h2>Paris</h2>
                                <p class="icon-links hidden-xs">
                                    <a href="#">
                                        <span class="fa fa-clock-o "></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-plane"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-briefcase"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-xs-6 no-padding">
                        <div class="img-box-v2">
                            <img src="<?= base_url('assets/front/img/iso-7.jpg')?>" alt="hotels" class="img-responsive">
                            <div class="overlay">
                                <h2>UK</h2>
                                <p class="icon-links hidden-xs">
                                    <a href="#">
                                        <span class="fa fa-clock-o "></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-plane"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-briefcase"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-xs-6 no-padding">
                        <div class="img-box-v2">
                            <img src="<?= base_url('assets/front/img/iso-24.jpg')?>" alt="hotels" class="img-responsive">
                            <div class="overlay">
                                <h2>Srilanka</h2>
                                <p class="icon-links hidden-xs">
                                    <a href="#">
                                        <span class="fa fa-clock-o "></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-plane"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-briefcase"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-xs-6 no-padding">
                        <div class="img-box-v2">
                            <img src="<?= base_url('assets/front/img/iso-8.jpg')?>"alt="hotels" class="img-responsive">
                            <div class="overlay">
                                <h2>Room</h2>
                                <p class="icon-links hidden-xs">
                                    <a href="#">
                                        <span class="fa fa-clock-o"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-plane"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-briefcase"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-xs-6 no-padding">
                        <div class="img-box-v2">
                            <img src="<?= base_url('assets/front/img/iso-5.jpg')?>"alt="hotels" class="img-responsive">
                            <div class="overlay">
                                <h2>Russia</h2>
                                <p class="icon-links hidden-xs">
                                    <a href="#">
                                        <span class="fa fa-clock-o "></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-plane"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-briefcase"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-xs-6 no-padding">
                        <div class="img-box-v2">
                            <img src="<?= base_url('assets/front/img/iso-3.jpg')?>"alt="hotels" class="img-responsive">
                            <div class="overlay">
                                <h2>London</h2>
                                <p class="icon-links hidden-xs">
                                    <a href="#">
                                        <span class="fa fa-clock-o "></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-plane"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-briefcase"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm col-xs-6 no-padding">
                        <div class="img-box-v2">
                            <img src="<?= base_url('assets/front/img/iso-2.jpg')?>"alt="hotels" class="img-responsive">
                            <div class="overlay">
                                <h2>Itly</h2>
                                <p class="icon-links hidden-xs">
                                    <a href="#">
                                        <span class="fa fa-clock-o "></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-plane"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-briefcase"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm col-xs-6 no-padding">
                        <div class="img-box-v2">
                            <img src="<?= base_url('assets/front/img/iso-6.jpg')?>"alt="hotels" class="img-responsive">
                            <div class="overlay">
                                <h2>London</h2>
                                <p class="icon-links hidden-xs">
                                    <a href="#">
                                        <span class="fa fa-clock-o "></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-plane"></span>
                                    </a>
                                    <a href="#">
                                        <span class="fa fa-briefcase"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--car_boxs-->
    <div class="car_boxs">
        <div class="container">
            <div class="row">
                <div class="col-md-12  ">
                    <!--name_pakg-->
                    <div class="name_pakg text-center ">Rental <span>Cars</span> For travel</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--car_box-->
                    <div class="car_box">
                        <div class="img-car">
                            <img src="<?= base_url('assets/front/img/car2-index2.jpg')?>" alt="car" class=" rotate_img img-responsive">
                        </div>
                        <div class="detail-car">
                            <a href="#"><h4> BMW Q3</h4></a>
                            <p><span class="pull-left">3 - 5 day</span> <span class="pull-right">$324.00</span></p>
                            <hr>
                            <p>Lorem ipsum dolor sit amet elit. Fusce leo massa blandit elit, auctor. </p>

                        </div>
                        <div class="book-now">
                            <a href="#" class="btn btn-book-now">book now</a>
                        </div>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td><i class="fa fa-car"></i> 2013</td>
                                <td><i class="fa fa-dashboard"></i> Diesel</td>
                                <td><i class="fa fa-cog"></i> Auto</td>
                                <td><i class="fa fa-road"></i> 25000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--car_box-->
                    <div class="car_box">
                        <div class="img-car">
                            <div class="pop-feature">Features</div>

                            <img src="<?= base_url('assets/front/img/car-index2.jpg')?>"alt="car" class=" rotate_img img-responsive">
                        </div>
                        <div class="detail-car">
                            <a href="#"><h4> AUDI A3</h4></a>
                            <p><span class="pull-left">3 - 5 day</span> <span class="pull-right">$324.00</span></p>
                            <hr>
                            <p>Lorem ipsum dolor sit amet elit. Fusce leo massa blandit elit, auctor. </p>
                        </div>
                        <div class="book-now">
                            <a href="#" class="btn btn-book-now">book now</a>
                        </div>

                        <table class="table">
                            <tbody>
                            <tr>
                                <td><i class="fa fa-car"></i> 2013</td>
                                <td><i class="fa fa-dashboard"></i> Diesel</td>
                                <td><i class="fa fa-cog"></i> Auto</td>
                                <td><i class="fa fa-road"></i> 25000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 hidden-sm col-xs-12">
                    <!--car_box-->
                    <div class="car_box">
                        <div class="img-car">
                            <div class="overflow-outer">
                                <a href="#" class="btn btn-select">Select</a>
                            </div>
                            <img src="<?= base_url('assets/front/img/car2-index2.jpg')?>"alt="car" class=" rotate_img img-responsive">
                        </div>
                        <div class="detail-car">
                            <a href="#"><h4> AUDI 2017</h4></a>
                            <p><span class="pull-left">3 - 5 day</span> <span class="pull-right">$324.00</span></p>
                            <hr>
                            <p>Lorem ipsum dolor sit amet elit. Fusce leo massa blandit elit, auctor. </p>
                        </div>
                        <div class="book-now">
                            <a href="#" class="btn btn-book-now">book now</a>
                        </div>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td><i class="fa fa-car"></i> 2013</td>
                                <td><i class="fa fa-dashboard"></i> Diesel</td>
                                <td><i class="fa fa-cog"></i> Auto</td>
                                <td><i class="fa fa-road"></i> 25000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--car_boxs end-->

    <!--name_pakg-->
    <div class="popular_hotel_wrapper">
        <div class="container">
            <div class="name_pakg text-center " >Popular <span>Hotels</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu tempor velit. <br>
                consectetur adipiscing elit. Mauris eu tempor velit. </p></div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--popular_hotel_box-->
                    <div class="popular_hotel_box ">
                        <div class="img">
                            <a href="#">
                                <img src="<?= base_url('assets/front/img/place-hotel-2.jpg')?>" alt="place" class="img-responsive">
                            </a>

                        </div>
                        <div class="hotel_detail">
                            <div class="hotel-name">
                                <h4>Florence da</h4>
                                <p><i class="fa fa-map-marker"></i> Sabi sand- south Africa</p>
                            </div>
                            <div class="pull-left">Price per night from: </div> <div class="pull-right">$400.00</div>
                            <p>
                                Nunc et venenatis nibh, sed accumsan libero Quisque augue neque, augue neque, pretium <a href="#"><b>More Info</b></a>
                            </p>
                           <div class="book-now">
                               <a href="#" class="btn btn_book_now">book now</a>
                           </div>
                        </div>
                    </div>
                    <!--end popular_hotel_box-->
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--popular_hotel_box-->
                    <div class="popular_hotel_box ">
                        <div class="img">
                            <a href="#">
                            <img src="<?= base_url('assets/front/img/place-hotel-4.jpg')?>" alt="place" class="img-responsive">
                                </a>

                        </div>
                        <div class="hotel_detail">
                            <div class="hotel-name">
                                <h4>Florence da</h4>
                                <p><i class="fa fa-map-marker"></i> Sabi sand- south Africa</p>
                            </div>
                            <div class="pull-left">Price per night from: </div> <div class="pull-right">$400.00</div>
                            <p>
                                Nunc et venenatis nibh, sed accumsan libero Quisque augue neque, augue neque, pretium <a href="#"><b>More Info</b></a>
                            </p>
                            <div class="book-now">
                                <a href="#" class="btn btn_book_now">book now</a>
                            </div>
                        </div>
                    </div>
                    <!--end popular_hotel_box-->
                </div>
                <div class="col-md-4 hidden-sm col-xs-12">
                    <!--popular_hotel_box-->
                    <div class="popular_hotel_box ">
                        <div class="img">
                            <a href="#">
                            <img src="<?= base_url('assets/front/img/place-hotel-3.jpg')?>" alt="place" class="img-responsive">
                                </a>

                        </div>
                        <div class="hotel_detail">
                            <div class="hotel-name">
                                <h4>Five Start</h4>
                                <p><i class="fa fa-map-marker"></i> Sabi sand- south Africa</p>
                            </div>
                            <div class="pull-left">Price per night from: </div> <div class="pull-right">$400.00</div>
                            <p>
                                Nunc et venenatis nibh, sed accumsan libero Quisque augue neque, augue neque, pretium <a href="#"><b>More Info</b></a>
                            </p>
                            <div class="book-now">
                                <a href="#" class="btn btn_book_now">book now</a>
                            </div>
                        </div>
                    </div>
                    <!--end popular_hotel_box-->
                </div>
                <div class="btn_view_all no-margin">
                    <p> <a href="#" class="btn btn-view-all "> <i class="fa fa-eye"></i>See More (60)</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--name_pakg-->
                <div class="name_pakg text-center ">FIND A <span>FLIGHT</span> FOR TOUR</div>
            </div>
            <div class="col-md-6 col-sm-6">
                <!--find_flight_box-->
                <div class="find_flight_box ">
                    <div class="img-box">
                        <img src="<?= base_url('assets/front/img/tour-find-1.jpg')?>"alt="img">
                    </div>
                    <a href="#" class="clearfix">
                        <h4>London - Return From $287</h4>
                        <p>Nunc et venenatis nibh, sed accumsan libero Quisque</p>
                        <i class="fa fa-paper-plane"></i>
                    </a>

                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <!--find_flight_box-->
                <div class="find_flight_box ">
                    <div class="img-box">
                        <img src="<?= base_url('assets/front/img/tour-find-2.jpg')?>" alt="img" >
                    </div>
                    <a href="#" class="clearfix">
                        <h4>Spain - Return From $287</h4>
                        <p>accumsan libero Quisque </p>
                        <i class="fa fa-paper-plane"></i>
                    </a>

                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <!--find_flight_box-->
                <div class="find_flight_box ">
                    <div class="img-box">
                        <img src="<?= base_url('assets/front/img/tour-find-5.jpg')?>"alt="img" >
                    </div>
                    <a href="#" class="clearfix">
                        <h4>Beijing - Return From $587</h4>
                        <p>accumsan libero Quisque Rytra</p>
                        <i class="fa fa-paper-plane"></i>
                    </a>

                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <!--find_flight_box-->
                <div class="find_flight_box ">
                    <div class="img-box">
                        <img src="<?= base_url('assets/front/img/tour-find-4.jpg')?>"alt="img" >
                    </div>
                    <a href="#" class="clearfix">
                        <h4>New York - Return From $287</h4>
                        <p>accumsan libero Quisque </p>
                        <i class="fa fa-paper-plane"></i>
                    </a>

                </div>
            </div>
            <div class="col-md-4 hidden-sm col-xs-12">
                <!--find_flight_box-->
                <div class="find_flight_box ">
                    <div class="img-box">
                        <img src="<?= base_url('assets/front/img/tour-find-3.jpg')?>"alt="img" >
                    </div>
                    <a href="#" class="clearfix">
                        <h4>Italy - Return From $287</h4>
                        <p>accumsan libero Quisque </p>
                        <i class="fa fa-paper-plane"></i>
                    </a>

                </div>
            </div>
            <!--btn-view-all-->
            <div class="col-md-12">
                <div class="btn_view_all">
                    <p> <a href="#" class="btn btn-view-all "> <i class="fa fa-eye"></i>View All Flight(<span class="counter">50</span>)</a></p>
                </div>
            </div>

            <!--end-->
        </div>
    </div>

    <div class="our-work-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--name_pakg-->
                    <div class="name_pakg text-center ">SOME <span>GOOD</span> REASON</div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="our-work ">
                        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
                            <span class="hi-icon hi-icon-images"></span>
                        </div>
                        <h4><span>+<span class="counter">120</span></span> Premium tours</h4>

                        <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                        </p>
                        <a href="html/pages/about_us.html" class="btn btn-read-more">READ MORE</a>
                    </div>
                </div>
                <!--end our-work-->
                <!--our-work-->
                <div class="col-md-4 col-sm-6">
                    <div class="our-work ">
                       <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
                        <span class="hi-icon hi-icon-user"></span>
                    </div>
                        <h4><span>+<span class="counter">1000</span></span> Customers</h4>
                        <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                        </p>
                       <a href="html/pages/about_us.html" class="btn btn-read-more">READ MORE</a>
                    </div>
                </div>
                <!--end our-work-->
                <!--our-work-->
                <div class="col-md-4 hidden-sm">
                    <div class="our-work ">
                        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
                            <span class="hi-icon hi-icon-link"></span>
                        </div>
                        <h4><span>H<span class="counter">24</span> </span> Support</h4>
                        <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                        </p>
                       <a href="html/pages/about_us.html " class="btn btn-read-more">READ MORE</a>
                    </div>
                </div>
                <!--end our-work-->
            </div>
        </div>
    </div>
</div>
<!--inner body end from here-->
<!--back_to_top-->
<div id="back_to_top">
    <div class="button">
        <i class="fa fa-chevron-up"></i>
    </div>
</div>
<!--end-->
<?php $this->load->view('layout/footer')?>