@extends('layouts.vendor2')

@section('content')
 
 
                        @if(Auth::user()->services->count() > 0) 
                                
                                  
                                      @include('vendors.sidebar')
                                      
                                 
                                         @include('vendors.errors')
                                         @yield('vendorContent')
                                    

                          @else

                            
                                         @include('vendors.errors')
                                         @yield('vendorContent')
                                    
                          @endif


              
         


    
  



@endsection

@section('scripts')


   
@endsection