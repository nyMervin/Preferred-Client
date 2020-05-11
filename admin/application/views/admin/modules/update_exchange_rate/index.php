

<div class="tab-content">
               <div class="tab-pane hidan active">

					<div class="col-md-12 text-center">
						<h2>Update Exchange Rate</h2>
						<h4>Date: <?php echo $list["update_on"]; ?></h4>
						<!-- <h5>Time: 13:39</h5> -->
					</div>

					<?php
					// echo json_encode(array("status"=>"1","message"=>"Success","data"=>$list));
					?>
					
					<div class="col-md-6 col-md-offset-3">
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
					<div class="rate-ex">
							<form class="custom-input rate_form" action="" method="POST" id="frmChat">
								<div class="form-control">
									<label>Buying Dollars:</label>
									<input type="number" step="any" name="buying_rate" value="<?php echo $list["us_dollar_peso_rate_ew_buying_1y"]; ?>" id="buying_rate" placeholder="$" required="">
								</div>
								<div class="form-control">
									<label>Selling Dollars:</label>
									<input type="number" step="any" name="selling_rate" id="selling_rate" value="<?php echo $list["us_dollar_peso_rate_ew_selling_1y"]; ?>" placeholder="$" required="">
								</div>								
								<div class="form-control">
									<label>&nbsp;</label>
									<button class="btn" type="submit" id="btnSend" name="submit">Update</button>
								</div>
							</form>
						</div>
						</div>
			   </div>
            </div>