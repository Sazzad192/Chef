@extends('layouts.header')
@section('login-page')

<br> <br> <br>

<center>
<form action="" method="post">
  {{csrf_field()}}
  <div class="Login" >
    <br>
    <h3><b>Login System</b></h3> <br>

    <!-- --------------------User name----------------------- -->
    <input type="text" placeholder="Enter Username" name="uname" required><br>
    @error('uname')
      <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br> 
    <!-- --------------------Password----------------------- -->
    <input type="password" placeholder="Enter Password" name="psw" required>
    
    <br><br>
        
    <button type="submit"> Login </button>
  </div>

  <div class="Login">
    <br>
    <a href="{{route('reg')}}"> Don't have any account </a>
  </div>
</form>
</center>

@endsection