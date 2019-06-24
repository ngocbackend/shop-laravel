<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Auth;
	use App\Models\Admin;
	/**
	 * 
	 */
	class AuthController extends Controller
	{
		
		public function login()
		{
			return view('Admin.login');
		}

		public function post_login(Request $req)
		{
			$this->validate($req,[
				'email' => 'required|email',
				'password' => 'required'
			],[
				'email.required' => 'Email không được để trống',
				'email.email' => 'Email không đúng định dạng',
				'password.required' => 'Mật khẩu không được để trống'
			]);

			if (Auth::attempt($req->only('email','password'),$req->has('remember'))) {
				return redirect()->route('admin');
			}else{
				return back()->with('error','Email hoặc mật khẩu không đúng');
			}
		}

		public function register()
		{
			if (Auth::user()->group_name == 'giamdoc') {
				return view('Admin.register');
			}else{
				return view('layout.error');
			}
		}

		public function post_register(Request $req)
		{
			$this->validate($req,[
				'name' => 'required',
				'email' => 'required|email|unique:admin',
				'phone' => 'required',
				'password' => 'required',
				'confirm_password' => 'required_with:password|same:password'
			],[
				'name.required' => 'Tên không được để trống',
				'email.required' => 'Email không được để trống',
				'email.email' => 'Email không đúng định dạng',
				'email.unique' => 'Email đã tồn tại',
				'phone.required' => 'Phone không được để trống',
				'password.required' => 'Mật khẩu không được để trống',
				'confirm_password.required_with' => 'Không được để trống trường này',
				'confirm_password.same' => 'Mật khẩu không trùng nhau '
			]);

			if (Admin::create([
				'name' => $req->name,
				'email' => $req->email,
				'phone' => $req->phone,
				'password' => bcrypt($req->password),
				'group_name' => $req->group_name
			])) {
				return redirect()->back()->with('success','Đăng ký thành công');
			}else{
				return redirect()->back()->with('error','Đăng ký thất bại');
			}

		}

		public function logout()
		{
			Auth::logout();
			return redirect()->route('login');
		}

		public function change()
		{
			return view('Admin.change');
		}

		public function post_change(Request $req)
		{
			$this->validate($req,[
				'old_pass' => 'required|check_old_password',
				'new_pass' => 'required',
				'confirm_pass' => 'required_with:new_pass|same:new_pass'
			],[
				'old_pass.required' => 'Nhập mật khẩu cũ',
				'old_pass.check_old_password' => 'Mật khẩu cũ không đúng',
				'new_pass.required' => 'Nhập mật khẩu mới',
				'confirm_pass.required_with' => 'Nhập lại mật khẩu mới',
				'confirm_pass.same' => 'Mật khẩu không trùng nhau'
			]);

			if (Auth::user()->update(['password' => bcrypt($req->new_pass)])) {
				return redirect()->back()->with('success','Đổi mật khẩu thành công');
			}else{
				return redirect()->back()->with('error','Đổi mật khẩu thất bại');
			}
		}
	}
 ?>