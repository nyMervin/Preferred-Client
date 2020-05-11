<body class="login-page">
    <form action="<?php echo base_url().'time_deposit/request' ?>" method="POST">
<section class="main-container">
    <div class="container">
        <div class="col-md-10 col-md-offset-1" >

            <div id="wrapper">

                  <div id="dialog">
                    <!-- <button class="close">×</button> -->
                    <?php if($this->session->flashdata('otp_error')) {  ?>

                       <div class="alert alert-warning"><b><?php echo $this->session->flashdata('otp_error');?></b></div>

                    <?php  } ?>
                    <?php if($this->session->flashdata('otp_resent')) {  ?>

                       <div class="alert alert-success"><b><?php echo $this->session->flashdata('otp_resent');?></b></div>

                    <?php  } ?>
                    <?php if($this->session->flashdata('otp_resent_error')) {  ?>

                       <div class="alert alert-danger"><b><?php echo $this->session->flashdata('otp_resent_error');?></b></div>

                    <?php  } ?>
                    <h3>Please enter verification code sent to your Register Email (<?php echo $user_email; ?>) to complete this Transactions .</h3>
                    <span>If the boxes turned ‘red,’ double check your verification code.</br>Otherwise please press resend code.</span>
                    <div id="form">
                      <input type="hidden" id="last-transaction-id" name="t_l_id" value="<?php echo $t_l_id; ?>">
                      <input type="hidden" id="howmuch" name="rate" value="<?php echo $this->input->post('rate'); ?>">
                      <input type="hidden" id="t_type" name="t_type" value="Time Deposite">
                      <input type="hidden" name="amount" value="<?php echo $this->input->post('amount'); ?>">
                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" name="otp[]" />
                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" name="otp[]" />
                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" name="otp[]" />
                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" name="otp[]" />
                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" name="otp[]" />
                      <div class="resend">
                  </div>
                      <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-4"></div>
                      </div>
                      <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                      <button class="btn-purple" type="submit">Confirm</button>
                        </div>
                        <div class="col-md-4"></div>
                      </div>
                    </div>
                  </div>
            </div>  
        </div>
</div>

</section>
</form>
<div id="div-item"></div>
<center><span id="timer" style="display: none;">Time Left 00:00</span></center>
<button class="btn-green" id="resentcode">Resend Code</button>
</div>