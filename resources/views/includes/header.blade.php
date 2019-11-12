<header class="site-header">
   <!-- header starts here -->
   <div class="top-bar">
      <div class="container">
         <div class="top-menus-wrap">
            <button class="menu-toggle" type="button">
            <span><i class="fas fa-bars"></i></span> Menu
            </button>
            <a  href="{{url('/')}}" class="brand-name"><img src="/frontend/images/logo.svg"></a>
            <button class="toolbox mob-hide" type="button">
            <span><i class="fas fa-wrench"></i></span> Toolbox
            </button>
            <!-- only for mobile -->
            <ul class="mob-side-menus">
               <!-- <li class="user">
                  <span>
                      <i class="fas fa-user"></i>
                  </span>
                  <div class="dropdown">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;">
                          <a class="dropdown-item" [routerLink]="[ '/' ]" (click)="auth.logout()">Logout</a>
                      </div>
                  </div>
                  </li> -->
               <li>
                  <button class="toolbox" type="button">
                  <span><i class="fas fa-wrench"></i></span> Toolbox
                  </button>
               </li>
            </ul>
         </div>
         <!-- ------------------------ -->
      </div>
   </div>
   <div class="header-links-wrap">
      <div class="container">
         <ul class="head-links">
            <li><a href="/">Home</a></li>
            <li><a href="/vendor/register">New Vendors</a></li>
            <li class="mob-hide">
               <a href="javascript:void(0);" class="fav-list">
               <i class="fas fa-heart"></i>
               <sup>2</sup>
               </a>
            </li>
            <li>
               <div class="header-btns">
                  @if(Auth::check())
                  <div class="dropdown">
                     <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/{{Auth::user()->role}}">Profile</a>
                        <a class="dropdown-item" href="/logout">Logout</a>
                     </div>
                  </div>
                  @else
                  <a href="{{url('/login')}}" class="cstm-btn solid-btn">Login</a>
                  <a href="{{url('/register')}}" class="cstm-btn">Sign Up</a>
                  @endif
               </div>
            </li>
            <!-- <li>
               <div class="dropdown">
                       <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" 
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lang </a>
                       <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                           <a class="dropdown-item" (click)="switchLanguage('en')">Eng</a>    
                           <a class="dropdown-item" (click)="switchLanguage('fr')">Fr</a>
                       </div>
                   </div>
               </li> -->
            <li class="show-for-mob">
               <div class="icon-grp">
                  <a href="javascript:void(0);" class=""><i class="fas fa-envelope"></i></a>
                  <a href="javascript:void(0);" class="fav-list">
                  <i class="fas fa-heart"></i>
                  <sup>2</sup>
                  </a>
               </div>
            </li>
         </ul>
      </div>
   </div>
   <!--For Menu-->
   <nav id="main-navigation" class="">
      <div class="container">
         <ul id="menus-list" class="menu-list">
            <li>
               <a href="javascript:void(0);" style="background:url(/frontend/images/menu-home-img.png)">
                  <span class="nav-item-icon"><i class="fas fa-home"></i></span>
                  <h3>Home</h3>
               </a>
            </li>
            <li>
               <a href="javascript:void(0);" style="background:url(/frontend/images/menu-about.png)">
                  <span class="nav-item-icon"><i class="fas fa-address-card"></i></span>
                  <h3>About Us</h3>
               </a>
            </li>
            <li>
               <a href="javascript:void(0);" style="background:url(/frontend/images/menu-faq.png)">
                  <span class="nav-item-icon"><i class="fas fa-comment-dots"></i></span>
                  <h3>FAQ</h3>
               </a>
            </li>
            <li>
               <a href="javascript:void(0);" style="background:url(/frontend/images/menu-contact-us.png)">
                  <span class="nav-item-icon"><i class="fas fa-id-badge"></i></span>
                  <h3>Contact Us</h3>
               </a>
            </li>
            <li>
               <a href="javascript:void(0);" style="background:url(/frontend/images/menu-policies.png)">
                  <span class="nav-item-icon"><i class="fas fa-clipboard"></i></span>
                  <h3>Polices</h3>
               </a>
            </li>
            <li>
               <a href="javascript:void(0);" style="background:url(/frontend/images/menu-forum.png)">
                  <span class="nav-item-icon"><i class="fas fa-users"></i></span>
                  <h3>Forum</h3>
               </a>
            </li>
            <li>
               <a href="javascript:void(0);" style="background:url(/frontend/images/menu-testimonial.png)">
                  <span class="nav-item-icon"><i class="fas fa-star"></i></span>
                  <h3>Testimonials</h3>
               </a>
            </li>
            <li>
               <a href="{{url('/vendor/register')}}" style="background:url(/frontend/images/menu-vendor.png)">
                  <span class="nav-item-icon"><i class="fas fa-star"></i></span>
                  <h3>New Vendor</h3>
               </a>
            </li>
            <li>
               <a href="{{url('/register')}}" style="background:url(/frontend/images/menu-sign.png)">
                  <span class="nav-item-icon"><i class="fas fa-star"></i></span>
                  <h3>SignUp</h3>
               </a>
            </li>
         </ul>
      </div>
      <a href="javascript:void(0);" (click)="close_nav()" class="nav-close-btn"><i class="fas fa-times"></i></a>
   </nav>
   <!--For toolbox-->
   <nav id="tool-nav" class="">
      <div class="container">
         <ul id="menus-list" class="menu-list">
            <li>
               <a href="javascript:void(0);">
                  <span class="nav-item-icon"><img src="/frontend/images/event-listing.png"/></span>
                  <h3>Event Checklist</h3>
               </a>
            </li>
            <li>
               <a href="javascript:void(0);">
                  <span class="nav-item-icon">
                  <img src="/frontend/images/budgeting-tool.png"/>
                  </span>
                  <h3>Budgeting tool</h3>
               </a>
            </li>
            <li>
               <a href="javascript:void(0);">
                  <span class="nav-item-icon">
                  <img src="/frontend/images/guest-list.png"/></span>
                  <h3>Guest List</h3>
               </a>
            </li>
            <li>
               <a href="javascript:void(0);">
                  <span class="nav-item-icon">
                  <img src="/frontend/images/calculators.png"/></span>
                  <h3>Calculator</h3>
               </a>
            </li>
            <li>
               <a href="javascript:void(0);">
                  <span class="nav-item-icon">
                  <img src="/frontend/images/forum.png"/></span>
                  <h3>Forum</h3>
               </a>
            </li>
            <li>
               <a href="javascript:void(0);">
                  <span class="nav-item-icon">
                  <img src="/frontend/images/vendor-manager.png"/></span>
                  <h3>Vendor Manager</h3>
               </a>
            </li>
            <li>
               <a href="javascript:void(0);">
                  <span class="nav-item-icon">
                  <img src="/frontend/images/favourite.png"/></span>
                  <h3>Favorite</h3>
               </a>
            </li>
         </ul>
      </div>
      <a href="javascript:void(0);" (click)="close_nav()" class="nav-close-btn"><i class="fas fa-times"></i></a>
   </nav>
   <a href="javascript:void(0);" id="calender-toggle"><span><i class="fas fa-calendar-alt"></i></span></a>
</header>