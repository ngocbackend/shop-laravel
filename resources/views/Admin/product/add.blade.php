@extends('layout.admin')
@section('title','Thêm sản phẩm')
@section('main')
<form action="" method="POST" enctype="multipart/form-data">
	
	<div class="col-md-6">
		<div class="form-group">
			<label for="">Tên sản phẩm</label>
			<input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm">
		</div>
		@if($errors->has('name'))
		<p style="color: red">{{$errors->first('name')}}</p>
		@endif
		<div class="form-group">
			<label for="">Slug</label>
			<input type="text" class="form-control" name="slug" id="slug" >
		</div>
		
		<div class="form-group">
			<label for="">Danh mục</label>
			<select name="category_id" id="con" class="form-control" required>
				@foreach($cate as $cat)
				@if($cat->parent != 0)
				<option value="{{$cat->id}}">{{$cat->name}}</option>
				@endif
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label for="">Ảnh</label>
			<input type="file" class="form-control" name="img_upload">
		</div>
		@if($errors->has('img_upload'))
		<p style="color: red">{{$errors->first('img_upload')}}</p>
		@endif
		<div class="form-group">
			<label for="">Ảnh khác</label>
			<input type="file" class="form-control" name="other_img[]" id="" multiple>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="">Giá</label>
			<input type="text" class="form-control" name="price" id="" placeholder="Input field">
		</div>
		@if($errors->has('price'))
		<p style="color: red">{{$errors->first('price')}}</p>
		@endif
		<div class="form-group">
			<label for="">Giá khuyến mãi</label>
			<input type="text" class="form-control" name="sale_price" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">Mô tả</label>
			<textarea name="content" id="desc" class="form-control" rows="3"></textarea>
		</div>
		
	</div>

	

	<div class="col-md-12 text-center">
		<button type="submit" class="btn btn-primary">Thêm</button>
	</div>
	@csrf
</form>
<script type="text/javascript">
	$(document).ready(function() {
		$("#goc").change(function() {
			var idgoc = $(this).val();
			$.get("admin/ajax/danhmuc/"+idgoc,function(data){
				$("#con").html(data);
			});
		});
	});
</script>
@stop