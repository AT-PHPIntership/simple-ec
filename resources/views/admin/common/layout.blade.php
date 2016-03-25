@include('admin.common.header')
	
	@include('admin.common.topbar')

	@include('admin.common.sidebar')

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

@include('admin.common.footer')