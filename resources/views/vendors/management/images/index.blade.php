@extends('vendors.management.layout')
@section('vendorContents')


<div class="row">




<div class="col-md-12">









<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">






    <div class="col-md-12">
      	  <a role="button" class="btn btn-primary pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          View Gallery Images
        </a>
        <a class="collapsed btn btn-primary pull-right" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Add Gallery Images
        </a>
</div>
 
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
                       {{choosefilemultiple($errors,'Gallery Image','gallery_image[]')}}


                          <script type="text/javascript">
                                     $('#gallery_image').fileinput({
                                             'theme': 'explorer-fas',
                                              headers: {
                                                   'X-CSRF-TOKEN': $('input[name=_token]').val()
                                              },
                                             'uploadUrl': '{{ url(route("upload_vendor_image_gallery")) }}?category_id={{$category->id}}',
                                              overwriteInitial: false,
                                              initialPreviewAsData: true,
                                              initialPreview: [
                                              
                                              ],
                                              initialPreviewConfig: [

                                              ]
                                });
                          </script>
      </div>
    </div>















    
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">



      	   @foreach($images as $img)
 

            <div class="col-md-4">
                  <div class="image-gallery-container">
                       <img src="{{url($img->keyValue)}}" width="100%">
                       <div class="olay">
                           <a href="{{route('vendor_category_meta_delete',[$category->slug,$img->id])}}">Delete</a>
                           
                       </div>
                  </div>
            </div>

          @endforeach


    {{$images->links()}}


      	                    
        
      </div>
    </div>
  </div>
 
   
</div>

                  

</div>

 
</div>
@endsection