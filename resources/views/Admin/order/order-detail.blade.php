@extends('layout.admin')
@section('title','Chi tiết đơn hàng')
@section('main')
	<div class="col-md-12" style="padding-bottom: 15px">
	<div class="col-md-6">
		<strong>Email:</strong> {{$od->email}}<br>
		<strong>Name:</strong> {{$od->name}}<br>
		<strong>Phone:</strong> {{$od->phone}}<br>
		<strong>Address:</strong> {{$od->address}}<br>
	</div>
	
</div>
<table class="table table-hover" style="padding-top: 15px">
	<thead>
		<tr>
			<th>Ảnh</th>
			<th>Tên sản phẩm</th>
			<th>Số lượng</th>
			<th>Giá</th>
		</tr>
	</thead>
	<tbody>
		@foreach($detail as $dt)
		<tr>
			<td>
				<img src="{{url('uploads/')}}/{{$dt->pro->img}}"  width="50">
			</td>
			<td>{{$dt->pro->name}}</td>
			<td>{{$dt->quantity}}</td>
			<td>{{$dt->price}}$</td>
		</tr>
		@endforeach
	</tbody>
</table>
<div class="clear-fix"></div>
@stop