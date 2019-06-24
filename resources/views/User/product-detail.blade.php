  @extends('layout.user')
  @section('main')
  <div class="breadcrumb_container">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">     
                                <nav>
                            <ul>
                                <li>
                                    <a href="index.html">Home ></a>
                                </li>
                                <li>Product details </li>
                            </ul>
                        </nav>
                            </div>
                        </div> 
                    </div>        
                </div>
    
              <div class="table_primary_block pt-100">
                    <div class="container">   
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="product-flags">  
                                    <div class="tab-content">
                                      
                                        <div class="tab-pane fade show active" id="tabone" role="tabpanel" >
                                            <div class="product_tab_img">
                                                <a href="#"><img src="{{url('uploads/')}}/{{$product->img}}" alt=""></a>    
                                            </div>
                                        </div>
                                      
                                        <div class="tab-pane fade" id="tabtwo" role="tabpanel">
                                            <div class="product_tab_img">
                                                <a href="#"><img src="assets/img/cart/nav11.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tabthree" role="tabpanel">
                                            <div class="product_tab_img">
                                                <a href="#"><img src="assets/img/cart/nav13.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products_tab_button">    
                                        <ul class="nav product_navactive" role="tablist">
                                            <li  class="product_button_one">
                                                <a class="nav-link active"  data-toggle="tab" href="#tabone" role="tab" aria-controls="imgeone" aria-selected="false"><img src="assets/img/cart/nav.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-toggle="tab" href="#tabtwo" role="tab" aria-controls="imgetwo" aria-selected="false"><img src="assets/img/cart/nav1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-toggle="tab" href="#tabthree" role="tab" aria-controls="imgethree" aria-selected="false"><img src="assets/img/cart/nav2.jpg" alt=""></a>
                                            </li>
                                        </ul>
                                    </div>    
                                </div>  
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="product__details_content">
                                    <div class="demo_product">
                                        <h2>{{$product->name}}</h2> 
                                        
                                    </div>
                                    
                                    <div class="current_price">
                                        <span>{{$product->price}}$</span>    
                                    </div>
                                    <div class="product_information">
                                        <div id="product_description_short">
                                            {!!$product->content!!}
                                        </div>
                                        <div class="product_variants">
                                             <form action="{{route('add-cart',['id'=>$product->id])}}">
                                                
                                            <div class="quickview_plus_minus">
                                                <span class="control_label"><b>Quantity</b></span>
                                                <div class="quickview_plus_minus_inner">
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="1" name="qty" class="cart-plus-minus-box">
                                                    </div>
                                                    <div class="add_button">
                                                        <button type="submit"> Add to cart</button> 
                                                    </div>
                                                </div>    
                                            </div> 
                                             </form>
                                           
                                            <div class="social-sharing">
                                               <span>Share</span>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                </ul>    
                                            </div> 
                                            
                                        </div>
                                    </div>   
                                </div>
                            </div>   
                        </div>
                    </div>       
                </div>
                @stop