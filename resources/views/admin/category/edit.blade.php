@extends('layouts.admin')
 
@section('content')
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
               <h1>{{$title}}</h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="{{ url('master/') }}">Dashboard</a></li>
              <li class="breadcrumb-item "><a href="{{ url($addLink) }}">View</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
       <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
       @include('admin.error_message')
 
            <div class="card-body">



<div class="col-md-12">

  <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">

                   @csrf

<div class="row">

                 
  <div class="col-md-6"> {{select3($errors,'Parent','parent','label','0',$parent,$category->parent)}}</div>
  <div class="col-md-6">{{select3($errors,'SubParent','subparent','label','0',$subparent,$category->subparent)}}</div>
  <div class="col-md-6">{{textbox($errors,'Name*','label',$category->label)}}</div>
         
<div class="col-md-6">

                       


                        <div class="form-group" >

                                <label>Featured | Not</label>

                                <select class="form-control" name="featured">
                                  <option value="0" {{$category->featured == 0 ? 'selected' : ''}}>Unfeatured</option>
                                  <option value="1" {{$category->featured == 1 ? 'selected' : ''}}>Featured</option>
                                </select>
                        </div>
</div>
 
<div class="col-md-6">
                {{choosefilemultiple($errors,'Image','image')}}


                          <script type="text/javascript">
                                     $('#image').fileinput({
                                              browseClass: "btn btn-primary btn-block",
                                             
                                              
                                              showCaption: false,
                                              showRemove: false,
                                              showUpload: false,
                                              initialPreview: [
                                                 <?php if($category->image != ""): ?>
                                                        "<img src='{{url('/'.$category->image)}}'>",
                                                 <?php endif; ?>
                                              ],
                                              initialPreviewConfig: [

                                                <?php if($category->image != ""): ?>
                                                        {
                                                          'caption' : 'product_image',
                                                          'url' : '<?= url(route('delete_category_image',$category->id)) ?>',
                                                          'key'     : 'image'
                                                        },
                                               <?php endif; ?>

                                              ]
                                });
                   </script>
</div>
<div class="col-md-6">


                     {{choosefilemultiple($errors,'Thumbnail Image','thumbnail_image')}}


                          <script type="text/javascript">
                                     $('#thumbnail_image').fileinput({
                                              browseClass: "btn btn-primary btn-block",
                                             
                                              
                                              showCaption: false,
                                              showRemove: false,
                                              showUpload: false,
                                              initialPreview: [
                                                 <?php if($category->thumbnail_image != ""): ?>
                                                        "<img src='{{url('/'.$category->thumbnail_image)}}'>",
                                                 <?php endif; ?>
                                              ],
                                              initialPreviewConfig: [

                                                <?php if($category->thumbnail_image != ""): ?>
                                                        {
                                                          'caption' : 'product_image',
                                                          'url' : '<?= url(route('delete_category_image',$category->id)) ?>',
                                                          'key'     : 'thumbnail_image'
                                                        },
                                               <?php endif; ?>

                                              ]
                                });
                   </script>


</div>


 <div class="col-md-6"> {{textbox($errors,'Meta Title*','meta_title',$category->meta_title)}}</div>
  <div class="col-md-6">{{textbox($errors,'Meta Tags*','meta_tag',$category->meta_tag)}}</div>
 <div class="col-md-12"> {{textarea($errors,'Meta description*','meta_description',$category->meta_description)}}</div>



</div>
                                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
 </form>


</div>








              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>


 
     
@endsection

 


@section('scripts')


<script type="text/javascript">

 

  $('#parent').on('change',function(){

      var val = $( this ).val();

      getSubCategoryByCategoryId();

  });



  function getSubCategoryByCategoryId() {
 
   var val = $('select#parent option:selected').val();

    
    
    $.ajax({
     url: "<?= url('get-subcategory-by-parent') ?>" ,
     data:{
       'parent': val,
       'categorys_id':'<?= $category->id ?>',
        'subparent':'0'
     },
     dataTYPE: 'json',
     success: function(result){

          var text ='<option value="0">select</option>';

           
          $.each(result, function( index, key ) {
                text +='<option value="'+key.id+'">'+key.label+'</option>';
           });


          $("#subparent").html(text);
     }});

  }




</script>


@endsection


 
