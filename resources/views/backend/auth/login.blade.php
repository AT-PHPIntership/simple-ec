@extends('backend.auth.layout')

@section('content')

<div class="login-box">
    <div class="login-logo">
        <a href="{!! route('admin') !!}"><b>Admin</b>LTE</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to Admin</p>
        {!! Form::open(['route' => 'admin.login', 'method' => 'POST']) !!}
            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                {{ Form::input('email', "email", null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                {{ Form::input('password', 'password', null, array('class' => 'form-control', 'placeholder' => 'Password')) }}
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    {!! Form::submit('Sign In', array('class' => 'btn btn-primary btn-block btn-flat')) !!}
                </div><!-- /.col -->
            </div>
        {!! Form::close() !!}
        <a href="{{ url('/admin/password/reset') }}">I forgot my password</a><br>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
@endsection
