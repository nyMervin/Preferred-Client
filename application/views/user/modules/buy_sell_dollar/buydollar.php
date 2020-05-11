   <?php
  $sdrate = (float)$list['us_dollar_peso_rate_ew_selling_1y'] ;
  ?>


<section class="main-container">
    <div class="container">
<div class="col-md-6">
<div class="login-form-container" id="output">

</div>
</div>
    <div class="col-md-6">
     
        <div class="tips">
            <form  action="<?php echo base_url().'buy-dollar-confirm' ?>" method="POST" id="buy_dollar_form">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                          <p class="account-head">U.S. Dollar</p>
                          <p class="down">Buy Dollars</p>
                </div>
            </div>
             <?php  if(@$this->session->flashdata("success")) { ?>
                        <div class="alert alert-success alert-dismissible">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata("success"); ?>
                        </div>
            <?php } ?>
            <?php  if(@$this->session->flashdata("t_otp_failed")) { ?>
                        <div class="alert alert-warning alert-dismissible">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata("t_otp_failed"); ?>
                        </div>
            <?php } ?>
            <div class="row">

                    <div class="col-md-6 account-data">
                         <p class="act">How Much?  $</p>
                    </div>
                    <div class="col-md-6 account-data form-group">
                        <input type="text" name="how_much" id="how_much"  onkeyup="fun()" value="">
                    </div>
            </div>
            <div class="row">
                    <div class="col-md-6 account-data form-group">
                        <p class="act">DEBIT My Peso Account  ₱</p><span id="debit_amountm"></span>
                    </div>
                    <div class="col-md-6 account-data form-group">
                        <input type="text" name="debit_amount" id="debit_amount" value="" readonly="">
                    </div>
            </div>
            <div class="row">
                    <div class="col-md-6 account-data">
                        <p class="act">Credit my Dollar Account $</p>
                    </div>
                    <div class="col-md-6 account-data form-group">
                        <input type="text" name="credit_amount" id="credit_amount" value="" readonly="">
                    </div>
            </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6 account-data">
                        <button type="submit" class="btn-purple btn-block">CONFIRM</button>
                    </div>
            </div>
        </form>
        </div>
    </div>



</div>

</section>
<!--Page Container End Here-->

<script type="text/javascript">

function fun(){
var rate = <?php echo $sdrate ?>;
var amount = document.getElementById("how_much").value;
var calculate = Math.sqrt(rate * amount);
var ausgabe = (calculate);
$('#debit_amount').val(<?php echo $sdrate; ?> * amount);
$('#credit_amount').val(amount);
// document.getElementById("debit_amount").innerHTML = ausgabe;
  }
 </script>

