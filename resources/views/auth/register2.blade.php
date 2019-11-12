@extends('layouts.home')

@section('content')








<!-- <app-header></app-header> -->
<section class="log-sign-banner" style="background:url('/frontend/images/banner-bg.png');">
    <div class="container">
            <div class="page-title text-center">
                     <h1>Register As a Vendor</h1>
                </div>
            </div>    
        </section>
        <section class="form-sec">
                <div class="container">         
                  <div class="signUp-form-wrap mr-top sec-card">  
                        <div class="row no-gutters">          
                                 <div class="col-lg-6">
                                    <figure class="form-img-wrap">
                                        <img src="/frontend/images/vendor-reg-img.png">
                                        <figcaption class="overlay-text">
                                                <h1>Welcome</h1>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse scelerisque turpis in lacus feugiat tristique</p>
                                            </figcaption>
                                    </figure>
                                 </div>
                            <div class="col-lg-6">
                            <form class="signUp-form" action="{{url(route('ajax_register'))}}" method="POST"  id="registerForm">
                              @csrf
                              <input type="hidden" name="type" value="1">
                               <div class="row">
                                   <div class="col-lg-12">                          
                                       <div class="form-group">
                                           <input type="text" name="first_name" formControlName="firstName" placeholder="First Name" class="form-control" />
                                           <span class="input-icon"><i class="fas fa-user"></i></span>
                                       </div>                              
                                   </div>
                                   <div class="col-lg-12">                          
                                       <div class="form-group">
                                           <input type="text" name="last_name" formControlName="lastName" placeholder="Last Name" class="form-control"  />
                                              <span class="input-icon"><i class="fas fa-user"></i></span>
                                            
                                       </div>                              
                                   </div>
                
                                  
                
                                   <div class="col-lg-12">                          
                                       <div class="form-group">
                                           
                                           <input type="text" name="email" formControlName="email" placeholder="Email Id" class="form-control"  />
                                           <span class="input-icon"><i class="fas fa-envelope"></i></span>
                                          
                                       </div>                              
                                   </div>
                
                                   <div class="col-lg-12">
                                       <div class="form-group">
                                        <input type="password" name="password" formControlName="password" placeholder="Password" id="password" class="form-control"  />
                                        <span class="input-icon"><i class="fas fa-lock"></i></span>
                                        
                                       </div>
                                   </div>
                
                                   <div class="col-lg-12">
                                    <div class="form-group">
                                     <input type="password" name="password_confirmation" formControlName="confirm_password"  placeholder="Confirm Password" class="form-control" />
                                     <span class="input-icon"><i class="fas fa-lock"></i></span>
                                    
                                    </div>
                                </div>
                               </div>
                
                               
                                 
                                    <div class="form-group btn-wrap">
                                        <button class="cstm-btn solid-btn register-Submit">Register</button>
                                        <!-- <a routerLink="/login" class="cstm-btn">Login</a> -->
                                        <img  class="pl-3 loading hide" src="{{url('/images/small-loader.gif')}}" style="display: none;" />

                                        <div class="messages">
                                        </div>
                                    </div>
                                    
                            </form>
                        </div>
                </div>
        </div> 
        </div>   
</section>

@endsection


@section('scripts')

<script type="text/javascript" src="{{url('/frontend/js/register.js')}}"></script>

@endsection

