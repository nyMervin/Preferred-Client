      </div>
      <!-- tabs --> 
      
      <!-- /tabs --> 
   </section>
   <!-- Login Section End --> 
   
</div>
<!-- Wrapper Start --> 
<link rel="stylesheet" href="<?php echo base_url()?>assets/sweetalert/sweetalert.css" />

<!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
<script src="<?php echo base_url()?>assets/js/jquery-1.9.1.js"></script>
<script src="<?php echo base_url()?>assets/sweetalert/sweetalert.min.js"></script>

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
  

function doconfirm()
{
	   
    job=confirm("Are you sure to leave a admin panel?");
    if(job!=true)
    {
        return false;
    }
}
</script>

<script>  
  function showMessage(messageHTML) {
    // $('#chat-box').append(messageHTML);
  }

  $(document).ready(function(){
    // var websocket = new WebSocket("ws://203.190.153.20:2021/phpsocket/php-socket.php"); 
    // var websocket = new WebSocket("ws://203.190.153.20:2021/phpsocket/php-socket.php"); 
    // websocket.onopen = function(event) { 
    //   showMessage();    
    // }
    // websocket.onmessage = function(event) {
    //   var Data = JSON.parse(event.data);
    //   showMessage(Data.message);
    //   // $('#chat-message').val('');
    //   console.log(Data);
    // };
    
    // websocket.onerror = function(event){
    //   showMessage();
    // };
    // websocket.onclose = function(event){
    //   showMessage();
    // }; 
    
    $('.rate_form').on("submit",function(event){
      event.preventDefault();

                 var buying_rate = $("#buying_rate").val();
           var selling_rate = $("#selling_rate").val();

      

      $.ajax({  
               method:"POST",
                 url:"<?php echo base_url(); ?>admin/update_exchange_rate/update_rates",
                 data:{"buying_rate":buying_rate,"selling_rate":selling_rate},
                 dataType:"html",
                 success:function(data){
                  // var statusj = {status:"1",type:"rate_update"};
                  // statusj["data"] = $.parseJSON(data);

                  // var glist = JSON.stringify(statusj);

                  // event.preventDefault();
                  // var messageJSON = {
                  //   chat_user: $.parseJSON(glist),
                  //   chat_message : "new_rates"
                  // };
                  // websocket.send(JSON.stringify(messageJSON));
                 
                 location.reload();
                 
                 }  
            }); 

    });

    //time deposit update
var tbid='';
$("button").click(function() { 
               tbid = $(this).attr('id'); 
                
});

$('.time_deposit_frm').on("submit",function(event1){
    //$('.timedepositbtn').click(function(event) {
     
      event1.preventDefault();



                /*var ammount_range = $('#ammount_range').val();
                var rate = $('#rate').val();
                var time = $('#time').val();*/


var updateid1 = document.getElementsByClassName( 'updateid'+tbid ),
    updateid  = [].map.call(updateid1, function( input ) {
        return input.value;
    }).join( ',' );
//alert(updateid1);
var ammount_range_input = document.getElementsByClassName( 'ammount_range_input'+tbid ),
    ammount_range  = [].map.call(ammount_range_input, function( input ) {
        return input.value;
    }).join( ',' );

//(ammount_range_input);

var timeinput = document.getElementsByClassName( 'timeinput'+tbid ),
    time  = [].map.call(timeinput, function( input ) {
        return input.value;
    }).join( ',' );

//alert(timeinput);

var rateinput = document.getElementsByClassName( 'rateinput'+tbid ),
    rate  = [].map.call(rateinput, function( input ) {
        return input.value;
    }).join( ',' );

//alert(rateinput);

/*
$('input[name^="rate"]').each(function() {
alert($(this).val());
});*/

//var dataString =   "rate="+ rate +"&time="+time +"&ammount_range[]="+ammount_range;
       //alert(dataString);

      $.ajax({  
               method:"POST",
                 url:"<?php echo base_url(); ?>admin/update_money_market_rate/update_time_deposit",
                 data:{"updateid":updateid,"rate":rate,"time":time,"ammount_range":ammount_range},
                 dataType:"html",
                 success:function(data){

                  // var statusj = {status:"1",type:"time_deposit_rate"};
                  // statusj["data"] = $.parseJSON(data);


                  // var glist = JSON.stringify(statusj);

                  // event1.preventDefault();
                  // var messageJSON = {
                  //   chat_user: $.parseJSON(glist),
                  //   chat_message : "new_rates"
                  // };
                  // websocket.send(JSON.stringify(messageJSON));
                 
                 location.reload();
                 }  
            }); 

    });

$('.fixedincome_rate_form').on("submit",function(event){
      event.preventDefault();

           var fixed_income_rate = $("#fixed_income_rate").val();
      

      $.ajax({  
               method:"POST",
                 url:"<?php echo base_url(); ?>admin/update_fixed_income_rate/update_rates",
                 data:{"fixed_income_rate":fixed_income_rate},
                 dataType:"html",
                 success:function(data){
                  // var statusj = {status:"1",type:"rate_update"};
                  // statusj["data"] = $.parseJSON(data);

                  // var glist = JSON.stringify(statusj);

                  // event.preventDefault();
                  // var messageJSON = {
                  //   chat_user: $.parseJSON(glist),
                  //   chat_message : "new_rates"
                  // };
                  // websocket.send(JSON.stringify(messageJSON));

                  location.reload();
                 
                 
                 }  
            }); 

    });

$('.notifaction_one').on("submit",function(event){
      event.preventDefault();

           var app_user = $("#app_user").val();
           var notifaction = $("#notifaction").val();
      

      $.ajax({  
               method:"POST",
                 url:"<?php echo base_url(); ?>admin/create_notifaction/send_to_one",
                 data:{"app_user":app_user,"notifaction":notifaction},
                 dataType:"html",
                 success:function(data){
                  // var statusj = {status:"1",type:"notifaction_f1"};
                  // statusj["data"] = $.parseJSON(data);

                  // var glist = JSON.stringify(statusj);
                  // console.log(glist);

                  // event.preventDefault();
                  // var messageJSON = {
                  //   chat_user: $.parseJSON(glist),
                  //   chat_message : "notifaction"
                  // };
                  // websocket.send(JSON.stringify(messageJSON));

                  location.reload();
                 
                 
                 }  
            }); 

    });

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
                 url:"<?php echo base_url(); ?>admin/transaction/set_buy_dollar_transaction",
                 data:{"id":id,"client_id":client_id,"debit_peso":debit_peso,"credit_dollar":credit_dollar,"transaction_number":transaction_number},
                 dataType:"html",
                 success:function(data){

                  // var statusj = {status:"1",type:"salart"};
                  // statusj["data"] = $.parseJSON(data);

                  // var glist = JSON.stringify(statusj);

                  // event1.preventDefault();
                  // var messageJSON = {
                  //   chat_user: $.parseJSON(glist),
                  //   chat_message : "new_rates"
                  // };
                  // websocket.send(JSON.stringify(messageJSON));
                 
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
                 url:"<?php echo base_url(); ?>admin/transaction/set_sell_dollar_transaction",
                 data:{"id":id,"client_id":client_id,"credit_peso":credit_peso,"debit_dollar":debit_dollar,"transaction_number":transaction_number},
                 dataType:"html",
                 success:function(data){

                  // var statusj = {status:"1",type:"salart"};
                  // statusj["data"] = $.parseJSON(data);

                  // var glist = JSON.stringify(statusj);

                  // event1.preventDefault();
                  // var messageJSON = {
                  //   chat_user: $.parseJSON(glist),
                  //   chat_message : "new_rates"
                  // };
                  // websocket.send(JSON.stringify(messageJSON));
                 
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
                 url:"<?php echo base_url(); ?>admin/transaction/set_time_deposit_transaction",
                 data:{"id":id,"client_id":client_id,"rate":rate,"debit_peso":debit_peso,"transaction_number":transaction_number},
                 dataType:"html",
                 success:function(data){

                  // var statusj = {status:"1",type:"salart"};
                  // statusj["data"] = $.parseJSON(data);

                  // var glist = JSON.stringify(statusj);

                  // event1.preventDefault();
                  // var messageJSON = {
                  //   chat_user: $.parseJSON(glist),
                  //   chat_message : "new_rates"
                  // };
                  // websocket.send(JSON.stringify(messageJSON));
                 
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
                 url:"<?php echo base_url(); ?>admin/transaction/set_fixed_income_transaction",
                 data:{"id":id,"client_id":client_id,"rate":rate,"debit_peso":debit_peso,"transaction_number":transaction_number},
                 dataType:"html",
                 success:function(data){

                  // var statusj = {status:"1",type:"salart"};
                  // statusj["data"] = $.parseJSON(data);

                  // var glist = JSON.stringify(statusj);

                  // event1.preventDefault();
                  // var messageJSON = {
                  //   chat_user: $.parseJSON(glist),
                  //   chat_message : "new_rates"
                  // };
                  // websocket.send(JSON.stringify(messageJSON));
                 
                 location.reload();
                 }  
            }); 

    });



  });




  </script>


<!-- All JS Here --> 
<!-- jQuery Latest Version --> 
<script src="<?php echo base_url(); ?>assets/bank/js/vendor/jquery-1.12.4.min.js"></script> 
<!-- Bootstrap JS --> 
<script src="<?php echo base_url(); ?>assets/bank/js/bootstrap.min.js"></script> 
<!-- main JS --> 
<!-- Date JS -->
<script src="<?php echo base_url(); ?>assets/js/moment.min.js"></script> 
<!-- End Date JS -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
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

  $(document).ready(function(){

    $('#app_user').keyup(function(e){

      e.preventDefault();


      var client = $('#app_user').val();


      $.ajax({

        type: 'POST',

        url: 'Get/get_all_clients',

        data: {"client":client},

        dataType: 'json',

        success: function(response){

          if(response.error){

            $('#app_user_search').hide();

          }

          else{

            $('#app_user_search').show().html(response.data);

          }

        }

      });

    });



    //fill the input

    $(document).on('click', '.list-gpfrm-list', function(e){

      e.preventDefault();

      $('#app_user_search').hide();

      var id = $(this).data('id');

      $('#app_user').val(id);

    });

  });

//Get Branches

$('#branch').keyup(function(e){

      e.preventDefault();


      var branch = $('#branch').val();


      $.ajax({

        type: 'POST',

        url: 'Get/get_all_branches',

        data: {"branch":branch},

        dataType: 'json',

        success: function(response){

          if(response.error){

            $('#branch_search').hide();

          }

          else{

            $('#branch_search').show().html(response.data);

          }

        }

      });

    });


//fill the input

    $(document).on('click', '.list-gpfrm-list', function(e){

      e.preventDefault();

      $('#branch_search').hide();

      var branch = $(this).data('branch_code');

      $('#branch').val(branch);

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