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
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                       <tr>
              <td align="left" valign="top" style="text-align: center;"><strong>Branch Number</strong></td>
                          <td align="left" valign="top" style="text-align: center;"><strong>Name</strong></td>
                          <td align="left" valign="top" style="text-align: center;"><strong>Rate</strong></td>
                          <td align="left" valign="top" style="text-align: center;"><strong>Peso Account<br>Number</strong></td>
              <td align="left" valign="top" style="text-align: center;"><strong>Date</strong></td>
                          <td align="left" valign="top" style="text-align: center;"><strong>Time</strong></td>
                       </tr>
                    </table>

                    <?php
 
                           if(!empty($list))
                           {
                             foreach($list as $item)
                               { 
                                 
                                 ?>
                                 <tr>
                                 <?php 
                                 $old_date = $item['request_time'];
                                 $old_date_timestamp = strtotime($old_date);
                                 $new_date = date('F d , Y', $old_date_timestamp); 
                                 $new_time = date('h:m', $old_date_timestamp); 
                                 // echo $new_date;
                                 // echo $new_time;

                                 // var_dump($rate);
                                 // echo $rate[0];
                                 // echo $rate[1];

                                 $_rate = explode(",", $item['rate']); 

                                 ?>


                    <div class="wt__br rtl-lefy">
                      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                           <tr>
                              <td align="left" valign="top" style="text-align: center;"><strong><?php echo $item['branch'];?></strong></td>
                <td align="left" valign="top" style="text-align: center;"><strong><?php echo $item['first_name']." ".$item['last_name']; ?></strong></td>
                              <td align="left" valign="top" style="text-align: center;"><strong><?php echo $_rate[0];?> year at <?php echo $_rate[1];?>%</strong></td>
                              <td align="left" valign="top" style="text-align: center;"><strong><?php echo $item['primary_peso_account'];?></strong></td>
                              <td align="left" valign="top" style="text-align: center;"><strong><?php echo $new_date; ?></strong></td>
                              <td align="left" valign="top" style="text-align: center;"><strong><?php echo $new_time; ?></strong></td>
                           </tr>
                        </table>
                        <div class="col-md-4 bsdo__">In-Message: Placed ₱<?php echo $item['amount'];?> at</div><div class="col-md-4 bsdo__"><?php echo $_rate[0];?> year at <?php echo $_rate[1];?>%</div><div class="col-md-4 bsdo__">DEBIT My Peso ₱ <?php echo $item['amount'];?></div>
            <div class="col-md-4">Reply: Hi <?php echo $item['first_name'];?>! Transaction Completed.</div><div class="col-md-2">FI Placement : ₱<?php echo $item['amount'];?></div><div class="col-md-2" style="padding: 0;">Transaction Number:</div><div class="col-md-4"> 


               <!--<form action="<?php echo base_url(); ?>branchadmin/transaction/set_fixed_income_transaction"  method="POST">-->
			   <form class="fixed_income_t" method="POST">
              <input type="text" id="transaction_number<?php echo $item['id'];?>" name="transaction_number" required />
                <input type="hidden" id="id<?php echo  $item['id'] ?>" name="id" value="<?php echo $item['id'];?>">
                <input type="hidden" id="client_id<?php echo  $item['id'] ?>" name="client_id" value="<?php echo $item['client_id'];?>">
                <input type="hidden" id="rate<?php echo  $item['id'] ?>" name="rate" value="<?php echo $item['rate'];?>">
                <input type="hidden" id="debit_peso<?php echo  $item['id'] ?>" name="debit_peso" value="<?php echo $item['amount'];?>">
                <button class="btn bthhn fi_btn" type="submit" id="<?php echo $item['id'];?>" name="submit">Send</button></div>              
              </form>



            </div>
                 


          
                        <?php
                              }

                           }
                            else
                           {
                               ?>
                               <div class="wt__br rtl-lefy">
                    	
						<div class="col-md-3"></div><div class="col-md-6"><h3>No New Fixed Income Requests.</h3></div>
                    </div>
                               <?php
                           }

                           ?>


        
                  </div>
          </div>
        
            </div>