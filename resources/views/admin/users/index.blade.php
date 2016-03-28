@extends('admin.common.layout')
@section('content')
<div class="page animsition">
  <div class="page-header">
    <h1 class="page-title">Manager users</h1>
    <ol class="breadcrumb breadcrumb-arrow">
      <li><a href="{{ url('/admin') }}">Home</a></li>
      <li class="active">List users</li>
      <a href="{{ url('/admin/users/create') }}">
        <button type="button" class="btn btn-floating btn-primary btn-sm pull-right"><i class="icon wb-plus" aria-hidden="true"></i></button>
      </a>
    </ol>
  </div>
  <div class="page-content">
    <div class="panel">
      <div class="panel-body">
        <!-- Display message -->
        @include('flash::message')
        <table id="dataTables-users" class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
          <thead>
            <tr>
              <th>Username</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>
</div>

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