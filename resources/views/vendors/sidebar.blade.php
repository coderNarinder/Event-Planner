


        <aside class="side-nav" id="show-side-navigation1">
      <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
      <div class="heading">
        <figure class="user_img">
        <img src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance" alt="">
    </figure>
        <div class="info">
          <h3><a href="#">John Doe</a></h3>
          <p>Lorem ipsum dolor sit.</p>
        </div>
      </div>

      <ul class="categories">
        <li><a href="#"> <i class="fa fa-home fa-fw" aria-hidden="true"></i> About us</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">ipsum dolor</a></li>
            <li><a href="#">dolor ipsum</a></li>
            <li><a href="#">amet consectetur</a></li>
            <li><a href="#">ipsum dolor sit</a></li>
          </ul>
        </li>



   @if(Auth::user()->services->count() > 0)
 
       @foreach(Auth::user()->services as $cate)

       <li><a href="javascript:void(0);"> 
         <i class="fa fa-support fa-fw"></i> {{$cate->category->label}} Management</a>
          <ul class="side-nav-dropdown">
               <li role="presentation" >
                <a href="{{url(route('vendor_category_management',$cate->category->slug))}}">Basic Information</a>
              </li>
              <li role="presentation" >
                <a href="{{url(route('vendor_category__image_management',$cate->category->slug))}}">Photo Gallery</a>
              </li>
              <li role="presentation" >
                <a href="{{url(route('vendor_category_videos_management',$cate->category->slug))}}">Video Gallery</a>
              </li>
          </ul>
        </li>
       
                       

      @endforeach

    @endif



        
        <li><a href="#"> <i class="fa fa-envelope fa-fw"></i>Settings</a>
          <ul class="side-nav-dropdown">
           
                        <li>
                            <a href="{{url(route('vendor_profile'))}}">
                           
                            Profile Settings </a>
                        </li>


                         <li>
                            <a href="{{url(route('vendor_password'))}}">
                            
                            Password Settings </a>
                        </li>
          </ul>
        </li>
         
        
         
        <li><a href="{{url('/logout')}}"> <i class="fa fa-comments-o fa-fw"></i>Logout</a></li>
      </ul>
    </aside>
    











