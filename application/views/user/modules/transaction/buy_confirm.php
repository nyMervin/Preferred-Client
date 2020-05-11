<body class="login-page">
    <form action="<?php echo base_url() ?>auth/check_otp" method="POST">
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
                    <h3>Please type the verfication code sent to your Register Email.</h3>
                    <span>If the boxes turned ‘red,’ double check your verification code.</br>Otherwise please press resend code.</span>
                    <div id="form">
                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" name="otp[]" />
                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" name="otp[]" />
                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" name="otp[]" />
                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" name="otp[]" />
                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" name="otp[]" />
                      <div class="resend">
                      <p><a href="<?php echo base_url().'resent-code'?>" style="color:green !important;" >Resend Code</a></p>
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

</div>