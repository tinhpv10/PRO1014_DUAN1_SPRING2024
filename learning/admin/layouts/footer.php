</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="admin/assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="admin/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="admin/assets/plugins/select2/js/select2.full.min.js"></script>
<!-- ChartJS -->
<script src="admin/assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="admin/assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="admin/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="admin/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="admin/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="admin/assets/plugins/moment/moment.min.js"></script>
<script src="admin/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="admin/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="admin/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="admin/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin/assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="admin/assets/dist/js/pages/dashboard.js"></script> -->
<script src="admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="admin/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="admin/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="admin/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script>
    $(function() {
        // Summernote
        $('#summernote').summernote();
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
        $("#list_data").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#list_data_wrapper .col-md-6:eq(0)');
        // Dropzone.autoDiscover = false;
        // $("div.my-dropzone").dropzone({
        //     maxFiles: 2000,
        //     url: "/ajax_file_upload_handler/",
        //     success: function (file, response) {
        //         console.log(response);
        //     }
        // });

    })
</script>
</body>

</html>