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
         <li><a href="#"><i class="fa fa-dashboard"></i>Level</a></li>
         <li class="active">list</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
    <!-- flassMessage -->
    <div class="row">
        <div class="col-xs-12">
            @include('flash::message')
        </div>
    </div>
    <!-- form listCategory -->
    <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List Category</h3>
                            <a href="{{ route('admin.categories.create') }}">
                                <button type="button" class="btn btn-floating btn-primary btn-sm pull-right">
                                <i class="icon wb-plus" aria-hidden="true"> </i></button>
                            </a>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="dataTables-users" class="table table-bordered dataTable table-striped" data-plugin="dataTable">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Stt</th>
                                        <th style="text-align: center;">Name</th>
                                        <th style="text-align: center;">Image</th>
                                        <th style="text-align: center;">Edit</th>
                                        <th style="text-align: center;">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $stt=0; ?>
                                @foreach($categories as $item)
                                <?php $stt+=1; ?>
                                  <tr>
                                      <td style="text-align: center; padding-top: 60px;">{!! $stt !!}</td>
                                      <td style="text-align: center; padding-top: 60px;">{!! $item->name !!} </td>
                                      <td style="text-align: center;"><img src="{{ asset('/uploads/'.$item->image) }}" width="100px;" /></td>
                                      <td style="text-align: center; padding-top: 60px;"><a href="{!! route('admin.categories.edit',$item->id) !!}">Edit</a></td>
                                      <td style="text-align: center; padding-top: 60px;">
                                          {{ Form::open(['route'=>['admin.categories.destroy',$item->id],'method'=>'DELETE']) }}
                                            <button onclick="return messageDelete('Bạn chắc chắc xóa ?')" type="submit" id="delete" class="btn btn-link">Delete</button>
                                          {{ Form::close() }}
                                      </td>
                                   </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
            <!-- pagination -->
            <nav style="text-align: right;">
              @if( $categories->lastPage() > 1 )
                  <ul class="pagination">
                    @if( $categories->currentPage() != 1 )
                        <li>
                          <a href="{!! $categories->url($categories->currentPage() -1) !!}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                    @endif
                    @for( $i =1 ; $i <= $categories->lastPage(); $i = $i +1 )
                        <li class="{!! ($categories->currentPage() == $i) ? 'active' : '' !!}"><a href="{!! $categories->url($i) !!}">{!! $i !!}</a></li>
                    @endfor
                    @if( $categories->currentPage() != $categories->lastPage() )
                        <li>
                          <a href="{!! $categories->url($categories->currentPage() +1) !!}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                    @endif
                  </ul>
              @endif
            </nav>
   </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop