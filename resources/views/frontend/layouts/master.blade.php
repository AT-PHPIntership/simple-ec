@include('frontend.layouts.header')
	<!-- menu -->

	<!--end menu -->
    @include('frontend.layouts.menu')
	<!--header-->
	@yield('header')
	<!--end header -->

	<!-- Content-->
	@yield('content')
	<!-- content-->
    <!-- include js -->
    <script type="text/javascript" src="{!! asset('assets/frontend/js/jquery-libary.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/frontend/js/bootstrap.min.js') !!}"></script>
@include('frontend.layouts.footer')