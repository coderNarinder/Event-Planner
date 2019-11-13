@extends('vendors.management.layout')
@section('vendorContents')

<a href="{{url(route('vendor_category_videos_management',$category->slug))}}" class="btn btn-primary">View</a>
<div class="row">
 
     

<div class="col-md-12">
  <form method="post">
   {{textbox($errors,'Title','title')}}
   {{textbox($errors,'Video Link (please paste here youtube video link)','video_link')}}
@csrf
<button>Save</button>
</form>
</div>



 
</div>
@endsection