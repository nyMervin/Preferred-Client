<!--Page Container Start Here-->
<section class="user-container">
    <div class="container">
<div class="col-md-12">
	<div id="profile-image" class="xyz">      
    <?php
    if(!empty($me['image']))
    {
      ?>
        <img src="<?php echo base_url().'primeclientApi/assets/images/users/'.$me['image']; ?>" alt="profile">
      <?php 
    }
    else
    {
      ?>
      <img src="<?php echo base_url(); ?>primeclientApi/assets/images/users/user_default.png" alt="profile">
    <?php
    }
    ?>
          </div>
<div class="user-content">
    <div class="row">
      <p><i class="fas fa-user-circle"></i></p>
        <div class="col-md-5">
            <div class="user-profile">
                
               <div class="row">
                        <div class="col-md-4 detail">
                             <p>Name</p>
                             <p>Email</p>
                             <p>Phone</p>
                             <!-- <p>Join Date</p> -->
                         </div>
                        <div class="col-md-8 detail">
                             <p><?php echo $me['first_name']." ".$me['last_name'] ; ?></p>
                             <p><?php echo $me['email']; ?></p>
                             <p><?php echo $me['cellphone']; ?></p>
                             <!-- <p><?php echo $me['created_on']; ?></p> -->
                        </div>
               </div>
               <div class="row">
                   <div class="col-md-12 option">
                       <p style="margin-left: 40px;">Peso Bank Account</p>
                   </div>
                   <div class="col-md-8">
                    <p class="option1" style="margin-top:6px; margin-bottom: 5px!important;">Primary</p>
                       <div class="user-pass">
                                <div class="input login-input">
                                        <input class="form-control login-frm-input"  type="text" id="login" value="<?php echo $me['primary_peso_account']; ?>" readonly name="login">
                                </div>
                        </div>
                   </div>
                   <!-- <div class="col-md-4">
                    
                   </div> -->
                   <div class="col-md-8">
                    <p class="option1" style="margin-top: 6px; margin-bottom: 5px!important;">Secondary</p>
                       <div class="user-pass">
                                <div class="input login-input">
                                        <input class="form-control login-frm-input"  type="text" id="login" value="<?php echo $me['secondary_peso_account']; ?>" readonly name="login">
                                </div>
                        </div>
                   </div>
                   <!-- <div class="col-md-4">
                    
                   </div> -->
               </div>
               <div class="row">
                   <div class="col-md-12 option">
                       <p>Dollar Bank Account</p>
                   </div>
                   <div class="col-md-8">
                       <div class="user-pass">
                                <div class="input login-input">
                                        <input class="form-control login-frm-input"  type="text" id="login" value="<?php echo $me['us_dollar_account']; ?>" readonly name="login">
                                </div>
                        </div>
                   </div>
                   <div class="col-md-4">
                    <p class="option1"></p>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-12 option">
                       <p>Time Deposit Account</p>
                   </div>
                   <div class="col-md-8">
                       <div class="user-pass">
                                <div class="input login-input">
                                        <input class="form-control login-frm-input"  type="text" id="login" value="<?php echo $me['time_deposit_account']; ?>" readonly name="login">
                                </div>
                        </div>
                   </div>
                   <div class="col-md-12 option">
                       <p>Fixed Income Account</p>
                   </div>
                   <div class="col-md-8">
                       <div class="user-pass">
                                <div class="input login-input">
                                        <input class="form-control login-frm-input"  type="text" id="login" value="<?php echo $me['fixed_income_account']; ?>" readonly name="login">
                                </div>
                        </div>
                   </div>
                   <div class="col-md-12">
                    
                    <p class="change">
                        <a href="<?php echo base_url().'change-password'; ?>">Change Your Password</a>
                    </p>
                    <a href="<?php echo base_url() ?>edit"><button class="btn-purple btn-block" style="width:250px; ">Edit</button></a>
                    <!-- <a href="<?php echo base_url() ?>logout"><button class="btn-purple btn-block" style="width:250px; ">Logout</button></a> -->
                    <a class="logout" href="javascript:void(0)" class="logout"><button class="btn-purple btn-block" style="width:250px; ">Logout</button></a>

                   </div>
               </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="user-address" style="margin-top: 10%!important;">
            <div class="row">
                        <div class="col-md-6 detail">
                             <p>Branch</p>
                        </div>
                        <div class="col-md-6 detail">
                             <p><?php echo $me['branch_name']; ?></p>
                        </div>
                        <div class="col-md-6 detail"><p>Branch Code</p></div>
                        <div class="col-md-6 detail"><p><?php echo $me['branch']; ?></p></div>
                        <div class="col-md-6 detail"><p>Account Officer</p></div>
                        <div class="col-md-6 detail"><p><?php echo $me['account_officer']; ?></p></div>
                        <div class="col-md-6 detail"><p>Account Officer Phone#</p></div>
                        <div class="col-md-4 detail"><p><?php echo $me['account_officer_cell']; ?></p></div>
               </div>
           </div>
        </div>
    </div>
</div>
</div>
</div>

</section>
<!---------------Container Ends here--------------------->
    <!-- User profile croper modal End -->

   
