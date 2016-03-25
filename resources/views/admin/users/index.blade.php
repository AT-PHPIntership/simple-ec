@extends('admin.common.layout')
@section('content')
        <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Manager users
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">List users</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">List users</h3>
                            <a href="{{ url('/admin/users/create') }}">
                                <button type="button" class="btn btn-floating btn-primary btn-sm pull-right"><i class="icon wb-plus" aria-hidden="true"></i></button>
                            </a>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            @include('flash::message')
                            <table id="dataTables-users" class="table table-bordered dataTable table-striped"
                                   data-plugin="dataTable">
                                <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    @section('add_scripts')
        <script type="text/javascript">
            $(document).ready(function () {
                $("#dataTables-users").dataTable().fnDestroy();
                $('#dataTables-users').dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '<?= url("/admin/users/data") ?>'
                });
            });
        </script>
    @stop
@endsection