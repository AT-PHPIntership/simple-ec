<!DOCTYPE html>
<html class="no-js before-run" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta name="description" content="bootstrap admin template">
      <meta name="author" content="">
      <title>Admin | Laravel 5.2</title>
      <link rel="apple-touch-icon" href="{{ asset('/assets/admin/images/apple-touch-icon.png') }}">
      <link rel="shortcut icon" href="http://laravel.com/favicon.png">
      <!-- Stylesheets -->
      <link rel="stylesheet" href="{{ asset('/assets/admin/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/admin/css/bootstrap-extend.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/admin/css/site.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/admin/vendor/animsition/animsition.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/admin/vendor/asscrollable/asScrollable.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/admin/vendor/switchery/switchery.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/admin/vendor/intro-js/introjs.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/admin/vendor/slidepanel/slidePanel.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/admin/vendor/flag-icon-css/flag-icon.css') }}">
      <!-- Plugin -->
      <link rel="stylesheet" href="{{ asset('/assets/admin/vendor/chartist-js/chartist.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/admin/vendor/jvectormap/jquery-jvectormap.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/admin/vendor/toastr/toastr.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/admin/vendor/switchery/switchery.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/admin/vendor/icheck/icheck.css') }}">
      <!-- Page -->
      <link rel="stylesheet" href="{{ asset('/assets/admin/css/../fonts/weather-icons/weather-icons.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/admin/css/dashboard/v1.css') }}">
      <!-- Fonts -->
      <link rel="stylesheet" href="{{ asset('/assets/admin/fonts/web-icons/web-icons.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/admin/fonts/brand-icons/brand-icons.min.css') }}">
      <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
      <script src="{{ asset('/assets/admin/vendor/breakpoints/breakpoints.js') }}"></script>
      <link rel='stylesheet' href="{{ asset('/assets/admin/vendor/datatables-bootstrap/dataTables.bootstrap.css') }}">
      <link rel='stylesheet' href="{{ asset('/assets/admin/vendor/datatables-fixedheader/dataTables.fixedHeader.css') }}">
      <link rel='stylesheet' href="{{ asset('/assets/admin/vendor/datatables-responsive/dataTables.responsive.css') }}">
      <link rel='stylesheet' href="{{ asset('/assets/admin/vendor/bootstrap-sweetalert/sweet-alert.css') }}">

      <!-- Css upload files -->
      <link rel='stylesheet' href="{{ asset('/assets/admin/css/jquery.fileupload.css') }}">
      <link rel='stylesheet' href="{{ asset('/assets/admin/css/jquery.fileupload-ui.css') }}">

      <!-- Multiple select -->
      <link rel='stylesheet' href="{{ asset('/assets/admin/vendor/multi-select/multi-select.css') }}">

       <!-- Plugin -->
       <link rel="stylesheet" href="{{ asset('/assets/admin/vendor/summernote/summernote.css') }}">

       <!-- Page -->
       <link rel="stylesheet" href="{{ asset('/assets/admin/fonts/font-awesome/font-awesome.css') }}">
      <script>
         Breakpoints();
      </script>
      <style>
            @media (max-width: 480px) {
                  .panel-actions .dataTables_length {
                        display: none;
                  }
            }
          
            @media (max-width: 320px) {
                  .panel-actions .dataTables_filter {
                    display: none;
                  }
            }
          
            @media (max-width: 767px) {
                  .dataTables_length {
                        float: left;
                  }
            }
      </style>
      @yield('add_stylesheet')
  </head>
  <body class="dashboard">