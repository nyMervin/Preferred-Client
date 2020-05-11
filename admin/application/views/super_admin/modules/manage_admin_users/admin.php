<div class="tab-content">
               <div class="tab-pane hidan active">
					
					<div class="col-md-12 text-center">
						<h3>Manage Admin Users<br>(All)</h3>
					</div>
					<div class="col-md-12 text-center list-app">
						<table id="example" class="table " style="width:100%">
						  <thead>
						   <tr>
							  <th align="left" valign="top">Account No.</th>
							  <th align="left" valign="top">Admin Name</th>
							  <th align="left" valign="top">Branch No.</th>
							  <th align="left" valign="top">Date Created</th>
							  <th align="left" valign="top"><input type="text" id="searchboxid" name="username" placeholder="Search admin user name"></th>
						   </tr>
						</thead>
						<tbody>
						   <?php

                           if(!empty($list))
                           {
                             $n = 1;
                             foreach($list as $item)
                               { 
                                  // var_dump($item);
                                 ?>
						   <tr>
						   	
                              <td align="left" valign="top"><?php echo $item['account_no']; ?></td>
							  <td align="left" valign="top"><?php echo $item['username']; ?></td>
                              <td align="left" valign="top"><?php echo $item['branch']; ?></td>
                              <td align="left" valign="top"><?php echo $item['cdate']; ?></td>
							 
							  <td align="left" valign="top">

							  	<a class="btn privilages" href="profile/<?php echo $item['ADMINID']; ?>">View Privilages</a></td>
						   </tr>
						   
						    <?php
                            $n++;
                              }

                           }
                           else
                           {
                               ?>
                           <tr>
                           	 	<td colspan="7">NO Result Found.</td>
                           	 </tr>

                               <?php
                           }

                           ?>
<tbody>
						  						</table>
					</div>


				


			   </div>
            </div>