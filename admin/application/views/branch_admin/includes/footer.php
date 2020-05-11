      </div>
      <!-- tabs --> 
      
      <!-- /tabs --> 
   </section>
   <!-- Login Section End --> 
   
</div>
<!-- Wrapper Start --> 

<!-- All JS Here --> 
<!-- jQuery Latest Version --> 
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
	 
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>
<script>
  $( function() {
    $( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>


<script type="text/javascript">
   
$('#adminidget').on('change', function() {
  var subadminid = this.value;
  //alert(subadminid);
  var dataString =  'subadminid='+ subadminid;
               
                     $.ajax({
                           type: "POST",
                           url: "<?php echo base_url() ?>branchadmin/Account_officer_query/get_transaction_by_account_officer",
                           data: dataString,
                           success: function(html) {
                            

                            $('#gettransactionlist_adminid').html(html);
                           
                           },
                           beforeSend:function(d){
                                    $('#gettransactionlist_adminid').html("<center><strong style='color:red'><div class='loader'></div>  Please Wait...<br></strong></center>");
                                }

                      });
                     

});

</script>


  <?php if(@$user['id'] !=0){?>


<script type="text/javascript">
   
     var adid = <?php echo $user['id'] ?>; 
     var status = <?php echo $user['status'] ?>;
    
                              if(status == '0') { 
                                 $('.deact_'+adid).hide(); 
                                 $('.act_'+adid).show(); 
                                 $('#changestatus').html='Deactivate';
                                } 
                             else { 
                             $('.deact_'+adid).show(); 
                             $('.act_'+adid).hide(); 
                             $('#changestatus').html='Activate';
                            } 

function chnage_status_admin(adminid)
                  {
                      
                     var dataString =  'adminid='+ adminid;
               //alert(dataString);
                     $.ajax({
                           type: "POST",
                           url: "<?php echo base_url() ?>branchadmin/App_user/chnage_user_status",
                           data: dataString,
                           success: function(html) {
                            if(html=='1'){

                              $('#changestatus').html='Deactivate';
                               $('.deact_'+adminid).hide();
                               $('.act_'+adminid).show(); 

                           }else {

                            $('#changestatus').html='Activate';
                               $('.deact_'+adminid).show();
                               $('.act_'+adminid).hide(); 
                           }
                           location.reload();
                           
                           },
                           beforeSend:function(d){
                                    $('#div-item').html("<center><strong style='color:red'><div class='loader'></div>  Please Wait...<br></strong></center>");
                                }

                      });
                      
            }

</script>
<?php } ?>

<script>  
  function showMessage(messageHTML) {
    // $('#chat-box').append(messageHTML);
  }

  // $(document).ready(function(){
  //   var websocket = new WebSocket("ws://203.190.153.20:2021/phpsocket/php-socket.php"); 
  //   websocket.onopen = function(event) { 
  //     showMessage();    
  //   }
  //   websocket.onmessage = function(event) {
  //     var Data = JSON.parse(event.data);
  //     showMessage(Data.message);
  //     // $('#chat-message').val('');
  //     console.log(Data);
  //   };
    
  //   websocket.onerror = function(event){
  //     showMessage();
  //   };
  //   websocket.onclose = function(event){
  //     showMessage();
  //   }; 



var bbdid='';
$(".bd_btn").click(function() { 
  bbdid = $(this).attr('id'); 
});

$('.buy_dollar_t').on("submit",function(event1){
     
 event1.preventDefault();

var  id = $('#id'+bbdid).val();
var  client_id = $('#client_id'+bbdid).val();
var  debit_peso = $('#debit_peso'+bbdid).val();
var  credit_dollar = $('#credit_dollar'+bbdid).val();
var  transaction_number = $('#transaction_number'+bbdid).val();

      $.ajax({  
               method:"POST",
                 url:"<?php echo base_url(); ?>branchadmin/transaction/set_buy_dollar_transaction",
                 data:{"id":id,"client_id":client_id,"debit_peso":debit_peso,"credit_dollar":credit_dollar,"transaction_number":transaction_number},
                 dataType:"html",
                 success:function(data){

                  var statusj = {status:"1",type:"salart"};
                  statusj["data"] = $.parseJSON(data);

                  var glist = JSON.stringify(statusj);

                  event1.preventDefault();
                  var messageJSON = {
                    chat_user: $.parseJSON(glist),
                    chat_message : "new_rates"
                  };
                  websocket.send(JSON.stringify(messageJSON));
                 
                 location.reload();
                 }  
            }); 

    });

var sbdid='';
$(".sd_btn").click(function() { 
  sbdid = $(this).attr('id'); 
});

$('.sell_dollar_t').on("submit",function(event1){
     
 event1.preventDefault();

var  id = $('#id'+sbdid).val();
var  client_id = $('#client_id'+sbdid).val();
var  credit_peso = $('#credit_peso'+sbdid).val();
var  debit_dollar = $('#debit_dollar'+sbdid).val();
var  transaction_number = $('#transaction_number'+sbdid).val();

      $.ajax({  
               method:"POST",
                 url:"<?php echo base_url(); ?>branchadmin/transaction/set_sell_dollar_transaction",
                 data:{"id":id,"client_id":client_id,"credit_peso":credit_peso,"debit_dollar":debit_dollar,"transaction_number":transaction_number},
                 dataType:"html",
                 success:function(data){

                  var statusj = {status:"1",type:"balart"};
                  statusj["data"] = $.parseJSON(data);

                  var glist = JSON.stringify(statusj);

                  event1.preventDefault();
                  var messageJSON = {
                    chat_user: $.parseJSON(glist),
                    chat_message : "new_rates"
                  };
                  websocket.send(JSON.stringify(messageJSON));
                 
                 location.reload();
                 }  
            }); 

    });

var tbdid='';
$(".td_btn").click(function() { 
  tbdid = $(this).attr('id'); 
});

$('.time_deposit_t').on("submit",function(event1){
     
 event1.preventDefault();

var  id = $('#id'+tbdid).val();
var  client_id = $('#client_id'+tbdid).val();
var  rate = $('#rate'+tbdid).val();
var  debit_peso = $('#debit_peso'+tbdid).val();
var  transaction_number = $('#transaction_number'+tbdid).val();

      $.ajax({  
               method:"POST",
                 url:"<?php echo base_url(); ?>branchadmin/transaction/set_time_deposit_transaction",
                 data:{"id":id,"client_id":client_id,"rate":rate,"debit_peso":debit_peso,"transaction_number":transaction_number},
                 dataType:"html",
                 success:function(data){

                  var statusj = {status:"1",type:"talart"};
                  statusj["data"] = $.parseJSON(data);

                  var glist = JSON.stringify(statusj);

                  event1.preventDefault();
                  var messageJSON = {
                    chat_user: $.parseJSON(glist),
                    chat_message : "new_rates"
                  };
                  websocket.send(JSON.stringify(messageJSON));
                 
                 location.reload();
                 }  
            }); 

    });

var fidid='';
$(".fi_btn").click(function() { 
  fidid = $(this).attr('id'); 
});

$('.fixed_income_t').on("submit",function(event1){
     
 event1.preventDefault();

var  id = $('#id'+fidid).val();
var  client_id = $('#client_id'+fidid).val();
var  rate = $('#rate'+fidid).val();
var  debit_peso = $('#debit_peso'+fidid).val();
var  transaction_number = $('#transaction_number'+fidid).val();

      $.ajax({  
               method:"POST",
                 url:"<?php echo base_url(); ?>branchadmin/transaction/set_fixed_income_transaction",
                 data:{"id":id,"client_id":client_id,"rate":rate,"debit_peso":debit_peso,"transaction_number":transaction_number},
                 dataType:"html",
                 success:function(data){

                  var statusj = {status:"1",type:"salart"};
                  statusj["data"] = $.parseJSON(data);

                  var glist = JSON.stringify(statusj);

                  event1.preventDefault();
                  var messageJSON = {
                    chat_user: $.parseJSON(glist),
                    chat_message : "new_rates"
                  };
                  websocket.send(JSON.stringify(messageJSON));
                 
                 location.reload();
                 }  
            }); 

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