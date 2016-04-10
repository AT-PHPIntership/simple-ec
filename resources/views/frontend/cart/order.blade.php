@extends('frontend.layouts.master')
@section('content')
        <!-- title shopping-cart -->
    <div class="panel panel-default" style="background: yellow ">
        <div class="panel-body">
            Order Products
        </div>
    </div>
    <!--end-->
    <!-- shopping-cart-->
    <div class="row" style="margin: 40px 0px 40px 0px; border-bottom:2px solid #f00;">
        <div class="col-md-6">
            <h4 style="color: green;">Customer information</h4>
            <table class="table">
                <tr>
                    <th>Username</th>
                    <td>{{ Auth::user()->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><a href="#">{{ Auth::user()->email }}</a></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ Auth::user()->phone }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ Auth::user()->address }}</td>
                </tr>
            </table>
            <p style="text-align: left;">
                <a href="{!! route('cart.index') !!}" class="btn btn-primary">Back To Cart</a>
                <a href="{!! route('order.add') !!}" class="btn btn-success">Order Now</a>
            </p>
        </div>
        <div class="col-md-6">
            <h4 style="color: blue;">Products information</h4>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($content as $item)
                    <tr class="">
                        <td class="image"><a href=""><img src="{{ asset('uploads/'. $item['options']['image']) }}" alt=""
                                                          width="50" height="50"></a></td>
                        <td class="name"><a href="">{{ $item['name'] }}</a></td>
                        <td class="quantity"> {{ $item['qty'] }}</td>
                        <td class="price">{{ number_format($item['price'],0,",",".") }}</td>
                        <td class="total text-center">{{ number_format($item['subtotal'],0,",",".") }}</td>
                    </tr>
                @endforeach
                <tr class="text-center">
                    <td colspan="4">Total</td>
                    <td>{{ number_format($total, 0, ",", ".") }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection