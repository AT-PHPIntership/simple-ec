
  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 2.1.4 -->

  <script src="{{ asset('/assets/admin/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
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
  <!-- Optionally, you can add Slimscroll and FastClick plugins.
       Both of these plugins are recommended to enhance the
       user experience. Slimscroll is required when using the
       fixed layout. -->

  @yield('add_scripts')
  </body>
  </html>