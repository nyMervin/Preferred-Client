 
  
                          <div class="main">


               <div class="card">

                    
                        <p class="text"><strong>Setting</strong></p>
                        <br>
                        <?php  if(@$this->session->flashdata("warning")) { ?>
<div class="alert alert-success" >
<?php echo $this->session->flashdata("warning"); ?>
</div>
<?php } ?>
<?php  if(@$this->session->flashdata("warni")) { ?>
<div class="alert alert-warning" >
<?php echo $this->session->flashdata("warni"); ?>
<?php } ?>

 <?php  if(@$this->session->flashdata("message")) { ?>
<div class="alert alert-success" >
<?php echo $this->session->flashdata("message"); ?>
</div>
<?php } ?>
<?php  if(@$this->session->flashdata("warn")) { ?>
<div class="alert alert-warning" >
<?php echo $this->session->flashdata("warn"); ?>
<?php } ?>
<?php  if(@$this->session->flashdata("wa")) { ?>
<div class="alert alert-warning" >
<?php echo $this->session->flashdata("wa"); ?>
<?php } ?>
<?php  if(@$this->session->flashdata("su")) { ?>
<div class="alert alert-success" >
<?php echo $this->session->flashdata("su"); ?>
</div>
<?php } ?>
                <form action="<?php echo base_url(); ?>admin/setting/change" class="form-horizontal" method="POST">

                                <div class="row">
                         <div class="col-md-6 sps">
                            <span ><strong>Old Password</strong></span>
                           <input type="Password" name="oldp" id="oldp"maxlength="15">
                          </div>
                         <div class="col-md-6 sps">
                            <span ><strong>New Password</strong></span>
                           <input type="Password" name="newp" id="newp" maxlength="15">
                          </div>
                          <div class="col-md-6 sps">
                            <span ><strong>Confirm Password</strong></span>
                           <input type="Password" name="conp" name="conp" maxlength="15">
                          </div>
                       </div>
                       <div class="row mt-3 mb-2">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-2">
                    	<button type="submit" name="update_pass" class="btn-block button-text btn button-success">Update </button>
						</form>
                    </div>

                    </form>
                    <div class="col-lg-5"></div>
                     </div>



                </div>

            </div>
            

   </body>
</html>
                
