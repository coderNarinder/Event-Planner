@extends('layouts.app')

@section('content')








<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

<div class="container">
    <div class="row profile">






                  @if(Auth::user()->services->count() > 0) 
                          
                            
                                @include('vendors.sidebar')
                                
                            <div class="col-md-9">
                                <div class="profile-content">
                                   @include('vendors.errors')
                                   @yield('vendorContent')
                                </div>
                            </div>

                    @else

                       <div class="col-md-12">
                                <div class="profile-content">
                                   @include('vendors.errors')
                                   @yield('vendorContent')
                                </div>
                            </div>


                    @endif





        
    </div>
</div>



@endsection

@section('scripts')


   
@endsection