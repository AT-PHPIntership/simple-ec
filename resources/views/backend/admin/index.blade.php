@extends('backend.layouts.master')
@section('content')
        <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Manager users
            </h1>
            <ol class="breadcrumb">
                <li><a href="{!!  route('admin') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">List users</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List adminUsers</h3>
                            <a href="{!! route('admin.admin-users.create') !!}">
                                <button type="button" class="btn btn-floating btn-primary btn-sm pull-right"><i class="icon wb-plus" aria-hidden="true"></i></button>
                            </a>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            @include('flash::message')

                            <table id="dataTables-users" class="table table-bordered dataTable table-striped"
                                   data-plugin="dataTable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($adminUsers as $adminUser)
                                    <tr class="">
                                        <td>{{$adminUser->name}}</td>
                                        <td>{{$adminUser->email}}</td>
                                        <td>
                                            <a href="{!! route('admin.admin-users.show',$adminUser->id) !!}" class="pull-left margin-r-5 btn btn-sm btn-icon btn-default btn-info" >
                                                <i class="icon wb-eye" aria-hidden="true"></i>
                                            </a>
                                            @if($adminUser->id == Auth()->guard('admin')->user()->id)
                                                <a href="{!! route('admin.admin-users.edit',$adminUser->id) !!}" class="pull-left margin-r-5 btn btn-sm btn-icon btn-default btn-warning" >
                                                    <i class="icon wb-pencil" aria-hidden="true"></i>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection