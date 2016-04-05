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
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">List users</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List Products</h3>
                            <a href="{{ route('admin.products.create') }}">
                                <button type="button" class="btn btn-floating btn-primary btn-sm pull-right"><i class="icon wb-plus" aria-hidden="true"></i></button>
                            </a>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            @include('flash::message')

                            <table id="dataTables-users" class="table table-bordered dataTable table-striped"
                                   data-plugin="dataTable">
                                <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr class="">
                                        <td>{{$product->category->name}}</td>
                                        <td><img src="{{ asset('/uploads/'.$product->image) }}" class="img img-rounded" width="50" height="50" alt=""></td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>
                                            <a href="{{ route('admin.products.edit',$product->id) }}" class="pull-left btn btn-sm btn-icon btn-default btn-info" >
                                                <i class="icon wb-pencil" aria-hidden="true"></i>
                                            </a>
                                            {{ Form::open(['route' => ['admin.products.destroy',$product->id], 'class'=>'pull-left', 'style' => 'margin-left: 3px;']) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('delete', array('class' => 'btn-del btn btn-sm btn-icon btn-default btn-danger')) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="paginations"> {{ $products->render() }} </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection