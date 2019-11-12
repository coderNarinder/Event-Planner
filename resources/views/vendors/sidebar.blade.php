 <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        {{Auth::user()->name}}
                    </div>
                    <div class="profile-usertitle-job">
                        Vendor
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
              <!--   <div class="profile-userbuttons">
                    <button type="button" class="btn btn-success btn-sm">Follow</button>
                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div> -->
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="{{url(route('vendor_dashboard'))}}">
                            <i class="glyphicon glyphicon-home"></i>
                            Overview </a>
                        </li>
                        


  @if(Auth::user()->services->count() > 0)
 
      @foreach(Auth::user()->services as $cate)
       
                        <li>
                            <a href="{{url(route('vendor_category_management',$cate->category->slug))}}">
                            <i class="glyphicon glyphicon-flag"></i>
                           {{$cate->category->label}} Management
                            </a>
                        </li>

      @endforeach

  @endif

                        <li>
                            <a href="{{url(route('vendor_profile'))}}">
                            <i class="glyphicon glyphicon-flag"></i>
                            Profile Settings </a>
                        </li>


                         <li>
                            <a href="{{url(route('vendor_password'))}}">
                            <i class="glyphicon glyphicon-flag"></i>
                            Password Settings </a>
                        </li>






                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>











