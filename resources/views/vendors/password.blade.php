@extends('layouts.vendor')
@section('vendorContent')



<div class="row">


   <h3>PROFILE SETTINGS</h3>

<div class="col-md-12">
 
  <form role="form" action="" method="post" enctype="multipart/form-data">
                <div class="card-body">


                   @csrf
                    
                   {{password($errors,'Old Password*','old_password')}}
                   {{password($errors,'New Password*','password')}}
                   {{password($errors,'Confirm Password*','password_confirmation')}}  
                   

                    

                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
 </form>


</div>






</div>




@endsection