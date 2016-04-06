@extends('backend.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Edit admin user</h1>
            <ol class="breadcrumb">
                <li><a href="{!! route('admin') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{!! route('admin.admin-users.index') !!}">List users</a></li>
                <li class="active">Edit admin user</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit admin user</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @include('flash::message')
                {!! Form::open(['route' => ['admin.admin-users.update',$adminUser->id] , 'class' => 'form-horizontal', 'method' => 'PUT' , 'enctype' => 'multipart/form-data']) !!}
                    <div class="box-body">
                        <fieldset disabled>
                            <div class="form-group">
                                {!! Form::label('name', 'Name:', array('class' => 'col-sm-2 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::input('text', 'name', $adminUser->name, array('class' => 'form-control disabled')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'Email:', array('class' => 'col-sm-2 control-label')) !!}
                                <div class="col-sm-9">
                                    {!! Form::input('email', 'email', $adminUser->email, array('class' => 'form-control disabled')) !!}
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group">
                            {!! Form::label('phone', 'Phone:', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-9">
                                {!! Form::input('text', 'phone', $adminUser->phone, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('address', 'Address:', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-9">
                                {!! Form::input('text', 'address', $adminUser->address, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                        <a href="{!! route('admin.admin-users.index') !!}">
                            <button type="button" class="btn btn-default pull-right">Cancel</button>
                        </a>
                    </div><!-- /.box-footer -->
                {!! Form::close() !!}
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection