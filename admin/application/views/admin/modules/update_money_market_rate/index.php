<div class="tab-content">
               <div class="tab-pane hidan active">
					<div class="col-md-12 text-center">
						<h2>Update Time Deposit Rate</h2>
						<h4>Date: <?php 
						echo $list[0]['updated_on']; 
				// var_dump($list[0]['updated_on']);
						?></h4>
						<!-- <h5>Time: 13:39</h5> -->
						
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
					</div>
					
					<?php
					if(!empty($list))
                           {
                             $n = 1;
                             foreach($list as $item)
                               { 
                                  $time = explode(",",$item['time']);
                                  $rate = explode(",",$item['rate']);
                                 ?>
 <form class="time_deposit_frm" action="" method="Post">
                                 <div class="col-md-8 col-md-offset-2">
						<h3 class="text-center">
						    <input type="hidden" class="updateid<?php echo $n ?>" name="id" value="<?php echo $item['id']; ?>">
						    <input type="text" class="yii_input ammount_range_input<?php echo $n ?>" name="ammount_range[]" value="<?php echo $item['ammount_range']; ?>" id="ammount_range[]" placeholder="Rate For Time Period"></h3>
						<div class="row">
							<div class="col-md-6">
								<input type="number" step="any" id="time[]" name="time[]" class="yii_input timeinput<?php echo $n ?>" value="<?php echo $time[0];  ?>" placeholder="$"><br>

								<br><input type="number" step="any" class="yii_input timeinput<?php echo $n ?>" value="<?php echo $time[1]; ?>" name="time[]" id="time[]"  placeholder="$">

							</div>
							<div class="col-md-6">
								<input type="number" step="any" id="rate[]" name="rate[]" class="yii_input rateinput<?php echo $n ?>" value="<?php echo $rate[0];  ?>" placeholder="$"><br>

								<br><input type="number" step="any" class="yii_input rateinput<?php echo $n ?>" value="<?php echo $rate[1];  ?>" name="rate[]"  id="rate[]"  placeholder="$">

							</div>
						</div>
					</div>
					
					<div class="col-md-8 col-md-offset-2">
						<div class="row">
							<div class="col-md-6">&nbsp;</div><div class="col-md-6">&nbsp;</div>
							<div class="col-md-6"><button id="<?php echo $n ?>"  class="btn inputbtnn timedepositbtn" type="submit" name="submit">Update</button></div>
							<div class="col-md-6">&nbsp;</div>
						</div>
					</div>
					</form>
                            <?php

                            $n++;

                              }

                           }

                           ?>
					
					
					
			   </div>
            </div>