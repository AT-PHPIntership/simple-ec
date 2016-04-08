@extends('frontend.layouts.master')
@section('content')
    @if($total > 0)
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Actions</th>
                <th>Unit Price</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            @foreach($content as $item)
                <tr class="">
                    <td class="image"><a href=""><img src="{{ asset('uploads/'. $item['options']['image']) }}" alt="" width="50" height="50"></a></td>
                    <td class="name"><a href="">{{ $item['name'] }}</a></td>
                    <td class="quantity" width="300px">
                        {!! Form::open(['route' => ['cart.update',$item['rowid']], 'method' => 'PUT']) !!}
                            {{ Form::input('number', 'quantity', $item['qty'], ['class' => 'quantity', 'min'=>'0', 'max'=>'100']) }}
                            <button type="submit" class="btn-link"><i class="glyphicon glyphicon-pencil"></i> Update</button>
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(['route' => ['cart.destroy',$item['rowid']]]) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        <button type="submit" class="btn-link"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                        {!! Form::close() !!}
                    </td>
                    <td class="price">{{ number_format($item['price'],0,",",".") }}</td>
                    <td class="total text-center">{{ number_format($item['subtotal'],0,",",".") }}</td>

                </tr>
            @endforeach
                <tr class="text-center">
                    <td colspan="5">Total</td>
                    <td>{{ number_format($total, 0, ",", ".") }}</td>
                </tr>
            </tbody>
        </table>
        <p style="text-align: right; padding-top:20px; ">
            <a href="{!! route('home') !!}" class="btn btn-primary">Continue Shopping</a>
            <a href="{{ url('order') }}" class="btn btn-danger">Make Order</a>
        </p>
    @else
        <div class="row text-center">
            <div class="col-md-12" style="margin: 200px 0px 200px 0px;">
                <h2 class="text-gray">Your shopping cart is currently empty.</h2>
                <a href="{!! route('home') !!}" class="btn btn-info">Continue Shopping</a>
            </div>
        </div>
    @endif
@endsection