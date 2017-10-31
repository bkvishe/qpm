</div>
<div class="modal fade" id="modal-default" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal" onClick="show_dashboard();">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
  <!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; <?php echo date('Y')?> <a href="https://adminlte.io"></a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo assets('theme')?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo assets('theme')?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo assets('theme')?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo assets('theme')?>bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo assets('theme')?>bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo assets('theme')?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo assets('theme')?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo assets('theme')?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo assets('theme')?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo assets('theme')?>bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo assets('theme')?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo assets('theme')?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo assets('theme')?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo assets('theme')?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- Data Tables -->
<script src="<?php echo assets('theme')?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo assets('theme')?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo assets('theme')?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo assets('theme')?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo assets('theme')?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo assets('theme')?>dist/js/demo.js"></script>
<!-- Inputmask -->
<script src="<?php echo assets('theme')?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo assets('theme')?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo assets('theme')?>plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script src="<?php echo assets('js')?>common.js"></script>

<script src="<?php echo assets('js')?>master.js"></script>
</body>
</html>
