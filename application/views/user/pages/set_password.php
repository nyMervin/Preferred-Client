<?php
if (@!isset($this->session->userdata['temp']))
{
    redirect(base_url());
}
$user_id = $this->session->userdata['temp']; 
// var_dump($user_id);
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Primrclient || Set Password</title>
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
<div class="login-form-container">
    <div class="login-form-header">
            <div class="logo">
                <a href="<?php echo base_url() ?>" title="Admin Template"><img src="<?php echo base_url() ?>assets/user/images/logo.png" alt="logo"></a>
                <div class="syp">
                    <p>Setup Your</p>
                    <p>Password</p>
                </div>
                <div class="hint">
                    <p>Password should be a combination of 6 numbers</p>
                </div>
            </div>
        </div>
<form action="" method="post" class="j-forms" id="set_password" novalidate>
<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-form-card">


                        <div class="login-form-content">
                           <!-- start login -->
                                <div class="sign-pass form-group">
                                    <div class="input login-input">
                                        <span>Password</span>
                                        <input class="form-control login-frm-input"  type="Password" id="password" name="password">
                                    </div>
                                </div>
                                <div class="sign-pass form-group">
                                    <div class="input login-input">
                                        <span>Confirm Password</span>
                                        <input class="form-control login-frm-input"  type="Password" id="confirmPassword" name="confirmPassword">
                                    </div>
                                </div>
                                <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>" >
                        </div>
             </div>
        </div>
</div>
     <div class="login-form-footer">
                        <button type="submit" class="btn-block btn btn-white">Sign up</button>
     </div>
</form>
</div>
</div>

</div>
<!--Footer End Here -->
</section>
<!--Page Container End Here-->
<script src="<?php echo base_url() ?>assets/user/js/lib/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/user/js/lib/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>
  
        <script>
            var BASE_URL = "<?php echo base_url(); ?>";
            var login_error = "<?php echo $this->session->flashdata('login_error'); ?>";
                 $('#set_password').bootstrapValidator({  
        fields: {
                 password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 20,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and confirm password are not the same'
                    }
                }
            }     
        
        
        }
        }).on('success.form.bv', function(e) {
            e.preventDefault();
           var password = $('#password').val();
           var user_id = $('#user_id').val();
          

    $.ajax({
           type:'POST',
           url: BASE_URL+'auth/set_user_password',
           dataType:"html",
           data : {"password":password,"user_id":user_id},
           success:function(response)
           {     
            // alert(response);
            // console.log(response);
         if(response==1)
         {
             window.location = BASE_URL+'home';
         }
         else if (response==2)
         {
                location.reload();

         }
           }                
            });
        });
        </script>
