<div class="tab-content" >

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
                        <div class="newcss">
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                       <tr>
                          <td align="left" valign="top" style="text-align: center;"><strong>Name</strong></td>
                          <td align="left" valign="top" style="text-align: center;"><strong>Dollar Account<br>Number</strong></td>
                          <td align="left" valign="top" style="text-align: center;"><strong>Peso Account <br>Number 1</strong></td>
                          <td align="left" valign="top" style="text-align: center;"><strong>Peso Account <br>Number 2</strong></td>
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
                                  // var_dump($item);
                                 $old_date = $item['requested_on'];
                                 $old_date_timestamp = strtotime($old_date);
                                 $new_date = date('F d , Y', $old_date_timestamp); 
                                 $new_time = date('h:i', $old_date_timestamp); 
                                 // echo $new_date;
                                 // echo $new_time;

                                 ?>

                        <div class="wt__br">
                      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                           <tr>
                              <td align="left" valign="top" style="text-align: center;"><strong><?php echo $item['first_name']." ".$item['last_name']; ?></strong></td>
                              <td align="left" valign="top" style="text-align: center;"><strong><?php echo $item['us_dollar_account']; ?></strong></td>
                              <td align="left" valign="top" style="text-align: center;"><strong><?php echo $item['primary_peso_account']; ?></strong></td>
                              <td align="left" valign="top" style="text-align: center;"><strong><?php echo $item['secondary_peso_account']; ?></strong></td>
                              <td align="left" valign="top" style="text-align: center;"><strong><?php echo $new_date; ?></strong></td>
                              <td align="left" valign="top" style="text-align: center;"><strong><?php echo $new_time; ?></strong></td>
                           </tr>
                        </table>
                        <h4>Hi <?php echo $item['first_name']; ?>!<br> Your Deposit Balance today are</h4>
                        <form method="POST" action="<?php echo base_url().'admin/Balance/send_account_balance'; ?> " style="display: flex;">
                            <input type="hidden" name="id" value="<?php echo $item['id']; ?>" />
                            <input type="hidden" name="client_id" value="<?php echo $item['client_id']; ?>" />
                            <input type="Number" name="us_balance" placeholder="Dollar Account Balance" required="" />
                            <input type="Number" style="margin: 0 10px;" name="peso_balance" placeholder="Peso Account Balance 1" required="" />
                            <input type="Number" name="peso_balance2" placeholder="Peso Account Balance 2 " required="" />
                            <button class="btn" type="submit" style="margin: 0 10px;" name="submit">Send</button>
                        </form>
                        
                    </div>
                                
              
                                   
                                
                            <?php
                              }

                           }
                           else
                           {
                               ?>
                           <div class="wt__br rtl-lefy">
                              <div class="col-md-4"></div><div class="col-md-6"><h3>No New Balance Requests.</h3></div>
                          </div>
                               <?php
                           }

                           ?>

          </div>




                    
                   
                  </div>
         </div>
            </div>