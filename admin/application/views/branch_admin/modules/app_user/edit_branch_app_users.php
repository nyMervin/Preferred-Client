<div class="tab-content">
               <div class="tab-pane hidan active">
					<div class="col-md-12 text-center">
						<h2>Edit App Users</h2>
						<h2>&nbsp;</h2>
					</div>

					<div class="col-md-8 col-md-offset-2">
						<div class="rate-ex">
							
						</div>
					</div>
					<div class="col-md-12 list-app">
                    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                           <tr>
							                <th>Name</th>
                              <th>Phone</th>
                              <th>E-mail</th>
                              <th>Edit</th>
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
                                   <td><a href="<?php echo base_url() ?>branch-admin/branch-user-edit-user/<?php echo $item['id']; ?>">Edit User</a></td>
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
                           	 	<td colspan="4">NO Result Found.</td>
                           	 </tr>

                           <?php	 	

                           }

                           ?>
						  
                        </table>
					</div>
			   </div>
            </div>
