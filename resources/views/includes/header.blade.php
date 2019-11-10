

<div class="loading-div"><img src="{{ url('images/loading-1.gif')}}"></div>





    <!-- header starts here -->
    <header>
        <div class="top-head">
            <div class="container cst-container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3">@if(Auth::check())
                         <a href="{{url('/')}}/{{Auth::user()->role}}" class="tobar-dashboard"><i class="fa fa-dashboard"></i> Go to Dashboard</a>
                  @endif</div>
                    <div class="col-xs-7 col-sm-4 center-text">
                        

                            
                           <a href="{{getMataData('arrival_link','common')}}" class="new-arrivals">

                           @if(getMataData('arrival_icon','common') != "")  
                            <div class="img-arraival"> 
                                <img src="{{url(getMataData('arrival_icon','common'))}}">
                            </div>
                            @endif
                             <span>{{getMataData('arrival_title','common')}}</span>
                         </a>
                            


                          
                    </div>

                    <div class="col-xs-5 col-sm-5 add-cart">
                        <p>
						         
                       @guest
                            <a class="h-button new-main-button" href="{{ url('/login')}}" > Sign In</a>
							<a class="h-button new-main-button" href="{{ url('/register')}}" > Sign Up</a>                                
                        @else


 

                          
                        <ul class="login-topbar">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 <span><img src="<?= userProfileImage(Auth::user()->id) ?>" width="30" class="img-circle"></span>  {{ strlen(Auth::user()->name) > 6 ?  substr(Auth::user()->name, 0,6).'...' : Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{url(route('user_account_2'))}}">My Account</a> 
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
							<li class="nav-item dropdown h-notifications">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle n-shop" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <i class="fas fa-bell"></i><span id="loadQty"><i>(</i>{{Auth::user()->unreadNotifications->count()}}<i>)</i></span><span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    @if(Auth::user()->unreadNotifications->count()!=0)
                                        <a class="dropdown-item" href="{{url(route('markasread_user'))}}">Mark all as read</a>
                                      @else
                                        <a class="dropdown-item" href="#">No Notification</a>
                                      @endif
                                       
                                         
                                          @foreach (Auth::user()->unreadNotifications()->take(5)->get() as $notification)
               
             
                                            <a class="dropdown-item" href="{{$notification->data['details']['link']}}">{{$notification->data['details']['detail']}}</a>
                                         
                                       @endforeach
                                       @if(Auth::user()->unreadNotifications->count()>5)
                                            <a class="dropdown-item view_all" href="{{url(route('notifications'))}}">View All</a>
                                       @endif
                                </div>
                            </li>

                               
                        </ul>
                     
                        @endguest








                            <a class="n-shop" href="{{ url( route('cart_list') ) }}"><i class="fas fa-shopping-bag"></i>

                                <span id="loadQty"><i>(</i>{{CartQTY()}}<i>)</i></span></a>
                                <a href="{{ url('/product-category') }}" class="btn btn-default new-main-button">New order</a>
                            </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-sec">
            <div class="container cst-container">
                <div class="row align-c">
                    <div class="bottom-header">
                        <!--<div class="col-sm-4">
                          <form method="get" action="{{ url( route('postSearchData') ) }}" id="searchFrom">
                            @csrf
                            <div class="search">
                                <img src="{{ url('/frontend/images/search.png')}}">
                                <input type="search" class="form-control" id="project" placeholder="Search here...." autocomplete="false">
                            </div>
                                
                                <input type="hidden" id="redirectLink" name="redirectLink">
                                 
                        </form>

                        </div>-->
                        <div class=" col-sm-6 col-md-3 main-logo">
                            <a href="{{ url('/') }}"><img src="{{url(getMataData('website_logo','common'))}}"></a>
                        </div>
                        <div class="col-sm-6 col-md-9">
                               

                  <div class="row">
                     <nav class="navbar navbar-default">

                           <div class="container cst-container">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse" id="myNavbar">
                                    @include('includes.home.headerMenu')

                                </div>


                            </div>
                        </nav>
                    </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>




 


 

  


</header>

    <!-- header ends here -->



