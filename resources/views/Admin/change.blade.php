@extends('layout.admin')
@section('title','Đổi mật khẩu')
@section('main')
<form action="{{route('change')}}" method="POST" role="form">
<div class="col-md-4">
  
</div>
  <div class="col-md-4">
    <div class="form-group @if($errors->has('old_pass')) has-error @endif">
      <div class="text-center">
        <label for="">Mật khẩu cũ</label>
      </div>
      <input type="password" class="form-control " name="old_pass" placeholder="Nhập mật khẩu cũ">
    </div>
    @if($errors->has('old_pass'))
    <p style="color: red">{{$errors->first('old_pass')}}</p>
    @endif
    <div class="form-group @if($errors->has('new_pass')) has-error @endif">
      <div class="text-center">
        <label for="">Mật khẩu mới</label>
      </div>
      <input type="password" class="form-control " name="new_pass" placeholder="Nhập mật khẩu mới">
    </div>
    @if($errors->has('new_pass'))
    <p style="color: red">{{$errors->first('new_pass')}}</p>
    @endif
    <div class="form-group @if($errors->has('confirm_pass')) has-error @endif">
     <div class="text-center">
        <label for="">Nhập lại mật khẩu</label>
     </div>
      <input type="password" class="form-control " name="confirm_pass" placeholder="Nhập lại mật khẩu mới">
    </div>
     @if($errors->has('confirm_pass'))
    <p style="color: red">{{$errors->first('confirm_pass')}}</p>
    @endif
  <div class="text-center">
    <button type="submit" class="btn btn-primary">SAVE</button>
  </div>

  </div>
  <div class="col-md-4">
  
</div>

  @csrf
</form>
  
@stop