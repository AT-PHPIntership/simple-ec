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
	<!-- title list product -->
	<div class="panel panel-default" style="background: yellow ">
	<div class="panel-body">
		 List Products
	</div>
	</div>
	<!--end-->
	<div class="row">
		<!--List products by categoy-->
            @foreach( $products as $list )
            <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="{!! asset('uploads/'.$list->image) !!}" alt="image not found" >
			      <div class="caption" >
                    <h4>{{ $list->name }}</h4>
			        <p>{{ $list->price }}</p>
			        <p><a href="{!! route('cart.buy', [$list->id, $list->slug]) !!}" class="btn btn-primary" role="button">Add Cart</a> <a href="{!! url('detail/'.$list->id) !!}" class="btn btn-success" role="button">View Detail</a></p>
			      </div>
			    </div>
			 </div>
             @endforeach
		<!-- end -->
	</div>
    <div class="row">
        <div class="col-md-12">
        <!-- Pagination -->
             <div class="paginate"> {!! $products->render() !!} </div>
        <!-- end -->
        </div>
    </div>
	@stop