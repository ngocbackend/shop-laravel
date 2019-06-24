@extends('layout.admin')
@section('title','Sửa sản phẩm')
@section('main')
<form action="" method="POST" enctype="multipart/form-data">
	
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Tên sản phẩm</label>
			<input type="text" class="form-control" name="name" id="name" value="{{$product->name}}" placeholder="Nhập tên sản phẩm">
		</div>
	</div>
	@if($errors->has('name'))
	<p style="color: red">{{$errors->first('name')}}</p>
	@endif
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Slug</label>
			<input type="text" class="form-control" name="slug" id="slug" value="{{$product->slug}}" >
		</div>
	</div>
	
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Danh mục</label>
			<select name="category_id" id="con" class="form-control" required>
				@foreach($category as $cat)
				<?php $selected = $product->category_id == $cat->id? 'selected' : '' ?>
				<option value="{{$cat->id}}" {{$selected}}>{{$cat->name}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Ảnh</label>
			<div class="clearfix"></div>
				<div class="thumbnail">
					<img src="{{url('uploads')}}/{{$product->img}}" alt="" >
				</div>
			<input type="file" class="form-control" name="img_upload">
		</div>
	</div>
	@if($errors->has('img_upload'))
	<p style="color: red">{{$errors->first('img_upload')}}</p>
	@endif
	<div class="col-md-8">
		<div class="form-group">
				<label for="">Ảnh khác</label>
				<div class="clearfix"></div>
				@foreach($product->images as $img)
					<div class="col-md-4">
						<div class="thumbnail">
							<img src="{{url('uploads')}}/{{$img->link_img}}" alt="">
						</div>
							<input type="file" class="form-control" name="old_img[{{$img->id}}]">
					</div>
				@endforeach
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="form-group">
		<label for="">Giá</label>
		<input type="text" class="form-control" name="price" id="" value="{{$product->price}}" placeholder="Input field">
	</div>
	@if($errors->has('price'))
	<p style="color: red">{{$errors->first('price')}}</p>
	@endif
	<div class="form-group">
		<label for="">Giá khuyến mãi</label>
		<input type="text" class="form-control" name="sale_price" id="" value="{{$product->sale_price}}" placeholder="Input field">
	</div>
	<div class="form-group">
		<label for="">Mô tả</label>
		<textarea name="content" id="desc" class="form-control"  rows="3">{{$product->content}}</textarea>
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
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