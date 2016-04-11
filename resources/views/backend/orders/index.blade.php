@extends('backend.layouts.master')
@section('content')
        <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Manager orders
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">List orders</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            @include('flash::message')

                            <table id="dataTables-orders" class="table table-bordered dataTable table-striped"
                                   data-plugin="dataTable">
                                <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Products Number</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr class="{{ $order->viewBold }}">
                                        <td>{{$order->user->name}}</td>
                                        <td>{{count($order->ordersDetail)}}</td>
                                        <td> <span class="label {{ $order->viewCss }}">{{ $order->viewTitle }}</span></td>
                                        <td >{{$order->created_at}}</td>
                                        <td>
                                            <a href="{!! route('admin.orders.show',$order->id) !!} " class="pull-left margin-r-5 btn btn-sm btn-icon btn-default btn-info" >
                                            <i class="icon wb-eye" aria-hidden="true"></i>
                                            </a>
                                            <a href="{!! route('admin.orders.edit',$order->id) !!}" class="pull-left margin-r-5 btn btn-sm btn-icon btn-default btn-warning" >
                                                <i class="icon wb-pencil" aria-hidden="true"></i>
                                            </a>
                                            {{ Form::open(['route' => ['admin.orders.destroy',$order->id], 'class'=>'pull-left']) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('delete', array('class' => 'btn-del btn btn-sm btn-icon btn-default btn-danger')) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="paginations"> {!! $orders->render() !!} </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection