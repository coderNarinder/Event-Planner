@extends('layouts.vendor')
@section('vendorContents')



<div class="row">


   <h3>PROFILE SETTINGS</h3>

<div class="col-md-12">

<form method="post" enctype="multipart/form-data">
	@csrf

	{{textbox($errors,'Name','name',Auth::user()->name)}}

    {{choosefile($errors,'Profile Image','image')}}

    @if(Auth::user()->profile_image != "")
       <img src="{{url('/'.Auth::user()->profile_image)}}" width="100">
    @endif

    <button>Update</button>
</form>

</div>







</div>




@endsection