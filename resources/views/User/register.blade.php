@extends('layout.user')
@section('main')
  <div class="breadcrumb_container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">     
                            <nav>
                        <ul>
                            <li><a href="#">Home</a> ></li>
                            <li>Register</li>
                        </ul>
                    </nav>
                        </div>
                    </div> 
                </div>        
            </div>
            
 <div class="page_login_section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="register_page_form">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <div class="input_text">
                                                <label for="R_N">First Name <span>*</span></label>
                                                <input name="name" id="R_N" type="text" value="{{old('name')}}"> 
                                            </div>  
                                         @if($errors->has('name'))
                                         <p style="color: red">{{$errors->first('name')}}</p>
                                         @endif
                                        </div>
                                    
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="input_text">
                                                <label for="R_N4">Email Address <span>*</span></label>
                                                <input name="email" id="R_N4" type="text" value="{{old('email')}}"> 
                                            </div>  
                                             @if($errors->has('email'))
                                         <p style="color: red">{{$errors->first('email')}}</p>
                                         @endif 
                                        </div>
                                         <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="input_text">
                                                <label for="R_N5">Phone<span>*</span></label>
                                                <input name="phone" id="R_N5" type="text" value="{{old('phone')}}">  
                                            </div>  
                                             @if($errors->has('phone'))
                                         <p style="color: red">{{$errors->first('phone')}}</p>
                                         @endif
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="input_text">
                                                <label for="R_N7">Address<span>*</span></label>
                                                <textarea name="address" placeholder="Street address" type="text" value="{{old('address')}}" ></textarea>
                                                  
                                            </div>
                                             @if($errors->has('address'))
                                         <p style="color: red">{{$errors->first('address')}}</p>
                                         @endif
                                        </div> 
                                         
                                         
                                        <div class="col-12">
                                            <div class="input_text">
                                                <label for="R_N11">Account password<span>*</span></label>
                                                <input name="password" id="R_N11" type="password" value="{{old('password')}}" >    
                                            </div>
                                             @if($errors->has('password'))
                                         <p style="color: red">{{$errors->first('password')}}</p>
                                         @endif
                                        </div>
                                        <div class="col-12">
                                            <div class="input_text">
                                                <label for="R_N12">Confirm password<span>*</span></label>
                                                <input name="confirm_password" id="R_N12" type="password"> 
                                            </div> 
                                                @if($errors->has('confirm_password'))
                                         <p style="color: red">{{$errors->first('confirm_password')}}</p>
                                         @endif
                                        </div>
                                       
                                        <div class="col-12">
                                            <div class="login_submit">
                                                <input value="register" type="submit">
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