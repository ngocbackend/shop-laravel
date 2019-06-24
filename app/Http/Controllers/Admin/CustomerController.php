<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\Users;

	/**
	 * 
	 */
	class CustomerController extends Controller
	{
		

		public function list_customer(Request $req)
		{
			$customer = Users::paginate(5);
			if ($req->search) {
				$customer = Users::where('name','like','%'.$req->search.'%')->paginate(5);
			}
			return view('Admin.customer.customer',[
				'customer' => $customer
			]);
		}

		public function delete_customer($id)
		{
			$cus = Users::find($id);
			$customer = Users::where('id',$id)->delete();
			if ($customer) {
				return redirect()->back()->with('success','Xóa khách hàng '. $cus->name. ' thành công');
			}else{
				return redirect()->back()->with('error','Xóa khách hàng '. $cus->name. ' thất bại');
			}
		}

		public function edit_customer($id)
		{
			return view('Admin.customer.edit',[
				'customer' => Users::find($id)
			]);
		}

		public function post_customer($id, Request $req)
		{
			$cus = Users::find($id);
			$this->validate($req,[
				'name' => 'required',
				'email' => 'required|email|unique:users,email,'.$id,
				'phone' => 'required|unique:users,phone,'.$id,
			],[
				'name.required' => 'Tên không được để trống',
				'email.required' => 'Email không được để trống',
				'email.unique' => 'Email đã tồn tại',
				'phone.required' => 'Phone không được để trống',
				'phone.unique' => 'Phone đã tồn tại'
			]);

			if (Users::find($id)->update($req->all())) {
				return redirect()->route('list_customer')->with('success','Sửa khách hàng '.$cus->name.' thành công');
			}else{
				return redirect()->back()->with('error','Sửa khách hàng '.$cus->name.' thất bại');
			}
		}
	}
 ?>