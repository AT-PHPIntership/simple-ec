@extends('auth.layout')

@section('content')
    <p>Reset Password</p>
    {!! Form::open() !!}
    
    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group">
      {!! Form::label('email', 'Email', ['class' => 'sr-only', 'for' => 'inputEmail']) !!}
      {!! Form::input('email', 'email', old('email'), ['class' => 'form-control', 'id' => 'inputEmail', 'placeholder'=>'Email']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password', 'Password', ['class' => 'sr-only', 'for' => 'inputPassword']) !!}
      {!! Form::input('password', 'password', '', ['class' => 'form-control', 'id' => 'inputPassword', 'placeholder'=>'Password']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password_confirmation', 'Password confirmation', ['class' => 'sr-only', 'for' => 'inputpassword_confirmation']) !!}
      {!! Form::input('password', 'password_confirmation', '', ['class' => 'form-control', 'id' => 'inputpassword_confirmation', 'placeholder'=>'Password confirmation']) !!}
    </div>
    
    {!! Form::submit('Reset Password', ['class' => 'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}
    <p>Have account already? Please go to <a href="{{ url('/login') }}">Sign In</a></p>
@stop