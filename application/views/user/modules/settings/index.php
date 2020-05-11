 

  

                         





<section class="user-container">

    <div class="container">



<div class="col-md-12">



  <div class="transaction-content">

    <div class="row">

        <div class="col-md-12">





          <form action="<?php echo base_url(); ?>change-password/update" class="form-horizontal" method="POST" id="change_pass" >

            <div class="user-profile">

              <div class="trans">

                <p>Change Password</p>

              </div>

                <div class="col-md-6 col-md-offset-3">



                     <div class="row">

                    

<?php  if(@$this->session->flashdata("warning")) { ?>

<div class="alert alert-success" >

<?php echo $this->session->flashdata("warning"); ?>

</div>

<?php } ?>

<?php  if(@$this->session->flashdata("warni")) { ?>

<div class="alert alert-warning" >

<?php echo $this->session->flashdata("warni"); ?>

</div>

<?php } ?>

 <?php  if(@$this->session->flashdata("message")) { ?>

<div class="alert alert-success" >

<?php echo $this->session->flashdata("message"); ?>

</div>

<?php } ?>

<?php  if(@$this->session->flashdata("warn")) { ?>

<div class="alert alert-warning" >

<?php echo $this->session->flashdata("warn"); ?>

</div>

<?php } ?>

<?php  if(@$this->session->flashdata("wa")) { ?>

<div class="alert alert-warning" >

<?php echo $this->session->flashdata("wa"); ?>

</div>

<?php } ?>

<?php  if(@$this->session->flashdata("su")) { ?>

<div class="alert alert-success" >

<?php echo $this->session->flashdata("su"); ?>

</div>

<?php } ?>



                

                    <div class="col-md-6 change-pwd form-group">

                  <span>Old Password</span>

                </div>

                  <div class="col-md-6 change-pwd form-group">

                   <input class="form-control login-frm-input"  type="Password" name="oldp" id="oldp">

             </div>

                    <div class="col-md-6 change-pwd form-group">

                  <span>New Password</span>

                </div>

                  <div class="col-md-6 change-pwd form-group">

                   <input class="form-control login-frm-input"  type="Password" name="newp" id="newp">

             </div>

                     <div class="col-md-6 change-pwd form-group">

                  <span>Confirm Password</span>

                </div>

                  <div class="col-md-6 change-pwd form-group">

                   <input class="form-control login-frm-input"  type="Password" name="conp" name="conp">

             </div>

           </div>

                    <div class="row">  

                        <div class="col-md-4 col-md-offset-4">

                            <div class="login-form-footer">

                               <button type="submit" name="update_pass" class="btn-block btn btn-white">Confirm</button>

                            </div>

                        </div>

                    </div>

        </div>

      </div>

    </form>

    </div>

  </div>

    </div>

</div>

</div>

</div>



</section>

<!--Page Container End Here-->



        