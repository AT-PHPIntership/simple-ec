@include('Backend.layout.header')
	
	@include('Backend.layout.topbar')

	@include('Backend.layout.sidebar')

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

@include('Backend.layout.footer')