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
                            <form class="signUp-form" method="POST" action="{{ route('login') }}">

                                @csrf

                @if(Session::has('messages'))

                    <h3>{{Session::get('messages')}}</h3>

                @endif


                               @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif




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
                
                               <alert></alert>
                               <div class="form-links">
                                            <a class="forgot_password mb-3" routerLink="/password/forgot">Forgot Password?</a>
                                        <p> 
                                            Do not have a account please click to register as a
                                            <a class="forgot_password mb-3" routerLink="/register">User</a>
                                            or 
                                            <a class="forgot_password mb-3" routerLink="/vendor/register">Vendor</a>
                                        </p>
                                </div>
                                    <div class="btn-wrap">
                                            <button class="cstm-btn solid-btn">Login</button>
                                            
                                            

                                            @if (Route::has('password.request'))
                                                <a class="cstm-btn" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                           
                                        </div>
                            </form>
                        </div>                    
                </div>  
                </div>
                </div>
                </div>
</section>  


 
 
@endsection
