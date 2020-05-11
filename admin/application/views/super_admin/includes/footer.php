   </section>
   <!-- Login Section End --> 
   
</div>
<!-- Wrapper Start --> 

<style type="text/css">
	div#example_filter input.form-control.form-control-sm {
    position: relative;
    top: 50px;
    right: 45px;
    z-index: 1;
}
div#example_filter label {
color: #d2d2d2;
}
.admin-history div#example_filter input.form-control.form-control-sm {
    position: relative;
    top: -35px;
    right: 0;
    z-index: 1;
}
div#example_filter {
    display: none;
}
</style>
<!-- Bootstrap JS --> 
<script src="<?php echo base_url(); ?>assets/bank/js/bootstrap.min.js"></script> 
<!-- main JS --> 
<!-- <script src="<?php echo base_url(); ?>assets/bank/js/main.js"></script> -->

<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
 --><script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
});
  $('#example').dataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false, 
	language: {
        search: "_INPUT_",
        searchPlaceholder: "Search admin user name"
    }
    });
    
var table = $('#example').DataTable();
 $('#searchboxid').keyup(function(){
 table.search($(this).val()).draw() ;
 })
</script>
<script src="<?php echo base_url(); ?>assets/bank/js/vendor/jquery-1.12.4.min.js"></script> 
<!-- Bootstrap JS --> 
<script src="<?php echo base_url(); ?>assets/bank/js/bootstrap.min.js"></script> 
<!-- main JS --> 
<!-- Date JS -->
<script src="<?php echo base_url(); ?>assets/js/moment.min.js"></script> 
<!-- End Date JS -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/sweetalert/sweetalert.css" />
<script src="<?php echo base_url()?>assets/sweetalert/sweetalert.min.js"></script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

$(document).on('click', ".logout", function (e) {

     
      swal({
            title: 'Are you sure?',
            text: "You want to log-out!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3f51b5',
            cancelButtonColor: '#ff4081',
            confirmButtonText: 'Great ',
            buttons: {
              cancel: {
                text: "Cancel",
                value: null,
                visible: true,
                closeModal: true,
              },
              confirm: {
                text: "OK",
                value: true,
                visible: true,
                closeModal: true
              },
            }
          }).then((willlogout) => {
              if (willlogout) {
                  
                  window.location.href = "<?php echo base_url() ?>logout";
                  
              } else {
                
              }
            });
     }); 
     </script>
<script>
  var datetime = null,
        date = null;

    var update = function () {
        date = moment(new Date())
        datetime.html(date.format('MMMM, Do dddd YYYY hh:mm'));
        // datetime2.html(date.format('dddd, MMMM Do YYYY'));
        // datetime.html(date.format('M d, Y h:m:s'));

    };

    $(document).ready(function(){
        datetime = $('#live_time');
        update();
        setInterval(update, 1000);
    });
</script>
</body>
</html>