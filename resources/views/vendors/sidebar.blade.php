





<div class="col-md-3">


	@if(Auth::user()->services->count() > 0)
<ul>
@foreach(Auth::user()->services as $cate)
	<li><a href="{{url(route('vendor_category_management',$cate->category->slug))}}"> {{$cate->category->label}} Management</a>

          <ul>
          	  
          	  @foreach($cate->subcategory as $sub)
                     <li><a href="{{url(route('vendor_category_management',$sub->category->slug))}}">{{$sub->category->label}}</a></li>
          	  @endforeach
          </ul>

	</li>
@endforeach

<li><a href="{{url(route('vendor_profile'))}}">Profile Settings</a></li>
<li><a href="{{url(route('vendor_password'))}}">Password Settings</a></li>



</ul>

	@endif






</div>