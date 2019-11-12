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
              <li class="breadcrumb-item "><a href="{{ route($addLink) }}">View</a></li>
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



<div class="col-md-6">

  <form role="form" method="post" action="{{url(route('store_coupons'))}}" enctype="multipart/form-data">
                <div class="card-body">


                   @csrf
                  

                   {{textbox($errors,'Coupon Code*','coupon')}}
                   {{selectsimple($errors,'Discount Type','discount_type',['1'=>'Percent','2'=>'Fixed Discount'])}}
                   {{selectsimple($errors,'Coupon For','coupon_for',['1'=>'Selected Users','2'=>'For All User'])}}
                   {{textnumber($errors,'Discount*','discount')}}
                   {{textnumber($errors,'Apply on minimum amount*','min_cart_total')}}
                   {{textnumber($errors,'Maximum Discount Amount*','max_discount')}}
                   <!-- {{textnumber($errors,'Usage Time*','usage_time')}} -->
                   {{DateBox($errors,'Expire Date','expire_date')}}

                   {{textarea($errors,'Description','description')}}

                    
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

 


@endsection


 
