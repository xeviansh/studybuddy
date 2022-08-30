
		
		
		
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/vendor/jquery.min.js" ></script>
      <script src="<?php echo base_url(); ?>assets/vendor/bootstrap.min.js"></script>   
		
        <script src="<?php echo base_url(); ?>/assets/js/custom.js" ></script>

        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>/assets/vendor/popper.min.js"></script>
     

        <!-- Perfect Scrollbar -->
        <script src="<?php echo base_url(); ?>/assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- MDK -->
        <script src="<?php echo base_url(); ?>/assets/vendor/dom-factory.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="<?php echo base_url(); ?>/assets/js/app.js"></script>

        <!-- Highlight.js -->
        <script src="<?php echo base_url(); ?>/assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="<?php echo base_url(); ?>/assets/js/app-settings.js"></script>

        <!-- Nestable -->
        <script src="<?php echo base_url(); ?>assets/vendor/jquery.nestable.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/nestable.js"></script>

        <!-- Quill -->
        <script src="<?php echo base_url(); ?>assets/vendor/quill.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/quill.js"></script>

        <!-- Flatpickr -->
        <script src="<?php echo base_url(); ?>assets/vendor/flatpickr/flatpickr.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/flatpickr.js"></script>

        <!-----Datatable------->
        <!-- DataTables  & Plugins -->
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/fullcalendar/lib/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/fullcalendar/daygrid/daygrid.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/fullcalendar/timegrid/timegrid.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/fullcalendar/interaction/interaction.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/fullcalendar/app-calendar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/chart/chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/chart/charts-chartjs.min.js"></script>
    

    <script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'you want to delete the record  permanantly!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});

</script>
<script>
 function onlyNumberKey(evt) {

    // Only ASCII character in that range allowed
   var ASCIICode = (evt.which) ? evt.which : evt.keyCode
   if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
     return false;
   return true;
 }
</script>
</body>
</html>