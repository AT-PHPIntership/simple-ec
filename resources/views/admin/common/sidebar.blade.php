<div class="site-menubar">
   <div class="site-menubar-body">
      <div>
         <div>
            <ul class="site-menu">
               <li class="site-menu-category">Dashboard</li>
               <li class="site-menu-item">
                  <a class="animsition-link" href="{{ url('/admin/users') }}" data-slug="manager-user">
                     <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                     <span class="site-menu-title">Manager Users</span>
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <div class="site-menubar-footer">
      <a href="{{ url('admin/setting') }}" class="fold-show" data-placement="top" data-toggle="tooltip"
         data-original-title="Settings">
      <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
      <span class="icon wb-eye-close" aria-hidden="true"></span>
      </a>
      <a href="{{ url('/logout') }}" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
      <span class="icon wb-power" aria-hidden="true"></span>
      </a>
   </div>
</div>