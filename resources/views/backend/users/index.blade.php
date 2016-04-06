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
                                            <button class="btn btn-sm btn-icon btn-danger" type="submit" data-toggle="modal" data-target="#confirmDelete">
                                                <i class='glyphicon glyphicon-trash'></i>
                                            </button>
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
    <div class="modal fade" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Delete User</h4>
                </div>
                <div class="modal-body text-center">
                    <h3 class="text-danger">Are you sure delete this user?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    {!! Form::open(['route' => ['admin.users.destroy',$user->id], 'class'=>'pull-left']) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('delete', array('class' => 'btn btn-icon btn-danger')) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection