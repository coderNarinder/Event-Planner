@extends('layouts.vendor')
@section('vendorContents')




<div class="card">
       <div class="card-header">Assign Categories</div>
           <div class="card-body">


             <div class="col-md-12">
               <form id="assignCategory">
             	<div class="row ">
              	 
              	 @foreach($category as $cate)
              	  <div class="col-md-12">
                   <div class="vendor-category">
                      <div class="category-checkboxes category-title">
                      <input type="checkbox" name="category[]" value="{{$cate->id}}" id="category-{{$cate->id}}">
                       	   <label for="category-{{$cate->id}}">{{$cate->label}}</label>

                       	    @if($cate->subcategory->count() > 0)
                      <div class="subcategory-of-category">

                          @foreach($cate->subcategory as $sub)

                              <div class="category-checkboxes">
                       	          <input type="checkbox" name="subcategory[{{$cate->id}}][]" value="{{$sub->id}}" id="subcategory-{{$sub->id}}">
                       	          <label for="subcategory-{{$sub->id}}">{{$sub->label}}</label>
                               </div>


                          @endforeach

                     </div>
                    @endif


                    </div>
                   
                  

                   </div>

                  </div>


                        
              	 @endforeach



              	 <div class="col-md-12">
                      @csrf <button class="btn btn-custom">Assign</button>

                      <div class="errorMessages"></div>
              	 </div>
                 </div>
              	</form>
             
           </div>

           </div>
</div>















@endsection


@section('scripts')


<script type="text/javascript">

    function ErrorMsg(type,message){

    	var txt='';
    	    txt +='<div class="alert alert-'+type+'" role="alert">';
			txt +=message;
			txt +='</div>';
		return txt;
	}



function erorrMessage(errors) {
 


      var txt ="";
      $.each(errors, function( index, value ) {
        txt += ErrorMsg('error',value);
          //  txt +='<li>'+ value +'</li>';
      });
     /// txt +='</ul>';

      return txt;
}

	function assignCategory($this) {
		  $.ajax({
               url : "<?= url(route('vendorAssignCategory')) ?>",
               data : $this.serialize(),
               type: 'POST',  // http method
               dataTYPE:'JSON',
               headers: {
                 'X-CSRF-TOKEN': $('input[name=_token]').val()
               },
                beforeSend: function() {
                     $this.find('button').attr('disabled','true');
                     $("body").find('.loadingDiv').show();
                },
                success: function (data) {
                    if(parseInt(data.status) == 1){
                           $this[0].reset();
                            
                           $this.find('.errorMessages').html(ErrorMsg('success',data.msg));
                           
                           window.location.href = data.redirect_links;
                           return true;



                      }else{
                          
                           $this.find('.errorMessages').html(erorrMessage(data.errors));
                            $this.find('button').removeAttr('disabled');
                            $("body").find('.loadingDiv').hide();
                           
                      }
                    
               },
               complete: function() {
                    $this.find('button').removeAttr('disabled');
                    $("body").find('.loadingDiv').hide();
               },
               error: function (jqXhr, textStatus, errorMessage) {
                     $this.find('button').removeAttr('disabled');
               }

        });
	}


	$("body").on('submit','#assignCategory',function(e){
      e.preventDefault();
      assignCategory($(this));
	});


</script>






@endsection