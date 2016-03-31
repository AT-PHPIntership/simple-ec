@extends('backend.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $title }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ url('/admin/products') }}">List users</a></li>
                <li class="active">{{ $title }}</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ $title }}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @include('flash::message')
                {!! Form::open(['route' => 'admin.products.store', 'class' => 'form-horizontal', 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
                    <div class="box-body">
                        <div class="form-group">
                            {!! Form::label('address', 'Category:', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-9">
                                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Name:', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-9">
                                {!! Form::input('text', 'name', null, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label("image", 'Image:', ['class' => 'col-sm-2 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::input('file', "image", null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('quantity', 'Quantity:', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-3">
                                {!! Form::input('text', 'quantity', null, array('class' => 'form-control')) !!}
                            </div>
                            {!! Form::label('price', 'Price:', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-3">
                                {!! Form::input('text', 'price', null, array('class' => 'form-control')) !!}
                            </div>
                            {!! Form::label('unit', 'VNĐ', array('class' => 'col-sm-1 control-label')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Description:', array('class' => 'col-sm-2 control-label')) !!}
                            <div class="col-sm-9">
                                {!! Form::textarea('description', null,['class'=>'form-control', 'rows' => 4, 'cols' => 40]) !!}
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                        <a href="{{ url('/admin/products') }}">
                            <button type="button" class="btn btn-default pull-right">Cancel</button>
                        </a>
                    </div><!-- /.box-footer -->
                {!! Form::close() !!}
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection