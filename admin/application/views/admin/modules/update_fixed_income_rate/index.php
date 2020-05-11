<div class="tab-content">
               <div class="tab-pane hidan active">

					<div class="col-md-12 text-center">
						<h2>Update Fixed Income Rates</h2>
						<!-- <h5>Time: 13:39</h5> -->
					</div>
					
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
							<!-- <form class="custom-input fixedincome_rate_form" action="<?php echo base_url(); ?>admin/update_fixed_income_rate/update_rates" method="POST"> -->
							<form class="custom-input fixedincome_rate_form" method="POST">
								<div class="form-control">
									<label>For 1 Year:%</label>
									<input type="number" step="any" name="fixed_income_rate" id="fixed_income_rate" value="<?php echo $list["fixed_income_rate_t-bills_1y"]; ?>" placeholder="$" required="" >
								</div>
								<div class="form-control">
									<label>&nbsp;</label>
									<button class="btn" type="submit" name="submit">Update</button>
								</div>
							</form>
						</div>
						</div>
			   </div>
            </div>


            