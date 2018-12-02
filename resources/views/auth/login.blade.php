@extends('layouts.app')
@section ('body-class','signup-page')
@section('content')
<div class="header header-filter" style="background-image: url('{{asset('img/city.jpg')}}'); background-size: cover; background-position: top center;">
<div class="container">
<div class="row">
   <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
      <div class="card card-signup">
         <form method="POST" class="form" action="{{ route('login') }}">
            @csrf
            <div class="header header-primary text-center">
               <h4>Iniciar Sesion</h4>
            </div>
            <div class="content">
               <div class="input-group">
                  <span class="input-group-addon">
                  <i class="material-icons">email</i>
                  </span>
                  <input id="email" type="email"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email...">
                  @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="input-group">
                  <span class="input-group-addon">
                  <i class="material-icons">lock_outline</i>
                  </span>
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
                  @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
               </div>
               <!-- If you want to add a checkbox to this form, uncomment this code-->
               <div class="checkbox">
                  <label>
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  Rimembel
                  </label>
               </div>
            </div>
            <div class="footer text-center">
               <button class="btn btn-primary btn-lg">
               {{ __('Login') }}
               </button>
            </div>
            <div class="footer text-center">
               <a style="color:blue;" href="{{ route('password.request') }}">
               {{ __('Forgot Your Password?') }}
               </a>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection