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
              <li class="breadcrumb-item active"><a href="{{ url(route('admin_dashboard')) }}">Dashboard</a></li>
             
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


       
 
            <div class="card-body">

              @include('admin.error_message')

<div class="row">

<div class="col-md-6">
<h3>Profile Image</h3>
  <form role="form" action="{{url(route('post_admin_settings'))}}" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  @csrf
                   <div class="profile-image">
                         <input type="file" name="image" class="form-control" required="">
                         @if(\Auth::user()->image !="")
                         <img src="<?= \Auth::user()->image ?>">
                         @endif

                   </div>
                 
                    

                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Change Profile Image</button>
                </div>
 </form>


</div>


<div class="col-md-6">
<h3>Password Settings</h3>
  <form role="form" action="{{url(route('post_admin_password_settings'))}}" method="post" enctype="multipart/form-data">
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
