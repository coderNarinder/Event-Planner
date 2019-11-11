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
                           
                                  <form method="POST" action="{{ route('register') }}" class="signUp-form" >
                        @csrf

          <input type="hidden" name="type" value="1"> 
                               <div class="row">
                                   <div class="col-lg-12">                          
                                       <div class="form-group">
                                           <input type="text" name="first_name" required formControlName="firstName" placeholder="First Name" class="form-control"/>
                                           <span class="input-icon"><i class="fas fa-user"></i></span>

                                    @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                           
                                            
                                          
                                       </div>                              
                                   </div>
                                   <div class="col-lg-12">                          
                                       <div class="form-group">
                                           <input type="text" name="last_name" required formControlName="lastName" placeholder="Last Name" class="form-control"  />
                                            <span class="input-icon"><i class="fas fa-user"></i></span>
                                             @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                    @endif
                                            
                                       </div>                              
                                   </div>
                
                                   <!-- <div class="col-lg-12">  
                                                <div class="radio-btn-grp">
                                                    <div class="radio">
                                                        <input id="radio-1" formControlName="role" value="User" type="radio">
                                                        <label for="radio-1" class="radio-label">User</label>
                                                        </div>         
                                                        <div class="radio">
                                                            <input id="radio-2" formControlName="role" value="Vendor" type="radio">
                                                            <label for="radio-2" class="radio-label">Vendor</label>
                                                    </div>                                    
                                        </div>                              
                                    </div> -->
                
                                   <div class="col-lg-12">                          
                                       <div class="form-group">
                                           
                                           <input type="text" name="email" required formControlName="email" placeholder="Email Id" class="form-control"  />
                                                       <span class="input-icon"><i class="fas fa-envelope"></i></span>
                                                 @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                                      
                                       </div>                              
                                   </div>
                
                                   <div class="col-lg-12">
                                       <div class="form-group">
                                        <input type="password" name="password" required formControlName="password" placeholder="Password" class="form-control"  />
                                        <span class="input-icon"><i class="fas fa-lock"></i></span>
                                        
                                       </div>
                                   </div>
                
                                   <div class="col-lg-12">
                                    <div class="form-group">
                                     <input type="password" name="password_confirmation" required formControlName="confirm_password" placeholder="Confirm Password" class="form-control" />
                                     <span class="input-icon"><i class="fas fa-lock"></i></span>
                                     <div  class="invalid-feedback">
                                         
                                     </div>
                                    </div>
                                </div>
                               </div>
                
                               
                                 
                                    <div class="form-group btn-wrap">
                                        <button class="cstm-btn solid-btn">Register</button>
                                        <!-- <a routerLink="/login" class="cstm-btn">Login</a> -->
                                       <!--  <img  class="pl-3 hide" src="data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==" /> -->
                                    </div>
                                    
                            </form>
                        </div>
                </div>
        </div> 
        </div>   
</section>


























<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

          <input type="hidden" name="type" value="1">              

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
