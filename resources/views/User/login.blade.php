@extends('layout.user')
@section('main')
  <div class="breadcrumb_container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">     
                            <nav>
                        <ul>
                            <li><a href="#">Home</a> ></li>
                            <li>login</li>
                        </ul>
                    </nav>
                        </div>
                    </div> 
                </div>        
            </div>
            
 <div class="page_login_section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                            <div class="login_page_form">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input_text">
                                            	<label for="name">Username or email <span>*</span></label>
                                            	<input name="user_email" id="name" type="text" value="{{old('user_email')}}">    
                                            </div>
                                        </div>
                                        @if($errors->has('user_email'))
                                        <p style="color: red">{{$errors->first('user_email')}}</p>
                                        @endif
                                         <div class="col-12">
                                            <div class="input_text">
												<label for="password">Passwords <span>*</span></label>
												<input name="user_password" id="password" type="password"> 
											</div>   
                                        </div>
                                         @if($errors->has('user_password'))
                                        <p style="color: red">{{$errors->first('user_password')}}</p>
                                        @endif
                                        <div class="col-12">
                                            <div class="login_submit">
                                            	<input class="inline" value="Login" name="Login" type="submit">
												<label class="inline" for="rememberme">
													<input name="remember" id="rememberme" type="checkbox">
													Remember me	
												</label>   
                                            </div> 
                                        </div>      
                                    </div>
                                    @csrf
                                </form>    
                            </div>    
                        </div>    
                    </div>    
                </div>  
            </div>   
            @endsection