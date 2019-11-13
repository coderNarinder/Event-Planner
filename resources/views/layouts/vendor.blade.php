<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{url('/bootstrap-fileinput-master/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{url('/bootstrap-fileinput-master/themes/explorer-fas/theme.css')}}" media="all" rel="stylesheet" type="text/css"/>

    <link href="{{ url('/css/vendors/vendor-custom.css') }}" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="{{url('/bootstrap-fileinput-master/js/fileinput.js')}}" type="text/javascript"></script>

</head>
<body>

    <div class="loadingDiv">
        <img src="{{url('logo.svg')}}">
    </div>



  <section id="contents" class="custom-vendor-dashboard">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <i class="fa fa-align-right"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <div class="vendor-dash-head">
            <ul class="nav navbar-nav">
                <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right side_nav_menus">
             
              <li><a href="#"><i class="fa fa-comments"></i><span>23</span></a></li>
              <li><a href="#"><i class="fa fa-bell-o"></i><span>98</span></a></li>  
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My profile </a>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="fa fa-user-o fw"></i> My account</a></li>
                  <li><a href="#"><i class="fa fa-envelope-o fw"></i> My inbox</a></li>
                  <li><a href="#"><i class="fa fa-question-circle-o fw"></i> Help</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> Log out</a></li>
                </ul>
              </li>            
            </ul>
        </div>
          </div>
        </div>
      </nav>




                           @if(Auth::user()->services->count() > 0) 
                                
                                  
                                         @include('vendors.sidebar')
                                      
                                 
                                         @include('vendors.errors')
                                         @yield('vendorContents')
                                    

                          @else

                            
                                         @include('vendors.errors')
                                         @yield('vendorContents')
                                    
                          @endif




</section>

    
   
@yield('scripts')

<script>
        /*global $, console*/
/*
  By Mostafa Omar
    https://www.facebook.com/MostafaOmarIbrahiem
*/
$(function () {

  'use strict';

  (function () {

    var aside = $('.side-nav'),

        showAsideBtn = $('.show-side-btn'),

        contents = $('#contents');

    showAsideBtn.on("click", function () {

      $("#" + $(this).data('show')).toggleClass('show-side-nav');

      contents.toggleClass('margin');

    });

    if ($(window).width() <= 767) {

      aside.addClass('show-side-nav');

    }
    $(window).on('resize', function () {

      if ($(window).width() > 767) {

        aside.removeClass('show-side-nav');

      }

    });

    // dropdown menu in the side nav
    var slideNavDropdown = $('.side-nav-dropdown');

    $('.side-nav .categories li').on('click', function () {

      $(this).toggleClass('opend').siblings().removeClass('opend');

      if ($(this).hasClass('opend')) {

        $(this).find('.side-nav-dropdown').slideToggle('fast');

        $(this).siblings().find('.side-nav-dropdown').slideUp('fast');

      } else {

        $(this).find('.side-nav-dropdown').slideUp('fast');

      }

    });

    $('.side-nav .close-aside').on('click', function () {

      $('#' + $(this).data('close')).addClass('show-side-nav');

      contents.removeClass('margin');

    });

  }());


  //  Chart ( 2 )




});
    </script>
</body>
</html>
