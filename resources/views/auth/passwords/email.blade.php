@extends('auth.layout')

@section('content')
  <!-- Form login -->
  <p>Input your registered email to reset your password</p>
  {!! Form::open() !!}
    <div class="form-group">
      {!! Form::label('email', 'Email', ['class' => 'sr-only', 'for' => 'inputEmail']) !!}
      {!! Form::input('email', 'email', old('email'), ['class' => 'form-control', 'id' => 'inputEmail', 'placeholder'=>'Email']) !!}
    </div>    
    {!! Form::submit('Reset Your Password', ['class' => 'btn btn-primary btn-block']) !!}
  {!! Form::close() !!}
  <p>Have account already? Please go to <a href="{{ url('/login') }}">Sign In</a></p>
  <!-- End block form login -->
@stop