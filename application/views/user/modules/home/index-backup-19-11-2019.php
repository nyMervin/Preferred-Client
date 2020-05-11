
<!--Page Container Start Here-->
<section class="main-container">
    <div class="container">
<div class="col-md-6">
<div class="login-form-container" id="output">
    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <div class="admin_panel">
                        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                           <tr>
                              <td colspan="2" align="left" valign="top" class="text-center">
                                <h4>U.S. Dollar Peso Rate</h4><h5>($10k and above)</h5>
                              </td>
                            </tr>
                           <tr>
                              <td align="left" class="data" width="75%" valign="top"><strong>Buying $</strong></td>
                              <td align="left" class="value" width="25%" valign="top">₱<?php echo $list['us_dollar_peso_rate_ew_buying_1y'];?></td>
                           </tr>
                           <tr>
                              <td align="left" class="text-center data" valign="top"><strong>Selling $</strong></td>
                              <td align="left" class="text-center value" valign="top">₱<?php echo $list['us_dollar_peso_rate_ew_selling_1y'];?></td>
                           </tr>
                        </table>
                         <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

                           
                    <?php
                     $query = $this->db->query("SELECT * FROM `time_deposit_rate` WHERE id = 1");
                     $time_rate = $query->row_array();
                     
                     if(!empty($time_rate))
                           {
                              // var_dump($time_rate);
                             
                                 $timee = explode(",", $time_rate["time"]);
                                 $ratee = explode(",", $time_rate["rate"]);
                                 // var_dump($timee[0]); 
                                 // var_dump($ratee[0]); 
                            ?>
                            <tr>
                              <td colspan="2" align="left" valign="top" class="text-center">
                                <h4>Time Deposit Rates</h4><h5>(<?php echo $time_rate['ammount_range']; ?>)</h5>
                              </td>
                           </tr>
                       <tr>
                              <td align="left" class="text-center data" valign="top"><strong>1 Month to <?php echo $timee[0]; ?> Year</strong></td>
                              <td align="left" class="text-center value" valign="top"><?php echo $ratee[0]; ?>%</td>
                           </tr>
                           <tr>
                              <td align="left" class="text-center data" valign="top"><strong><?php echo $timee[1]; ?> Years</strong></td>
                              <td align="left" class="text-center value" valign="top"><?php echo $ratee[1]; ?>%</td>
                           </tr>


                      <?php
                        $i++;
                     }
                     ?>
                   </table>
                   <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                   <?php
                     $query = $this->db->query("SELECT * FROM `time_deposit_rate` WHERE id = 2");
                     $time_rate = $query->row_array();
                     
                     if(!empty($time_rate))
                           {
                              // var_dump($time_rate);
                             
                                 $timee = explode(",", $time_rate["time"]);
                                 $ratee = explode(",", $time_rate["rate"]);
                                 // var_dump($timee[0]); 
                                 // var_dump($ratee[0]); 
                            ?>
                            <tr>
                              <td colspan="2" align="left" valign="top" class="text-center">
                                <h4>Time Deposit Rates</h4><h5>(<?php echo $time_rate['ammount_range']; ?>)</h5>
                              </td>
                           </tr>
                       <tr>
                              <td align="left" class="text-center data" valign="top"><strong>1 Month to <?php echo $timee[0]; ?> Year</strong></td>
                              <td align="left" class="text-center value" valign="top"><?php echo $ratee[0]; ?>%</td>
                           </tr>
                           <tr>
                              <td align="left" class="text-center data" valign="top"><strong><?php echo $timee[1]; ?> Years</strong></td>
                              <td align="left" class="text-center value" valign="top"><?php echo $ratee[1]; ?>%</td>
                           </tr>


                      <?php
                        $i++;
                     }
                     ?>
                   </table>
                               
                           
                        
                        
                        
                        
                        
                        
                        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                           <tr>
                              <td colspan="2" width="100%" align="left" valign="top" class="text-center">
                                <h4>Fixed Income Rate</h4><h5>&nbsp;</h5>
                              </td>
                           </tr>
                           <tr>
                              <td align="left" width="35%" class="data" valign="top"><strong>T-bills</strong></td>
                              <td align="left" width="39%" class="text-center data" valign="top">1 Year</td>
                              <td align="left" width="26%" class="value" valign="top"><?php echo $list['fixed_income_rate_t-bills_1y'];?>%</td>
                           </tr>
                        </table>
                    </div>
        </div>
    </div>
</div>
</div>
    <div class="col-md-6 dollar">
        <div class="tips">
            <div class="title">
                <p>What do you want to do?</p>
            </div>
            <div class="links">
            <p><a href="<?php echo base_url().'buy-dollar' ;?>">Buy Dollars</a></p>
            <p><a href="<?php echo base_url().'sell-dollar' ;?>">Sell Dollars</a></p>
            <p><a href="<?php echo base_url().'time-deposit' ;?>">Time Deposit</a></p>
            <p><a href="<?php echo base_url().'fixed-income' ;?>">Fixed Income</p>
            <p><a href="<?php echo base_url().'balance-request' ;?>">What are my Bank Balance ?</p>
            <!-- <p>Other Products</p> -->
        </div>
        </div>
    </div>



</div>
</section>
<!--Page Container Ends Here-->
