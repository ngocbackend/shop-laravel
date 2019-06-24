@extends('layout.admin')
@section('title','Danh sách đơn hàng')
@section('main')
	<table class="table table-hover">
		<thead>
			<tr>
				<th>STT</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Date</th>
				<th>Status</th>
				<th>Total</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($orders as $k => $order)
			<tr>
				<td>{{$k+1}}</td>
				<td>{{$order->user->email}}</td>
				<td>{{$order->user->phone}}</td>
				<td>{{$order->created_at}}</td>
				<td>
					<form action="{{route('update-order',['id'=>$order->id])}}" method="POST">
					<select name="status" id="input" class="form-inline" required="required">
						<?php $selected = $order->status == 0 ? 'selected' : '' ?>
						<?php $selected1 = $order->status == 1 ? 'selected' : '' ?>
						<?php $selected2 = $order->status == 2 ? 'selected' : '' ?>
						<?php $selected3 = $order->status == 3 ? 'selected' : '' ?>
						<option value="0" {{ $selected}} >Mới</option>
						<option value="1" {{ $selected1}} >Đã xác nhận</option>
						<option value="2" {{ $selected2}} >Đang chuyển</option>
						<option value="3" {{ $selected3}} >Thành công</option>
					</select>
					<button type="submit"><i class="fa fa-edit"></i></button>
						@csrf
				</form>
				</td>
				<td>{{$order->total_amount()}}$</td>
				<td>
					<a href="{{route('order-detai',['id'=>$order->id])}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop