@extends('frontend.layouts.master')
	@section('header')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-12" id="header">
            <a href="#"><img src=" {!! asset('uploads/banner.jpg') !!} " width="100%"></a>
        </div>
    </div>
    @stop
    @section('content')
	<!-- Content-->
	<!-- title detail product -->
	<div class="panel panel-default" style="background: yellow; ">
	<div class="panel-body">
		 Detail Product
	</div>
	</div>
	<!--end-->
	<!--Detail Product-->
    <div class="row" style="margin: 40px 0px 40px 0px;">
		<div class="col-md-3">
			<img style="text-align: center;" src=" {!! asset('uploads/'.$product->image) !!} " width="100%">
		</div>
		<div class="col-md-6">
			{!! Form::open(
                [
                    route('cart.store'),
                    'method' => 'POST'
                ]
            ) !!}
                <input type="hidden" name="id" value="{{ $product->id }}">
                <table class="table">
					<tr>
						<th>Name</th>
                        <td>
                            {{ $product->name }}
                            @if( $product->quantity > 0 )
                                <span style="color:red;"> ( Còn hàng ) </span>
                            @else
                                 <span style="color:red;"> ( Hết hàng ) </span>
                            @endif
                        </td>
					</tr>
					<tr>
						<th>Price</th>
						<td>{{ number_format($product->price,0,",",".") }} $</td>
					</tr>
					<tr>
						<th>Description</th>
						<td>{{ $product->description }}</td>
					</tr>
					<tr>
						<th><input name="quantity" value="1" style="padding: 4px;" type="number" min="1" max="1000"></th>
						<td ><a href="{!! route('cart.buy', [$product->slug]) !!}" class="btn btn-success">Add Cart</a></td>
					</tr>
				</table>
			{!! Form::close() !!}
		</div>
		<div class="col-md-3">
			<img style="text-align: center;" src="{!! asset('uploads/'.$product->image) !!}" width="100%">
		</div>
	</div>
	<!-- end-->
    </div>
	@stop