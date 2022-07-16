<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Marketing Partner Coupon Add</h3>
            </div>
            <?php echo form_open('marketing_partner_coupon/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
				  <?php if($this->session->flashdata('error')!="" && $this->session->flashdata('error')!=null){?>
                
				<div class="alert alert-danger alert-dismissible  " role="alert">
				<strong><?php echo $this->session->flashdata('error');?></strong> 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>
			<?php } ?>
					<div class="col-md-6 hide">
						<div class="form-group">
							<input type="checkbox" name="is_active" value="1"  id="is_active" />
							<label for="is_active" class="control-label">Is Active</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="marketing_partner_id" class="control-label">Marketing Partner</label>
						<div class="form-group">
							<select class="form-control" required name="marketing_partner_id" id="marketing_partner_id">
								<option value="">Select Marketing Partner</option>
								<?php foreach($partners as $partner){ ?>
									<option value="<?php echo $partner['marketing_partner_id'];?>"><?php echo $partner['partner_name'];?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="coupon_code" class="control-label">Coupon Code</label>
						<div class="form-group">
							<input type="text" required name="coupon_code" value="<?php echo $this->input->post('coupon_code'); ?>" class="form-control" id="coupon_code" />
						</div>
					</div>
					<div class="col-md-6 hide">
						<label for="client_id" class="control-label">Client Id</label>
						<div class="form-group">
							<input type="text" name="client_id" value="<?php echo $this->input->post('client_id'); ?>" class="form-control" id="client_id" />
						</div>
					</div>
					<div class="col-md-6 hide">
						<label for="used_on" class="control-label">Used On</label>
						<div class="form-group">
							<input type="text" name="used_on" value="<?php echo $this->input->post('used_on'); ?>" class="has-datetimepicker form-control" id="used_on" />
						</div>
					</div>
					<div class="col-md-6 hide">
						<label for="created_on" class="control-label">Created On</label>
						<div class="form-group">
							<input type="text" name="created_on" value="<?php echo $this->input->post('created_on'); ?>" class="has-datetimepicker form-control" id="created_on" />
						</div>
					</div>
					<div class="col-md-6 hide">
						<label for="updated_on" class="control-label">Updated On</label>
						<div class="form-group">
							<input type="text" name="updated_on" value="<?php echo $this->input->post('updated_on'); ?>" class="has-datetimepicker form-control" id="updated_on" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
				<a href="<?php echo base_url()?>marketing_partner_coupon/index">
					<button type="button" class="btn btn-default">
						<i class="fa fa-arrow-left"></i> Cancel
					</button>
				</a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>