@extends('auth.layout')

@section('content')
  <!-- Form login -->
  <p>Sign into your pages account</p>
  {!! Form::open() !!}
    <div class="form-group">
      {!! Form::label('email', 'Email', ['class' => 'sr-only', 'for' => 'inputEmail']) !!}
      {!! Form::input('email', 'email', '', ['class' => 'form-control', 'id' => 'inputEmail', 'placeholder'=>'Email']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('password', 'Password', ['class' => 'sr-only', 'for' => 'inputPassword']) !!}
      {!! Form::input('password', 'password', '', ['class' => 'form-control', 'id' => 'inputPassword', 'placeholder'=>'Password']) !!}
    </div>
    <div class="form-group clearfix">
       <div class="checkbox-custom checkbox-inline pull-left">
          <input type="checkbox" id="inputCheckbox" name="remember">
          <label for="inputCheckbox">Remember me</label>
       </div>
       <a class="pull-right" href="{{ url('/password/email') }}">Forgot password?</a>
    </div>
    {!! Form::submit('Sign in', ['class' => 'btn btn-primary btn-block']) !!}
  {!! Form::close() !!}
  <p>Still no account? Please go to <a href="{{ url('/register') }}">Register</a></p>
  <!-- End block form login -->
@stop