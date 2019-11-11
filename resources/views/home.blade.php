@extends('layouts.home')

@section('content')













<!-- side toggle calender sec starts here -->
<!-- side toggle calender sec starts here -->


    <!-- banner section starts here here -->
    <section class="main-banner home-main-banner" style="background:url('/frontend/images/banner-bg.png');">
        <div class="container">
            <video src='/frontend/videos/background-vdo.mp4' autoplay muted loop></video>
            <div class="banner-content">
                <h1>Lorem ipsum Dolor</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                <a href="javascript:void(0);" class="cstm-btn solid-btn">Explore more</a>
            </div>
        </div>
    </section>
    <!-- banner section starts Ends here -->

    <!--Tabs Section starts here-->
    <section class="services-tab-sec">
        <div class="container">
            <div class="sec-card">
                <div class="tab-wrap">
                    <div class="form-tab-slider owl-carousel owl-theme">
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="twenty-three" class="activelink">
                                        <span class="service-icon">
                                            <img class="category_icon" src="{{url('frontend/images/all.png')}}" />
                                        </span>
                                        <h3>all</h3>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="one" class="">
                                        <span class="service-icon">
                                            <img class="category_icon" src="{{url('frontend/images/balloons.png')}}" />
                                        </span>
                                        <h3>Balloons</h3>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="two" class="">
                                        <span class="service-icon">
                                              <img class="category_icon" src="{{url('frontend/images/band.png')}}" />
                                        </span>
                                        <h3>Bands</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="three" class="">
                                        <span class="service-icon">
                                              <img class="category_icon" src="{{url('frontend/images/cake.png')}}" />
                                        </span>
                                        <h3>Cake/Baking/pastries</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="four" class="">
                                        <span class="service-icon">
                                            <img class="category_icon" src="{{url('frontend/images/catering.png')}}" />
                                          </span>
                                        <h3>Catering/Food & Beverages</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="five" class="">
                                        <span class="service-icon">
                                              <img class="category_icon" src="{{url('frontend/images/church.png')}}" /></span>
                                        <h3>Churches/ Temples/ Mosques</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="six" class="">
                                        <span class="service-icon">  <img class="category_icon" src="{{url('frontend/images/decoration.png')}}" /></span>
                                        <h3>Decoration</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="seven" class="">
                                        <span class="service-icon">
                                              <img class="category_icon" src="{{url('frontend/images/dj.png')}}" />
                                        </span>
                                        <h3>DJ</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="eight" class="">
                                        <span class="service-icon">  <img class="category_icon" src="{{url('frontend/images/entertainers.png')}}" /></span>
                                        <h3>Entertainers</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="nine" class="">
                                        <span class="service-icon">  <img class="category_icon" src="{{url('frontend/images/event-planners.png')}}" /></span>
                                        <h3>Event Planners</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="ten" class="">
                                        <span class="service-icon">
                                             <img class="category_icon" src="{{url('frontend/images/gifts.png')}}" />
                                        </span>
                                        <h3>Favor/gifts/souvenirs</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="eleven" class="">
                                        <span class="service-icon">
                                            <img class="category_icon" src="{{url('frontend/images/florist.png')}}" /></span>
                                        <h3>Florist</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="twelve" class="">
                                        <span class="service-icon"><i class="fas fa-ring"></i></span>
                                        <h3>Funeral services</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="thirteen" class="">
                                        <span class="service-icon"><i class="fas fa-hotel"></i></span>
                                        <h3>Lodging</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="fourteen" class="">
                                        <span class="service-icon"><i class="fas fa-ring"></i></span>
                                        <h3>Musicians / instrumentalist</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="fifteen" class="">
                                        <span class="service-icon">
                                            <i class="fas fa-users"></i></span>
                                        <h3>Officiants/Staffing</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="sixteen" class="">
                                        <span class="service-icon"><i class="fas fa-glass-cheers"></i></span>
                                        <h3>Party Rentals</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="seventeen" class="">
                                        <span class="service-icon"><i class="fas fa-camera-retro"></i></span>
                                        <h3>Photography</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="eighteen" class="">
                                        <span class="service-icon"><i class="fas fa-ring"></i></span>
                                        <h3>Printing and Stationary</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="ninteen" class="">
                                        <span class="service-icon"><i class="fas fa-shield-alt"></i></span>
                                        <h3>Security/Bouncers</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="twenty" class="">
                                        <span class="service-icon"><i class="fas fa-car"></i></span>
                                        <h3>Transportation</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="twentyone" class="">
                                        <span class="service-icon">
                                            <i class="fas fa-gifts"></i></span>
                                        <h3>Venues</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-down" data-aos-duration="2000">
                            <div class="tab-button">
                                <div class="tab-item">
                                    <a href="javascript:void();" data-tag="twentytwo" class="">
                                        <span class="service-icon">
                                            <i class="fas fa-video"></i></span>
                                        <h3>Videography</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" data-aos="fade-right" data-aos-duration="3000">
                    <div class="tab-data" id="twenty-three">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!-- tab 1 content -->
                    <div class="tab-data hide" id="one">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!-- tab 2 content -->
                    <div class="tab-data hide" id="two">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!-- tab 3 content -->
                    <div class="tab-data hide" id="three">
                        <div class="checklist-wrap">
                            <span class="aside-toggle">
                                <i class="fa fa-bars"></i>
                                <span class="cross-class">
                                    <i class="fas fa-times"></i>
                                </span>
                            </span>
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <aside>

                                        <div class="eventside-bar">
                                            <div class="wrap1">
                                                <h3>Status</h3>
                                                <p>To Do</p>
                                            </div>
                                            <div class="wrap1">
                                                <h3>By Date</h3>
                                                <div class="checkboxwrap">
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="cb1">
                                                            <label for="cb1">Overdue</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="cb2">
                                                            <label for="cb2">October 2019</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="checkbox" id="cb3">
                                                            <label for="cb3">After the Wedding</label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="wrap1">
                                                <h3>By Category</h3>
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            Venus <span>2</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            Photographers <span>5</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            Caterers <span>7</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            Venus <span>2</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            Photographers <span>5</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            Caterers <span>7</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            Venus <span>2</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            Photographers <span>5</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            Caterers <span>7</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            Venus <span>2</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            Photographers <span>5</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            Caterers <span>7</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>


                                        </div>
                                    </aside>
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="eventlist-text">
                                        <div class="event-task">
                                            <a href="javascirpt:void(0);" class="task-btn">
                                                Add a New task<span><i class="fas fa-plus"></i></span>
                                            </a>
                                            <div class="icons">
                                                <span>
                                                    <i class="fas fa-file-download"></i>
                                                </span>
                                                <span>
                                                    <i class="fas fa-print"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="guest-list">
                                        <li>
                                            <span>
                                                <figure>
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 11 9.282" enable-background="new 0 0 11 9.282" xml:space="preserve">
                                                        <g>
                                                            <path fill="#36496C" d="M3.365,0.43c0.041,0.042,0.074,0.123,0.074,0.182c0,0.06-0.034,0.142-0.076,0.184L1.812,2.346L1.477,2.682
		C1.433,2.724,1.348,2.757,1.288,2.757S1.142,2.724,1.098,2.682L0.076,1.664C0.034,1.622,0,1.54,0,1.481S0.034,1.34,0.076,1.298
		L0.413,0.96c0.042-0.042,0.124-0.076,0.183-0.076S0.737,0.919,0.778,0.96l0.488,0.476l1.368-1.36C2.675,0.034,2.757,0,2.817,0
		S2.958,0.034,3,0.076L3.365,0.43z M3.365,3.861c0.04,0.042,0.073,0.123,0.073,0.181c0,0.059-0.034,0.141-0.075,0.183L1.811,5.776
		L1.474,6.113C1.43,6.154,1.345,6.188,1.285,6.188S1.14,6.154,1.096,6.113l-1.02-1.021C0.034,5.051,0,4.969,0,4.91
		s0.034-0.141,0.076-0.183L0.413,4.39c0.042-0.042,0.124-0.076,0.183-0.076S0.737,4.348,0.778,4.39l0.488,0.475l1.368-1.369
		C2.675,3.454,2.757,3.42,2.817,3.42S2.958,3.454,3,3.496L3.365,3.861z M2.406,8.25c0,0.569-0.461,1.031-1.031,1.031
		c-0.569,0-1.044-0.462-1.044-1.031s0.475-1.031,1.044-1.031S2.406,7.681,2.406,8.25z M11,1.032v0.688
		c0,0.19-0.154,0.344-0.343,0.344H4.469c-0.19,0-0.344-0.154-0.344-0.344V1.032c0-0.19,0.153-0.344,0.344-0.344h6.188
		C10.846,0.688,11,0.842,11,1.032z M11,4.469v0.688c0,0.19-0.154,0.344-0.343,0.344H4.469c-0.19,0-0.344-0.154-0.344-0.344V4.469
		c0-0.19,0.153-0.344,0.344-0.344h6.188C10.846,4.125,11,4.279,11,4.469z M11,7.907v0.688c0,0.19-0.154,0.344-0.343,0.344H4.469
		c-0.19,0-0.344-0.154-0.344-0.344V7.907c0-0.19,0.153-0.344,0.344-0.344h6.188C10.846,7.563,11,7.717,11,7.907z" />
                                                        </g>
                                                    </svg>
                                                </figure>
                                            </span>
                                            <div class="days">
                                                <p>Start creating your guest list</p>
                                                <div class="create-list">
                                                    <span>
                                                        <i class="far fa-calendar"></i>2 Days Left
                                                    </span>
                                                    <span class="guest">
                                                        Guest
                                                    </span>
                                                    <a href="javascript:void(0);">
                                                        Create Guest list
                                                    </a>
                                                </div>

                                            </div>
                                            <span class="trash">
                                                <a href="javascript:void(0);">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </span>
                                        </li>
                                        <li class="disable-list">
                                            <span class="tick">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <div class="days">
                                                <p>Select your wedding party</p>
                                                <div class="create-list">
                                                    <span>
                                                        <i class="far fa-calendar"></i>15 Days Left
                                                    </span>
                                                    <span class="guest">
                                                        Guest
                                                    </span>
                                                    <a href="javascript:void(0);">
                                                        Create Guest list
                                                    </a>
                                                </div>

                                            </div>
                                            <span class="trash">
                                                <a href="javascript:void(0);">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <figure>
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 11 9.282" enable-background="new 0 0 11 9.282" xml:space="preserve">
                                                        <g>
                                                            <path fill="#36496C" d="M3.365,0.43c0.041,0.042,0.074,0.123,0.074,0.182c0,0.06-0.034,0.142-0.076,0.184L1.812,2.346L1.477,2.682
		C1.433,2.724,1.348,2.757,1.288,2.757S1.142,2.724,1.098,2.682L0.076,1.664C0.034,1.622,0,1.54,0,1.481S0.034,1.34,0.076,1.298
		L0.413,0.96c0.042-0.042,0.124-0.076,0.183-0.076S0.737,0.919,0.778,0.96l0.488,0.476l1.368-1.36C2.675,0.034,2.757,0,2.817,0
		S2.958,0.034,3,0.076L3.365,0.43z M3.365,3.861c0.04,0.042,0.073,0.123,0.073,0.181c0,0.059-0.034,0.141-0.075,0.183L1.811,5.776
		L1.474,6.113C1.43,6.154,1.345,6.188,1.285,6.188S1.14,6.154,1.096,6.113l-1.02-1.021C0.034,5.051,0,4.969,0,4.91
		s0.034-0.141,0.076-0.183L0.413,4.39c0.042-0.042,0.124-0.076,0.183-0.076S0.737,4.348,0.778,4.39l0.488,0.475l1.368-1.369
		C2.675,3.454,2.757,3.42,2.817,3.42S2.958,3.454,3,3.496L3.365,3.861z M2.406,8.25c0,0.569-0.461,1.031-1.031,1.031
		c-0.569,0-1.044-0.462-1.044-1.031s0.475-1.031,1.044-1.031S2.406,7.681,2.406,8.25z M11,1.032v0.688
		c0,0.19-0.154,0.344-0.343,0.344H4.469c-0.19,0-0.344-0.154-0.344-0.344V1.032c0-0.19,0.153-0.344,0.344-0.344h6.188
		C10.846,0.688,11,0.842,11,1.032z M11,4.469v0.688c0,0.19-0.154,0.344-0.343,0.344H4.469c-0.19,0-0.344-0.154-0.344-0.344V4.469
		c0-0.19,0.153-0.344,0.344-0.344h6.188C10.846,4.125,11,4.279,11,4.469z M11,7.907v0.688c0,0.19-0.154,0.344-0.343,0.344H4.469
		c-0.19,0-0.344-0.154-0.344-0.344V7.907c0-0.19,0.153-0.344,0.344-0.344h6.188C10.846,7.563,11,7.717,11,7.907z" />
                                                        </g>
                                                    </svg>
                                                </figure>
                                            </span>
                                            <div class="days">
                                                <p>Finalize your guest list</p>
                                                <div class="create-list">
                                                    <span>
                                                        <i class="far fa-calendar"></i>25 Oct,2019
                                                    </span>
                                                    <span class="guest">
                                                        Guest
                                                    </span>
                                                    <a href="javascript:void(0);">
                                                        Finalize Guest list
                                                    </a>
                                                </div>

                                            </div>
                                            <span class="trash">
                                                <a href="javascript:void(0);">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <figure>
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 11 9.282" enable-background="new 0 0 11 9.282" xml:space="preserve">
                                                        <g>
                                                            <path fill="#36496C" d="M3.365,0.43c0.041,0.042,0.074,0.123,0.074,0.182c0,0.06-0.034,0.142-0.076,0.184L1.812,2.346L1.477,2.682
		C1.433,2.724,1.348,2.757,1.288,2.757S1.142,2.724,1.098,2.682L0.076,1.664C0.034,1.622,0,1.54,0,1.481S0.034,1.34,0.076,1.298
		L0.413,0.96c0.042-0.042,0.124-0.076,0.183-0.076S0.737,0.919,0.778,0.96l0.488,0.476l1.368-1.36C2.675,0.034,2.757,0,2.817,0
		S2.958,0.034,3,0.076L3.365,0.43z M3.365,3.861c0.04,0.042,0.073,0.123,0.073,0.181c0,0.059-0.034,0.141-0.075,0.183L1.811,5.776
		L1.474,6.113C1.43,6.154,1.345,6.188,1.285,6.188S1.14,6.154,1.096,6.113l-1.02-1.021C0.034,5.051,0,4.969,0,4.91
		s0.034-0.141,0.076-0.183L0.413,4.39c0.042-0.042,0.124-0.076,0.183-0.076S0.737,4.348,0.778,4.39l0.488,0.475l1.368-1.369
		C2.675,3.454,2.757,3.42,2.817,3.42S2.958,3.454,3,3.496L3.365,3.861z M2.406,8.25c0,0.569-0.461,1.031-1.031,1.031
		c-0.569,0-1.044-0.462-1.044-1.031s0.475-1.031,1.044-1.031S2.406,7.681,2.406,8.25z M11,1.032v0.688
		c0,0.19-0.154,0.344-0.343,0.344H4.469c-0.19,0-0.344-0.154-0.344-0.344V1.032c0-0.19,0.153-0.344,0.344-0.344h6.188
		C10.846,0.688,11,0.842,11,1.032z M11,4.469v0.688c0,0.19-0.154,0.344-0.343,0.344H4.469c-0.19,0-0.344-0.154-0.344-0.344V4.469
		c0-0.19,0.153-0.344,0.344-0.344h6.188C10.846,4.125,11,4.279,11,4.469z M11,7.907v0.688c0,0.19-0.154,0.344-0.343,0.344H4.469
		c-0.19,0-0.344-0.154-0.344-0.344V7.907c0-0.19,0.153-0.344,0.344-0.344h6.188C10.846,7.563,11,7.717,11,7.907z" />
                                                        </g>
                                                    </svg>
                                                </figure>
                                            </span>
                                            <div class="days">
                                                <p>Create your seating chart</p>
                                                <div class="create-list">
                                                    <span>
                                                        <i class="far fa-calendar"></i>02 Nov, 2019
                                                    </span>
                                                    <span class="guest">
                                                        Guest
                                                    </span>
                                                    <a href="javascript:void(0);">
                                                        Create seating chart
                                                    </a>
                                                </div>

                                            </div>
                                            <span class="trash">
                                                <a href="javascript:void(0);">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </span>
                                        </li>
                                        <li class="disable-list">
                                            <span class="tick">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <div class="days">
                                                <p>Send invites</p>
                                                <div class="create-list">
                                                    <span>
                                                        <i class="far fa-calendar"></i>15 Oct,2019
                                                    </span>
                                                    <span class="guest">
                                                        Guest
                                                    </span>
                                                    <a href="javascript:void(0);">
                                                        Send Invites
                                                    </a>
                                                </div>

                                            </div>
                                            <span class="trash">
                                                <a href="javascript:void(0);">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <figure>
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 11 9.282" enable-background="new 0 0 11 9.282" xml:space="preserve">
                                                        <g>
                                                            <path fill="#36496C" d="M3.365,0.43c0.041,0.042,0.074,0.123,0.074,0.182c0,0.06-0.034,0.142-0.076,0.184L1.812,2.346L1.477,2.682
		C1.433,2.724,1.348,2.757,1.288,2.757S1.142,2.724,1.098,2.682L0.076,1.664C0.034,1.622,0,1.54,0,1.481S0.034,1.34,0.076,1.298
		L0.413,0.96c0.042-0.042,0.124-0.076,0.183-0.076S0.737,0.919,0.778,0.96l0.488,0.476l1.368-1.36C2.675,0.034,2.757,0,2.817,0
		S2.958,0.034,3,0.076L3.365,0.43z M3.365,3.861c0.04,0.042,0.073,0.123,0.073,0.181c0,0.059-0.034,0.141-0.075,0.183L1.811,5.776
		L1.474,6.113C1.43,6.154,1.345,6.188,1.285,6.188S1.14,6.154,1.096,6.113l-1.02-1.021C0.034,5.051,0,4.969,0,4.91
		s0.034-0.141,0.076-0.183L0.413,4.39c0.042-0.042,0.124-0.076,0.183-0.076S0.737,4.348,0.778,4.39l0.488,0.475l1.368-1.369
		C2.675,3.454,2.757,3.42,2.817,3.42S2.958,3.454,3,3.496L3.365,3.861z M2.406,8.25c0,0.569-0.461,1.031-1.031,1.031
		c-0.569,0-1.044-0.462-1.044-1.031s0.475-1.031,1.044-1.031S2.406,7.681,2.406,8.25z M11,1.032v0.688
		c0,0.19-0.154,0.344-0.343,0.344H4.469c-0.19,0-0.344-0.154-0.344-0.344V1.032c0-0.19,0.153-0.344,0.344-0.344h6.188
		C10.846,0.688,11,0.842,11,1.032z M11,4.469v0.688c0,0.19-0.154,0.344-0.343,0.344H4.469c-0.19,0-0.344-0.154-0.344-0.344V4.469
		c0-0.19,0.153-0.344,0.344-0.344h6.188C10.846,4.125,11,4.279,11,4.469z M11,7.907v0.688c0,0.19-0.154,0.344-0.343,0.344H4.469
		c-0.19,0-0.344-0.154-0.344-0.344V7.907c0-0.19,0.153-0.344,0.344-0.344h6.188C10.846,7.563,11,7.717,11,7.907z" />
                                                        </g>
                                                    </svg>
                                                </figure>
                                            </span>
                                            <div class="days">
                                                <p>Finalize your guest list</p>
                                                <div class="create-list">
                                                    <span>
                                                        <i class="far fa-calendar"></i>27 Nov, 2019
                                                    </span>
                                                    <span class="guest">
                                                        Guest
                                                    </span>
                                                    <a href="javascript:void(0);">
                                                        Finalize Guest List
                                                    </a>
                                                </div>

                                            </div>
                                            <span class="trash">
                                                <a href="javascript:void(0);">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                <figure>
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 11 9.282" enable-background="new 0 0 11 9.282" xml:space="preserve">
                                                        <g>
                                                            <path fill="#36496C" d="M3.365,0.43c0.041,0.042,0.074,0.123,0.074,0.182c0,0.06-0.034,0.142-0.076,0.184L1.812,2.346L1.477,2.682
		C1.433,2.724,1.348,2.757,1.288,2.757S1.142,2.724,1.098,2.682L0.076,1.664C0.034,1.622,0,1.54,0,1.481S0.034,1.34,0.076,1.298
		L0.413,0.96c0.042-0.042,0.124-0.076,0.183-0.076S0.737,0.919,0.778,0.96l0.488,0.476l1.368-1.36C2.675,0.034,2.757,0,2.817,0
		S2.958,0.034,3,0.076L3.365,0.43z M3.365,3.861c0.04,0.042,0.073,0.123,0.073,0.181c0,0.059-0.034,0.141-0.075,0.183L1.811,5.776
		L1.474,6.113C1.43,6.154,1.345,6.188,1.285,6.188S1.14,6.154,1.096,6.113l-1.02-1.021C0.034,5.051,0,4.969,0,4.91
		s0.034-0.141,0.076-0.183L0.413,4.39c0.042-0.042,0.124-0.076,0.183-0.076S0.737,4.348,0.778,4.39l0.488,0.475l1.368-1.369
		C2.675,3.454,2.757,3.42,2.817,3.42S2.958,3.454,3,3.496L3.365,3.861z M2.406,8.25c0,0.569-0.461,1.031-1.031,1.031
		c-0.569,0-1.044-0.462-1.044-1.031s0.475-1.031,1.044-1.031S2.406,7.681,2.406,8.25z M11,1.032v0.688
		c0,0.19-0.154,0.344-0.343,0.344H4.469c-0.19,0-0.344-0.154-0.344-0.344V1.032c0-0.19,0.153-0.344,0.344-0.344h6.188
		C10.846,0.688,11,0.842,11,1.032z M11,4.469v0.688c0,0.19-0.154,0.344-0.343,0.344H4.469c-0.19,0-0.344-0.154-0.344-0.344V4.469
		c0-0.19,0.153-0.344,0.344-0.344h6.188C10.846,4.125,11,4.279,11,4.469z M11,7.907v0.688c0,0.19-0.154,0.344-0.343,0.344H4.469
		c-0.19,0-0.344-0.154-0.344-0.344V7.907c0-0.19,0.153-0.344,0.344-0.344h6.188C10.846,7.563,11,7.717,11,7.907z" />
                                                        </g>
                                                    </svg>
                                                </figure>
                                            </span>
                                            <div class="days">
                                                <p>Create your Sitting list</p>
                                                <div class="create-list">
                                                    <span>
                                                        <i class="far fa-calendar"></i>08 Nov, 2019
                                                    </span>
                                                    <span class="guest">
                                                        Guest
                                                    </span>
                                                    <a href="javascript:void(0);">
                                                        Create Seating List
                                                    </a>
                                                </div>

                                            </div>
                                            <span class="trash">
                                                <a href="javascript:void(0);">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- tab 4 content -->
                    <div class="tab-data hide" id="four">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!-- tab 5 content -->
                    <div class="tab-data hide" id="five">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!-- tab 6 content -->
                    <div class="tab-data hide" id="six">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!--tab 7 content-->
                    <div class="tab-data hide" id="seven">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!--tab 8 content-->
                    <div class="tab-data hide" id="eight">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!--tab 9 content-->
                    <div class="tab-data hide" id="nine">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!--tab 10 content-->
                    <div class="tab-data hide" id="ten">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!--tab 11 content-->
                    <div class="tab-data hide" id="eleven">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!--tab 12 content-->
                    <div class="tab-data hide" id="twelve">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!--tab 13 content-->
                    <div class="tab-data hide" id="thirteen">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!--tab 14 content-->
                    <div class="tab-data hide" id="fourteen">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!--tab 15 content-->
                    <div class="tab-data hide" id="fifteen">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!--tab 16 content-->
                    <div class="tab-data hide" id="sixteen">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!--tab 17 content-->
                    <div class="tab-data hide" id="seventeen">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!--tab 18 content-->
                    <div class="tab-data hide" id="eighteen">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!--tab 19 content-->
                    <div class="tab-data hide" id="ninteen">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!--tab 20 content-->
                    <div class="tab-data hide" id="twenty">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!--tab 21 content-->
                    <div class="tab-data hide" id="twentyone">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <!--tab 22 content-->
                    <div class="tab-data hide" id="twentytwo">
                        <form class="services-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Location">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Event Type">
                                        <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                        <span class="input-icon"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Amenties">
                                        <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="" class="form-control" placeholder="Guest#">
                                        <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Tabs Section ends here-->

    <!--Popular event starts here-->
    <section class="home-event-types" style="background:url('/frontend/images/event-back.png');">
        <div class="container">
            <div class="sec-heading text-center">
                <h4>Popular</h4>
                <h2>events</h2>
            </div>

            <!--Row One-->

            <div class="event-slider owl-carousel owl-theme owl-loaded owl-drag">
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Wedding</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Retreat</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Team Building</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Reception</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Baby Shower</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Date Night</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Birth Day</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Sports Events (Golf)</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Meetup</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Product Launching</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Graduations</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Seminars and Conference</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Conclave</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Concert</h3>
                        </div>
                    </a>
                </div>

            </div>

            <!--Row Two-->
            <div class="event-slider owl-carousel owl-theme owl-loaded owl-drag">
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Conventions (Breakout Sessions)</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Gala and Appreciation Events</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Cookout</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Meetings</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Parties (Lunch/Dinner)</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Funeral</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Workshop/Classes</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Networking</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>VIP Experience</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Bridal Shower</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Trade Shows/Expos</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Trade Fair/Job Fairs</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Business Expos</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Anniversaries</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Family Get-together /Family Events</h3>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">
                        <div class="event-wrap">
                            <figure>
                                <img src="/frontend/images/vendor-03.png">
                            </figure>
                            <h3>Others</h3>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!--Popular event ends here-->

    <!-- Plan togather section starts here -->
    <section class="plan-togather-sec">
        <div class="budget-plan-banner" style="background: url('/frontend/images/budget-plan-bg.png');">
            <div class="container">
                <div class="sec-heading text-center">
                    <h4>On a Budget?</h4>
                    <h2>let’s plan together</h2>
                </div>
                <div class="budget-btn-wrap text-center">
                    <a href="javascript:void(0);" class="budget-btn">
                        <span class="bdgt-icon"><img src="/frontend/images/budget-plan-icon.png"></span>
                        <h3>Let’s Budget</h3>
                        <span class="down-indi-arrow">
                            <img src="/frontend/images/down-lg-arrow.png">
                        </span>
                    </a>
                </div>

            </div>
        </div>
        <div class="budget-packages-container">
            <div class="container">
                <div class="sec-card">
                    <div class="tab-wrap">
                        <div class="packages-slider owl-carousel owl-theme">
                            <div class="item">
                                <div class="tab-button">
                                    <div class="package-item">
                                        <a href="javascript:void();" data-tag="t-one" class="activelink">
                                            <span class="service-icon"><i class="fas fa-building"></i></span>
                                            <h3>Venues</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tab-button">
                                    <div class="package-item">
                                        <a href="javascript:void();" data-tag="t-two" class="">
                                            <span class="service-icon"><i class="fas fa-camera"></i></span>
                                            <h3>Photography</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tab-button">
                                    <div class="package-item">
                                        <a href="javascript:void();" data-tag="t-three" class="">
                                            <span class="service-icon"><i class="fas fa-stop"></i></span>
                                            <h3>caterers</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-content">
                        <!-- tab 1 content -->
                        <div class="tab-data" id="t-one">
                            <div class="row packages-row">
                                <div class="col-lg-3 col-md-4">
                                    <a href="javascript:void(0);" class="package-card">
                                        <figure>
                                            <img src="/frontend/images/package-img-1.png">
                                        </figure>
                                        <figcaption class="text-center">
                                            <h3 class="pkg-heading">town rec. centre</h3>
                                            <h4 class="pkg-price">$100.00</h4>
                                        </figcaption>
                                        <span class="distance">
                                            <h4>25</h4>
                                            <p> Miles</p>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a href="javascript:void(0);" class="package-card">
                                        <figure>
                                            <img src="/frontend/images/package-img-2.png">
                                        </figure>
                                        <figcaption class="text-center">
                                            <h3 class="pkg-heading">First Bapist Church</h3>
                                            <h4 class="pkg-price">$100.00</h4>
                                        </figcaption>
                                        <span class="distance">
                                            <h4>30</h4>
                                            <p> Miles</p>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a href="javascript:void(0);" class="package-card">
                                        <figure>
                                            <img src="/frontend/images/package-img-3.png">
                                        </figure>
                                        <figcaption class="text-center">
                                            <h3 class="pkg-heading">Manassas Hall</h3>
                                            <h4 class="pkg-price">$100.00</h4>
                                        </figcaption>
                                        <span class="distance">
                                            <h4>10</h4>
                                            <p> Miles</p>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a href="javascript:void(0);" class="package-card">
                                        <figure>
                                            <img src="/frontend/images/package-img-4.png">
                                        </figure>
                                        <figcaption class="text-center">
                                            <h3 class="pkg-heading">rockledge Mansion</h3>
                                            <h4 class="pkg-price">$100.00</h4>
                                        </figcaption>
                                        <span class="distance">
                                            <h4>5</h4>
                                            <p> Miles</p>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="price-card">
                                <div class="cal-content">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="selected-ser-card selected text-center">
                                                <span class="service-icon"><i class="fas fa-utensils"></i></span>
                                                <div class="prc-heading">
                                                    <h3>Town Rec. Centre</h3>
                                                    <h4 class="price">$100.00</h4>
                                                </div>
                                                <span class="calc-icon">+</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="selected-ser-card text-center">
                                                <span class="service-icon"><i class="fas fa-camera"></i></span>
                                                <div class="prc-heading">
                                                    <h3>Select Photography</h3>
                                                </div>
                                                <span class="calc-icon">+</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="selected-ser-card text-center">
                                                <span class="service-icon"><i class="fas fa-stop"></i></span>
                                                <div class="prc-heading">
                                                    <h3>Select Caterers</h3>
                                                </div>
                                                <span class="calc-icon">=</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-price-col">
                                    <div class="price-content">
                                        <div class="total-price">
                                            <label>Total:<span class="t-amount">$100.00</span>
                                            </label>
                                        </div>
                                        <a href="javascript:void(0);" class="cstm-btn solid-btn book-now-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- tab 2 content -->
                        <div class="tab-data hide" id="t-two">
                            <div class="row packages-row">
                                <div class="col-lg-3 col-md-4">
                                    <a href="javascript:void(0);" class="package-card">
                                        <figure>
                                            <img src="/frontend/images/package-img-1.png">
                                        </figure>
                                        <figcaption class="text-center">
                                            <h3 class="pkg-heading">town rec. centre</h3>
                                            <h4 class="pkg-price">$100.00</h4>
                                        </figcaption>
                                        <span class="distance">
                                            <h4>25</h4>
                                            <p> Miles</p>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a href="javascript:void(0);" class="package-card">
                                        <figure>
                                            <img src="/frontend/images/package-img-2.png">
                                        </figure>
                                        <figcaption class="text-center">
                                            <h3 class="pkg-heading">First Bapist Church</h3>
                                            <h4 class="pkg-price">$100.00</h4>
                                        </figcaption>
                                        <span class="distance">
                                            <h4>30</h4>
                                            <p> Miles</p>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a href="javascript:void(0);" class="package-card">
                                        <figure>
                                            <img src="/frontend/images/package-img-3.png">
                                        </figure>
                                        <figcaption class="text-center">
                                            <h3 class="pkg-heading">Manassas Hall</h3>
                                            <h4 class="pkg-price">$100.00</h4>
                                        </figcaption>
                                        <span class="distance">
                                            <h4>10</h4>
                                            <p> Miles</p>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a href="javascript:void(0);" class="package-card">
                                        <figure>
                                            <img src="/frontend/images/package-img-4.png">
                                        </figure>
                                        <figcaption class="text-center">
                                            <h3 class="pkg-heading">rockledge Mansion</h3>
                                            <h4 class="pkg-price">$100.00</h4>
                                        </figcaption>
                                        <span class="distance">
                                            <h4>5</h4>
                                            <p> Miles</p>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="price-card">
                                <div class="cal-content">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="selected-ser-card selected text-center">
                                                <span class="service-icon"><i class="fas fa-utensils"></i></span>
                                                <div class="prc-heading">
                                                    <h3>Town Rec. Centre</h3>
                                                    <h4 class="price">$100.00</h4>
                                                </div>
                                                <span class="calc-icon">+</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="selected-ser-card text-center">
                                                <span class="service-icon"><i class="fas fa-camera"></i></span>
                                                <div class="prc-heading">
                                                    <h3>Select Photography</h3>
                                                </div>
                                                <span class="calc-icon">+</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="selected-ser-card text-center">
                                                <span class="service-icon"><i class="fas fa-stop"></i></span>
                                                <div class="prc-heading">
                                                    <h3>Select Caterers</h3>
                                                </div>
                                                <span class="calc-icon">=</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-price-col">
                                    <div class="price-content">
                                        <div class="total-price">
                                            <label>Total:<span class="t-amount">$100.00</span>
                                            </label>
                                        </div>
                                        <a href="javascript:void(0);" class="cstm-btn solid-btn book-now-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab 3 content -->
                        <div class="tab-data hide" id="t-three">
                            <div class="row packages-row">
                                <div class="col-lg-3 col-md-4">
                                    <a href="javascript:void(0);" class="package-card">
                                        <figure>
                                            <img src="/frontend/images/package-img-1.png">
                                        </figure>
                                        <figcaption class="text-center">
                                            <h3 class="pkg-heading">town rec. centre</h3>
                                            <h4 class="pkg-price">$100.00</h4>
                                        </figcaption>
                                        <span class="distance">
                                            <h4>25</h4>
                                            <p> Miles</p>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a href="javascript:void(0);" class="package-card">
                                        <figure>
                                            <img src="/frontend/images/package-img-2.png">
                                        </figure>
                                        <figcaption class="text-center">
                                            <h3 class="pkg-heading">First Bapist Church</h3>
                                            <h4 class="pkg-price">$100.00</h4>
                                        </figcaption>
                                        <span class="distance">
                                            <h4>30</h4>
                                            <p> Miles</p>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a href="javascript:void(0);" class="package-card">
                                        <figure>
                                            <img src="/frientend/images/package-img-3.png">
                                        </figure>
                                        <figcaption class="text-center">
                                            <h3 class="pkg-heading">Manassas Hall</h3>
                                            <h4 class="pkg-price">$100.00</h4>
                                        </figcaption>
                                        <span class="distance">
                                            <h4>10</h4>
                                            <p> Miles</p>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a href="javascript:void(0);" class="package-card">
                                        <figure>
                                            <img src="/frontend/images/package-img-4.png">
                                        </figure>
                                        <figcaption class="text-center">
                                            <h3 class="pkg-heading">rockledge Mansion</h3>
                                            <h4 class="pkg-price">$100.00</h4>
                                        </figcaption>
                                        <span class="distance">
                                            <h4>5</h4>
                                            <p> Miles</p>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="price-card">
                                <div class="cal-content">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="selected-ser-card selected text-center">
                                                <span class="service-icon"><i class="fas fa-utensils"></i></span>
                                                <div class="prc-heading">
                                                    <h3>Town Rec. Centre</h3>
                                                    <h4 class="price">$100.00</h4>
                                                </div>
                                                <span class="calc-icon">+</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="selected-ser-card text-center">
                                                <span class="service-icon"><i class="fas fa-camera"></i></span>
                                                <div class="prc-heading">
                                                    <h3>Select Photography</h3>
                                                </div>
                                                <span class="calc-icon">+</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="selected-ser-card text-center">
                                                <span class="service-icon"><i class="fas fa-stop"></i></span>
                                                <div class="prc-heading">
                                                    <h3>Select Caterers</h3>
                                                </div>
                                                <span class="calc-icon">=</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-price-col">
                                    <div class="price-content">
                                        <div class="total-price">
                                            <label>Total:<span class="t-amount">$100.00</span>
                                            </label>
                                        </div>
                                        <a href="javascript:void(0);" class="cstm-btn solid-btn book-now-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab 4 content -->
                        <div class="tab-data hide" id="t-four">
                            <div class="row packages-row">
                                <div class="col-lg-3 col-md-4">
                                    <a href="javascript:void(0);" class="package-card">
                                        <figure>
                                            <img src="/frontend/images/package-img-1.png">
                                        </figure>
                                        <figcaption class="text-center">
                                            <h3 class="pkg-heading">town rec. centre</h3>
                                            <h4 class="pkg-price">$100.00</h4>
                                        </figcaption>
                                        <span class="distance">
                                            <h4>25</h4>
                                            <p> Miles</p>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a href="javascript:void(0);" class="package-card">
                                        <figure>
                                            <img src="/frontend/images/package-img-2.png">
                                        </figure>
                                        <figcaption class="text-center">
                                            <h3 class="pkg-heading">First Bapist Church</h3>
                                            <h4 class="pkg-price">$100.00</h4>
                                        </figcaption>
                                        <span class="distance">
                                            <h4>30</h4>
                                            <p> Miles</p>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a href="javascript:void(0);" class="package-card">
                                        <figure>
                                            <img src="/frontend/images/package-img-3.png">
                                        </figure>
                                        <figcaption class="text-center">
                                            <h3 class="pkg-heading">Manassas Hall</h3>
                                            <h4 class="pkg-price">$100.00</h4>
                                        </figcaption>
                                        <span class="distance">
                                            <h4>10</h4>
                                            <p> Miles</p>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <a href="javascript:void(0);" class="package-card">
                                        <figure>
                                            <img src="/frontend/images/package-img-4.png">
                                        </figure>
                                        <figcaption class="text-center">
                                            <h3 class="pkg-heading">rockledge Mansion</h3>
                                            <h4 class="pkg-price">$100.00</h4>
                                        </figcaption>
                                        <span class="distance">
                                            <h4>5</h4>
                                            <p> Miles</p>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="price-card">
                                <div class="cal-content">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="selected-ser-card selected text-center">
                                                <span class="service-icon"><i class="fas fa-utensils"></i></span>
                                                <div class="prc-heading">
                                                    <h3>Town Rec. Centre</h3>
                                                    <h4 class="price">$100.00</h4>
                                                </div>
                                                <span class="calc-icon">+</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="selected-ser-card text-center">
                                                <span class="service-icon"><i class="fas fa-camera"></i></span>
                                                <div class="prc-heading">
                                                    <h3>Select Photography</h3>
                                                </div>
                                                <span class="calc-icon">+</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="selected-ser-card text-center">
                                                <span class="service-icon"><i class="fas fa-stop"></i></span>
                                                <div class="prc-heading">
                                                    <h3>Select Caterers</h3>
                                                </div>
                                                <span class="calc-icon">=</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-price-col">
                                    <div class="price-content">
                                        <div class="total-price">
                                            <label>Total:<span class="t-amount">$100.00</span>
                                            </label>
                                        </div>
                                        <a href="javascript:void(0);" class="cstm-btn solid-btn book-now-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab 5 content -->
                        <div class="tab-data hide" id="t-five">

                        </div>
                        <!-- tab 6 content -->
                        <div class="tab-data hide" id="six">
                            <form class="services-form">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" id="" class="form-control" placeholder="Location">
                                            <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" id="" class="form-control" placeholder="Event Type">
                                            <span class="input-icon"><i class="fas fa-glass-cheers"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" id="" class="form-control" placeholder="Suggested Vendor">
                                            <span class="input-icon"><i class="fas fa-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" id="" class="form-control" placeholder="Amenties">
                                            <span class="input-icon"><i class="fas fa-concierge-bell"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" id="" class="form-control" placeholder="Guest#">
                                            <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrap text-center">
                                    <a href="javascript:void(0);" class="cstm-btn solid-btn">Search <span><i class="fas fa-search"></i></span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Plan togather section ends here -->

    <!-- How its work section starts here -->
    <section class="how-its-work-sec">
        <div class="container">
            <div class="sec-heading text-center">
                <h4>'ENVISIUN EXPALINED, Let’s show you HOW'</h4>
                <h2>"PILOT YOUR DREAMS"</h2>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="video-container">
                        <figure>
                            <video class="video" id="bVideo" loop="" width="100%" height="100%" poster="/frontend/images/video-poster.png">
                                <source src="/frontend/videos/Dummy Video.mp4" type="video/mp4">
                                <source src="/frontend/videos/movie.ogg" type="video/ogg">
                                <source src="/frontend/images/Blender made House animation.webm" type="video/webm">

                            </video>

                            <div id="playButton" class="playButton" onclick="playPause()">
                                <span><i class="fas fa-play-circle"></i></span>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How its work section ends here -->

    <!--Get to knw section starts here-->
    <section class="home-get" style="background: url('/frontend/images/budget-plan-bg.png');">
        <div class="container">
            <div class="sec-heading text-center">
                <h4>WHY NOT CHOOSE US? </h4>
                <h2>GET TO KNOW ENVISIUN!!</h2>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
            <p class="get-text">
                <span>ARE YOU A VENDOR?</span> List your Business and Start Delivering Dreams
            </p>
            <a href="javascript:void(0);" class="cstm-btn solid-btn">
                Sign up
            </a>
        </div>
    </section>
    <!--Get to knw section ends here-->

    <!--Testimonial Page starts here-->
    <section class="testimonial">
        <div class="container" data-aos="fade-left" data-aos-duration="3000">
            <div class="sec-heading text-center">
                <h2>what people are saying about us</h2>
            </div>
            <div class="test owl-carousel owl-theme owl-loaded owl-drag">
                <div class="item">
                    <div class="wrap">
                        <figure>
                            <img class="commas" src="images/commas.png" alt="" />
                            <img src="/frontend/images/test.png" alt="" />
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <p class="name">John Smith</p>
                    </div>
                </div>
                <div class="item">
                    <div class="wrap">
                        <figure>
                            <img class="commas" src="images/commas.png" alt="" />
                            <img src="/frontend/images/test.png" alt="" />
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <p class="name">John Smith</p>
                    </div>
                </div>
                <div class="item">
                    <div class="wrap">
                        <figure>
                            <img class="commas" src="images/commas.png" alt="" />
                            <img src="/frontend/images/test.png" alt="" />
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <p class="name">John Smith</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

























 
@endsection
