@extends('layout.admin')
@section('title','Sửa khách hàng')
@section('main')
<form action="" method="POST" role="form">



  
 <div class="col-md-3"> 
  <div class="form-group">
     <label for="">Họ Tên</label>
     <input type="text" class="form-control" name="name" value="{{$customer->name}}">
   </div>
   @if($errors->has('name'))
   <p style="color: red">{{$errors->first('name')}}</p>
   @endif
 </div>
 <div class="col-md-3">
   
    <div class="form-group">
     <label for="">Email</label>
     <input type="text" class="form-control" name="email" value="{{$customer->email}}">
   </div>
    @if($errors->has('email'))
   <p style="color: red">{{$errors->first('email')}}</p>
   @endif
 </div>
  <div class="col-md-3">
     <div class="form-group">
     <label for="">Phone</label>
     <input type="text" class="form-control" name="phone" value="{{$customer->phone}}">
      </div>
    @if($errors->has('phone'))
      <p style="color: red">{{$errors->first('phone')}}</p>
      @endif
    
  <button type="submit" class="btn btn-primary">Sửa</button>
  </div>

  

  @csrf
</form>
@stop