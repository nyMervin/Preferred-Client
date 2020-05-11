<?php
if (@!isset($this->session->userdata['temp']))
{
    redirect(base_url());
}        
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Preferred Client || Confirmation</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().'assets/user/images/favicon.png'; ?>" sizes="16x16"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/material-design-iconic-font.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/layout.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/components.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/widgets.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/pages.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/bootstrap-extend.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/common.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">

</head>
<!--Page Container Start Here-->
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
                    <h3>Please Enter the verification code sent to your Register Email.</h3>
                    <span>If the boxes turned ‘red,’ double check your verification code.</br>Otherwise please press resend code.</span>
                    <div id="form">
                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" name="otp[]" />
                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" name="otp[]" />
                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" name="otp[]" />
                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" name="otp[]" />
                      <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" name="otp[]" />
                      <div class="resend">
                      <p><a href="<?php echo base_url().'resent-code'?>" style="color:#00CD15!important;" >Resend Code</a></p>
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
<!--Page Container End Here-->
</body>