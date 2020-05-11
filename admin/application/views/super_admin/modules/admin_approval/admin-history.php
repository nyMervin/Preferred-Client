
            <div class="tab-content">
               <div class="tab-pane hidan active">
					<div class="col-md-7"></div>
          <div class="col-md-2 text-center"><p>Branch No</p></div>
          <div class="col-md-3 text-center">
						<input type="text" id="searchboxid"  name="username" placeholder="Search admin user name">
					</div>
					<div class="col-md-12 text-center list-app admin-history">
						<table id="example" class="table " style="width:100%">
						 <thead>  
						 	<tr>
							  <th align="left" valign="top">Transaction</th>
							  <th align="left" valign="top">Transaction Number</th>
							  <th align="left" valign="top">Admin Name</th>
							  <th align="left" valign="top">Branch No.</th>
                <th align="left" valign="top">Transaction Date</th>
						   </tr>
						</thead>
						   <tbody>
						   <?php if(!empty($adminhistorylist)){
						   	foreach ($adminhistorylist as $value) {
						   		
						   	?>
						   <tr>
							   
                <td align="left" valign="top"><?php echo $value['type']?></td>
                <td align="left" valign="top"><?php echo $value['transaction_number']?></td>
                <td align="left" valign="top"><?php echo $value['username']?></td>
                <td align="left" valign="top"><?php echo $value['branch']?></td>
                <td align="left" valign="top"><?php echo $value['completed_on']?></td>
						   </tr>
						   <?php } } else {
						   	?>
                           <tr>
                           	 	<td colspan="7">NO Result Found.</td>
                           	 </tr>

                               <?php
						   } ?>
						</tbody>
						</table>
					</div>
			   </div>
            </div>