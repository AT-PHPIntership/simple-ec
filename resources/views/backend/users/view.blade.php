@extends('backend.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>View user</h1>
            <ol class="breadcrumb">
                <li><a href="{!! route('admin') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{!! route('admin.users.index') !!}">List users</a></li>
                <li class="active">View user</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">View user</h3>
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
                <table class="table table-bordered table-striped text-center" >
                    <thead>
                    <tr>
                        <th colspan="2"><h3>INFORMATION</h3></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $user->address }}</td>
                    </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="{!! route('admin.users.index') !!}" class="btn btn-default" >Go Back</a>
                </div>
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection