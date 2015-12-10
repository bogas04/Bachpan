@extends('layouts.master_logged_out')

@section('title', 'Login')

@section('content')

<h3>Login</h3>

<form action = {{ URL::route('doLogin') }} method = "post">
  {{ csrf_field() }}
  <div class="form-group">
    <label>Email ID</label>
    <input type="text" class="form-control" placeholder="Email ID" name="email" />
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="password" name="password" />
  </div>
  <input type="submit" class="btn btn-primay" value="Submit" />
  <div class="help-block">
    <a href="signup">Create Account</a>
  </div>
</form>

@endsection
