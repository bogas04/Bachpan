@extends('layouts.master_logged_out')

@section('title', 'Signup')

@section('content')

<h3>Signup</h3>

<form action = {{ URL::route('doSignup') }} method = "post" >
  {{ csrf_field() }}
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Your Name" name="name" />
  </div>

  <div class="form-group">
    <label>Email ID</label>
    <input type="text" class="form-control" placeholder="Email ID" name="email" />
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Password" name="password" />
  </div>

  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" />
  </div>

  <input type="submit" class="btn btn-primay" value="Signup" />

  <div class="help-block">
    <a href="login">Already have an account?</a>
  </div>

</form>

@endsection
