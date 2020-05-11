<div class="tab-content">
               <div class="tab-pane active">
			   <div class="tabl-deatil">
  <?php  if(@$this->session->flashdata("success")) { ?>
  <div class="alert alert-success alert-dismissible">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <?php echo $this->session->flashdata("success"); ?>
  </div>
  <?php } ?>
  <?php  if(@$this->session->flashdata("failed")) { ?>
  <div class="alert alert-danger alert-dismissible fade in">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>    
  <?php echo $this->session->flashdata("failed"); ?>
  </div>
  <?php } ?>
                  <div class="newcss">	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                       <tr>
                          <td align="left" valign="top" style="text-align: center;"><strong>Name</strong></td>
                          <td align="left" valign="top" style="text-align: center;"><strong>Dollar Account<br>Number</strong></td>
                          <td align="left" valign="top" style="text-align: center;"><strong>Peso Account <br>Number</strong></td>
                          <td align="left" valign="top" style="text-align: center;"><strong>Date</strong></td>
                          <td align="left" valign="top" style="text-align: center;"><strong>Time</strong></td>
                       </tr>
                    </table>
                  </div>
                    <?php

                           if(!empty($list))
                           {
                             foreach($list as $item)
                               { 
                                 // var_dump($item); ?>
                                 <tr>
                                 <?php 
                                 $old_date = $item['request_time'];
                                 $old_date_timestamp = strtotime($old_date);
                                 $new_date = date('F d , Y', $old_date_timestamp); 
                                 $new_time = date('h:i', $old_date_timestamp); 
                                 // echo $new_date;
                                 // echo $new_time;

                                 ?>
                    <div class="wt__br rtl-lefy">
                    	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                           <tr>
                              <td align="left" valign="top" style="text-align: center;"><strong><?php echo $item['first_name']." ".$item['last_name']; ?></strong></td>
                              <td align="left" valign="top" style="text-align: center;"><strong><?php echo $item['us_dollar_account'];?></strong></td>
                              <td align="left" valign="top" style="text-align: center;"><strong><?php echo $item['primary_peso_account'];?></strong></td>
                              <td align="left" valign="top" style="text-align: center;"><strong><?php echo $new_date; ?></strong></td>
                              <td align="left" valign="top" style="text-align: center;"><strong><?php echo $new_time; ?></strong></td>
                           </tr>
                        </table>
                        </table>
                        <div class="col-md-4 bsdo__">In-Message: Buy <?php echo (round($item['credit_peso'], 6));?> at 52.60/$1</div><div class="col-md-4 bsdo__">Debit My Dollar Account $<?php echo $item['amount'];?></div><div class="col-md-4 bsdo__">Credit my Peso Account <?php echo (round($item['credit_peso'], 6));?></div>
						<div class="col-md-4">Reply: Hi <?php echo $item['first_name']; ?>! Transaction Completed.</div><div class="col-md-2">Bought ₱<?php echo (round($item['credit_peso'], 6));?></div><div class="col-md-2" style="padding: 0;">Transaction Number:</div><div class="col-md-4">

              <form class="sell_dollar_t"  method="POST">
              <input type="number" name="transaction_number" id="transaction_number<?php echo $item['id'];?>" required="" />
                <input type="hidden" name="id" id="id<?php echo $item['id'];?>" value="<?php echo $item['id'];?>">
                <input type="hidden" name="client_id" id="client_id<?php echo $item['id'];?>" value="<?php echo $item['client_id'];?>">
                <input type="hidden" name="credit_peso" id="credit_peso<?php echo $item['id'];?>" value="<?php echo $item['credit_peso'];?>">
                <input type="hidden" name="debit_dollar" id="debit_dollar<?php echo $item['id'];?>" value="<?php echo $item['amount'];?>">
                <button class="btn bthhn sd_btn" id="<?php echo $item['id'];?>" type="submit" name="submit">Send</button></div>              
              </form>

            </div>
                    
					
					
					                <?php
                              }

                           }
                            else
                           {
                               ?>
                               <div class="wt__br rtl-lefy">
                    	
						<div class="col-md-4"></div><div class="col-md-6"><h3>No New Sell Dollar Requests.</h3></div>
                    </div>
                               <?php
                           }

                           ?>

                  </div>
			   </div>
            </div>