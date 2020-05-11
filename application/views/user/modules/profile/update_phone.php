
<style type="text/css">
  .new-input{
    width: 100%!important;
    height: 40px!important;
  }
</style>
</head>
<!--Page Container Start Here-->
<body class="login-page">
    <form action="<?php echo base_url() ?>update-user-edit-phone" method="POST">
<section class="main-container">
    <div class="container">
        <div class="col-md-10 col-md-offset-1" >

            <div id="wrapper">

                  <div id="dialog">
                    <!-- <button class="close">×</button> -->
                    
                    <h3>Please type the verfication code sent to you Received on your Register Email ( <?php echo $user_email; ?> ) to Change Your Cell Number.</h3>
                    <span>If the boxes turned ‘red,’ double check your verification code.</br>Otherwise please press resend code.</span>
                    <div id="form">
                      <input type="hidden" value="<?php echo $client_id; ?>" name="client_id" />
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






                          
<div class="row">
        <div class="col-md-12">
            <div class="login-form-card">


                        <div class="login-form-content" style="text-align: center!important;">
                           <!-- start login -->
                                <div class="sign-pass form-group">
                                    <div class="input login-input">
                                        <span>New Cell Phone</span>
                                        <input class="form-control login-frm-input new-input" style="font-size: 25px;" type="text" id="newcell" name="newcell" data-bv-field="password">
                                    </div>
                                </div>
                                <div class="sign-pass form-group">
                                    <div class="input login-input">
                                        <span>Confirm Cell Phone</span>
                                        <input class="form-control login-frm-input new-input" style="width: 100%; height: 40px; font-size: 25px;" type="texr" id="concell" name="concell" data-bv-field="confirmPassword">
                                    </div>
                                </div>
                                <button class="btn-purple" type="submit">Confirm</button>
                        </div>
                      </div>
                    </div>
                  
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
<!--Page Container End Here-->
