<!-- jQuery -->
<script src="../assests/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assests/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../assests/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../assests/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../assests/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../assests/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../assests/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assests/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../assests/plugins/moment/moment.min.js"></script>
<script src="../assests/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../assests/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../assests/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="assests/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assests/dist/js/adminlte.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assests/dist/js/pages/dashboard.js"></script>
<!--Data-table script-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    // Close sidebar on outside click
    $(document).click(function(event) {
        var clickover = $(event.target);
        var _opened = $("body").hasClass("sidebar-open");
        if (_opened && !clickover.closest('.main-sidebar').length && !clickover.closest('.nav-link[data-widget="pushmenu"]').length) {
            $('[data-widget="pushmenu"]').PushMenu('collapse');
        }
    });
});
</script>
</body>
</html>