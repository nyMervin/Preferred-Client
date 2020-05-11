<div class="tab-content">
               <div class="tab-pane hidan active">
					<div class="col-md-12 text-center">
						<h2>Query and Total all "Buy Dollar" Transactions</h2>
						<h2>&nbsp;</h2>
					</div>
					<div class="col-md-8 col-md-offset-2">
						<div class="rate-ex">
							<form class="custom-input qrytrs" method="POST" action="<?php echo base_url().'admin/buy-dollar-query-all-by-date' ;?>">
								<div class="form-control areaa">
									<div class="col-md-3" style="padding:0px;"><label class="arealabel">From</label></div>
									<div class="col-md-9" style="padding:0px;">
										<input type="text"  name="from" placeholder="yyyy-mm-dd" id="datepicker" value="<?php echo @$this->input->post('from') ?>" autocomplete="off">
									</div>
								</div>
								<div class="form-control areaa">
									<div class="col-md-3" style="padding:0px;"><label class="arealabel">To</label></div>
									<div class="col-md-9" style="padding:0px;">
										<input type="text"  name="to" placeholder="yyyy-mm-dd" id="datepicker2" value="<?php echo @$this->input->post('to') ?>" autocomplete="off">
									</div>
								</div>
								<div class="form-control areaa" style="width: 15%;">
									<div class="col-md-2"><label class="arealabel">&nbsp;</label></div>
									<div class="col-md-3"><button class="btn go_btn" type="submit" name="submit">Go</button></div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-12 list-app">
                    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                           <tr>
                              <th>S.No.</th>
                              <th>Branch Number</th>
							  <th>Name</th>
                              <th>Dollar Bought</th>
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
                                //   var_dump($item);
                                 ?>
                                
						   <tr>
						      <td><?php echo $n."."; ?></td>
                              <td><?php echo $item['branch_code']; ?></td>
							  <td><?php echo $item['first_name']." ".$item['last_name']; ?></td>
                              <td>$<?php echo $item['credit_amount']; ?></td>
                              <td><?php echo $item['debit_amount']; ?></td>
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
                           	 	<td colspan="7">No Result Found.</td>
                           	 </tr>

                               <?php
                           }

                           ?>
                           
                           
                           
						   <!--<tr>-->
         <!--                     <td>1233</td>-->
							  <!--<td>Gray, Carmina S.</td>-->
         <!--                     <td>$10,000.00</td>-->
         <!--                     <td>526,500</td>-->
         <!--                     <td>8/15/2019</td>-->
							  <!--<td>14.44</td>-->
							  <!--<td>458236541</td>-->
         <!--                  </tr>-->
                        </table>
					</div>
					
			   </div>
            </div>