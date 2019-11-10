 @if(Session::has('flash_message'))
 <div class="row">
       <div class="col-md-12">
            

             <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success! </strong><?=  Session::get('flash_message') ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

         </div>
  </div>
 @endif



  @if(Session::has('error_flash_message'))
  <div class="row">
         <div class="col-md-12">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Alert! </strong><?=  Session::get('error_flash_message') ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
         </div>
  </div>
 @endif


  @if(Session::has('messages'))
  <div class="row">
         <div class="col-md-12">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Alert! </strong><?=  Session::get('messages') ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
         </div>
  </div>
 @endif