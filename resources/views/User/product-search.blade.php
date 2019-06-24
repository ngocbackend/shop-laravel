  @extends('layout.user')
  @section('main')
    
                <!--Header start-->
                
                <!--Header end-->
                
                <!--Slider start-->
             
                <!--Slider end-->
                
                <!--Banner area start-->
             
                <!--Banner area end-->
                
                <!--Features product area-->
              <div class="container">  
                <div class="features_product pt-90">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-12">
                                  <div class="section_title text-center">
                                      <h3>Tìm kiếm với từ khóa <span style="color: green">{{$search}}</span></h3>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="features_product_active owl-carousel">
                                @foreach($products as $product)
                                  <div class="col-lg-2">
                                      <div class="single__product">
                                          <div class="single_product__inner">
                                              <span class="new_badge">new</span>
                                              <div class="product_img">
                                              <a href="#">
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
                
                  <!--Banner area end-->
                  
                  <!--Recommended product area start-->
                  
                  <!--Recommended product area end-->
                  
                  
                  
                  <!--New product area-->
                  
                  <!--new product end-->
                  
                  <!--Banner area start-->
                
                  <!--Banner area end-->
                  
                  
                  <!--Best seller product -->
                  
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