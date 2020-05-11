   <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

   <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

   <script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>

   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/crop/crop_image.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/crop/croppie.js"></script>







   <script type="text/javascript">

	$(document).ready(function() {

	$(".btn-pref .btn").click(function () {

	    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");

	    $(this).removeClass("btn-default").addClass("btn-primary");   

	});

	});

   </script>

<script type="text/javascript">

   $('#branch').on('change', function() {

  var branchcode =  this.value;

  $('#branchcode').val(branchcode);

});

</script>


<script>
            var BASE_URL = "<?php echo base_url(); ?>";
            var login_error = "<?php echo $this->session->flashdata('login_error'); ?>";
                 $('#change_pass').bootstrapValidator({  
        fields: {
                 oldp: {
                validators: {
                    notEmpty: {
                        message: 'The Old Password is required and can\'t be empty'
                    }
                }
            },
            newp: {
                validators: {
                    notEmpty: {
                        message: 'The New Password is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 20,
                        message: 'The Password must be more than 6 and less than 30 characters long'
                    }
                }
            },
            conp: {
                validators: {
                    notEmpty: {
                        message: 'The Confirm Password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'newp',
                        message: 'The Password and Confirm Password are not same'
                    }
                }
            }     
        
        
        }
        }).on('success.form.bu');


        $('#buy_dollar_form').bootstrapValidator({  

        fields: {

            how_much: {

                validators: {

                    notEmpty:              {

                        message: 'Please Enter the Amount'

                                       },

                    integer: {

                        message: 'Please Enter valid Amount'

                    }

                }

            }
        }

        }).on('success.form.bv');

        $('#sell_dollar_form').bootstrapValidator({  

        fields: {

            how_much: {

                validators: {

                    notEmpty:              {

                        message: 'Plesae Enter the Amount'

                                       },

                    integer: {

                        message: 'Please Enter valid Amount'

                    }

                }

            }
        }

        }).on('success.form.bv');

$('#time_deposit_form').bootstrapValidator({  

        fields: {

            how_much: {

                validators: {

                    notEmpty:              {

                        message: 'Plesae Enter the Amount'

                                       },

                    integer: {

                        message: 'Please Enter valid Amount'

                    }

                }

            }
        }

        }).on('success.form.bv');

$('#fixed_income_form').bootstrapValidator({  

        fields: {

            how_much: {

                validators: {

                    notEmpty:              {

                        message: 'Plesae Enter the Amount'

                                       },

                    integer: {

                        message: 'Please Enter valid Amount'

                    }

                }

            }
        }

        }).on('success.form.bv');
        </script>


<script type="text/javascript">
   
$('#resentcode').on('click', function() {
  var transid = $('#last-transaction-id').val();
  var howmuch = $('#howmuch').val();
  var ttype = $('#t_type').val();
  
  var dataString =  'transid='+ transid+'&howmuch='+howmuch+'&type='+ttype;
                     $.ajax({
                           type: "POST",
                           url: "<?php echo base_url() ?>buy_sell_dollar/resend_otp_code",
                           data: dataString,
                           success: function(html) {
                           $('#div-item').hide();
                            $("#timer").hide();
                                timer(60);   
                            $("#timer").show();
                            $("#resentcode").hide();
                           },
                           beforeSend:function(d){
                            $("#div-item").show();
                                    $('#div-item').html("<center><strong style='color:red'><div class='loader'></div>  Please Wait...<br></strong></center>");
                                }

                      });
                     

});

</script>
<script src="<?php echo base_url()?>admin/assets/sweetalert/sweetalert.min.js"></script>

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

let timerOn = true;

function timer(remaining) {
  var m = Math.floor(remaining / 60);
  var s = remaining % 60;
  
  m = m < 10 ? '0' + m : m;
  s = s < 10 ? '0' + s : s;
  document.getElementById('timer').innerHTML ='Time Left '+ m + ':' + s;
  remaining -= 1;
  
  if(remaining >= 0 && timerOn) {
    setTimeout(function() {
        timer(remaining);
    }, 1000);
    return;
  }

  if(!timerOn) {
    
    
    return;
  }
    $("#resentcode").show();
    $("#timer").hide();
  //alert('Timeout for otp');
}
</script>

<script>
    $(document).ready(function(){
        function getData(){
            $.ajax({
                type: 'POST',
                url: BASE_URL+'home/get_rates',
                success: function(data){
                    $('#output').html(data);
                }
            });
        }
        function getInbox(){
            $.ajax({
                type: 'POST',
                url: BASE_URL+'home/get_inbox',
                success: function(data){
                    $('#inboxCount').html(data);
                }
            });
        }
        getData();
        getInbox()
        setInterval(function () {
            getData();
            getInbox() 
        }, 1000);  // it will refresh your data every 1 sec

    });
</script>

 </body>



</html>