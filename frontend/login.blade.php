@extends('frontend.layout.main')
@section('content')
<br><br><br><br>
<div class="container">
<div class="row">
<div class="col-md-6 m-auto">
	<article class="card-body mx-auto" style="font-weight: 600px;">
  <h3 class="card-title mt-4 text-center">Log In</h3>
	<form action="{{url('post-login')}}" method="post" id="logFrom">
      {{csrf_field()}}
      @if($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">
               X
            </button>
            <strong>{{$message}}</strong>
        </div>
        @endif
         @if($message = Session::get('warning'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">
               X
            </button>
            <strong>{{$message}}</strong>
        </div>
        @endif
  <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
     </div>
        <input name="email" class="form-control" placeholder="Email address" type="email">
         @if($errors->has('email'))
        <span class="error">{{$errors->first('email')}}</span>
        @endif
    </div> 

  <!-- Password input -->
  <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
        <input class="form-control" placeholder="Type password" type="password" name="password">
         @if($errors->has('password'))
        <span class="error">{{$errors->first('password')}}</span>
        @endif
    </div> 

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="{{url('register')}}">Register</a></p>
    
  </div>
</form>
</div>	
</div>	

</div>
@endsection