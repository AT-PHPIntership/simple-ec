<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>AdminLTE 2 | Starter</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet" href="{{ asset('/assets/admin/bootstrap/css/bootstrap.min.css') }}">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{ asset('/assets/admin/fonts/font-awesome/font-awesome.min.css') }}">

		<!-- Ionicons -->
		<link rel="stylesheet" href="{{ asset('/assets/admin/fonts/ionicons/ionicons.min.css') }}">

		<!-- web-icons -->
		<link rel="stylesheet" href="{{ asset('/assets/admin/fonts/web-icons/web-icons.min.css') }}">
		<!-- DataTables -->
		<link rel="stylesheet" href="{{ asset('/assets/admin/plugins/datatables/dataTables.bootstrap.css') }}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{ asset('/assets/admin/dist/css/AdminLTE.min.css') }}">
		<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
			  page. However, you can choose any other skin. Make sure you
			  apply the skin class to the body tag so the changes take effect.
		-->
		<link rel="stylesheet" href="{{ asset('/assets/admin/dist/css/skins/skin-blue.min.css') }}">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="{{ url('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
		<script src="{{ url('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			@include('backend.layouts.topbar')

			@include('backend.layouts.sidebar')

			@yield('content')

			<!-- Main Footer -->
			<footer class="main-footer">
				<!-- To the right -->
				<div class="pull-right hidden-xs">
					Anything you want
				</div>
				<!-- Default to the left -->
				<strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
			</footer>
			<div class="control-sidebar-bg"></div>
		</div><!-- ./wrapper -->
	<!-- REQUIRED JS SCRIPTS -->

	<!-- jQuery 2.1.4 -->
	<script src="{{ asset('/assets/admin/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- myscript -->
    <script src="{{ asset('/assets/admin/bootstrap/js/myscript.js') }}"></script>
	<!-- Bootstrap 3.3.5 -->
	<script src="{{ asset('/assets/admin/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('/assets/admin/dist/js/app.min.js') }}"></script>
	<!-- DataTables -->
	<script src="{{ asset('/assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('/assets/admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
	<!-- SlimScroll -->
	<script src="{{ asset('/assets/admin/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
	<!-- FastClick -->
	<script src="{{ asset('/assets/admin/plugins/fastclick/fastclick.min.js') }}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ asset('/assets/admin/dist/js/demo.js') }}"></script>

	@yield('add_scripts')
</body>
</html>