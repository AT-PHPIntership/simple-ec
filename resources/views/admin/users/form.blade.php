@extends('admin.common.layout')
@section('content')
    <div class="page animsition">
        <div class="page-header">
            <h1 class="page-title">{{ $title }}</h1>
            <ol class="breadcrumb breadcrumb-arrow">
                <li><a href="{{ url('/admin') }}">Home</a></li>
                <li><a href="{{ url('/admin/users') }}">List user</a></li>
                <li class="active">{{ $title }}</li>
            </ol>
        </div>
        <div class="page-content">
            <div class="panel">
                <div class="panel-body">
                    <!-- Display Errors -->
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @include('flash::message')
                                <!--End display error -->
                        {!! Form::open(['class' => 'form-horizontal', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {!! Form::label('username', 'Username:', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-9">
                                {!! Form::input('text', 'username', (isset($users->username)) ? $users->username : null, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email:', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-9">
                                {!! Form::input('email', 'email', (isset($users->email)) ? $users->email : null, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        @if(isset($users->password))
                            <div class="form-group">
                                {!! Form::label('password', 'Password:', array('class' => 'col-sm-2 control-label')) !!}
                                <div class="col-sm-9">
                                    ******* <a href="{{ url('/admin/users/change-password') }}">change password</a>
                                </div>
                            </div>
                        @else
                            <div class="form-group">
                                {!! Form::label('password', 'Password:', array('class' => 'col-sm-2 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::input('password', 'password', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('password_confirmation', 'Password confirm:', array('class' => 'col-sm-2 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::input('password', 'password_confirmation', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            {!! Form::label('phone', 'Phone:', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-9">
                                {!! Form::input('text', 'phone', (isset($users->phone)) ? $users->phone : null, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('address', 'Address:', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-9">
                                {!! Form::input('text', 'address', (isset($users->address)) ? $users->address : null, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('is_admin', 'Is Admin:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-9">
                                <div class="checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="checkbox-status" name="is_admin" <?= ((isset($users->is_admin) && $users->is_admin == \App\User::USER_ADMIN)) ? 'checked' : ''; ?>>
                                    <label for="checkbox-id_admin"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-2">
                                {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                                <a href="{{ url('/admin/users') }}">
                                    <button type="button" class="btn-default btn">Cancel</button>
                                </a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection