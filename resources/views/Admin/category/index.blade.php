@extends('layout.admin')
@section('title','Danh mục sản phẩm')
@section('main')
<!-- Latest compiled and minified JS -->

	<form action="{{route('category-add')}}" method="POST">	
		<div class="col-md-3">
			<label  for="" class="text-center">Tên danh mục</label>
			<div class="form-group">
				<input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên danh mục">
			</div>
			@if($errors->has('name'))
			<p style="color: red;margin-top: 5px">{{$errors->first('name')}}</p>
			@endif
		</div>
			
		
		<div class="col-md-3">
			<label  for="" class="text-center">Trạng thái</label>
			<div class="radio">
				<label>
					<input type="radio" name="status" id="status" value="1" checked>
					Hiện 
				</label>
				<label>
					<input type="radio" name="status" id="status" value="0" >
					Ẩn 
				</label>
			</div>
		</div>
			
		<button type="submit" class="btn btn-primary text-center" id="btn" style="margin-top: 20px">Thêm</button>
		@csrf
	</form>
	<table class="table table-hover" id="category-table">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên Danh Mục</th>
				<th>Trạng Thái</th>
				<th>Ngày Tạo</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($cat as $ca)
			<tr>
				<td>{{$ca->name}}</td>
				<td>{{$ca->status == 1 ? 'Hiện' : 'Ẩn'}}</td>
				<td>{{$ca->created_at}}</td>
				<td>
					<a href="{{route('category-delete',['id'=>$ca->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Bạn có muốn xóa không?')"><i class="fa fa-trash"></i></a>
					<a href="{{route('category-edit',['id'=>$ca->id])}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
			
				</td>
			</tr>
			
			@endforeach
			<!-- Latest compiled and minified JS -->
			<!-- Latest compiled and minified CSS & JS -->
			
		</tbody>
	</table>
@stop
