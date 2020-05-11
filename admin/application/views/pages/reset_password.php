<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cultura is a Education HTML Template">
    <meta name="keywords" content=" classes, college, course, courses, educational, learning, online courses, revolution slider, school, seminar, tutorials, university, workshop">
    <meta name="author" content="regaltheme.com">
    <title>Prime Client || Reset Password</title>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bank/css/style1.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bank/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bank/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bank/css/custom-animate.css">

</head>

<body>
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="main-header">
            <div id="active-sticky" class="navgation-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="d-flex justify-end">
                                <div class="logo mr-auto">
                                    <a href="<?php echo  base_url().'admin'?>"><img src="<?php echo base_url(); ?>assets/bank/images/logo.png" alt="Prime Client" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
        </header>
        <!-- Header Section End -->
        <!-- Login Section Start -->
        <div class="row">&nbsp;</div>
        <section class="login-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-7 col-text-center">
                        <?php if($this->session->flashdata('reset_failed')) {  ?>
                           <div class="alert alert-danger"><b><?php echo $this->session->flashdata('reset_failed');?></b></div>
                        <?php  } ?>
                        <?php if($this->session->flashdata('reset_success')) {  ?>
                           <div class="alert alert-success"><b><?php echo $this->session->flashdata('reset_success');?></b></div>
                        <?php  } ?>
                        <h2 class="text-center">Reset Password</h2>
                        <div class="enter-box">
                            <form action="" class="custom-input m-t-20" id="reset_password" method="POST">
                                <div class="form-control form-group">
                                    <label>Branch:</label>
                                    <input type="text" class="form-control" name="branch" id="branch" placeholder="Branch"/>
                                </div>
                                <div class="form-control form-group">
                                    <label>User Name:</label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="User Name"/>
                                </div>
                                <div class="form-control">
                                    <label>&nbsp;</label>
                                    <button class="btn" name="submit" type="submit" value="true">Send Mail</button>
                                </div>
                                
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Login Section End -->
        
    </div>
    <!-- Wrapper Start -->

    <!-- All JS Here -->
    <!-- jQuery Latest Version -->
    <script src="<?php echo base_url(); ?>assets/bank/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/bank/js/bootstrap.min.js"></script>
    <!-- main JS -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>
    <script>
        var BASE_URL = "<?php echo base_url(); ?>";
            var reset_password = "<?php echo $this->session->flashdata('reset_error'); ?>";
                 $('#reset_password').bootstrapValidator({  
        fields: {
            branch:   {
                validators:          {
                notEmpty:              {
                        message: 'Please enter your Branch'
                                       }
                                     }
                                    },        
            username:   {
                validators:          {
                notEmpty:              {
                        message: 'Please enter your Username'
                                       }
                                     }
                                    }         
        }
        }).on('success.form.bv', function(e) {
          
        var username = $('#username').val();
           var branch = $('#branch').val();
    $.ajax({
           type:'POST',
           url: BASE_URL+'auth/forget_password',
           data : {branch:branch,username:username},
           success:function(response)
           {     
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