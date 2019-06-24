  @extends('layout.user')
  @section('main')
  <script type="text/javascript">
      function updateCart(quty,id){
        $.get(
                '{{route('update-cart')}}',
                {quty:quty,id:id},
                function(){
                    location.reload();
                }
            );
      }
  </script>
 
     <div class="breadcrumb_container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">     
                            <nav>
                        <ul>
                            <li><a href="index.html">Home ></a></li>
                            <li>Cart</li>
                        </ul>
                    </nav>
                        </div>
                    </div> 
                </div>        
            </div>
            @if(Cart::count() >= 1)
            <div class="cart_main_area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">  
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="img-thumbnail">Image</th>
                                                <th class="product-name">Product</th>
                                                 <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                                <th class="product-remove">Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($items as $item)
                                            <tr>
                                                <td class="product-thumbnail"><img src="{{url('uploads/')}}/{{$item->options->img}}" alt=""></td>
                                                <td class="product-name"><a href="{{route('user_product_detail',['id'=>$item->id])}}">{{$item->name}}</a></td>
                                                <td class="product-price"><span class="amount">{{$item->price}} $</span></td>
                                                <td class="product-quantity">
                                                    <div class="quickview_plus_minus quick_cart">
                                                           <div class="quickview_plus_minus_inner">
                                                                   <input style="width: 70px" type="number" value="{{$item->qty}}" onchange="updateCart(this.value,'{{$item->rowId}}')" name="qty" >
                                                           </div> 
                                                        
                                                       </div> 
                                                   
                                                </td>
                                                <td class="product-subtotal">{{$item->price*$item->qty}} $</td>
                                                <td class="product-remove"><a href="{{route('delete-cart',['id'=>$item->rowId])}}">X</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                       
                                    </table>
                                </div>
                                <div class="row table-responsive_bottom">
                                    <div class="col-lg-7 col-sm-7 col-md-7">
                                       <div class="buttons-carts">
                                            <a href="{{route('user')}}">Continue Shopping</a>   
                                        </div>      
                                    </div> 
                                    <div class="col-lg-5 col-sm-5 col-md-5">
                                         <div class="cart_totals  text-right">
                                            <h2>Cart Totals</h2>
                                           
                                            <div class="order-total">
                                                <span><strong>Total</strong> </span>          
                                                <span><strong>{{$total}}$ </strong> </span>
                                            </div>
                                            <div class="wc-proceed-to-checkout">
                                                <a href="{{route('check-out')}}">Proceed to Checkout</a>
                                            </div>
                                         </div>    
                                    </div>    
                                </div>
                            </form>         
                        </div>    
                    </div>    
                </div>   
            </div>
            @else
            <h2  style="color: red; text-align: center; margin-top: 15px">Không có sản phẩm trong giỏ hàng</h2>
            @endif
              
                @stop