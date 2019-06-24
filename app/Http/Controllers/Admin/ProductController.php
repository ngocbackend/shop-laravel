<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Models\Category;
	use App\Models\Product;
	use App\Models\Image;

	/**
	 * 
	 */
	class ProductController extends Controller
	{
		public function list(Request $req)
		{
			$product = Product::paginate(5);
			if ($req->search) {
				$product = Product::where('name','like','%'.$req->search.'%')->paginate(5);
			}
			return view('Admin.product.index',[
				'product' => $product
			]);
		}

		public function add()
		{
			$cat = Category::where('parent',0)->get();
			$cate = Category::all();
			return view('Admin.product.add',[
				'cats' => $cat,
				'cate' => $cate
			]);
		}

		public function danhmuc($idgoc)
		{
			$cats = Category::where('parent',$idgoc)->get();
			foreach($cats as $cat)
			{
				echo "<option value='".$cat->id."'>".$cat->name."</option>";
			}
		}

		public function post_add(Request $req)
		{
			$this->validate($req,[
				'name' => 'required|unique:product',
				'price' => 'required',
				'img_upload' => 'mimes:jpg,jpeg,png,gif,bmp'
			],[
				'name.required' => 'Tên sản phẩm không được để trống',
				'name.unique' => 'Tên sản phẩm đã tồn tại',
				'price.required' => 'Giá sản phẩm không được để trống',
				'img_upload.mimes' => 'Ảnh có một trong các định dạng jpg,jpeg,png,gif,bmp'
			]);
			$img ='';
			if ($req->hasfile('img_upload')) {
				$file = $req->img_upload;
				$file->move(base_path('uploads'),$file->getClientOriginalName());
				$img = $file->getClientOriginalName();
			}
			$req->merge(['img' => $img]);
			if ($pro = Product::create($req->all())) {
				$product_id = $pro->id;
				foreach ($req->other_img as $other) {
					$other->move(base_path('uploads'),$other->getClientOriginalName());
					$other_name = $other->getClientOriginalName();
					Image::create([
						'product_id' => $product_id,
						'link_img' => $other_name
					]);
				}
			return redirect()->back()->with('success','Thêm sản phẩm thành công');
			}
			else{
				return redirect()->back()->with('error','Thêm sản phẩm thất bại');
			}
		}

		public function delete($id)
		{
			if (Product::where('id',$id)->delete()) {
				return redirect()->back()->with('success','Xóa sản phẩm thành công');
			}else{
				return redirect()->back()->with('error','Xóa sản phẩm thất bại');
			}
		}

		public function edit($id)
		{	
			$pro = Product::find($id);
			$id_dmc = Category::find($pro->category_id);
			$id_dmcha = Category::where('id','=',$id_dmc->parent)->get();
			$dmall = Category::where('parent',0)->get();
			$category = Category::whereNotIn('parent',[0])->get();
			return view('Admin.product.edit',[
				'product' => $pro,
				'cate' => $id_dmc,
				'cats' =>  $id_dmcha,
				'catsall' =>  $dmall,
				'category' => $category
			]);
		}

		public function post_edit($id,Request $req)
		{
			$model = Product::find($id);
			$this->validate($req,[
				'name' => 'required|unique:product,name,'.$id,
				'price' => 'required'
			],[
				'name.required' => 'Tên không được để trống',
				'name.unique' => 'Tên sản phẩm đã tồn tại',
				'price.required' => 'Giá sản phẩm không được để trống'
			]);
			$image = $model->img;
			if ($req->hasfile('img_upload')) {
				$file = $req->img_upload;
				$file->move(base_path('uploads'),$file->getClientOriginalName());
				$image = $file->getClientOriginalName();
			}
			$req->merge(['img' => $image]);
			if ($model->update($req->all())) {
				if ($req->hasfile('old_img')) {
					foreach ($req->old_img as $img_id => $value) {
						$value->move(base_path('uploads'),$value->getClientOriginalName());
						$value_name = $value->getClientOriginalName();
						Image::where('id',$img_id)->update([
							'link_img' => $value_name
						]);
					}
				}
			}
				return redirect()->back()->with('success','Sửa sản phẩm thành công');
		}

		
	}
 ?>
 