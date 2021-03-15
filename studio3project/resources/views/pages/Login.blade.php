@extends('layouts.app')
@section('homepage-content')
<div class="container box">
    
    <form method="post" action="{{ url('/main/checklogin') }}">
     {{ csrf_field() }}
     <div class="form-group">
      <label>Enter Email</label>
      <input type="email" name="email" class="form-control" />
     </div>
     <div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="password" class="form-control" />
     </div>
     <div class="form-group">
      <input type="submit" name="login" class="btn btn-primary" value="Login" />
     </div>
    </form>
   </div>
@endsection
