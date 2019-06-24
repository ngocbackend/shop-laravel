@extends('layout.admin')
@section('title','Danh sách nhân viên')
@section('main')
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Họ tên</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Chức vụ</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($admin as $ad)
			<tr>
				<td>{{$ad->name}}</td>
				<td>{{$ad->email}}</td>
				<td>{{$ad->phone}}</td>
				<td>{{$ad->group_name}}</td>
				@if(Auth:: user()->group_name == 'giamdoc')
				<td>
				@if($ad->group_name == 'nhanvien')
					<a href="{{route('delete_admin',['id'=>$ad->id])}}" class="btn btn-danger btn-xs" onclick="return confirm('Bạn có muốn xóa không?')"><i class="fa fa-trash"></i></a>
				@endif
					<a href="{{route('edit_admin',['id'=>$ad->id])}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
				</td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">{{$admin->links()}}</div>
@stop