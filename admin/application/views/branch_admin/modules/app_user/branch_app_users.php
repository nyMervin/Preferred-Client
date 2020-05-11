<div class="tab-content">
               <div class="tab-pane hidan active">
					<div class="col-md-12 text-center">
						<h2>List Of Branch App Users</h2>
						<h2>&nbsp;</h2>
					</div>

					<div class="col-md-8 col-md-offset-2">
						<div class="rate-ex">
							
						</div>
					</div>
					<div class="col-md-12 list-app">
                    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                           <tr>
							                <th>S.No</th>
                              <th>Name</th>
                              <th>E-mail</th>
                              <th>Phone</th>
                              <th>$ Account Number</th>
                              <th>₱ Primary Account Number</th>
                           </tr>
                           <?php
                           // $old_date = $item['created_on'];
                                 // $old_date_timestamp = strtotime($old_date);
                                 // $new_date = date('F d , Y', $old_date_timestamp); 
                                 // echo $new_date;
                           // var_dump($list);


                           if(!empty(@$list))
                           {
                             $n = 1;
                             foreach($list as $item)
                               { 
                                 // var_dump($item); ?>
                                
                                 
                                 
                               
                                    
                    

                                 <tr>
                                   <td><?php echo $n."."; ?></td>
                                   <td><?php echo $item['first_name']." ".$item['last_name']; ?></td>
                                   <td><?php echo $item['email']; ?></td>
                                    <td><?php echo $item['cellphone']; ?></td>
                                   <td><?php echo $item['us_dollar_account']; ?></td>
                                   <td><?php echo $item['primary_peso_account']; ?></td>
                                   <!-- <td><a href="<?php echo base_url().''.$item['id']; ?>"><i class="fas fa-pencil-alt"></i></a> &nbsp;&nbsp; <a href="<?php echo base_url().''.$item['id']; ?>"><i class="far fa-trash-alt"></i></a></td> -->
                                 </tr>
                                 <tr style="height: 25px;">&nbsp;</tr>
                            <?php
                            $n++;  
                              }

                           }
                           else
                           {
                           	?>
                           	 <tr>
                           	 	<td colspan="5">No Result Found.</td>
                           	 </tr>

                           <?php	 	

                           }

                           ?>
						  
                        </table>
					</div>
			   </div>
            </div>
