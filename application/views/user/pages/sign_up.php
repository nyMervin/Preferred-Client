

<!doctype html>

<html>





<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <title>Preferred Client || Sign Up</title>
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

<div class="login-form-container">

    <form action="" method="post" class="j-forms" id="sign_up" novalidate>

    <div class="login-form-header">

            <div class="logo">

                <a href="<?php echo base_url(); ?>" title="Admin Template"><img src="<?php echo base_url() ?>assets/user/images/logo.png" alt="logo"></a>

                <p class="head">SIGN UP FORM</p>

            </div>

        </div>

        <?php if($this->session->flashdata('signup_failed')) {  ?>

           <div class="alert alert-warning"><b><?php echo $this->session->flashdata('signup_failed');?></b></div>

        <?php  } ?>

<div class="row">

        <div class="col-md-6 ">

            <div class="login-form-card">

                        <div class="login-form-content">

                           <!-- start login -->

                                <div class="signup form-group">

                                    <div class="input login-input ">

                                        <span>First Name</span>

                                        <input class="form-control login-frm-input"  type="text" id="first_name" name="first_name">

                                    </div>

                                </div>

                                <div class="signup form-group">

                                    <div class="input login-input">

                                        <span>Last Name</span>

                                        <input class="form-control login-frm-input"  type="text" id="last_name" name="last_name">

                                    </div>

                                </div>

                                <div class="signup form-group">

                                    <div class="input login-input">

                                        <span>Email</span>

                                        <input class="form-control login-frm-input"  type="email" id="email" name="email" onBlur="checkemailAvailability()" value="">

                                    </div>
                                    <span id="email-availability-status"></span>

                                </div>

                                <div class="signup form-group">

                                    <div class="input login-input">

                                        <span>Cell Phone</span>
                                        <div class="row">
                                        <div class="col-md-2">
                                            <input class="form-control login-frm-input"  type="text" id="cpcc" name="cpcc" value="+63" readonly="" style="padding: 6px 5px;">
                                        </div>
                                        <div class="col-md-10">
                                            <input class="form-control login-frm-input"  type="text" id="contact" name="contact">
                                        </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="signup form-group">

                                    <div class="input login-input">

                                        <span>Primary Peso Account</span>

                                        <input class="form-control login-frm-input"  type="text" id="ppeso" name="ppeso">

                                    </div>

                                </div>

                                <div class="signup form-group">

                                    <div class="input login-input">

                                        <span>Secondary Peso Account (optional)</span>

                                        <input class="form-control login-frm-input"  type="text" id="speso" name="speso">

                                    </div>

                                </div>

                                <div class="signup form-group">

                                    <div class="input login-input">

                                        <span>U.S. Dollar Account</span>

                                        <input class="form-control login-frm-input"  type="text" id="usaccount" name="usaccount">

                                    </div>

                                </div>

                                <div class="signup form-group">

                                    <div class="input login-input">

                                        <span>Time Deposit Account</span>

                                        <input class="form-control login-frm-input"  type="text" id="timeaccount" name="timeaccount">

                                    </div>

                                </div>
                                <div class="signup form-group">

                                    <div class="input login-input">

                                        <span>Fixed Income Account</span>

                                        <input class="form-control login-frm-input"  type="text" id="fixedincomeaccount" name="fixedincomeaccount">

                                    </div>

                                </div>

                        </div>

             </div>

        </div>

        <div class="col-md-6">

             <div class="login-form-card">

                <div class="login-form-content">

                    <div class="signup form-group">

                        <div class="input login-input">

                            <span>Branch</span>

                            <!-- <input class="form-control login-frm-input"  type="text" id="branch" name="branch"> -->

                            <select name="branch" id="branch"  style="width: 100%;" required="">

                              <option value='' disabled="" selected="">Select Branch</option>

                              <?php

                              $branchlist = $this->db->query("SELECT * FROM branches WHERE status = 1")->result_array();

                              foreach ($branchlist as $blist) { ?>

                                <option value="<?php echo $blist['branch_code'] ?>"><?php echo $blist['branch_name'] ?></option>

                              

                              <?php

                              }

                              ?>

                              </select>

                        </div>

                    </div>

                    <div class="signup form-group">

                        <div class="input login-input">

                            <span>Branch Code</span>

                            <input class="form-control login-frm-input"  type="text" readonly="" id="branchcode" name="branchcode" value="">

                        </div>

                    </div>

                    <div class="signup form-group">

                        <div class="input login-input">

                            <span>Account Officer</span>

                            <input class="form-control login-frm-input"  type="text" id="accountofficer" name="accountofficer">

                        </div>

                    </div>

                    <div class="signup form-group">

                        <div class="input login-input">

                            <span>Account Officer Cell</span>
                             <div class="row">
                                        <div class="col-md-2">
                                            <input class="form-control login-frm-input"  type="text" id="aocc" value="+63" name="aocc" style="padding: 6px 5px;" readonly="">
                                        </div>
                                        <div class="col-md-10">
                                            <input class="form-control login-frm-input" type="text" id="accountofficercon" name="accountofficercon">
                                        </div>
                                        </div>
                            

                        </div>

                    </div>

                </div>

             </div>

        </div>

</div>

                    <div class="login-form-footer">

                        <button type="submit" class="btn-block btn btn-white">Next</button>

                    </div>

                </form>

</div>

</div>



</div>

<!--Footer End Here -->

</section>

<!--Page Container End Here-->





<!-- All JS Here -->

    <!-- jQuery Latest Version -->



        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>



        <script>
            var BASE_URL = "<?php echo base_url(); ?>";

            var login_error = "<?php echo $this->session->flashdata('login_error'); ?>";

        function checkemailAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
        url: BASE_URL+'auth/check_email',
        data:'emailid='+$("#email").val(),
        type: "POST",
        success:function(data){
        $("#email-availability-status").html(data);
        $("#loaderIcon").hide();
        },
        error:function (){}
        });
        }



                 $('#sign_up').bootstrapValidator({  

        fields: {

             first_name:   {

                validators:          {

                notEmpty:              {

                        message: 'Please Enter First Name'

                                       }

                                     }

                                    }, 

            last_name:   {

                validators:          {

                notEmpty:              {

                        message: 'Please Enter Last Name'

                                       }

                                   }

                                     }, 

            email:   {

                validators:          {

                notEmpty:              {

                        message: 'Please Enter Email'

                                       }

                                   }

                                     },
            cpcc:   {

                validators:          {

                notEmpty:              {

                        message: 'Please Enter Country code'

                                       }

                                   }

                                     },

            contact: {

                validators: {

                    notEmpty:              {

                        message: 'Please Enter Cell Phone'

                                       },

                    integer: {

                        message: 'Enter valid Cell Phone Number '

                    }

                }

            },

            ppeso:   {

                validators:          {

                notEmpty:              {

                        message: 'Please Enter Primary Peso Account'

                                       },

                    integer: {

                        message: 'Enter valid Primary Peso Account'

                    }

                                   }

                                     },

            usaccount:   {

                validators:          {

                notEmpty:              {

                        message: 'Please Enter U.S. Dollar Account'

                                       },

                    integer: {

                        message: 'Enter valid U.S. Dollar Account'

                    }

                                   }

                                    },



            timeaccount:   {

                validators:          {

                notEmpty:              {

                        message: 'Please Enter Time Deposit Account'

                                       },

                    integer: {

                        message: 'Enter valid Time Deposit Account'

                    }

                                     }

                                    },
                fixedincomeaccount:   {

                validators:          {

                notEmpty:              {

                        message: 'Please Enter Fixed Income Account'

                                       },

                    integer: {

                        message: 'Enter valid Fixed Income Account'

                    }

                                     }

                                    },



            branch:   {

                validators:          {

                notEmpty:              {

                        message: 'Please Enter Branch'

                                       }

                                     }

                                    },
                aocc:           {

                validators:           {

                notEmpty:               {

                        message: 'Please Enter Country Code'

                                        }

                                      }

                                    },
            accountofficer:           {

                validators:           {

                notEmpty:               {

                        message: 'Please Enter Account Officer'

                                        }

                                      }

                                    },

                accountofficercon:           {

                validators:           {

                notEmpty:               {

                        message: 'Please Enter Account Officer Cell'

                                        },

                    integer: {

                        message: 'Enter valid Account Officer Cell'

                    }

                                      }

                                    }           

        

        

        }

        }).on('success.form.bv', function(e) {

           e.preventDefault();

           var first_name = $('#first_name').val();

           var last_name = $('#last_name').val();

           var email = $('#email').val();

           var cpcc = $('#cpcc').val();

           var contact = $('#contact').val();

           var ppeso = $('#ppeso').val();

           var speso = $('#speso').val();

           var usaccount = $('#usaccount').val();

           var timeaccount = $('#timeaccount').val();
           
           var fixedincomeaccount = $('#fixedincomeaccount').val();

           var branch = $('#branch').val();

           var branchcode = $('#branchcode').val();

           var accountofficer = $('#accountofficer').val();

           var aocc = $('#aocc').val();

           var accountofficercon = $('#accountofficercon').val();

          



    $.ajax({

           type:'POST',

           url: BASE_URL+'auth/client_signup',

           dataType:"html",

           data : {"first_name":first_name,"last_name":last_name,"email":email,"cpcc":cpcc,"contact":contact,"ppeso":ppeso,"speso":speso,"usaccount":usaccount,"timeaccount":timeaccount,"fixedincomeaccount":fixedincomeaccount,"branch":branch,"branchcode":branchcode,"accountofficer":accountofficer,"aocc":aocc,"accountofficercon":accountofficercon},

           success:function(response)

           {

           // console.log(response);     

         if(response==1)

         {

             window.location = BASE_URL+'agree-privacy-policy';

         }

         else if (response==2)

         {

                window.location = BASE_URL+'sign-up';

         }

           }                

            });

        });

        </script>





        <script type="text/javascript">

           $('#branch').on('change', function() {

          var branchcode =  this.value;

          $('#branchcode').val(branchcode);

        });

         </script>





</body>



</html>