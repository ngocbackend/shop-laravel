  @extends('layout.user')
  @section('main')
    
                <!--Header start-->
                
                <!--Header end-->
                
                <!--Slider start-->
                <div class="slider_area">
                    <div class="slider_list  owl-carousel">
                        <div class="single_slide" style="background-image: url({{url('/public')}}/assets/img/slider/1a.jpg);">
                            <div class="container">
                                <div class="row">   
                                    <div class="col-12">
                                        <div class="slider__content">
                                            <p>Exclusive Offer -10% Off This Week</p>
                                            <h2>Live <strong>healthy</strong> with a glass</h2>
                                            <h3>of <strong>fruit juice</strong> every day</h3>  
                                            <h6>Starting at<span>$42.99</span></h6>
                                            <div class="slider_btn">
                                                <a href="shop.html">Shopping now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_slide" style="background-image: url({{url('public/')}}/assets/img/slider/1b.jpg);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider__content">
                                            <p>Exclusive Offer -10% Off This Week</p>
                                            <h2>We <strong>provide</strong> the best</h2> 
                                            <h3> product <strong> for you </strong></h3>
                                            <h6>Starting at <span>$42.99</span></h6>
                                            <div class="slider_btn">
                                                <a href="shop.html">Shopping now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Slider end-->
                
                <!--Banner area start-->
                <div class="banner_area home1_banner mt-30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single_banner">
                                    <a href="#">
                                        <img src="https://shophangbay.com/wp-content/uploads/2017/06/banner-ivcom-04.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_banner">
                                    <a href="#">
                                        <img src="http://demo1.itgreen.vn/win_hlc/wp-content/uploads/2017/05/banner_1_954.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_banner banner_three">
                                    <a href="#">
                                        <img src="https://muabanruoungoai.com.vn/public/upload/files/banner%201000-402.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Banner area end-->
                
                <!--Features product area-->
              <div class="container">  
                <div class="features_product pt-90">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-12">
                                  <div class="section_title text-center">
                                      <h3>Sản phẩm nổi bật </h3>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="features_product_active owl-carousel">
                                @foreach($products as $product)
                                  <div class="col-lg-2">
                                      <div class="single__product">
                                          <div class="single_product__inner">
                                             
                                              <div class="product_img">
                                              <a href="{{route('user_product_detail',['id'=>$product->id])}}">
                                                  <img src="{{url('uploads/')}}/{{$product->img}}" alt="">
                                                  </a>
                                              </div>
                                              <div class="product__content text-center">
                                                  <div class="produc_desc_info">
                                                      <div class="product_title">
                                                          <h4><a href="{{route('user_product_detail',['id'=>$product->id])}}">{{$product->name}}</a></h4>
                                                      </div>
                                                      <div class="product_price">
                                                          <p>{{$product->price}}$</p>
                                                      </div>
                                                  </div>
                                                  <div class="product__hover">
                                                      <ul>
                                                          <li><a href="{{route('add-cart',['id'=>$product->id])}}"><i class="ion-android-cart"></i></a></li>
                                                         
                                                          <li><a href="{{route('user_product_detail',['id'=>$product->id])}}"><i class="ion-clipboard"></i></a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--Features product end-->
                  
                  <!--Shipping area start-->
                  
                  <!--Shipping area end-->
                  
                  
                  <!--shop product area start-->
                  
                  <!--shop product area end-->
                  
                                 <!--Banner area start-->
                  <div class="banner_area home1_banner2 pb-90">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="single_banner">
                                      <a href="#">
                                          <img src="assets/img/banner/big-1.jpg" alt="">
                                      </a>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="single_banner">
                                      <a href="#">
                                          <img src="assets/img/banner/big-2.jpg" alt="">
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--Banner area end-->
                  
                  <!--Recommended product area start-->
                  
                  <!--Recommended product area end-->
                  
                  
                  
                  <!--New product area-->
                  <div class="new_product">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-12">
                                  <div class="section_title space_2 text-left">
                                      <h3>Sản phẩm mới nhất</h3>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="features_product_active owl-carousel">
                                @foreach($pro_new as $pro)
                                  <div class="col-lg-2">
                                      <div class="single__product">
                                          <div class="single_product__inner">
                                              <span class="new_badge">new</span>
                                              <div class="product_img">
                                              <a href="{{route('user_product_detail',['id'=>$pro->id])}}">
                                                  <img src="{{url('uploads/')}}/{{$pro->img}}" alt="">
                                                  </a>
                                              </div>
                                              <div class="product__content text-center">
                                                  <div class="produc_desc_info">
                                                      <div class="product_title">
                                                          <h4><a href="{{route('user_product_detail',['id'=>$pro->id])}}">{{$pro->name}}</a></h4>
                                                      </div>
                                                      <div class="product_price">
                                                          <p>{{$pro->price}}$</p>
                                                      </div>
                                                  </div>
                                                  <div class="product__hover">
                                                      <ul>
                                                          <li><a href="{{route('add-cart',['id'=>$pro->id])}}"><i class="ion-android-cart"></i></a></li>
                                                          
                                                          <li><a href="{{route('user_product_detail',['id'=>$pro->id])}}"><i class="ion-clipboard"></i></a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--new product end-->
                  
                  <!--Banner area start-->
                  <div class="banner_area banner_area-2 pb-90">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-3 col-md-4">
                                  <div class="single_banner">
                                      <a href="#">
                                          <img src="assets/img/banner/banner-4.jpg" alt="">
                                      </a>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-4">
                                  <div class="single_banner">
                                      <a href="#">
                                          <img src="assets/img/banner/banner-5.jpg" alt="">
                                      </a>
                                  </div>
                              </div>
                              <div class="col-lg-3 col-md-4">
                                  <div class="single_banner">
                                      <a href="#">
                                          <img src="assets/img/banner/banner-6.jpg" alt="">
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--Banner area end-->
                  
                  
                  <!--Best seller product -->
                  <div class="best_seller_product">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-12">
                                  <div class="section_title space_2 text-left">
                                      <h3> Sản phẩm bán chạy </h3>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-12">
                                  <div class="best_selling_product_list owl-carousel">
                                            @foreach($best_pro as $pro)
                                      <div class="best_selling_product">
                                          <div class="single_small_product mb-30">
                                              <div class="product_thumb">
                                                  <a href="{{route('user_product_detail',['id'=>$pro->id])}}">
                                                      <img src="{{url('uploads/')}}/{{$pro->img}}" alt="">
                                                  </a>
                                              </div>
                                              <div class="product_content">
                                                  <h4><a href="{{route('user_product_detail',['id'=>$pro->id])}}">{{$pro->name}}</a></h4>
                                                  <div class="product_ratting">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star-half-o"></i>
                                                      <i class="fa fa-star-o"></i>
                                                  </div>
                                                  <div class="product_price">
                                                      <span class="regular_price">{{$pro->price}}$</span>
                                                      <span class="old_price">{{$pro->sale_price}}$</span>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                      </div> 
                                              @endforeach
                                       
                                       
                                       
                                       
                                       
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--Best seller product  end-->
                   
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