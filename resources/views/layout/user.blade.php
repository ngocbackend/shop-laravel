<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from demo.devitems.com/organicfood-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 03:26:55 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>OrganicFood - eCommerce Bootstrap4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{url('public/assets')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{url('public/assets')}}/css/animate.css">
        <link rel="stylesheet" href="{{url('public/assets')}}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{url('public/assets')}}/css/chosen.min.css">
        <link rel="stylesheet" href="{{url('public/assets')}}/css/ionicons.min.css">
        <link rel="stylesheet" href="{{url('public/assets')}}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{url('public/assets')}}/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="{{url('public/assets')}}/css/meanmenu.min.css">
        <link rel="stylesheet" href="{{url('public/assets')}}/css/bundle.css">
        <link rel="stylesheet" href="{{url('public/assets')}}/css/style.css">
        <link rel="stylesheet" href="{{url('public/assets')}}/css/responsive.css">
        <script src="{{url('public/assets')}}/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <div class="organic_food_wrapper">
      <header class="header sticky-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="header_wrapper_inner">
                                   
                                    <div class="logo col-xs-12">
                                        <a href="{{route('user')}}">
                                            <img src="{{url('public/')}}/assets/img/logo/logo.png" alt="">
                                        </a>
                                    </div>
                                    
                                    
                                    <div class="main_menu_inner">
                                      
                                        <div class="menu">
                                            <nav>
                                                <ul>
                                                    <li class="active"><a href="{{route('user')}}">Trang chủ </a>
                                                      
                                                    </li>
                                                    <li><a href="about.html">Danh mục<i class="fa fa-angle-down"></i> </a> 
                                                          <ul class="sub_menu">
                                                            @foreach($cats as $cat)
                                                            <li><a href="{{route('user_category',['id'=>$cat->id])}}">{{$cat->name}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">giới thiệu</a>  </li>
                                                    <li><a href="blog.html">Review </a>
                                                    </li>
                                                    <li class="mega_parent"><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                                        <ul class="mega_menu">
                                                            <li class="mega_item">
                                                               <a class="mega_title" href="#">Column 1</a>
                                                               <ul>
                                                                  
                                                                   <li><a href="shop.html">Shop page</a></li>
                                                                   <li><a href="shop-right-sidebar.html">Shop Right sidebar</a></li>
                                                                   <li><a href="shop.html">shop Left Sidebar</a></li>
                                                                   <li><a href="product-details.html">product Details</a></li>
                                                                   <li><a href="my-account.html">My account</a></li>
                                                               </ul> 
                                                            </li> 
                                                            <li class="mega_item">
                                                               <a class="mega_title" href="#">Column 2</a>
                                                               <ul>
                                                                   <li><a href="wishlist.html">Wishlist</a></li>
                                                                   <li><a href="cart.html">Cart</a></li>
                                                                   <li><a href="checkout.html">Checkout</a></li>
                                                                   <li><a href="login.html">login</a></li>
                                                                   <li><a href="register.html">Register</a></li>
                                                               </ul> 
                                                            </li>
                                                            <li class="mega_item">
                                                               <a class="mega_title" href="#">Column 3</a>
                                                               <ul>
                                                                  
                                                                   <li><a href="about.html">About us</a></li>
                                                                   <li><a href="contact.html">Contact Us</a></li>
                                                                   <li><a href="blog.html">blog Page</a></li>
                                                                   <li><a href="blog-details.html">blog Details</a></li>
                                                                   <li><a href="404.html">Error pages</a></li>
                                                               </ul> 
                                                            </li>
                                                        </ul>    
                                                    </li>
                                                   
                                                 </ul>
                                            </nav>
                                        </div>
                                        
                                        <div class="mobile-menu d-lg-none">
                                            <nav>
                                                 <ul>
                                                    <li class="active"><a href="index.html">Home</a>
                                                        <ul>
                                                            <li><a href="index.html">Home Version 1</a></li>
                                                            <li><a href="index-2.html">Home Version 2</a></li>
                                                            <li><a href="index-3.html">Home Version 3</a></li>
                                                            <li><a href="index-4.html">Home Version 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="about.html">about us </a></li>
                                                    <li><a href="shop.html">shop</a>  </li>
                                                    <li><a href="blog.html">Blog </a>
                                                    </li>
                                                    <li><a href="#">Pages</a>
                                                        <ul>
                                                            <li>
                                                               <a href="#">Column 1</a>
                                                               <ul>
                                                                  
                                                                   <li><a href="shop.html">Shop page</a></li>
                                                                   <li><a href="shop-right-sidebar.html">Shop Right sidebar</a></li>
                                                                   <li><a href="shop.html">shop Left Sidebar</a></li>
                                                                   <li><a href="product-details.html">product Details</a></li>
                                                                   <li><a href="my-account.html">My account</a></li>
                                                               </ul> 
                                                            </li> 
                                                            <li>
                                                               <a href="#">Column 2</a>
                                                               <ul>
                                                                   <li><a href="wishlist.html">Wishlist</a></li>
                                                                   <li><a href="cart.html">Cart</a></li>
                                                                   <li><a href="checkout.html">Checkout</a></li>
                                                                   <li><a href="login.html">login</a></li>
                                                                   <li><a href="register.html">Register</a></li>
                                                               </ul> 
                                                            </li>
                                                            <li>
                                                               <a href="#">Column 3</a>
                                                               <ul>
                                                                  
                                                                   <li><a href="about.html">About us</a></li>
                                                                   <li><a href="contact.html">Contact Us</a></li>
                                                                   <li><a href="blog.html">blog Page</a></li>
                                                                   <li><a href="blog-details.html">blog Details</a></li>
                                                                   <li><a href="404.html">Error pages</a></li>
                                                               </ul> 
                                                            </li>
                                                        </ul>    
                                                    </li>
                                                    <li><a href="#">vegetable</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="header_right_info d-flex">
                                        <div class="search_box">
                                            <div class="search_inner">
                                                <form action="{{route('user_product_search')}}" method="get">
                                                    <input type="text" name="search" placeholder="Nhập tên sản phẩm">
                                                    <button type="submit"><i class="ion-ios-search"></i></button>
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                          
                                        </div>
                                        <div>
                                          <ul>
                                            @if(Auth::guard('cus')->check())
                                            <li>{{Auth::guard('cus')->user()->name}}</li>
                                            @endif
                                          </ul>
                                        </div>

                                        <div class="mini__cart">
                                            <div class="mini_cart_inner">
                                                <div class="cart_icon">
                                                    <a href="{{route('view-cart')}}">
                                                        <span class="cart_icon_inner">
                                                            <i class="ion-android-cart"></i>
                                                            <span class="cart_count">{{Cart::count()}}</span>
                                                        </span>
                                                        <span class="item_total">{{Cart::total()}}$</span>
                                                    </a>
                                                </div>
                                                <!--Mini Cart Box-->
                                                <div class="mini_cart_box cart_box_one">
                                                  @if($cart->count() != 0)
                                                  @foreach($cart as $ca)
                                                    <div class="mini_cart_item">
                                                        <div class="mini_cart_img">
                                                            <a href="#">
                                                                <img src="{{url('uploads')}}/{{$ca->options->img}}" alt="">
                                                                <span class="cart_count">{{$ca->qty}}</span>
                                                            </a>
                                                        </div>
                                                        <div class="cart_info">
                                                            <h5><a href="{{route('user_product_detail',['id'=>$ca->id])}}">{{$ca->name}}</a></h5>
                                                            <span class="cart_price">{{$ca->price}}$</span>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a href="{{route('delete-cart',['id'=>$ca->rowId])}}"><i class="zmdi zmdi-delete"></i></a>
                                                        </div>
                                                    </div>
                                                   @endforeach
                                                    
                                                    <div class="price_content">
                                                       
                                                        <div class="cart-total-price">
                                                          <span class="label">Total </span>
                                                          <span class="value">{{Cart::total()}}$</span>
                                                        </div>
                                                    </div>
                                                <div class="min_cart_checkout">
                                                        <a href="{{route('view-cart')}}">Cart</a>
                                                    </div>
                                                    @else
                                                    <div class="text-center">
                                                      <img width="100" src="{{url('public/')}}/assets/img/cart/icon.png" alt="">
                                                    </div>
                                                    <h4 style="text-align: center; padding-top: 10px">Chưa có sản phẩm</h4>
                                                @endif
                                                </div>
                                                <!--Mini Cart Box End -->
                                            </div>
                                        </div>
                                        <div class="header_account">
                                            <div class="account_inner">
                                                <a href="#"><i class="ion-gear-b"></i></a>
                                            </div>
                                            <div class="content-setting-dropdown">
                        <div class="language-selector-wrapper">
                          
                          <div class="user_info_top text-center">
                            <ul>
                              @if(Auth::guard('cus')->check())
                              <li><a href="{{route('my-account')}}">my account</a></li>
                              <li><a href="{{route('check-out')}}">Checkout</a></li>
                              <li><a href="{{route('user_logout')}}">Logout</a></li>
                              @else
                                <li><a href="{{route('user_login')}}">Sign in</a></li>
                                <li><a href="{{route('user_register')}}">Register</a></li>
                              @endif
                            </ul>
                          </div>
                        </div>
                      </div>
                                        </div>
                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            <!-- Add your site or application content here -->
            
            <!--organicfood wrapper start--> 
            @if(Session::has('success'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Title!</strong>{{Session::get('success')}}
              </div>
            @endif
            @if(Session::has('error'))
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Title!</strong> {{Session::get('error')}}
              </div>
            @endif
         @yield('main')
                <!--Brand logo end-->   
                
                <!-- footer start -->
                <footer class="footer pt-90">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-12 col-xs-12">
                                <!--Single Footer-->
                                <div class="single_footer widget">
                                    <div class="single_footer_widget_inner">
                                        <div class="footer_logo">
                                            <a href="#"><img src="assets/img/logo/logo_footer.png" alt=""></a>
                                        </div>
                                        <div class="footer_content">
                                            <p>Address: 123 Main Street, Anytown, CA 12345 - USA.</p>
                                            <p>Phone: +(000) 800 456 789</p>
                                            <p>Email: Contact@posthemes.com</p>
                                        </div>
                                        <div class="footer_social">
                                            <h4>Get in Touch:</h4>
                                            <div class="footer_social_icon">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-youtube"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Footer-->
                            </div>
                            <div class="col-lg-6 col-md-12 col-xs-12">
                                <div class="footer_menu_list d-flex justify-content-between">
                                    <!--Single Footer-->
                                    <div class="single_footer widget">
                                        <div class="single_footer_widget_inner">   
                                            <div class="footer_title">
                                                <h2>Products</h2>
                                            </div>
                                            <div class="footer_menu">
                                                <ul>
                                                    <li><a href="#">Prices drop</a></li>
                                                    <li><a href="#"> New products</a></li>
                                                    <li><a href="#"> Best sales</a></li>
                                                    <li><a href="#"> Contact us</a></li>
                                                    <li><a href="#"> My account</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single footer end-->   
                                    <!--Single footer start-->   
                                    <div class="single_footer widget">
                                        <div class="single_footer_widget_inner">   
                                            <div class="footer_title">
                                                <h2>Login</h2>
                                            </div>
                                            <div class="footer_menu">
                                                <ul>
                                                    <li><a href="#">Sitemap</a></li>
                                                    <li><a href="#"> Stores</a></li>
                                                    <li><a href="#"> Login</a></li>
                                                    <li><a href="#"> Contact us</a></li>
                                                    <li><a href="#"> My account</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Footer end-->
                                    <!--Single footer start-->   
                                    <div class="single_footer widget">
                                        <div class="single_footer_widget_inner">   
                                            <div class="footer_title">
                                                <h2> Your account </h2>
                                            </div>
                                            <div class="footer_menu">
                                                <ul>
                                                    <li><a href="#">Personal info</a></li>
                                                    <li><a href="#"> Orders</a></li>
                                                    <li><a href="#"> Login</a></li>
                                                    <li><a href="#"> Credit slips</a></li>
                                                    <li><a href="#"> Addresses</a></li>
                                                </ul> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Footer end-->
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 col-xs-12">
                                <div class="footer_title">
                                    <h2> Join Our Newsletter Now </h2>
                                </div>
                                <div class="footer_news_letter">
                                    <p>Get E-mail updates about our latest shop and special offers.</p>
                                    <div class="newsletter_form">
                                        <form action="#">
                                            <input type="email" required placeholder="Your Email Address">
                                            <input type="submit" value="Subscribe">
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="copyright">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="copyright_text">
                                        <p>Copyright 2018 <a href="#">Organicfood</a>. All Rights Reserved</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="footer_mastercard text-right">
                                        <a href="#"><img src="assets/img/brand/payment.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </footer>
                
                <!-- footer end -->
                
                
                
            </div>
           
           
           
           
             <!-- modal area start --> 
           <div class="modal fade" id="my_modal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-body shop">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <div class="product-flags madal">  
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="imgeone" role="tabpanel" >
                                                    <div class="product_tab_img">
                                                        <a href="#"><img src="assets/img/cart/nav12.jpg" alt=""></a>    
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="imgetwo" role="tabpanel">
                                                    <div class="product_tab_img">
                                                        <a href="#"><img src="assets/img/cart/nav11.jpg" alt=""></a>    
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="imgethree" role="tabpanel">
                                                    <div class="product_tab_img">
                                                        <a href="#"><img src="assets/img/cart/nav13.jpg" alt=""></a>    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="products_tab_button  modals">    
                                                <ul class="nav product_navactive" role="tablist">
                                                    <li >
                                                        <a class="nav-link active" data-toggle="tab" href="#imgeone" role="tab" aria-controls="imgeone" aria-selected="false"><img src="assets/img/cart/nav.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                         <a class="nav-link" data-toggle="tab" href="#imgetwo" role="tab" aria-controls="imgetwo" aria-selected="false"><img src="assets/img/cart/nav1.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                       <a class="nav-link button_three" data-toggle="tab" href="#imgethree" role="tab" aria-controls="imgethree" aria-selected="false"><img src="assets/img/cart/nav2.jpg" alt=""></a>
                                                    </li>
                                                </ul>
                                            </div>    
                                        </div>  
                                    </div> 
                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                        <div class="modal_right">
                                            <div class="shop_reviews">
                                                <div class="demo_product">
                                                    <h2>Sprite Yoga Straps1</h2> 
                                                </div>
                                                <div class="current_price">
                                                    <span class="regular">$64.99</span>    
                                                    <span class="regular_price" >$78.99</span>    
                                                </div>
                                                <div class="product_information product_modal">
                                                    <div id="product_modal_content">
                                                        <p>Short-sleeved blouse with feminine draped sleeve detail.</p>    
                                                    </div>
                                                    <div class="product_variants">
                                                        <div class="product_variants_item modal_item">
                                                            <span class="control_label">Size</span>
                                                            <select id="group_1">
                                                                <option value="1">S</option>
                                                                <option value="2" selected="selected">M</option>
                                                                <option value="3">L</option>
                                                            </select>    
                                                        </div>   
                                                        
                                                       <div class="quickview_plus_minus">
                                                            <span class="control_label">Quantity</span>
                                                            <div class="quickview_plus_minus_inner">
                                                                <div class="cart-plus-minus">
                                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                                </div>
                                                               <div class="add_button add_modal">
                                                                    <button type="submit"> Add to cart</button> 
                                                                </div>
                                                            </div>    
                                                        </div> 
                                                        
                                                        <div class="cart_description">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>    
                                                        </div> 
                                                    </div>
                                                </div>   
                                            </div>    
                                        </div>    
                                    </div>    
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="social-share">
                                            <h3>Share this product</h3>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>    
                                        </div>    
                                    </div>    
                                </div>     
                            </div>
                        </div>    
                    </div>
                </div>
            </div> 
            
    
          <!-- modal area end --> 
           
           
           
            
    
            
  
		
		
		<!-- all js here -->
        <script src="{{url('public/assets')}}/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="{{url('public/assets')}}/js/popper.js"></script>
        <script src="{{url('public/assets')}}/js/bootstrap.min.js"></script>
        <script src="{{url('public/assets')}}/js/jquery.meanmenu.min.js"></script>
        <script src="{{url('public/assets')}}/js/isotope.pkgd.min.js"></script>
        <script src="{{url('public/assets')}}/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{url('public/assets')}}/js/jquery.counterup.min.js"></script>
        <script src="{{url('public/assets')}}/js/waypoints.min.js"></script>
        <script src="{{url('public/assets')}}/js/ajax-mail.js"></script>
        <script src="{{url('public/assets')}}/js/owl.carousel.min.js"></script>
        <script src="{{url('public/assets')}}/js/plugins.js"></script>
        <script src="{{url('public/assets')}}/js/main.js"></script>
    </body>

<!-- Mirrored from demo.devitems.com/organicfood-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 03:27:50 GMT -->
</html>
