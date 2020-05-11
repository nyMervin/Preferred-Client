<!--Page Container Start Here-->
<section class="main-container">
    <div class="container">
<div class="col-md-6">
<div class="login-form-container" id="output">
    
</div>
</div>
    <div class="col-md-offset-1 col-md-5">

        <div class="tips">
            


   <div class="row">
   	        <?php  if(@$this->session->flashdata("success")) { ?>
                        <div class="alert alert-success alert-dismissible">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata("success"); ?>
                        </div>
            <?php } ?>
            <?php  if(@$this->session->flashdata("fi_otp_failed")) { ?>
                        <div class="alert alert-warning alert-dismissible">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata("fi_otp_failed"); ?>
                        </div>
            <?php } ?>
   	        <div class="row">
                <div class="col-md-12">
                	<p class="account-head">Fixed Income</p>
      <form  action="<?php echo base_url().'fixed-income-confirm' ?>" method="POST" id="fixed_income_form">

        <div class="row">
                    <div class="col-md-6 col-md-offset-3 account-data form-group">
                        <p class="" style="text-align: center!important;font-family: Raleway;font-style: normal;font-weight: normal;font-size: 18px;">How Much ?</p>
                        <input type="text" name="amount" placeholder="₱" id="how_much" onkeyup="fun()" value="" required="">
                    </div>
                    
            </div>
            <div class="row">
                    <div class="col-md-6 col-md-offset-3 account-data">
                        <p class="" style="text-align: center!important;font-family: Raleway;font-style: normal;font-weight: normal;font-size: 18px;">Credit my Fixed Income</p>
                        <input type="text" name="credit" placeholder="₱" id="credit_amount" value="" readonly="">
                    </div>
                    
            </div>
            <div class="row">
                    <div class="col-md-6 col-md-offset-3 account-data">
                        <p class="" style="text-align: center!important;font-family: Raleway;font-style: normal;font-weight: normal;font-size: 18px;">DEBIT my Fixed Income</p>
                        <input type="text" name="debit" placeholder="₱" id="debit_amount" value="" readonly="">
                    </div>
                    
            </div>
            <input type="hidden" name="rate" value="<?php echo "1,".$list['fixed_income_rate_t-bills_1y'];?>">
        <div class="col-md-6 col-md-offset-3">
          <div class="account-data">
                <button type="submit" class="btn-purple btn-block">CONFIRM</button>
            </div>
        </div>
            

    </form>
    </div>
</div>

    </div>
           
            </div>
        
        </div>
   
          




        </div>
      </div>
    </div>
    
    </div>
 
    </div>



</div>

</section>
<!--Page Container End Here-->
<script type="text/javascript">

function fun(){
var amount = document.getElementById("how_much").value;
// var calculate = Math.sqrt(rate * amount);
// var ausgabe = (calculate);
// $('#debit_amount').val(<?php echo $bdrate; ?> * amount);
$('#credit_amount').val(amount);
$('#debit_amount').val(amount);
// document.getElementById("debit_amount").innerHTML = ausgabe;
  }
 </script>