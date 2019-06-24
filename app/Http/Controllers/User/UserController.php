<?php 
	namespace App\Http\Controllers\User;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\Product;
	use App\Models\Category;
	use App\Models\Orders;
	use App\Models\OrdersDetail;
	use Cart;
	use Auth;
	use Mail;

/**
 * 
 */
class UserController extends Controller
{
	 public function index()
	{
		return view('User.index',[
			'products' => Product::all(),
			'pro_new' => Product::orderBy('id','desc')->take(4)->get(),
			'best_pro' => Product::with('sale')->get()
		]);
	}

	public function category($id)
	{
		return view('User.category',[
			'products' => Product::where('category_id',$id)->get(),
			'cat' => Category::where('id',$id)->first()
		]);
	}

	public function product_detail($id)
	{
		return view('User.product-detail',[
			'product' => Product::where('id',$id)->first()
		]);
	}

	public function product_search(Request $req)
	{
		return view('User.product-search',[
			'products' => Product::where('name','like','%'.$req->search.'%')->get(),
			'search' => $req->search
		]);
	}

	public function view_cart()
	{
		$data['items'] = Cart::content();
		$data['total'] = Cart::total();
		return view('User.view-cart',$data);
	}

	public function add_cart(Request $req, $id)
	{
		$product = Product::find($id);
		$qty = $req->qty;
		if ($qty>1) {
			Cart::add(['id' => $id, 'name' => $product->name, 'qty' => $qty, 'price' => $product->price, 'options' => ['img' => $product->img]]);
		}else{

		Cart::add(['id' => $id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price, 'options' => ['img' => $product->img]]);
		}
		return back();

	}

	public function delete_cart($id)
	{
		Cart::remove($id);
		return back();
	}

	public function update_cart(Request $req)
	{
		
		 Cart::update($req->id,$req->quty);

	}

	public function order()
	{
		$data['items'] = Cart::content();
		if (Auth::guard('cus')->check()) {
		   
		   if (Cart::count() == 0) {
			return view('layout.error');
		   }
		    return view('User.check-out',$data);
		}
		else{
			return redirect()->route('user_login');
		}
	}

	public function post_order(Request $req)
	{
		
		$this->validate($req,[
			'email_user' => 'required|email',
			'name_user' => 'required',
			'phone_user' => 'required',
			'address_user' => 'required'
		],[
			'email_user.required' => 'Email không được để trống',
			'email_user.email' => 'Email không đúng định dạng',
			'name_user.required' => 'Tên không được để trống',
			'phone_user.required' => 'Số điện thoại không được để trống',
			'address_user.required' => 'Địa chỉ không được để trống'
		]);
		$data = [];
		

		$order = Orders::create([
			'email' => $req->email_user,
			'name' => $req->name_user,
			'phone' => $req->phone_user,
			'address' => $req->address_user,
			'users_id' => $req->user_id
		]);
		if($order) {
			$order_id = $order->id;
			$cart =  Cart::content();
			foreach($cart as $item) {
				$data[] = [
				'orders_id' => $order_id,
				'product_id' => $item->id,
				'quantity' => $item->qty,
				'price' => $item->price
			  ];
			}

			if($data) {
				if (OrdersDetail::insert($data)) {
					$d['info'] = Orders::where('users_id',Auth::guard('cus')->id())->first();
					$d['cart'] = Cart::content();
					Mail::send('User.email',$d, function ($message){
						$message->from('ngocvinhphu@gmail.com', 'NgocVu');
						$message->to(Auth::guard('cus')->user()->email, Auth::guard('cus')->user()->name);
						$message->cc('hangpham1973@gmail.com', 'HangPham');
						$message->subject('Xác nhận hóa đơn mua hàng');
					});
					$cart = Cart::destroy();
					return redirect()->route('my-account')->with('success','Đặt hàng thành công');
					}else{
						return redirect()->back()->with('error','Lỗi đặt hàng');
					}
				}
			}
		}


		public function my_account()
		{
			if (Auth::guard('cus')->check()) {
				return view('User.my-account',[
					'orders' => Orders::where('users_id',Auth::guard('cus')->id())->get()
				]);
			}else{
				return redirect()->route('user_login');
			}
		}

		public function order_detail($id)
		{
			if (Auth::guard('cus')->check()) {
				return view('User.order-detail',[ 
					'orderdetail' => OrdersDetail::where('orders_id',$id)->get()
				]);
			}else{
				return redirect()->route('user_login');
			}
		}
	}
	

	
 ?>