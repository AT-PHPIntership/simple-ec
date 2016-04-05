@include('frontend.layouts.header')
	<!-- navbar -->
    @include('frontend.layouts.nav')
	<!--end navbar -->
	<!--header-->
	@yield('header')
	<!--end header -->

	<!-- Content-->
	@yield('content')
	<!-- content-->
    <!-- include js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/bootstrap/js/jquery-libary.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/bootstrap/js/bootstrap.min.js') }}"></script>
@include('frontend.layouts.footer')