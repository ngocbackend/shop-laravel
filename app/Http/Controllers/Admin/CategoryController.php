<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\Category;
	use App\Models\Product;

	/**
	 * 
	 */
	class CategoryController extends Controller
	{
		

		public function add(Request $req)
		{
			$cats = Category::all();
			
			if ($req->search) {
				$cats = Category::where('name','like','%'.$req->search.'%')->get();
			}
			return view('Admin.category.index',[
				'cat' => $cats
			]);
		}

		public function post_add(Request $req)
		{
			$this->validate($req,[
				'name' => 'required|unique:category'
			],[
				'name.required' => 'Nhập tên danh mục',
				'name.unique' => 'Tên danh mục đã tồn tại'
			]);

			if (Category::create($req->all())) {
				return redirect()->back()->with('success','Thêm thành công');
			}else{
				return redirect()->back()->with('error','Lỗi thêm mới');
			}
		}

		public function delete_category($id)
		{
			 
			$model = Category::find($id);
			$pro = Product::where('category_id',$id)->count();
			if ($pro == 0) {
				Category::where('id',$id)->delete();
				return redirect()->back()->with('success','Xóa danh mục '.$model->name. ' thành công');
			}else{
				return redirect()->back()->with('error','Danh mục '.$model->name.' đã có sản phẩm');
			}
			
		}

		public function edit($id){
			$value = Category::find($id);
			$cats = Category::all() ;
			return view('Admin.category.edit',[
				'value' => $value,
				'cats' => $cats
			]);
		}

		public function post_edit($id,Request $req){
		
			$this->validate($req,[
				'name' => 'required|unique:category,name,'.$id,
			],[
				'name.required' => 'Tên danh mục không được để trống',
				'name.unique' => 'Tên danh mục đã tồn tại'
			]);
			if (Category::find($id)->update($req->all())) {
				return redirect()->route('category-add')->with('success','Sửa danh mục thành công');
			}else{
				return redirect()->back()->with('error','Sửa danh mục thất bại');
			}
		}
	}
 ?>