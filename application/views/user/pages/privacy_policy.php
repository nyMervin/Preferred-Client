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
    <title>Preferred Client || Privacy Policy</title>
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
<section class="login-container boxed-login">
<div class="container">
<div class="col-md-10 col-md-offset-1">
<div class="login-form-container login-tips">
    <div class="login-form-header">
            <div class="logo">
                <a href="<?php echo base_url() ?>" title="Admin Template"><img src="<?php echo base_url() ?>assets/user/images/logo.png" alt="logo"></a>
            </div>
        </div>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="login-form-card">
                        <div class="login-form-content">
                            <div class="terms-head">
                                 <p>Accept Terms</p>
                                 <p>and</p>
                                 <p>Conditions</p>
                            </div>
                            <div class="terms-data">
                                <p>By creating an account, you agree to the eastwest Terms of Services and Privacy Policy</p>
                            </div>
                        </div>
             </div>
        </div>
</div>
                <form action="<?php echo base_url().'confirmation'; ?>" method="post" class="j-forms" id="forms-login" novalidate>

                    <div class="login-form-footer">
                        <button type="submit" class="btn-block btn btn-white">I Agree</button>
                    </div>
                </form>
</div>
</div>

</div>
<!--Footer End Here -->
</section>
<!--Page Container End Here-->
