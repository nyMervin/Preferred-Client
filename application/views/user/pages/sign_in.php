
<?php
date_default_timezone_set('Asia/Kolkata');
?>
<!doctype html>

<html>





<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <title>Preferred Client || Login</title>
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
<style type="text/css">
    
</style>


</head>

<!--Page Container Start Here-->

<body class="immmgg">
<section class="login-container boxed-login" style="margin-top: -23px;">
<div class="container">

<!-- <div class="col-md-5 col-md-offset-7">

<div class="login-form-container"> -->

    <div class="row">

        <div class="col-md-4 col-md-offset-8">

        <div class="login-card">
             <div class="login-form-head">
                 <div class="logo" style="text-align: center;">

                <a href="<?php echo base_url() ?>" title="Admin Template"><img src="<?php echo base_url() ?>assets/user/images/logo.png" alt="logo"></a>
            </div>
            <div class="data-head">
                <p class="details text-center" id="live_time"><?php echo date('d/m/y  h:m'); ?></p>
                <p class="heading">Welcome</p>
                <p class="details">New to EastWest Preffered Clients? <a href="<?php echo base_url() ?>sign-up">Sign up<a></p>
            </div>
             </div>

        <?php if($this->session->flashdata('message')) {  ?>

           <div class="alert alert-danger"><b><?php echo $this->session->flashdata('message');?></b></div>

        <?php  } ?>

        <?php if($this->session->flashdata('Success')) {  ?>

           <div class="alert alert-success"><b><?php echo $this->session->flashdata('Success');?></b></div>

        <?php  } ?>
        <?php if($this->session->flashdata('fp_success')) {  ?>

           <div class="alert alert-success"><b><?php echo $this->session->flashdata('fp_success');?></b></div>

        <?php  } ?>
        <?php if($this->session->flashdata('message_deactivated')) {  ?>

           <div class="alert alert-warning"><b><?php echo $this->session->flashdata('message_deactivated');?></b></div>

        <?php  } ?>

    <form action="" method="post" class="j-forms" id="user_login" novalidate>
        <div class="login-form-content">

            <!-- start login -->

            <div class="unit form-group">

                <div class="input login-input">

                    <input class="form-control login-frm-input"  type="email" id="email" name="email" placeholder="Your Email Address">

                </div>

            </div>

            <!-- end login -->



            <!-- start password -->

            <div class="unit form-group">

                <div class="input login-input">

                    <input class="form-control login-frm-input"  type="password" id="password" name="password" placeholder="Your Password">
                </div>

            </div>
            <div class="response"></div>

        </div>

        <div class="login-footer">

            <button type="submit" class="btn-block btn btn-new" style="color: #fff; ">Log In</button>
            <div class="row">
                <div class="col-md-4">
                <span><a style="float: left;" href="<?php echo base_url() ?>help">Help</a></span>
            </div>
                <div class="col-md-2"></div>
                <div class="col-md-6">
                <span><a  style="float: right;" href="<?php echo base_url() ?>forget-password">Forget Password</a></span>
            </div>
            </div>
            <p class="details" style="margin-top: 10px;">By continuing you accept our <a href="#">Terms of Use</a></p>

        </div>



    </form>

</div>

    </div>

</div>

<!-- </div>

</div> -->

</div>
<div class="none">
    </div>


</section>
<!-- </div>

</div>

</div> -->

<!--Page Container End Here-->





<!-- All JS Here -->

    <!-- jQuery Latest Version -->

        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>

  

        <script>

            var BASE_URL = "<?php echo base_url(); ?>";

            var login_error = "<?php echo $this->session->flashdata('login_error'); ?>";

                 $('#user_login').bootstrapValidator({  

        fields: {      

            email:   {

                validators:          {

                notEmpty:              {

                        message: 'Please enter your Email'

                                       }

                                     }

                                    },

                password:           {

                validators:           {

                notEmpty:               {

                        message: 'Please enter your Password'

                                        }

                                      }

                                    }           

        }

        }).on('success.form.bv', function(e) {

            e.preventDefault();

           var email = $('#email').val();

           var password = $('#password').val();

    $.ajax({

           type:'POST',

           url: BASE_URL+'auth/is_valid_signin',

           data : {email:email,password:password},

           success:function(response)

           {     

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


         
         
<!-- Date JS -->
<script src="<?php echo base_url(); ?>assets/js/moment.min.js"></script> 
<!-- End Date JS -->

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