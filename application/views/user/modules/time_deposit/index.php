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
   	        <?php  if(@$this->session->flashdata("success")) { ?>
                        <div class="alert alert-success alert-dismissible">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata("success"); ?>
                        </div>
            <?php } ?>
            <?php  if(@$this->session->flashdata("td_otp_failed")) { ?>
                        <div class="alert alert-warning alert-dismissible">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata("td_otp_failed"); ?>
                        </div>
            <?php } ?>
   	        <div class="row">
                <div class="col-md-12">
                          <p class="down">Time Deposite Rate</p>
    <!-- <form name="form1" id="form1" method="POST" action="<?php echo base_url().'time_deposit/request' ?>"> -->
    <form name="form1" id="time_deposit_form" method="POST" action="<?php echo base_url().'time-deposit-confirm' ?>">
        <br>
        <p class="down">(₱<?php echo $time_rate[0]['ammount_range']; ?>)</p>
        <div style="text-align: center;">

        <?php
         $time1 = explode(",", $time_rate[0]["time"]);
         $rate1 = explode(",", $time_rate[0]["rate"]);
        ?>

        <input id="rdo_1" type="radio" value="<?php echo $time1[0].",".$rate1[0]; ?>" name="rate" ><b class="down"><?php echo $time1[0] ?> Year at <?php echo $rate1[0] ?>% interest Rate</b>
        
        <br>
        <input id="rdo_2" type="radio" value="<?php echo $time1[1].",".$rate1[1]; ?>" name="rate" ><b class="down"><?php echo $time1[1] ?> Year at <?php echo $rate1[1] ?> %interest Rate</b>
      </div>
        <br>
        <br>
        <div style="text-align: center;">
        <?php
         $time2 = explode(",", $time_rate[1]["time"]);
         $rate2 = explode(",", $time_rate[1]["rate"]);
        ?>
        <p class="down">(₱<?php echo $time_rate[1]['ammount_range']; ?>)</p>
        
        <input id="rdo_3" type="radio" value="<?php echo $time2[0].",".$rate2[0]; ?>" name="rate" ><b class="down"><?php echo $time2[0] ?> Year at <?php echo $rate2[0] ?> %interest Rate</b>
        <br>
        <input id="rdo_4" type="radio" value="<?php echo $time2[1].",".$rate2[1]; ?>" name="rate" ><b class="down"><?php echo $time2[1] ?> Year at <?php echo $rate2[1] ?> %interest Rate</b>
      </div>
        <br>
        <div class="row">
                    <div class="col-md-6 col-md-offset-3 account-data form-group">
                        <p class="" style="text-align: center!important;font-family: Raleway;font-style: normal;font-weight: normal;font-size: 18px;">How Much ?</p>
                        <input  type="text" name="amount" id="how_much" placeholder="₱" value="" required="">
                    </div>
                    
            </div>
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
