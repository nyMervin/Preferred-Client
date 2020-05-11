<!--Page Container Start Here-->
<section class="user-container">
    <div class="container">
<div class="col-md-12">

<div class="user-content">
       <?php if($this->session->flashdata('edit_success')) {  ?>
           <div class="alert alert-success"><b><?php echo $this->session->flashdata('edit_success');?></b></div>
        <?php  } ?>
        <?php if($this->session->flashdata('edit_failed')) {  ?>
           <div class="alert alert-warning"><b><?php echo $this->session->flashdata('edit_failed');?></b></div>
        <?php  } ?>
        <?php if($this->session->flashdata('cp_success')) {  ?>
          <div class="alert alert-success"><b><?php echo $this->session->flashdata('cp_success');?></b></div>
        <?php  } ?>
        <?php if($this->session->flashdata('cp_error')) {  ?>
          <div class="alert alert-warning"><b><?php echo $this->session->flashdata('cp_error');?></b></div>
        <?php  } ?>
        <?php if($this->session->flashdata('cpwarning')) {  ?>
          <div class="alert alert-warning"><b><?php echo $this->session->flashdata('cpwarning');?></b></div>
        <?php  } ?>

         <div id="profile-image" class="xyz" style="margin-top:0%!important;">
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
            <div class="cdm">
            <div data-toggle="modal" data-target="#exampleModalCenter" style="cursor: pointer; display: inline-block;"> <i class="fa fa-pencil" style="font-size: 30px; margin:-10px 0 0 0;"></i> </div><br>
            <a href="javascript:void(0)">
            </a>
           </div>
          </div>

    <div class="row">
        <div class="col-md-5">
            <div class="user-profile">
               <div class="row">
                        <div class="col-md-4 detail">
                             <p>Client ID</p>
                             <p>Email</p>
                             <p>Phone</p>
                             <!-- <p>&nbsp;</p> -->
                             <!-- <p>Join Date</p> -->
                             
                         </div>
                         <?php
                         // $date = new DateTime("2013-03-05 00:00:00+00");
                         // $date = new DateTime("2019-11-10 12:40:00");
                         // $date = new DateTime($me['last_update']);
                         // $date->modify("+1 hours");
                         // $right_time = $date->format("Y-m-d H:i:sO");
                         // $current_time = date("Y-m-d h:i:s A");
                         // if($right_time == $current_time)
                         // {
                         //  echo "Your Can Edit Your Number". $current_time;
                         // }
                         // else
                         // {
                         //  echo "Wait 12 Hours To Edit Your Number,You can Edit at ".$right_time;
                         // }

                         //  $datetime1 = new DateTime($me['last_update']);
                         //  $datetime2 = new DateTime($me['last_update']);
                         //  // $datetime2->modify("+1 hours");
                         //  $interval = $datetime1->diff($datetime2);
                         //  // $elapsed = $interval->format('%y years %m months %a days %h hours %i minutes %s seconds');
                         //  $elapsed = $interval->format('%h hours %i minutes %s seconds');
                          // echo $elapsed;
                         ?>
                        <div class="col-md-8 detail">
                             <p><?php echo $me['id']; ?></p>
                             <p><?php echo $me['email']; ?></p>
							 <p><?php echo $me['cellphone']; ?></p>

                             <?php
                         // $date = new DateTime("2013-03-05 00:00:00+00");
                         // $date = new DateTime("2019-11-10 12:40:00");
                         $date = new DateTime($me['last_update']);
                         $date->modify("+12 hours");
                         $right_time = $date->format("Y-m-d H:i A");
                         $current_time = date("Y-m-d H:i:sO");
                         if($me['last_update'] < $current_time)
                         {
                         if($right_time <= $current_time OR $me['last_update'] == NULL)
                         {
                          // echo "Your Can Edit Your Number". $current_time;
                          // echo $right_time."|".$current_time ;
                          ?>
                          
                          <a style="float: right; color: red; margin-top:-33px;" href="<?php echo base_url().'user-edit-phone'; ?>" />edit</a>
                          <!-- // <b style="float: right;">Time Left <strong style="color: BLUE;"><?php echo $current_time; ?></strong></b> -->
                          <?php
                         }
                         else
                         {
                          ?>
                          <p style="float: left; font-size:15px;">Edit After: <strong style="color: BLUE;"><?php echo $right_time; ?></strong></p>                          	
                          <?php
                         }
                       }
                         else
                         {
                          ?>
                          <a style="float: right; color: red;" href="<?php echo base_url().'user-edit-phone'; ?>" />edit</a> 
                          <?php
                         }
                         ?>                             
                             
                             <!-- <p><?php echo $me['created_on']; ?></p> -->
                             
                        </div>
                </div>
        
        <form action="<?php echo base_url().'user/update_user'?>" method="post">

               <div class="row">
                <div class="col-md-12 option">
                       <p>First Name</p>
                   </div>
                   <div class="col-md-8">
                       <div class="user-pass">
                                <div class="input login-input">
                                        <input class="form-control login-frm-input" name="first_name" type="text" id="login" value="<?php echo $me['first_name'];?>">
                                </div>
                        </div>
                   </div>
                   <div class="col-md-12 option">
                       <p>Last Name</p>
                   </div>
                   <div class="col-md-8">
                       <div class="user-pass">
                                <div class="input login-input">
                                        <input class="form-control login-frm-input" name="last_name" type="text" id="login" value="<?php echo $me['last_name'];?>">
                                </div>
                        </div>
                   </div>
                   <!-- <div class="col-md-12 option">
                       <p>Phone</p>
                   </div>
                   <div class="col-md-8">
                       <div class="user-pass">
                                <div class="input login-input">
                                        <input class="form-control login-frm-input" name="cellphone" type="text" id="login" value="<?php //echo $me['cellphone'];
                                        ?>">
                                </div>
                        </div>
                   </div> -->
                   <div class="col-md-12 option">
                       <p>Peso Bank Account</p>
                   </div>
                   <div class="col-md-8">
                       <div class="user-pass">
                                <div class="input login-input">
                                        <input class="form-control login-frm-input" name="primary_peso_account" type="text" id="login" value="<?php echo $me['primary_peso_account']; ?>">
                                </div>
                        </div>
                   </div>
                   <div class="col-md-4">
                    <p class="option1" style="margin-top:6px;">Primary</p>
                   </div>
                   <div class="col-md-8">
                       <div class="user-pass">
                                <div class="input login-input">
                                        <input class="form-control login-frm-input" name="secondary_peso_account" type="text" id="login" value="<?php echo $me['secondary_peso_account']; ?>">
                                </div>
                        </div>
                   </div>
                   <div class="col-md-4">
                    <p class="option1" style="margin-top: 6px;">Secondary</p>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-12 option">
                       <p>Dollar Bank Account</p>
                   </div>
                   <div class="col-md-8">
                       <div class="user-pass">
                                <div class="input login-input">
                                        <input class="form-control login-frm-input" name="us_dollar_account" type="text" id="login" value="<?php echo $me['us_dollar_account']; ?>">
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
                                        <input class="form-control login-frm-input" name="time_deposit_account" type="text" id="login" value="<?php echo $me['time_deposit_account']; ?>">
                                </div>
                        </div>
                   </div>
                   <div class="col-md-12 option">
                       <p>Fixed Income Account</p>
                   </div>
                   <div class="col-md-8">
                       <div class="user-pass">
                                <div class="input login-input">
                                        <input class="form-control login-frm-input" name="fixed_income_account" type="text" id="login" value="<?php echo $me['fixed_income_account']; ?>">
                                </div>
                        </div>
                   </div>
                   <div class="col-md-12">
                    <button class="btn-purple btn-block" style="width:250px; ">Update</button>
                    <p class="change">
                        <a href="<?php echo base_url().'change-password'; ?>">Change your password</a>
                    </p>
                   </div>
               </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="user-address user-profile" style="margin-top: 10%!important;">
            <div class="row">
                        <div class="col-md-6 detail">
                             <p>Branch</p>
                        </div>
                        <div class="col-md-6 detail">
                          <select name="branch" id="branch"  style="width: 100%;" required="">
                              <option value='' disabled="" selected="">Select Branch</option>
                              <?php
                              foreach ($branchs as $branchslist) { ?>
                                <option value="<?php echo $branchslist['branch_code']; ?>" <?php if($me['branch']==$branchslist['branch_code']) {echo 'selected';} ?>><?php echo $branchslist['branch_name'];  ?></option>
                              
                              <?php
                              }
                              ?>
                          </select>
                        </div>
                      </div>
                      <!-- <div class="row">
                        <div class="col-md-6 detail"><p>Branch Code</p></div>
                        <div class="col-md-6 detail">
                          <input class="form-control login-frm-input" name="branch_code" type="text" id="branchcode" value="<?php echo $me['branch_code']; ?>"readonly="" >
                        </div>
                      </div> -->
                      <div class="row">
                        <div class="col-md-6 detail"><p>Account Officer</p></div>
                        <div class="col-md-6 detail"><input class="form-control login-frm-input" name="account_officer" type="text" id="login" value="<?php echo $me['account_officer']; ?>"></div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 detail"><p>Account Officer Phone#</p></div>
                        <div class="col-md-6 detail"><input class="form-control login-frm-input" name="account_officer_cell"  type="text" id="login" value="<?php echo $me['account_officer_cell']; ?>"></div>
                      </div>
               </div>
           </div>
         </form>
        </div>
    </div>
</div>
</div>
</div>

</section>

<!---------------Container Ends here--------------------->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document" style="z-index: auto;width: 40%;">
                <div class="modal-content" style="color:#000;">
                  <div class="modal-header" style="margin:0 0 20px 0;">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: #000; font-size: 20px;">Edit image</h5>
                    <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>-->
                  </div>
                 
                 <!-- save-update-profile.php -->

                   <form action="" method="POST" enctype="multipart/form-data">
                     <input type="hidden" name="state_name" value="Kaffrine"> 
                     <input type="hidden" name="update_prof" value="288">
                      
                  <div class="modal-body">
                     <input type="file" name="upload_img" id="upload_file_image_thum_edit" required="" accept=".jpg,.png,.jpeg">
                   </div>
                  <div class="modal-footer">
                    <div class="col-md-6"><a href="#"><button type="button" style="color: #fff;" class="btn btn-secondary" data-dismiss="modal">Close</button></a></div>
                      <div class="col-md-6"><a href="user_dashboard.php?state_name=Kaffrine">
                        <button type="submit" name="" class="btn btn-primary">Save changes</button>
                  </a></div></div></form></div></div></div>



   <!-- User profile croper modal start -->
    <div id="uploadimageModal_edit" class="modal" role="dialog">
    <div class="modal-dialog" style="    width: 42%;">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title text-center" style="color: #000; font-size: 20px;">Upload & Crop Image</h4>
                <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 text-center">
                      <div id="image_demo_edit" style="width:350px; margin-top:30px"></div>
                    </div>
                    <div class="col-md-4" style="padding-top:30px;">
                        <br/> <br/> <br/>
                        <div class="row">
                          <div class="col-md-12 set_loader"></div>
                        </div>
                          
                    </div>
                </div>
            </div>
            <div class="modal-footer">
			<div class="col-md-6"><button class="btn btn-success crop_image_edit" style="margin-left: -18px;">Crop Image</button></div>
            <div class="col-md-6"><a href=""><button type="button" class="btn btn-default" style="background: #B0006C; color: #fff;" data-dismiss="modal">Close</button></a></div>
            </div>
        </div>
    </div>
</div>
    <!-- User profile croper modal End -->
