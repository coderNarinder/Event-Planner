@extends('layouts.home')

@section('content')












<section class="log-sign-banner" style="background:url('/frontend/images/banner-bg.png');">
    <div class="container">
        <div class="page-title text-center">
            <h1>Login</h1>
        </div>
    </div>    
</section> 
  <section class="form-sec">
      <div class="container">         
        <div class="signUp-form-wrap mr-top sec-card">                
                 <div class="form-card">
                    <div class="row no-gutters">          
                        <div class="col-lg-6">
                            <figure class="form-img-wrap">
                                <img src="/frontend/images/login-image.png">
                                <figcaption class="overlay-text">
                                    <h1>Welcome </h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse scelerisque turpis in lacus feugiat tristique</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-6">
                            <form class="signUp-form" id="loginForm" method="POST" action="{{ url(route('ajax_login')) }}">

                                @csrf

                                @if(Session::has('verified') && Session::get('status'))
                                {{Session::get('status')}}
                                @endif

                                @include('vendors.errors')

                               <div class="row">                  
                
                                   <div class="col-lg-12">                          
                                       <div class="form-group">
                                           
                                           <input type="text" formControlName="email" name="email" required="" placeholder="Email Id" class="form-control"  />
                                           <span class="input-icon"><i class="fas fa-envelope"></i></span>
                                           
                                       </div>                              
                                   </div>
                
                                   <div class="col-lg-12">
                                       <div class="form-group">
                                        <input type="password" name="password" required="" formControlName="password" placeholder="Password" class="form-control" />
                                        <span class="input-icon"><i class="fas fa-lock"></i></span>
                                       
                                       </div>
                                   </div>
                
                               </div>
                
                                
                               <div class="form-links">
                                           
                                        <p> 
                                            Do not have a account please click to register as a
                                            <a href="/register">User</a>
                                            or 
                                            <a href="/vendor/register">Vendor</a>
                                        </p>
                                </div>
                                    <div class="btn-wrap">
                                            <button class="cstm-btn solid-btn">Login</button>

                                             <img  class="pl-3 loading hide" src="{{url('/images/small-loader.gif')}}" style="display: none;" />
                                            @if (Route::has('password.request'))
                                                <a class="cstm-btn" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif

                                            <div class="messages"></div>
                                           
                                        </div>
                            </form>
                        </div>                    
                </div>  
                </div>
                </div>
                </div>
</section>  


 
 
@endsection



@section('scripts')

<script type="text/javascript" src="{{url('/frontend/js/register.js')}}"></script>

@endsection