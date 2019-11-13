@extends('layouts.vendor')
@section('vendorContents')


<div class="container-fluid">
      <div class="row">      

      <div class="col-lg-6 offset-lg-3">
        <div class="section-title text-center">
          <h2>PROFILE SETTINGS</h2>
        </div>
      <div class="vendor-form-wrap">
      <form role="form" action="" method="post" enctype="multipart/form-data" class="">
                    
                    <div class="card-body">

                 
                       @csrf
                        
                       {{password($errors,'Old Password*','old_password')}}
                       {{password($errors,'New Password*','password')}}
                       {{password($errors,'Confirm Password*','password_confirmation')}}  
                       

                        

                      
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer text-center">
                      <button type="submit" class="cstm-btn">Change Password</button>
                    </div>
      </form>


      </div>
    </div>






      </div>
    </div>




@endsection