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
         <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
         <li class="active">edit</li>
      </ol>
   </section>

   <!-- Main content -->
   <section class="content">

   <div class="row">
        <div class="col-md-6">
           <h2 style="color:red;">Edit Category</h2>
                {!! Form::open(['route'=>['admin.categories.update',$category['id']],'method'=>'PUT','files'=>'true']) !!}
                 <!-- Categories Name -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input size="50" type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Categories Name", value="{!! old('txtName',isset($category) ? $category['name'] : null )!!}" />
                    <p style="color:red; padding-top: 5px;">{!! $errors->first('name'); !!}</p>
                  </div>
                  <!-- End -->
                  <!-- Image old -->
                  <div class="form-group">
                    <label for="exampleInputFile">Image old</label>
                    <img src="{{ asset('/uploads/'.$category->image) }}" width="200px" />
                  </div>
                  <!-- End -->
                  <!-- Image new -->
                  <div class="form-group">
                    <label for="exampleInputFile">Image new</label>
                    <input type="file" id="exampleInputFile" name="image" />
                    <p style="color: red; padding-top: 5px;">{!! $errors->first('image'); !!}</p>
                  </div>
                  <!-- End -->
                  <button type="submit" name="ok" class="btn btn-default">Edit Category</button>
                {!! Form::close() !!}
             </div>
        </div>
    </div>
   </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop