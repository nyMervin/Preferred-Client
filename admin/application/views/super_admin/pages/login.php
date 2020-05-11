<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cultura is a Education HTML Template">
    <meta name="keywords" content=" classes, college, course, courses, educational, learning, online courses, revolution slider, school, seminar, tutorials, university, workshop">
    <meta name="author" content="regaltheme.com">
    <title>Prime Client || Login</title>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/bank/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bank//css/style1.css">
    
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
                                    <a href="<?php echo base_url(); ?>admin"><img src="<?php echo base_url(); ?>assets/bank/images/logo.png" alt="Prime Client" /></a>
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
                        <div class="enter-box">
                            <?php  if($this->session->flashdata('message')) {  ?>
                        <div class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div>
                        <?php  } ?>
                            <form action="" class="custom-input class="m-t-20" id="admin_login" method="post">
                                <div class="form-control form-group">
                                    <label>Branch:</label>
                                    <input type="text" class="form-control" name="branch" id="branch" placeholder="Branch"/>
                                </div>
                                <div class="form-control form-group">
                                    <label>User Name:</label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="User Name"/>
                                </div>
                                <div class="form-control form-group">
                                    <label>Password:</label>
                                    <input type="password" class="form-control"  name="password" id="password" placeholder="Password" />
                                </div>
                                <div class="form-control">
                                    <label>&nbsp;</label>
                                    <button class="btn" name="submit" type="submit" value="true">Login</button>
                                </div>
                                <div class="form-control">
                                    <label>&nbsp;</label>
                                    <a href="<?php echo base_url()."admin/reset_password"; ?>">Reset Password</a>
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
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>
  
        <script>
            var BASE_URL = "<?php echo base_url(); ?>";
            var login_error = "<?php echo $this->session->flashdata('login_error'); ?>";
                 $('#admin_login').bootstrapValidator({  
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
          
        var username = $('#username').val();
           var password = $('#password').val();
           var branch = $('#branch').val();
    $.ajax({
           type:'POST',
           url: BASE_URL+'auth/is_valid_login',
           data : {branch:branch,username:username,password:password},
           success:function(response)
           {     
         if(response==1)
         {
             window.location = BASE_URL+'admin';
         }
         else if (response==2)
         {
                location.reload();
         }
           }                
            });
        });  // admin login success function completes here  
        </script>

</body>
</html>