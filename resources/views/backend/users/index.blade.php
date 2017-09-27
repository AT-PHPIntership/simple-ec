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
                <li><a href="{!! route('admin') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">List users</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List users</h3>
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
                                    @foreach($users as $user)
                                    <tr class="">
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <a href="{!! route('admin.users.show',$user->id) !!}" class="pull-left margin-r-5 btn btn-sm btn-icon btn-info" >
                                                <i class="icon wb-eye" aria-hidden="true"></i>
                                            </a>
                                            {!! Form::open(['route' => ['admin.users.destroy',$user->id], 'class'=>'pull-left']) !!}
                                            {!! Form::hidden('_method', 'DELETE') !!}
                                            <button class="btn btn-sm btn-icon btn-danger" type="submit">
                                                <i class='glyphicon glyphicon-trash'></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="paginations"> {!! $users->render() !!} </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection