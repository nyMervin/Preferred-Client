<div class="tab-content">
               <div class="tab-pane hidan active">
					<div class="col-md-12 text-center">
						<h2>List of App User</h2>
						<h2>&nbsp;</h2>
					</div>
					<div class="col-md-12 list-app">
                    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                           <tr>
                              <th>S.NO.</th>
                              <th>Name</th>
                              <th>Branch Code</th>
                              <th>Branch Name</th>
                              <th>Contact Number</th>
                              <th>Date Joined</th>
                           </tr>
                           <?php

                           if(!empty($list))
                           {
                             $n = 1;
                             foreach($list as $item)
                               { 
                                 // var_dump($item); ?>
                                 <tr>
                                 <?php 
                                 $old_date = $item['created_on'];
                                 $old_date_timestamp = strtotime($old_date);
                                 $new_date = date('F d , Y', $old_date_timestamp); 
                                 // echo $new_date;

                                 ?>
                                    
                                 </tr>

                                 <tr>
                                   <td><?php echo $n."."; ?></td>
                                   <td><?php echo $item['first_name']." ".$item['last_name']; ?></td>
                                   <td><?php echo $item['branch']; ?></td>
                                   <td><?php echo $item['branch_name']; ?></td>
                                   <td><?php echo $item['cellphone']; ?></td>
                                   <td><?php echo $new_date; ?></td>
                                   <!-- <td><a href="<?php echo base_url().''.$item['id']; ?>"><i class="fas fa-pencil-alt"></i></a> &nbsp;&nbsp; <a href="<?php echo base_url().''.$item['id']; ?>"><i class="far fa-trash-alt"></i></a></td> -->
                                 </tr>
                                 <tr style="height: 25px;">&nbsp;</tr>
                            <?php
                            $n++;  
                              }

                           }

                           ?>
                        </table>
					</div>
			   </div>
            </div>