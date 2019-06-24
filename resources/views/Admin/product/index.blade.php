@extends('layout.admin')
@section('title','Danh sách sản phẩm')
@section('main')
<table class="table table-hover">
	<thead>
		<tr>
			<th>Tên</th>
			<th>Danh mục</th>
			<th>Ảnh</th>
			<th>Giá</th>
			<th>Giá khuyến mãi</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($product as $pro)
		<tr>
			<td>{{$pro->name}}</td>
			<td>{{$pro->category->name}}</td>
			<td>
				<img src="{{url('uploads')}}/{{$pro->img}}" width="50">
			</td>
			<td>{{$pro->price}}</td>
			<td>{{$pro->sale_price}}</td>
			<td>
				<a href="{{route('product-delete',['id'=>$pro->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Bạn có muốn xóa không?')"><i class="fa fa-trash"></i></a>
				<a href="{{route('product-edit',['id'=>$pro->id])}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<div class="text-center">{{$product->links()}}</div>

@stop