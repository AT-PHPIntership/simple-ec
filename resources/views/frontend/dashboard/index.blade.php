@extends('frontend.layouts.master')
	@section('header')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-12" id="header">
            <a href="{{url('/')}}"><img src=" {{ asset('uploads/banner.jpg') }} " width="100%"></a>
        </div>
    </div>
    @stop
    @section('content')
	<!-- Content-->
	<!-- title news product-->
	<div class="panel panel-default" style="background: yellow">
	<div class="panel-body">
		 New Products
	</div>
	</div>
	<!--end title new products-->
	<div class="row">
		<!--list new products-->
			@foreach( $products as $products )
            <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <a href="#">
                    <img src="{{ asset('uploads/'.$products->image) }}" alt="image not found" width="200px">
                  </a>
			      <div class="caption" >
			        <h4 style="color:blue;">{{ $products->name }}</h4>
			        <p style="color:red;">{{ number_format($products->price,0,",",".") }} $</p>
			        <p><a href="#" class="btn btn-primary" role="button">Add Cart</a> <a href="#" class="btn btn-success" role="button">View Detail</a></p>
			      </div>
			    </div>
			 </div>
             @endforeach
        <!-- end list new products-->
	</div>
	@stop