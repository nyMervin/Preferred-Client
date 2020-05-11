<div class="tab-content">
               <div class="tab-pane hidan active">
					<div class="col-md-12 text-center">
						<h2>Query all Transactions of Branch Depositors by Account Officer</h2>
						<h2>&nbsp;</h2>
					</div>
					<div class="col-md-8">
						<div class="rate-ex">
							<form class="custom-input qrytrs" method="POST" action="#">
								<div class="form-control">
									<div class="col-md-3"><label style="width: auto;">Account Officer</label></div>
									<div class="col-md-9">
										<select  name="adminid" id="adminidget" style="width: 67%;">
										<option value="">Select Account Officer</option>
										<?php

			                           if(!empty($aolist))
			                           {
			                             foreach($aolist as $item)
			                               { 
			                                 // var_dump($item); 
			                               	?>
			                              <option value="<?php echo $item['ADMINID']; ?>"><?php echo $item['name']." (".$item['ADMINID'].") "; ?></option>
			                            <?php
			                              }

			                           }

			                           ?>
									</select>
									<div class="form-control areaa" style="width: 15%;padding: 0;float: right;margin: 0 18% 0 0;">
									<div class="col-md-3" style="padding: 0;width: 100%;">
										<!-- <button class="btn go_btn" type="submit" name="submit">Go</button> -->
									</div>
								</div>
									</div>

								</div>
								
							</form>
						</div>
					</div>


					<div class="col-md-12 list-app" id="gettransactionlist_adminid">
                    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                           <tr>
                              <th>S.No.</th>
                              <th>Branch Number</th>
							  <th>Name</th>
                              <th>Dollar Sold</th>
                              <th>Peso Value</th>
                              <th>Date/Time</th>
							  <th>Transaction Number</th>
                           </tr>
					<?php

                           if(!empty($list))
                           {
                             $n = 1;
                             foreach($list as $item)
                               { 
                                  // var_dump($item);
                                 ?>
                                
						   <tr>
						      <td><?php echo $n."."; ?></td>
                              <td><?php echo $item['branch_code']; ?></td>
							  <td><?php echo $item['first_name']." ".$item['last_name']; ?></td>
                              <td>$<?php echo $item['debit_amount']; ?></td>
                              <td>₱<?php echo $item['credit_amount']; ?></td>
                              <td><?php echo $item['completed_on']; ?></td>
							  <td><?php echo $item['transaction_number']; ?></td>
							  <!-- <td><a href="<?php echo base_url().''.$item['id']; ?>"><i class="fas fa-pencil-alt"></i></a> &nbsp;&nbsp; <a href="<?php echo base_url().''.$item['id']; ?>"><i class="far fa-trash-alt"></i></a></td> -->
                           </tr>
                                 
                                   
                                
                            <?php
                            $n++;  
                              }

                           }
                           else
                           {
                               ?>
                           <tr>
                           	 	<td colspan="8">No Result Found.</td>
                           	 </tr>

                               <?php
                           }

                           ?>
                                                     
                           
                        </table>
					</div>


			   </div>
            </div>
            

