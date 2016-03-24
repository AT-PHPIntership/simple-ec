<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Login | Laravel 5.2</title>
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

  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('/assets/admin/css/pages/login.css') }}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('/assets/admin/fonts/web-icons/web-icons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/admin/fonts/brand-icons/brand-icons.min.css') }}">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <link rel="stylesheet" href="{{ asset('/assets/admin/vendor/toastr/toastr.css') }}">

  <script src="{{ asset('/assets/admin/vendor/modernizr/modernizr.js') }}"></script>
  <script src="{{ asset('/assets/admin/vendor/breakpoints/breakpoints.js') }}"></script>

  <script>
    Breakpoints();
  </script>
</head>
<body class="page-login layout-full">

  <!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
      <div class="brand">
          <img class="brand-img" src="http://laravel.com/assets/img/laravel-logo.png" alt="...">
      </div>
      <!-- Show errors -->
      @if (count($errors) > 0)
        <div style="top:14px !important;" id="toast-top-right" class="toast-top-right" aria-live="polite" role="alert">
          <div class="toast-top-full-width alert alert-danger toast toast-just-text toast-danger toast-shadow" style="display: block;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <div class="toast-message">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      @endif
      <!-- End show errors -->  
      @yield('content')
      <footer class="page-copyright">
        <p>WEBSITE BY BINHDQ</p>
        <p>© 2015. All RIGHT RESERVED.</p>
        <div class="social">
           <a href="javascript:void(0)">
           <i class="icon bd-twitter" aria-hidden="true"></i>
           </a>
           <a href="javascript:void(0)">
           <i class="icon bd-facebook" aria-hidden="true"></i>
           </a>
           <a href="javascript:void(0)">
           <i class="icon bd-dribbble" aria-hidden="true"></i>
           </a>
        </div>
     </footer>
    </div>
  </div>
  <!-- End Page -->

  <!-- Core  -->
  <script src="{{ asset('/assets/admin/vendor/jquery/jquery.js') }}"></script>
  <script src="{{ asset('/assets/admin/vendor/bootstrap/bootstrap.js') }}"></script>
  <script src="{{ asset('/assets/admin/vendor/animsition/jquery.animsition.js') }}"></script>
  <script src="{{ asset('/assets/admin/vendor/asscroll/jquery-asScroll.js') }}"></script>
  <script src="{{ asset('/assets/admin/vendor/mousewheel/jquery.mousewheel.js') }}"></script>
  <script src="{{ asset('/assets/admin/vendor/asscrollable/jquery.asScrollable.all.js') }}"></script>
  <script src="{{ asset('/assets/admin/vendor/ashoverscroll/jquery-asHoverScroll.js') }}"></script>

  <!-- Plugins -->
  <script src="{{ asset('/assets/admin/vendor/switchery/switchery.min.js') }}"></script>
  <script src="{{ asset('/assets/admin/vendor/intro-js/intro.js') }}"></script>
  <script src="{{ asset('/assets/admin/vendor/screenfull/screenfull.js') }}"></script>
  <script src="{{ asset('/assets/admin/vendor/slidepanel/jquery-slidePanel.js') }}"></script>

  <script src="{{ asset('/assets/admin/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

  <!-- Scripts -->
  <script src="{{ asset('/assets/admin/js/core.js') }}"></script>
  <script src="{{ asset('/assets/admin/js/site.js') }}"></script>

  <script src="{{ asset('/assets/admin/js/sections/menu.js') }}"></script>
  <script src="{{ asset('/assets/admin/js/sections/menubar.js') }}"></script>
  <script src="{{ asset('/assets/admin/js/sections/sidebar.js') }}"></script>

  <script src="{{ asset('/assets/admin/js/configs/config-colors.js') }}"></script>
  <script src="{{ asset('/assets/admin/js/configs/config-tour.js') }}"></script>

  <script src="{{ asset('/assets/admin/js/components/asscrollable.js') }}"></script>
  <script src="{{ asset('/assets/admin/js/components/animsition.js') }}"></script>
  <script src="{{ asset('/assets/admin/js/components/slidepanel.js') }}"></script>
  <script src="{{ asset('/assets/admin/js/components/switchery.js') }}"></script>
  <script src="{{ asset('/assets/admin/js/components/jquery-placeholder.js') }}"></script>
  <script src="{{ asset('/assets/admin/vendor/toastr/toastr.js') }}"></script>
  <script src="{{ asset('/assets/admin/js/components/toastr.js') }}"></script>
  
  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>
</body>
</html>