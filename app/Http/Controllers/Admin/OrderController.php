<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\Orders;
	use App\Models\OrdersDetail;

	/**
	 * 
	 */
	class OrderController extends Controller
	{
		public function order()
		{
			$orders = Orders::orderBy('id','desc')->get();
			return view('Admin.order.order',[
				'orders' => $orders
			]);
		}

		public function update_order($id,Request $req)
		{
			Orders::find($id)->update(['status' => $req->status]);
			return redirect()->back();
		}

		public function order_detail($id)
		{
			$data['detail'] = OrdersDetail::where('orders_id',$id)->get();
			$data['od'] = Orders::find($id);
			return view('Admin.order.order-detail',$data);
		}


	}
 ?>