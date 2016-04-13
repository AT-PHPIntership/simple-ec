@extends('frontend.layouts.master')
	@section('header')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-12" id="header">
            <a href="{!! url('/') !!}"><img src=" {!! asset('uploads/banner.jpg') !!} " width="100%"></a>
        </div>
    </div>
    @stop
    @section('content')
	<!-- Content-->
	<!-- title new products -->
	<div class="panel panel-default" style="background: yellow ">
	<div class="panel-body">
		 New Products
	</div>
	</div>
	<!--end -->
	<div class="row">
        <!--list news products-->
        @foreach($products as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="{!! asset('uploads/'.$product->image) !!}" alt="image is not found" width="200px;" >
              <div class="caption" >
                <h4>{{ $product->name }}</h4>
                <p>{{ $product->price }}</p>
                <p><a href="{!! route('cart.buy', [$product->slug]) !!}" class="btn btn-primary" role="button">Add Cart</a> <a href="{!! url('detail/'. $product->id) !!}" class="btn btn-success" role="button">View Detail</a></p>
              </div>
            </div>
         </div>
         @endforeach
        <!-- end -->
	</div>
	</div>
	@stop