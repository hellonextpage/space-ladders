<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Client Detail Add</h3>
            </div>
            <?php echo form_open('client_detail/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="is_active" value="1"  id="is_active" />
							<label for="is_active" class="control-label">Is Active</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="reach_in_whatsapp" value="1"  id="reach_in_whatsapp" />
							<label for="reach_in_whatsapp" class="control-label">Reach In Whatsapp</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="otp_validation" class="control-label">Otp Validation</label>
						<div class="form-group">
							<input type="text" name="otp_validation" value="<?php echo $this->input->post('otp_validation'); ?>" class="form-control" id="otp_validation" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_status" class="control-label">Client Status</label>
						<div class="form-group">
							<input type="text" name="client_status" value="<?php echo $this->input->post('client_status'); ?>" class="form-control" id="client_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_on" class="control-label">Created On</label>
						<div class="form-group">
							<input type="text" name="created_on" value="<?php echo $this->input->post('created_on'); ?>" class="has-datetimepicker form-control" id="created_on" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="updated_on" class="control-label">Updated On</label>
						<div class="form-group">
							<input type="text" name="updated_on" value="<?php echo $this->input->post('updated_on'); ?>" class="has-datetimepicker form-control" id="updated_on" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobile_number" class="control-label"><span class="text-danger">*</span>Mobile Number</label>
						<div class="form-group">
							<input type="text" name="mobile_number" value="<?php echo $this->input->post('mobile_number'); ?>" class="form-control" id="mobile_number" />
							<span class="text-danger"><?php echo form_error('mobile_number');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email_id" class="control-label"><span class="text-danger">*</span>Email Id</label>
						<div class="form-group">
							<input type="text" name="email_id" value="<?php echo $this->input->post('email_id'); ?>" class="form-control" id="email_id" />
							<span class="text-danger"><?php echo form_error('email_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="city" class="control-label">City</label>
						<div class="form-group">
							<input type="text" name="city" value="<?php echo $this->input->post('city'); ?>" class="form-control" id="city" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="signup_on" class="control-label">Signup On</label>
						<div class="form-group">
							<input type="text" name="signup_on" value="<?php echo $this->input->post('signup_on'); ?>" class="has-datetimepicker form-control" id="signup_on" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="otp" class="control-label">Otp</label>
						<div class="form-group">
							<input type="text" name="otp" value="<?php echo $this->input->post('otp'); ?>" class="form-control" id="otp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="comments" class="control-label">Comments</label>
						<div class="form-group">
							<textarea name="comments" class="form-control" id="comments"><?php echo $this->input->post('comments'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>