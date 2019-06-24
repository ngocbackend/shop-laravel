<?php 
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Auth;

/**
 * 
 */
class AuthController extends Controller
{
	
	 public function login()
	 {
	 	return view('User.login');
	 }

	  public function post_login(Request $req)
	 {
	 	$this->validate($req,[
	 		'user_email' => 'required|email',
	 		'user_password' => 'required'
	 	],[
	 		'user_email.required' => 'Email không được để trống',
	 		'user_email.email' => 'Email không đúng định dạng',
	 		'user_password.required' => 'Mật khẩu không được để trống'
	 	]);

	 	if (Auth::guard('cus')->attempt(['email' => $req->user_email, 'password' => $req->user_password],$req->has('remember'))) {
	 		return redirect()->route('user');
	 	}else{
	 		return redirect()->back()->with('error','Đăng nhập thất bại');
	 	}
	 }

	 public function register()
	 {
	 	return view('User.register');
	 }

	 public function post_register(Request $req)
	 {
	 	$this->validate($req,[
	 		'name' => 'required',
	 		'email' => 'required|email',
	 		'phone' => 'required',
	 		'address' => 'required',
	 		'password' => 'required',
	 		'confirm_password' => 'required_with:password|same:password'
	 	],[
	 		'name.required' => 'Tên không được để trống',
	 		'email.required' => 'Email không được để trống',
	 		'email.email' => 'Email không đúng định dạng',
	 		'phone.required' => 'Phone không được để trống',
	 		'address.required' => 'Địa chỉ không được để trống',
	 		'password.required' => 'Mật khẩu không được để trống',
	 		'confirm_password.required_with' => 'Không được để trống trường này',
	 		'confirm_password.same' => 'Mật khẩu không trùng nhau'
	 	]);

	 	if (Users::create([
	 		'name' => $req->name,
	 		'email' => $req->email,
	 		'phone' => $req->phone,
	 		'address' => $req->address,
	 		'password' => bcrypt($req->password)
	 	])) {
	 		return redirect()->back()->with('success','Đăng ký thành công');
	 	}else{
	 		return redirect()->back()->with('error','Đăng ký thất bại');
	 	}
	 }

	 public function logout()
	 {
	 	Auth::guard('cus')->logout();
	 	return redirect()->route('user_login');
	 }
}


 ?>