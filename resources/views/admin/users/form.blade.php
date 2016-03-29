@extends('admin.common.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $title }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ url('/admin/users') }}">List users</a></li>
                <li class="active">{{ $title }}</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ $title }}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
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
                {!! Form::open(['class' => 'form-horizontal', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                    <div class="box-body">
                        <div class="form-group">
                            {!! Form::label('name', 'Name:', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-9">
                                {!! Form::input('text', 'name', (isset($users->name)) ? $users->name : null, array('class' => 'form-control')) !!}
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
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                        <a href="{{ url('/admin/users') }}">
                            <button type="button" class="btn btn-default pull-right">Cancel</button>
                        </a>
                    </div><!-- /.box-footer -->
                {!! Form::close() !!}
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection