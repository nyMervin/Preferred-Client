

<!doctype html>

<html>





<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <title>Preferred Client || Forget Password</title>
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

<div class="col-md-8 col-md-offset-2">
    

<div class="login-form-container">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

        <div class="login-form-card">

    <form action="" method="post" class="j-forms" id="forms-forget" novalidate>



        <div class="login-form-header">

            <div class="logo">

                <a href="<?php echo base_url() ?>" title="Admin Template"><img src="<?php echo base_url() ?>assets/user/images/logo.png" alt="logo"></a>

            </div>

        </div>

        <div class="login-form-content">
            <?php if($this->session->flashdata('reset_failed')) {  ?>
           <div class="alert alert-danger"><b><?php echo $this->session->flashdata('reset_failed');?></b></div>
        <?php  } ?>
        <?php if($this->session->flashdata('reset_success')) {  ?>
           <div class="alert alert-success"><b><?php echo $this->session->flashdata('reset_success');?></b></div>
        <?php  } ?>

            <div class="unit">

                <div class="input form-group">

                    <input class="form-control login-frm-input"  type="text" id="name" placeholder="Enter Name" name="name">

                </div>

            </div>



            <div class="unit">

                <div class="input form-group">

                    <input class="form-control login-frm-input"  type="text" id="contact" placeholder="Enter Registered Contact" name="contact">

                </div>

            </div>



            <div class="unit">

                <div class="input form-group">

                    <input class="form-control login-frm-input"  type="text" id="email" placeholder="Enter Registered Email" name="email">

                     

                </div>

            </div>

            

            <div class="response"></div>

        </div>

        <div class="login-form-footer">

            <button type="submit" class="btn-block btn btn-white">Reset</button>

        </div>



    </form>

            <div class="help">

               <a href="<?php echo base_url() ?>sign-up"><p>Sign Up</p></a>

               <a href="<?php echo base_url() ?>"><p>Sign In</p></a>

                <a href="<?php echo base_url() ?>help"><p>Help</p></a>

            </div>

</div>

    </div>

</div>

</div>

</div>

</div>



</section>

<!--Page Container End Here-->






<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>
  
        <script>
            var BASE_URL = "<?php echo base_url(); ?>";
            var login_error = "<?php echo $this->session->flashdata('login_error'); ?>";
                 $('#forms-forget').bootstrapValidator({  
        fields: {
                name:   {
                validators:          {
                notEmpty:              {
                        message: 'Please enter your Name'
                                       }
                                     }
                                     },      
                contact:   {
                validators:          {
                notEmpty:              {
                        message: 'Please enter your Contact'
                                       }
                                     }
                                    },
                email:           {
                validators:           {
                notEmpty:               {
                        message: 'Please enter your Password'
                                        }
                                      }
                                    }           
        }
        }).on('success.form.bv', function(e) {
            e.preventDefault();
           var name = $('#name').val();
           var contact = $('#contact').val();
           var email = $('#email').val();
    $.ajax({
           type:'POST',
           url: BASE_URL+'reset-password',
           data : {email:email},
           success:function(response)
           {
           console.log(response);     
         if(response==1)
         {
             location.reload();
         }
         else if (response==2)
         {
                location.reload();
         }
           }                
            });
        });  
        </script>

</body>



</html>