  @extends('layout.user')
  @section('main')
    
            <div class="breadcrumb_container ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">     
                            <nav>
                        <ul>
                            <li>
                                <a href="index.html">Home ></a>
                            </li>
                            <li>checkout</li>
                        </ul>
                    </nav>
                        </div>
                    </div> 
                </div>        
            </div>

            <div class="Checkout_page_section">
                <div class="container">
                    <div class="row">
                       <div class="col-12">
                            <div class="customer-login mb-40">
                              
                                     
                            </div>   
                       </div>
                    </div>
                    <div class="checkout-form">
                         <form action="" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                    <h3>Chi Tiết Hóa Đơn</h3>
                                    <div class="row">
                                        <input type="hidden" name="user_id" value="{{Auth::guard('cus')->user()->id}}">
                                        <div class="col-12 mb-30">
                                            <label>Email <span>*</span></label>
                                            <input  type="text" name="email_user" value="{{Auth::guard('cus')->user()->email}}">     
                                        @if($errors->has('email_user'))
                                        <p style="color: red">{{$errors->first('email_user')}}</p>
                                        @endif
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <label for="b_email">Name <span>*</span></label>
                                            <input name="name_user" type="text" value="{{Auth::guard('cus')->user()->name}}">   
                                             @if($errors->has('name_user'))
                                        <p style="color: red">{{$errors->first('name_user')}}</p>
                                        @endif 
                                        </div> 
                                         <div class="col-lg-6 mb-30">
                                            <label>Phone   <span>*</span></label>
                                            <input  type="text" name="phone_user" value="{{Auth::guard('cus')->user()->phone}}"> 
                                              @if($errors->has('phone-user'))
                                        <p style="color: red">{{$errors->first('phone-user')}}</p>
                                        @endif   
                                        </div> 
                                        
                                        
                                        <div class="col-12">
                                            <div class="order-notes">
                                                 <label for="order_note">Address</label>
                                                <textarea name="address_user" >{{Auth::guard('cus')->user()->address}}</textarea>
                                                @if($errors->has('address_user'))
                                        <p style="color: red">{{$errors->first('address_user')}}</p>
                                        @endif   
                                            </div>    
                                        </div>                                        
                                    </div>
                                   
                            </div>
                            <div class="col-lg-6 col-md-6">
                               
                                <div class="order-wrapper">
                                    <h3>Đơn Hàng Của Bạn</h3>
                                    <div class="order-table table-responsive mb-30">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($items as $item)
                                                <tr>
                                                    <td class="product-name"> {{$item->name}} <strong> × {{$item->qty}}</strong></td>
                                                    <td class="amount">{{$item->price*$item->qty}}$</td>
                                                </tr>
                                              @endforeach
                                            </tbody>
                                            <tfoot>
                                              
                                                <tr>
                                                    <th>Order Total</th>
                                                    <td><strong>{{Cart::total()}}$</strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>    
                                    </div>
                                   
                                        
                                         
                                        
                                        <div class="order-button">
                                            <button type="submit">Đặt hàng</button> 
                                        </div>    
                                       
                                </div>  
                            </div>
                        </div> 
                        @csrf
                      </form>
                    </div>     
                </div>    
            </div>
                   
                  <!--Brand logo start-->  
                  <div class="brand_logo">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-12">
                                  <div class="brand_list_carousel owl-carousel">
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="assets/img/brand/1.png" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="assets/img/brand/2.png" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="assets/img/brand/3.png" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="assets/img/brand/4.png" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="assets/img/brand/5.png" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="assets/img/brand/1.png" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="assets/img/brand/2.png" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="assets/img/brand/3.png" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="assets/img/brand/4.png" alt="brand logo">
                                          </a>
                                      </div>
                                      <div class="single_brand_logo">
                                          <a href="#">
                                              <img src="assets/img/brand/5.png" alt="brand logo">
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div> </div>
                @stop