@extends('layout.admin')
@section('title','Danh mục sản phẩm')
@section('main')
<!-- Latest compiled and minified JS -->

	<form  method="POST">	
		<div class="col-md-3">
			<label  for="" class="text-center">Tên danh mục</label>
			<div class="form-group">
				<input type="text" class="form-control" name="name"  value="{{$value->name}}">
			</div>
			@if($errors->has('name'))
			<p style="color: red;margin-top: 5px">{{$errors->first('name')}}</p>
			@endif
		</div>
		
		<div class="col-md-3">
			<label  for="" class="text-center">Trạng thái</label>
			<div class="radio">
				<?php $hien = $value->status == 1? 'checked': '' ?>
				<?php $an = $value->status == 0? 'checked': '' ?>
				<label>
					<input type="radio" name="status"  value="1" {{$hien}}>
					Hiện 
				</label>
				<label>
					<input type="radio" name="status"  value="0" {{$an}}>
					Ẩn 
				</label>
			</div>
		</div>
			
		<button type="submit" class="btn btn-default" id="btn" style="margin-top: 20px">Sửa</button>
		@csrf
	</form>
	
@stop
