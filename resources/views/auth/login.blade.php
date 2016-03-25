@extends('auth.layout')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/admin') }}"><b>Admin</b>LTE</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        {!! Form::open() !!}
            <div class="form-group">
                {!! Form::input('email', 'email', '', ['class' => 'form-control', 'id' => 'inputEmail', 'placeholder'=>'Email']) !!}
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {!! Form::input('password', 'password', '', ['class' => 'form-control', 'id' => 'inputPassword', 'placeholder'=>'Password']) !!}
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" id="inputCheckbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    {!! Form::submit('Sign in', ['class' => 'btn btn-primary btn-block btn-flat']) !!}
                </div><!-- /.col -->
            </div>
        {!! Form::close() !!}

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in
                using Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in
                using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="{{ url('/password/email') }}">Forgot password?</a><br>
        <a href="{{ url('/register') }}" class="text-center">Register a new membership</a>
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
@stop