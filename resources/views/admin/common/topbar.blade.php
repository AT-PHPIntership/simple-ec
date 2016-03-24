<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
         data-toggle="menubar">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
         data-toggle="collapse">
      <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
         data-toggle="collapse">
      <span class="sr-only">Toggle Search</span>
      <i class="icon wb-search" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle">
         <a href="{{ url('/admin') }}">
            <img class="navbar-brand-logo" src="http://laravel.com/assets/img/laravel-logo.png" title="Remark">
         </a>
      </div>
   </div>
   <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
         <!-- Navbar Toolbar -->
         <ul class="nav navbar-toolbar">
            <li class="hidden-float" id="toggleMenubar">
               <a data-toggle="menubar" href="#" role="button">
               <i class="icon hamburger hamburger-arrow-left">
               <span class="sr-only">Toggle menubar</span>
               <span class="hamburger-bar"></span>
               </i>
               </a>
            </li>
            <li class="hidden-xs" id="toggleFullscreen">
               <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
               <span class="sr-only">Toggle fullscreen</span>
               </a>
            </li>
         </ul>
         <!-- End Navbar Toolbar -->
         <!-- Navbar Toolbar Right -->
         <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
            <li class="dropdown">
               <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                  data-animation="slide-bottom" role="button">
               <span class="avatar avatar-online">
               <img src="http://laravel.com/assets/img/laravel-logo.png" alt="...">
               <i></i>
               </span>
               </a>
               <ul class="dropdown-menu" role="menu">
                  <li role="presentation">
                     <a href="{{ url('/admin/user/profile') }}" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                  </li>
                  <li role="presentation">
                     <a href="{{ url('/admin/setting') }}" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
                  </li>
                  <li class="divider" role="presentation"></li>
                  <li role="presentation">
                     <a href="{{ url('/logout') }}" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
                  </li>
               </ul>
            </li>
         </ul>
         <!-- End Navbar Toolbar Right -->
      </div>
   </div>
</nav>