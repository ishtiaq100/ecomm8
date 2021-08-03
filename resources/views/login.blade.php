@extends('master')
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">    
<form action="{{url('login')}}" method="POST"  >
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
     @csrf
    <div class="form-floating">
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
   
  </form>
  </div>
  </div>
  @endsection
</div>