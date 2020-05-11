<!--Page Container Start Here-->
<section class="main-container">
    <div class="container">
<div class="col-md-6">
<div class="login-form-container" id="output">
    
</div>
</div>
    <div class="col-md-offset-1 col-md-5">

        <div class="tips">
            

   <div class="row">
   	        <?php  if(@$this->session->flashdata("br_success")) { ?>
                        <div class="alert alert-success alert-dismissible">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata("br_success"); ?>
                        </div>
            <?php } ?>
            <?php  if(@$this->session->flashdata("br_unsuccess")) { ?>
                        <div class="alert alert-warning alert-dismissible">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata("br_unsuccess"); ?>
                        </div>
            <?php } ?>
            <?php  if(@$this->session->flashdata("br_failed")) { ?>
                        <div class="alert alert-danger alert-dismissible">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata("br_failed"); ?>
                        </div>
            <?php } ?> 
   	        <div class="row">
                <div class="col-md-12">
                	<p class="account-head">Your Bank Accounts</p>
      <form  action="<?php echo base_url().'balance-request-send' ?>" method="POST">

        <input type="hidden" name="id" value="<?php echo $me['id']; ?>">

        <div class="row">
                    <div class="col-md-6 col-md-offset-3 account-data form-group">
                        <p class="" style="text-align: center!important;font-family: Raleway;font-style: normal;font-weight: normal;font-size: 18px;">U.S. Dollar Account</p>
                        <input type="text"  value="<?php echo $me['us_dollar_account']; ?>" readonly="">
                    </div>
                    
            </div>
            <div class="row">
                    <div class="col-md-6 col-md-offset-3 account-data">
                        <p class="" style="text-align: center!important;font-family: Raleway;font-style: normal;font-weight: normal;font-size: 18px;">Primary Peso Account</p>
                        <input type="text"  value="<?php echo $me['primary_peso_account']; ?>" readonly="">
                    </div>
                    
            </div>
            <?php 
            if(!empty($me['secondary_peso_account']))
            {
              ?>
               <div class="row">
                    <div class="col-md-6 col-md-offset-3 account-data">
                        <p class="" style="text-align: center!important;font-family: Raleway;font-style: normal;font-weight: normal;font-size: 18px;">Secondary Peso Account</p>
                        <input type="text"   value="<?php echo $me['secondary_peso_account']; ?>" readonly="">
                    </div>
                    
            </div>
              <?php
            }
            ?>
           
            
            
        <div class="col-md-6 col-md-offset-3">
          <div class="account-data">
                <button type="submit" class="btn-purple btn-block">CONFIRM</button>
            </div>
        </div>
            

    </form>
    </div>
</div>

    </div>
           
            </div>
        
        </div>
   
          




        </div>
      </div>
    </div>
    
    </div>
 
    </div>



</div>

</section>
<!--Page Container End Here-->
