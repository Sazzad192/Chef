@extends('layouts.header')
@section('reg-page')
<br> <br> <br> <br> <br>
<center>
<form action="" method="post">
  {{csrf_field()}}
  <div class="Registration">
    <h1>Registration Form</h1>
    <br>
    <!-- ------------------------ First Name ------------------ -->
    <!-- ---- value- old meance that presearve previous values --- -->
    <input type="text" placeholder="first name" name="fname" value="{{old('fname')}}" id="First Name" required>
      @error('fname')
        <span class="text-danger">{{$message}}</span>
      @enderror
    <br><br>
    <!-- ------------------------ End First Name ------------------ -->

    <!-- ------------------------Last Name------------------ -->
    <input type="text" placeholder="last name" name="lname" value="{{old('lname')}}" id="Last Name" required> 
    @error('lname')
    <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <!-- ------------------------ End Last Name------------------ -->

    <!-- ------------------------gender------------------ -->
    <input type="radio" id="Male" name="gender" value="Male" required>
      <label for="Male"> Male </label>
    <input type="radio" id="Female" name="gender" value="Female" required>
      <label for="Female"> Female </label> 
    @error('gender')
    <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <!-- ------------------------ End gender------------------ -->
                        
    <!-- -------------------------Date-------------------- -->     
    <label for="Date"> Date </label>
    <input type="text" placeholder="DD" name="dob" id="Date" required>

    <label for="Date">Month</label>
    <input type="text" placeholder="MM" name="dob" id="Date" required>
    
    <label for="Date">Year</label>
    <input type="text" placeholder="YYYY" name="dob" id="Date" required> <br><br>
    <!-- ------------------------- End Date-------------------- -->

    <!-- ------------------------Email---------------------- -->
    <label for="email">E-mail</label>
    <input type="text" placeholder="Enter Email" name="email" value="{{old('email')}}" id="email" required>
    @error('email')
    <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <!-- ------------------------ End Email ---------------------- -->

    <!-- ---------------------Phone Number------------------- --> 
    <label for="Ph number">Phone-number</label>
    <input type="text" placeholder="01" name="pnumber" value="{{old('pnumber')}}" id="Ph number" required>
    @error('pnumber')
    <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <!-- --------------------- End Phone Number ------------------- -->

    <!-- ----------------------Password------------------------- --> 
    <label for="psw">Password</label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    @error('psw')
    <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <!-- ---------------------- End Password ------------------------- --> 
    
    <!-- -------------------Confirm Password-------------------- --> 
    <label for="psw-repeat">Confirm-Password</label>
    <input type="password" placeholder="Repeat Password" name="conpsw" id="psw-repeat" required>
    @error('conpsw')
    <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <!-- ------------------- Confirm Password End -------------------- -->

    <input type="checkbox" id="v1" name="v1" value="I agree with the terms and condition">
    <label for="v1">I agree with the terms and condition</label>
    <br><br>
    <input type="checkbox" id="v2" name="v2" value="I want to recieve the newsletter">
    <label for="v2">I want to recieve the newsletter</label>
    <br><br>
                        
    

    <button type="submit" value="" class=" ">Registration</button>
  </div>
</form>
</center>
@endsection