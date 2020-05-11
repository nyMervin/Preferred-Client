<div class="tab-content">
               <div class="tab-pane hidan active">
					<div class="col-md-12 text-center">
						<h2>Query and total all "Fixed Income" Transaction by branch</h2>
						<h2>&nbsp;</h2>
					</div>
					<div class="col-md-8 col-md-offset-2">
						<div class="rate-ex">
							<form class="custom-input qrytrs" method="POST" action="<?php echo base_url(); ?>admin/fixed-income-queries-by-branch-date">
								<div class="form-control">
									<div class="col-md-3"><label style="width: auto;">Branch</label></div>
									<div class="col-md-9">
										<input type="text" name="branch" id="branch" autocomplete="off">
                                        <ul class="list-gpfrm" id="branch_search"></ul>
										<!-- <select name="branch">
											<option value="select Branch">Select Branch</option>
											<?php

			                           if(!empty($branches))
			                           {
			                             foreach($branches as $item)
			                               { 
			                                 // var_dump($item); 
			                               	?>
			                              <option value="<?php echo $item['branch_code']; ?>"><?php echo $item['branch_code']; ?></option>
			                            <?php
			                              }

			                           }

			                           ?>
										</select> -->
									</div>
								</div>
								<div class="form-control areaa">
									<div class="col-md-3" style="padding:0px;"><label class="arealabel">From</label></div>
									<div class="col-md-9" style="padding:0px;">
										<input type="text" name="from_date" placeholder="yyyy-mm-dd" id="datepicker" autocomplete="off">
									</div>
								</div>
								<div class="form-control areaa">
									<div class="col-md-3" style="padding:0px;"><label class="arealabel">To</label></div>
									<div class="col-md-9" style="padding:0px;">
										<input type="text" name="to_date" placeholder="yyyy-mm-dd" id="datepicker2" autocomplete="off">
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
                              <th>S.NO.</th>
                              <th>Branch Number</th>
							  <th>Name</th>
                              <th>Dollar Account Number</th>
                              <th>Peso Account Number</th>
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
                              <td><?php echo $item['us_dollar_account']; ?></td>
                              <td><?php echo $item['primary_peso_account']; ?></td>
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
                                                     
                           
                        </table>
					</div>


			   </div>
            </div>