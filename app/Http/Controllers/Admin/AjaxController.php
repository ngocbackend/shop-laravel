<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Http\Response;
	use App\Models\Category;

	/**
	 * 
	 */
	class AjaxController extends Controller
	{
		public function delete_category(Request $req)
		{
			if ($req->ajax()) {
			 Category::destroy($req->id);
			return response(['id'=>$req->id]);
				
			}
			
	
		}
		
	}
 ?>