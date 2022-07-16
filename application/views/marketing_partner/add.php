<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Marketing Partner Add</h3>
            </div>
            <?php echo form_open('marketing_partner/add'); ?>
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
							<input type="checkbox" name="status" value="1"  id="status" />
							<label for="status" class="control-label">Status</label>
						</div>
					</div>
					<div class="col-md-6 hide">
						<div class="form-group">
							<input type="checkbox" name="is_active" value="1"  id="is_active" />
							<label for="is_active" class="control-label">Is Active</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="partner_name" class="control-label"><span class="text-danger">*</span>Partner Name</label>
						<div class="form-group">
							<input type="text" name="partner_name" value="<?php echo $this->input->post('partner_name'); ?>" class="form-control" id="partner_name" />
							<span class="text-danger"><?php echo form_error('partner_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="partner_company" class="control-label"><span class="text-danger">*</span>Partner Company</label>
						<div class="form-group">
							<input type="text" name="partner_company" value="<?php echo $this->input->post('partner_company'); ?>" class="form-control" id="partner_company" />
							<span class="text-danger"><?php echo form_error('partner_company');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="designation" class="control-label">Designation</label>
						<div class="form-group">
							<input type="text" name="designation" value="<?php echo $this->input->post('designation'); ?>" class="form-control" id="designation" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobile_no" class="control-label"><span class="text-danger">*</span>Mobile No</label>
						<div class="form-group">
							<input type="text" name="mobile_no" value="<?php echo $this->input->post('mobile_no'); ?>" class="form-control" id="mobile_no" />
							<span class="text-danger"><?php echo form_error('mobile_no');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="area" class="control-label">Area</label>
						<div class="form-group">
							<input type="text" name="area" value="<?php echo $this->input->post('area'); ?>" class="form-control" id="area" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="city" class="control-label">City</label>
						<div class="form-group">
							<input type="text" name="city" value="<?php echo $this->input->post('city'); ?>" class="form-control" id="city" />
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
							<input type="file" capture="user" accept="image/*"/>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
				<a href="<?php echo base_url()?>marketing_partner/index">
					<button type="button" class="btn btn-default">
						<i class="fa fa-arrow-left"></i> Cancel
					</button>
				</a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>