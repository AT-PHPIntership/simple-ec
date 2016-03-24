@include('admin.common.header')
	
	@include('admin.common.topbar')

	@include('admin.common.sidebar')

	@yield('content')
 	
 	<!-- Footer -->
	<footer class="site-footer">
		<div class="site-footer-right">
		  Crafted with <i class="red-600 wb wb-heart"></i> by <a target="blank" href="javascript:void(0)">VUIPLAY</a>
		</div>
	</footer>
@include('admin.common.footer')