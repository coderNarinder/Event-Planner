@extends('vendors.management.layout')
@section('vendorContents')

<a href="{{url(route('vendor_category_videos_add_management',$category->slug))}}" class="btn btn-primary">Add New</a>
<div class="row">
 
    @foreach($videos as $img)
 
      <?php $arr = (array)json_decode($img->keyValue); ?>
      <div class="col-md-6">
            <div class="video-gallery-container">

              <iframe width="661" height="372" src="{{$arr['link']}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <h4>{{$arr['title']}}</h4>
            </div>
      </div>

    @endforeach

    {{$videos->links()}}

 
</div>
@endsection