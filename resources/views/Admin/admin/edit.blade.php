@extends('layout.admin')
@section('title','Sửa nhân viên')
@section('main')
<form action="" method="POST" role="form">



  
 <div class="col-md-6"> 
  <div class="form-group">
     <label for="">Họ Tên</label>
     <input type="text" class="form-control" name="name" value="{{$admin->name}}">
   </div>
   @if($errors->has('name'))
   <p style="color: red">{{$errors->first('name')}}</p>
   @endif
    <div class="form-group">
     <label for="">Email</label>
     <input type="text" class="form-control" name="email" value="{{$admin->email}}">
   </div>
    @if($errors->has('email'))
   <p style="color: red">{{$errors->first('email')}}</p>
   @endif
 </div>
  <div class="col-md-6">
     <div class="form-group">
     <label for="">Phone</label>
     <input type="text" class="form-control" name="phone" value="{{$admin->phone}}">
      </div>
    @if($errors->has('phone'))
      <p style="color: red">{{$errors->first('phone')}}</p>
      @endif
      <label for="">Chức vụ</label>
      <?php $giamdoc = $admin->group_name == 'giamdoc'? 'checked': '' ?>
      <?php $nhanvien = $admin->group_name == 'nhanvien'? 'checked': '' ?>
      <div class="radio">
     <label>
       <input type="radio" name="group_name" id="input" value="giamdoc" {{$giamdoc}}>
      Giám đốc 
     </label>
     <label>
       <input type="radio" name="group_name" id="input" value="nhanvien" {{$nhanvien}}>
      Nhân viên
     </label>
      </div>
  </div>

  

  <button type="submit" class="btn btn-primary">Sửa</button>
  @csrf
</form>
@stop