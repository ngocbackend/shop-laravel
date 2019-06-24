@extends('layout.login')
@section('title','LOGIN')
@section('main')
<form method="POST">
  <h1>LOGIN ADMIN</h1>
  <div class="inset">
  <p>
    <label for="email">EMAIL ADDRESS</label>
    <input type="text" name="email" id="email" value="{{old('email')}}">
  </p>
  @if($errors->has('email'))
  <p style="color: red">{{$errors->first('email')}}</p>
  @endif
  <p>
    <label for="password">PASSWORD</label>
    <input type="password" name="password" id="password">
  </p>
    @if($errors->has('password'))
  <p style="color: red">{{$errors->first('password')}}</p>
  @endif
  <p>
    <input type="checkbox" name="remember" id="remember">
    <label for="remember">Remember me for 14 days</label>
  </p>
  </div>
  <p class="p-container">
    <span>Forgot password ?</span>
    <input type="submit" name="go" id="go" value="Log in">
  </p>
  @csrf
</form>
<script>
  $(function() {
    $('#go').click(function(e) {
      e.preventDefault();
      var email = $('#email').val();
      var password = $('#password').val();
      $.ajax({
        url: 'login',
        type: 'POST',
        data: {email: 'email',password: 'password'},
        success:function(data){
          console.log(data);
        }
      })
      
    });
  });
</script>
@stop