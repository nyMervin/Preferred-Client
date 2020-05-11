<div class="tab-content">
               <div class="tab-pane hidan active">
					<div class="col-md-12 text-center">
						<h2>Query all Balances Requests of Branch Depositors</h2>
						<h2>&nbsp;</h2>
					</div>
					<div class="col-md-8 col-md-offset-2">
						<div class="rate-ex">
							<form class="custom-input qrytrs" method="POST" action="<?php echo base_url(); ?>branch-admin/balances-request-query-deposit-by-date">
								<div class="form-control areaa">
									<div class="col-md-3" style="padding:0px;"><label class="arealabel">From</label></div>
									<div class="col-md-9" style="padding:0px;">
										<input type="text" name="from_date" placeholder="yyyy-mm-dd" id="datepicker" autocomplete="off" value="<?php echo @$this->input->post('from_date') ?>">
									</div>
								</div>
								<div class="form-control areaa">
									<div class="col-md-3" style="padding:0px;"><label class="arealabel">To</label></div>
									<div class="col-md-9" style="padding:0px;">
										<input type="text" name="to_date" placeholder="yyyy-mm-dd" id="datepicker2" autocomplete="off" value="<?php echo @$this->input->post('to_date') ?>">
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
                              <th>Date/Time</th>
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
                              <td><?php echo $item['branch']; ?></td>
							  <td><?php echo $item['first_name']." ".$item['last_name']; ?></td>
                              <td><?php echo $item['completed_on']; ?></td>
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