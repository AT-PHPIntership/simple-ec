@extends('frontend.layouts.master')
@section('content')
    <div class="row text-center">
        <div class="col-md-12" style="margin: 200px 0px 200px 0px;">
            <h2 class="text-green">Successfull!!!</h2>
            <a href="{!! route('home') !!}" class="btn btn-info">Continue Shopping</a>
        </div>
    </div>
@endsection