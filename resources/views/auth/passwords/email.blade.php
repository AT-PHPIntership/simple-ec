@extends('auth.layout')

@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url('/admin') }}"><b>Admin</b>LTE</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Reset password</p>
            {!! Form::open() !!}
                <div class="form-group has-feedback">
                    {!! Form::input('email', 'email', old('email'), ['class' => 'form-control', 'id' => 'inputEmail', 'placeholder'=>'Email']) !!}
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        {!! Form::submit('Reset Your Password', ['class' => 'btn btn-primary btn-block btn-flat']) !!}
                    </div><!-- /.col -->
                </div>
            {!! Form::close() !!}

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up
                    using Facebook</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up
                    using Google+</a>
            </div>

            <a href="{{ url('/login') }}" class="text-center">Sign In</a>
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->
@stop