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
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Actions</th>                
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($orders as $k => $order )
                                                    <tr>
                                                        <td>{{$k+1}}</td>
                                                        <td>{{$order->created_at}}</td>
                                                        <td><span class="success">
                                                            @if($order->status == 0)
                                                            <span>Mới</span>
                                                            @elseif($order->status == 1)
                                                             <span>Đã xác nhận</span>
                                                              @elseif($order->status == 2)
                                                             <span>Đang chuyển</span>
                                                              @elseif($order->status == 3)
                                                             <span>Thành công</span>
                                                             @endif
                                                        </span></td>
                                                        <td>{{$order->total_amount()}}$</td>
                                                        <td><a href="{{route('order-detail',['id'=>$order->id])}}" style="color: blue">view</a></td>
                                                    </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                </div>          
            </section>

              
                @stop