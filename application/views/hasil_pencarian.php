<?php $this->load->view('layout/header')?>
<?php $this->load->view('layout/nav')?>
<div class="inner-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bread-crumb animate-reveal">
                    <h2>Flights List</h2>
                    <ol class="breadcrumb pull-right">
                        <li><a href="../../../index.html">Home</a></li>
                        <li class="active">Left Sidebar</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-3">

                <div class="form_faq_list box_show_faq">
                    <form>
                        <input type="text" placeholder="Type to search...">
                        <button class="search_faq"><i class="fa fa-search"></i></button>
                    </form>
                </div>

                <div class="search-tem white-box animate-reveal">
                    <span> <i class="fa fa-search"></i>
                        1,984 results found.</span>
                </div>
                <div class="form-detail-sidebar">
                    <h4>modify search</h4>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Where are You departing from?" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Where would You Like to go?" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  placeholder="Check In" id="datepicker-headers2" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  placeholder="Check Off" id="datepicker-headers1" required/>
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-collapse" data-toggle="collapse" data-target="#demo1">Price <span class="pull-right"><i class="fa fa-chevron-down"></i> </span></button>
                        <div id="demo1" class="collapse">
                            <p id="amount"></p>
                            <div id="slider-range"></div>
                            <input type="hidden" id="amount1" name="amount1">
                            <input type="hidden" id="amount2" name="amount2">
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-collapse" data-toggle="collapse" data-target="#demo2">Flight Times <span class="pull-right"><i class="fa fa-chevron-down"></i> </span></button>

                        <div id="demo2" class="collapse">
                            <p id="time"></p>
                            <div id="time-range"></div>
                            <input type="hidden" id="time1" name="amount1">
                            <input type="hidden" id="time2" name="amount2">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-collapse" data-toggle="collapse" data-target="#demo3">Stops<span class="pull-right"><i class="fa fa-chevron-down"></i> </span></button>

                        <div id="demo3" class="collapse">
                            <div class="checkbox">
                                <label><input type="checkbox" value="1"> 1 Stops</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="2"> 2 Stops</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="*"> Multiple Stops</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-collapse" data-toggle="collapse" data-target="#demo4">Airlines<span class="pull-right"><i class="fa fa-chevron-down"></i> </span></button>

                        <div id="demo4" class="collapse">
                            <select class="select-two">
                                <option selected="selected">PIA</option>
                                <option>Major Airline</option>
                                <option>AMIRATES</option>
                                <option>AIR BLUE</option>
                                <option>SHAHEEN</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-collapse" data-toggle="collapse" data-target="#demo5">Flight Type<span class="pull-right"><i class="fa fa-chevron-down"></i> </span></button>
                        <div id="demo5" class="collapse">
                            <select class="select-two">
                                <option selected="selected">Business</option>
                                <option>First Class</option>
                                <option>Economy</option>
                            </select>
                        </div>
                    </div>
                    <a href="#" class="btn btn-search-travel btn-block">SEARCH AGAIN</a>

                </div>
            </div>
            <div class="col-md-9 col-xs-12">
                <div class="sort-section white-box animate-reveal">
                    <h4>Sort results by:</h4>
                    <ul class="list-inline list-unstyled">
                        <li><a href="#"><span class="text">Name</span><span class="up"><i class="fa fa-caret-up"></i></span> <span class="down"><i class="fa fa-caret-down"></i></span></a></li>
                        <li><a href="#"><span class="text">Price</span><span class="up"><i class="fa fa-caret-up"></i></span> <span class="down"><i class="fa fa-caret-down"></i></span></a></li>
                        <li><a href="#"><span class="active-text">Duration</span><span class="up"><i class="fa fa-caret-up"></i></span> <span class="down"><i class="fa fa-caret-down"></i></span></a></li>
                    </ul>
                </div>

<?php foreach ($hasil_pencarian as $row) {?>
                <div class="flight_box_detail white-box">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="flight-logo"><img  alt="logo" src="<?php  echo base_url('assets/front/img/logo-v2.png')?>" width="100px" ></div>
                        </div>
                        <div class="col-md-8">
                            <div class="details-text">
                                <h4><?=$row->nama_pesawat?><a href="#" class="btn btn-stop">1 stop</a> <br><small>Oneway flight</small></h4>
                            </div>
                            <div class="details-feature">
                                <ul class="list-inline list-unstyled">
                                    <li><i class="fa fa-wifi"></i></li>
                                    <li><i class="fa fa-music"></i></li>
                                    <li><i class="fa fa-briefcase"></i></li>
                                    <li><i class="fa fa-cutlery"></i></li>
                                </ul>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="LTT">
                                        <span class="skin-clr"> <i class="fa fa-plane"></i> Take off</span><br>
                                        <span class="time"><?= $row->jam_keberangkatan ?></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="LTT">
                                        <span class="skin-clr"> <i class="fa fa-plane fa-rotate-90"></i> Landing</span><br>
                                        <span class="time"><?= $row->jam_tiba ?></span>
                                        <!-- Wed Nov 13, 2013 7:50 Am -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="LTT no-border">
                                        <span class="skin-clr"> <i class="fa fa-clock-o"></i> Time</span><br>
                                        <span class="time">8 hours, 15 minutes</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="select-sec">
                                <span>AVG/PERSON <br> <span class="pri"><?= number_format($row->harga) ?></span></span>
                                <a href="../flights_details_one/right_sidebar.html" target="_blank" class="btn btn_select">SELECT</a>
                            </div>
                        </div>
                    </div>
                </div>
<?php }?>
                <a href="#" class="btn btn-more animate-reveal"> <i class="fa fa-eye"></i>Loading More</a>
                <div class="white-box write_review animate-reveal">
                    <h3>Write a Review</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Your Name <span>*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Your Email <span>*</span> </label>
                                <input type="email" class="form-control"  required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Review Title <span>*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Reviews <span>*</span></label>
                                <br>
                                <span class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label >Review Text <span>*</span></label>
                                <textarea class="form-control" rows="6" cols="6"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="#" class="btn_book">Leave a review</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--button back to top-->
<div id="back_to_top">
    <div class="button">
        <i class="fa fa-chevron-up"></i>
    </div>
</div>
<!--page loader-->
<!-- <div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_big">
                <img src="../../../assets/img/img-loader.png" alt="loader">
            </div>
        </div>
    </div>
</div> -->
<!--end here-->


</body>
</html>


<?php $this->load->view('layout/footer')?>