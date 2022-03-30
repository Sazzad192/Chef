@extends('layouts.header')
@section('login-page')

<br> <br> <br>

<center>
  <br>
    @if (Session::has('msg'))
      <span class="alert alert-info">{{Session::get('msg')}}</span>
    @endif
    <br>
  <form action="" method="post">
    {{@csrf_field()}}
    <div class="Login" >
      <h3><b>Login System</b></h3> <br>

      <!-- --------------------User name----------------------- -->
      <input type="text" placeholder="Enter Your Email" name="email" required><br>
      @error('email')
        <span class="text-danger">{{$message}}</span>
      @enderror
      <br><br> 
      <!-- --------------------Password----------------------- -->
      <input type="password" placeholder="Enter Password" name="psw" required>
      
      <br><br>
          
      <button type="submit"> Login </button>
    </div>

    <div class="Login">
      <a href="{{route('reg')}}"> Don't have any account </a>
    </div>
  </form>
</center>

@endsection