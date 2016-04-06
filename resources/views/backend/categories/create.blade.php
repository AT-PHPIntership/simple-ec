 @extends('backend.layouts.master')
 @section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         CATEGORY
         <small>Danh mục sản phẩm</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="{!! route('admin.categories.index') !!}"><i class="fa fa-dashboard"></i> Level</a></li>
         <li class="active">CreateCategory</li>
      </ol>
   </section>

   <!-- Main content -->
   <section class="content">

   <div class="row">
        <div class="col-md-6">
           <h2 style="color:red;">Insert Category</h2>
                   {!! Form::open([
                        'route'=>'admin.categories.store',
                        'files'=>true
                   ]) !!}
                 <!-- Categories Name -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input size="50" type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Categories Name" value="{{ old('name') }}" />
                    <p style="color:red; padding-top: 5px;">{!! $errors->first('name'); !!}</p>
                  </div>
                  <!-- End -->
                  <!-- Image -->
                  <div class="form-group">
                    <label for="exampleInputFile">Category Image</label>
                    <input type="file" id="exampleInputFile" name="image" />
                    <p style="color: red; padding-top: 5px;">{!! $errors->first('image'); !!}</p>
                  </div>
                  <!-- End -->
                  <button type="submit" name="ok" class="btn btn-default">Create Category</button>
                {!! Form::close() !!}
             </div>
        </div>
    </div>
   </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop