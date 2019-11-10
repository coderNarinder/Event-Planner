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
<div class="row">
                                         @csrf
          <div class="col-md-6"> 
             {{select3($errors,'Parent','parent','label','0',$category)}}
           </div>
        <div class="col-md-6">
         {{select3($errors,'SubParent','subparent','label','0',array())}}
       </div>
        <div class="col-md-6"> 
        {{textbox($errors,'Name*','label')}}
      </div>

            <div class="col-md-6">
                   <div class="form-group" >

                          <label>Featured | Not</label>

                          <select class="form-control" name="featured">
                            <option value="0">Unfeatured</option>
                            <option value="1">Featured</option>
                          </select>
                  </div>
                   
            </div>
            <div class="col-md-6">
                      <div class="form-group ">

                        <label>Image</label>
                      <div class=" file-loading">
                          <input id="input-20" type="file" name="image">
                      </div>
                      <script>
                       
                          $("#input-20").fileinput({
                              browseClass: "btn btn-primary btn-block",
                              showCaption: false,
                              showRemove: false,
                              showUpload: false
                          });
                       
                      </script>

                      </div>
            </div>
<div class="col-md-6">
  <div class="form-group ">

  <label>Thumbnail Image</label>
<div class=" file-loading">
    <input id="input-21" type="file" name="thumbnail_image">
</div>
<script>
 
    $("#input-21").fileinput({
        browseClass: "btn btn-primary btn-block",
        showCaption: false,
        showRemove: false,
        showUpload: false
    });
 
</script>

</div>

</div>


















<div class="col-md-6">   {{textbox($errors,'Meta Title*','meta_title')}}</div>
  <div class="col-md-6">  {{textbox($errors,'Meta Tags*','meta_tag')}}</div>
  <div class="col-md-12">  {{textarea($errors,'Meta description*','meta_description')}}</div>

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


 
