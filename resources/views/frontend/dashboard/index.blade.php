@extends('frontend.layouts.master')
	@section('header')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-12" id="header">
            <a href="{{url('/')}}"><img src=" {{ asset('public/uploads/banner.jpg') }} " width="100%"></a>
        </div>
    </div>
    @stop
    @section('content')
	<!-- Content-->
	<!-- title selling products -->
	<div class="panel panel-default" style="background: yellow ">
	<div class="panel-body">
		 Selling Products
	</div>
	</div>
	<!--end selling products-->
	<div class="row">
		<!--list selling products-->
			<div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="#" alt="image is not found" width="200px;" >
			      <div class="caption" >
			        <h4>Product name</h4>
			        <p>Price: 200.000</p>
			        <p><a href="#" class="btn btn-primary" role="button">Add Cart</a> <a href="#" class="btn btn-success" role="button">View Detail</a></p>
			      </div>
			    </div>
			 </div>
		<!-- end list selling products -->
	</div>
	<!-- title news product-->
	<div class="panel panel-default" style="background: yellow">
	<div class="panel-body">
		 New Products
	</div>
	</div>
	<!--end title new products-->
	<div class="row">
		<!--list new products-->
			<div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="{{ asset('public/images/aothun.jpg') }}" alt="AO THUN NAM" width="200px">
			      <div class="caption" >
			        <h4>Product name</h4>
			        <p>Price: 200000</p>
			        <p><a href="#" class="btn btn-primary" role="button">Add Cart</a> <a href="#" class="btn btn-success" role="button">View Detail</a></p>
			      </div>
			    </div>
			 </div>
        <!-- end list new products-->
	</div>
	@stop