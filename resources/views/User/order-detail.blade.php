  @extends('layout.user')
  @section('main')
  
 
     <div class="breadcrumb_container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">     
                            <nav>
                        <ul>
                            <li><a href="index.html">Home ></a></li>
                            <li>My Account</li>
                        </ul>
                    </nav>
                        </div>
                    </div> 
                </div>        
            </div>
        <section class="main-content-area my-account ptb-100">
                <div class="container">
                    <div class="organic-table-area table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Img</th>
                                                        <th>Product</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                        <th>Total</th>                
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($orderdetail as  $order )
                                                    <tr>
                                                        <td>
                                                            <img src="{{url('uploads')}}/{{$order->pro->img}}" width="100">
                                                        </td>
                                                        <td>{{$order->pro->name}}</td>
                                                        <td><span class="success">{{$order->price}}$</span></td>
                                                        <td>{{$order->quantity}}</td>
                                                        <td>{{$order->price*$order->quantity}}$</td>
                                                    </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                </div>          
            </section>
              
                @stop