@extends('layout.admin')
@section('title','Danh sách khách hàng')
@section('main')
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Họ tên</th>
				<th>Email</th>
				<th>Phone</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($customer as $cus)
			<tr>
				<td>{{$cus->name}}</td>
				<td>{{$cus->email}}</td>
				<td>{{$cus->phone}}</td>
				<td>
					<a href="{{route('delete_customer',['id'=>$cus->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Bạn có muốn xóa không?')"><i class="fa fa-trash"></i></a>
				
					<a href="{{route('edit_customer',['id'=>$cus->id])}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">{{$customer->links()}}</div>
@stop