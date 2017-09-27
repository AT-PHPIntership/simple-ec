@extends('backend.layouts.master')

@section('content')
        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>View Order</h1>
        <ol class="breadcrumb">
            <li><a href="{!! route('admin') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{!! route('admin.users.index') !!}">List users</a></li>
            <li class="active">View Order</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">View Order</h3>
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
            <table class="table table-bordered table-striped text-center">
                <thead>
                <tr>
                    <th colspan="2"><h3>INFORMATION CUSTOMERS</h3></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $order->user->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $order->user->email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $order->user->phone }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $order->user->address }}</td>
                </tr>
                </tbody>
            </table>
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th colspan="5"><h3>Info Orders</h3></th>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php $total = 0  ?>
                @foreach($order->ordersDetail as $item)
                    <tr class="">
                        <td class="image"><a href=""><img src="{{ asset('uploads/'. $item->product->image) }}" alt="" width="50" height="50"></a></td>
                        <td class="name"><a href="{!! route('admin.products.edit', $item->product->id) !!}">{{ $item->product->name }}</a></td>
                        <td class="quantity"> {{ $item->quantity }}</td>
                        <td class="price">{{ number_format($item->product->price, 2, ",", ".") }}</td>
                        <td class="total text-center">{{ number_format($item->price, 2, ",", ".") }}</td>
                    </tr>
                    <?php $total+= $item->price ?>
                @endforeach
                    <tr class="text-center">
                        <td colspan="4">Total</td>
                        <td>{{ number_format($total, 2, ",", ".") }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center">
                <a href="{!! route('admin.orders.index') !!}" class="btn btn-default">Go Back</a>
            </div>
        </div><!-- /.box -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection