<div class="tab-content">
               <div class="tab-pane hidan active">
          <div class="col-md-12 text-center">
            <h2><a href="index.html"><img src="<?php echo base_url(); ?>assets/bank/images/logo.png" alt="Prime Client" /></a></h2>
            <h3 style="font-family: graduate; text-transform: uppercase;">Admin Panel</h3>
          </div>
          <div class="col-md-6 col-md-offset-3">
          <div class="admin_panel">
            
                        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                           <tr>
                              <td colspan="2" align="left" valign="top" class="text-center">
                              <?php
                              date_default_timezone_set('Asia/Kolkata');
                              $old_date = $list["update_on"];
                              $old_date_timestamp = strtotime($old_date);
                              $new_date = date('M d, Y h:m:s', $old_date_timestamp);
                              ?>
                                <center><b>Last Update</b><strong> <?php echo $new_date;?></strong></center>
                              </td>
                           </tr>
                           <tr>
                              <td colspan="2" align="left" valign="top" class="text-center">
                                <h4>U.S. Dollar Peso Rate</h4><h5>($10k an above)</h5>
                              </td>
                           </tr>
                           <tr>
                              <td align="left" class="text-center" valign="top"><strong>Buying </strong></td>
                              <td align="left" class="text-center" valign="top">₱<?php echo $list["us_dollar_peso_rate_ew_buying_1y"]; ?></td>
                           </tr>
                           <tr>
                              <td align="left" class="text-center" valign="top"><strong>Selling </strong></td>
                              <td align="left" class="text-center" valign="top">₱<?php echo $list["us_dollar_peso_rate_ew_selling_1y"]; ?></td>
                           </tr>
                        </table>

                        <?php
                        foreach ($t_list as $tr) {
                         ?>
                         <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                           <tr>
                              <td colspan="2" align="left" valign="top" class="text-center">
                                <h4>Time Deposit Rates</h4><h5>(₱ <?php echo $tr['ammount_range']; ?>)</h5>
                              </td>
                           </tr>
                           <tr>
                            <?php
                            $tdt = explode(",", $tr['time']);
                            $tdr = explode(",", $tr['rate']);
                            ?>
                           
                              <td align="left" class="text-center" valign="top" style="width: 50%;"><strong>1 Month to <?php echo $tdt[0]; ?> Year</strong></td>
                              <td align="left" class="text-center red-sp" valign="top" style="width: 50%;"><?php echo $tdr[0]; ?>%</td>
                           </tr>
                           <tr>
                              <td align="left" class="text-center" valign="top"><strong>5 Years</strong></td>
                              <td align="left" class="text-center red-sp" valign="top"><?php echo $tdr[1]; ?>%</td>
                           </tr>
                        </table>
                         <?php
                         }
                        ?>
                        
                        <!-- <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                           <tr>
                              <td colspan="2" align="left" valign="top" class="text-center">
                                <h4>Time Deposit Rates</h4><h5>(1M and Above)</h5>
                              </td>
                           </tr>
                           <tr>
                              <td align="left" class="text-center" valign="top"><strong>1 Month to 1 Year</strong></td>
                              <td align="left" class="text-center" valign="top"><?php echo $list["time_deposite_rates_for_1m_1y"]; ?>%</td>
                           </tr>
                           <tr>
                              <td align="left" class="text-center" valign="top"><strong>5 Years</strong></td>
                              <td align="left" class="text-center" valign="top"><?php echo $list["time_deposite_rates_for_5m_5y"]; ?>%</td>
                           </tr>
                        </table>
                        
                        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                           <tr>
                              <td colspan="2" align="left" valign="top" class="text-center">
                                <h4>&nbsp;</h4><h5>(5M and Above)</h5>
                              </td>
                           </tr>
                           <tr>
                              <td align="left" class="text-center" valign="top"><strong>1 Month to 1 Year</strong></td>
                              <td align="left" class="text-center" valign="top">52.10%</td>
                           </tr>
                           <tr>
                              <td align="left" class="text-center" valign="top"><strong>5 Years</strong></td>
                              <td align="left" class="text-center" valign="top">45.98%</td>
                           </tr>
                        </table> -->
                        
                        
                        
                        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                           <tr>
                              <td colspan="2" width="100%" align="left" valign="top" class="text-center">
                                <h4>Fixed Income Rate</h4><h5>&nbsp;</h5>
                              </td>
                           </tr>
                           <tr>
                              <td align="left" width="33%" class="text-center" valign="top"><strong>T-bills</strong></td>
                              <td align="left" width="33%" class="text-center" valign="top">1 Year</td>
                              <td align="left" width="33%" class="text-center" valign="top"><?php echo $list["fixed_income_rate_t-bills_1y"]; ?>%</td>
                           </tr>
                        </table>
          </div>
            </div>
         </div>
            </div>