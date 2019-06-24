<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\Admin;

	/**
	 * 
	 */
	class AdminController extends Controller
	{
		public function index()
		{
			return view('Admin.index');
		}

		public function list_admin(Request $req)
		{
			$admin = Admin::paginate(5);
			if ($req->search) {
				$admin = Admin::where('name','like','%'.$req->search.'%')->paginate(5);
			}
			return view('Admin.admin.index',[
				'admin' => $admin
			]);
		}

		public function delete_admin($id)
		{
			$ad = Admin::find($id);
			$admin = Admin::where('id',$id)->delete();
			if ($admin) {
				return redirect()->back()->with('success','Xóa nhân viên '. $ad->name. ' thành công');
			}else{
				return redirect()->back()->with('error','Xóa nhân viên '. $ad->name. ' thất bại');
			}
		}

		public function edit_admin($id)
		{
			return view('Admin.admin.edit',[
				'admin' => Admin::find($id)
			]);
		}

		public function post_edit($id, Request $req)
		{
			$ad = Admin::find($id);
			$this->validate($req,[
				'name' => 'required',
				'email' => 'required|email|unique:admin,email,'.$id,
				'phone' => 'required|unique:admin,phone,'.$id,
			],[
				'name.required' => 'Tên không được để trống',
				'email.required' => 'Email không được để trống',
				'email.unique' => 'Email đã tồn tại',
				'phone.required' => 'Phone không được để trống',
				'phone.unique' => 'Phone đã tồn tại'
			]);

			if (Admin::find($id)->update($req->all())) {
				return redirect()->route('list_admin')->with('success','Sửa nhân viên '.$ad->name.' thành công');
			}else{
				return redirect()->back()->with('error','Sửa nhân viên '.$ad->name.' thất bại');
			}
		}
	}
 ?>