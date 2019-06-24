@extends('layout.admin')
@section('title','Thêm nhân viên')
@section('main')
<form action="{{route('register')}}" method="POST" role="form">
  @csrf
  <div class="col-md-6">
    <div class="form-group">
      <label for="">Họ Tên</label>
      <input type="text" class="form-control" name="name" placeholder="Nhập tên nhân viên">
    </div>
    @if($errors->has('name'))
    <p style="color: red">{{$errors->first('name')}}</p>
    @endif
     <div class="form-group">
      <label for="">Email</label>
      <input type="text" class="form-control" name="email" placeholder="Nhập email">
    </div>
     @if($errors->has('email'))
    <p style="color: red">{{$errors->first('email')}}</p>
    @endif
     <div class="form-group">
      <label for="">Phone</label>
      <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại">
    </div>
     @if($errors->has('phone'))
    <p style="color: red">{{$errors->first('phone')}}</p>
    @endif
  </div>
   <div class="col-md-6">
     <div class="form-group">
      <label for="">Mật khẩu</label>
      <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
       </div>
     @if($errors->has('password'))
       <p style="color: red">{{$errors->first('password')}}</p>
       @endif
     <div class="form-group">
      <label for="">Nhập lại mật khẩu</label>
      <input type="password" class="form-control" name="confirm_password" placeholder="Nhập lại mật khẩu">
       </div>
       @if($errors->has('confirm_password'))
       <p style="color: red">{{$errors->first('confirm_password')}}</p>
       @endif
       <label for="">Chức vụ</label>
       <div class="radio">
      <label>
        <input type="radio" name="group_name" id="input" value="giamdoc" checked>
       Giám đốc 
      </label>
      <label>
        <input type="radio" name="group_name" id="input" value="nhanvien" checked>
       Nhân viên
      </label>
       </div>
   </div>


  
    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-primary" style="margin-top: 10px" >Thêm</button>
    </div>
  

</form>
@stop