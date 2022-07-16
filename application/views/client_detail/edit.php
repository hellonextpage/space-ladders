<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Client Detail Edit</h3>
            </div>
			<?php echo form_open('client_detail/edit/'.$client_detail['client_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="is_active" value="1" <?php echo ($client_detail['is_active']==1 ? 'checked="checked"' : ''); ?> id='is_active' />
							<label for="is_active" class="control-label">Is Active</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="reach_in_whatsapp" value="1" <?php echo ($client_detail['reach_in_whatsapp']==1 ? 'checked="checked"' : ''); ?> id='reach_in_whatsapp' />
							<label for="reach_in_whatsapp" class="control-label">Reach In Whatsapp</label>
						</div>
					</div>
					
					<div class="col-md-6 hide">
						<label for="otp_validation" class="control-label">Otp Validation</label>
						<div class="form-group">
							<input type="text" name="otp_validation" value="<?php echo ($this->input->post('otp_validation') ? $this->input->post('otp_validation') : $client_detail['otp_validation']); ?>" class="form-control" id="otp_validation" />
						</div>
					</div>
					
					<div class="col-md-6 hide">
						<label for="created_on" class="control-label">Created On</label>
						<div class="form-group">
							<input type="text" name="created_on" value="<?php echo ($this->input->post('created_on') ? $this->input->post('created_on') : $client_detail['created_on']); ?>" class="has-datetimepicker form-control" id="created_on" />
						</div>
					</div>
					<div class="col-md-6 hide">
						<label for="updated_on" class="control-label">Updated On</label>
						<div class="form-group">
							<input type="text" name="updated_on" value="<?php echo ($this->input->post('updated_on') ? $this->input->post('updated_on') : $client_detail['updated_on']); ?>" class="has-datetimepicker form-control" id="updated_on" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" onkeypress="return ValidateAlpha(event);" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $client_detail['name']); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobile_number" class="control-label"><span class="text-danger">*</span>Mobile Number</label>
						<div class="form-group">
							<input type="text" onkeypress="return validateNumber(event);" name="mobile_number" value="<?php echo ($this->input->post('mobile_number') ? $this->input->post('mobile_number') : $client_detail['mobile_number']); ?>" class="form-control" id="mobile_number" />
							<span class="text-danger"><?php echo form_error('mobile_number');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email_id" class="control-label"><span class="text-danger">*</span>Email Id</label>
						<div class="form-group">
							<input type="text" name="email_id" value="<?php echo ($this->input->post('email_id') ? $this->input->post('email_id') : $client_detail['email_id']); ?>" class="form-control" id="email_id" />
							<span class="text-danger"><?php echo form_error('email_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="city" class="control-label">City</label>
						<div class="form-group">
							<input type="text" name="city" value="<?php echo ($this->input->post('city') ? $this->input->post('city') : $client_detail['city']); ?>" class="form-control" id="city" />
						</div>
					</div>
					<div class="col-md-6 hide">
						<label for="signup_on" class="control-label">Signup On</label>
						<div class="form-group">
							<input type="text" name="signup_on" value="<?php echo ($this->input->post('signup_on') ? $this->input->post('signup_on') : $client_detail['signup_on']); ?>" class="has-datetimepicker form-control" id="signup_on" />
						</div>
					</div>
					<div class="col-md-6 hide">
						<label for="otp" class="control-label">Otp</label>
						<div class="form-group">
							<input type="text" name="otp" value="<?php echo ($this->input->post('otp') ? $this->input->post('otp') : $client_detail['otp']); ?>" class="form-control" id="otp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $client_detail['password']); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6 hide">
						<label for="client_status" class="control-label">Client Status</label>
						<div class="form-group">
							<input type="text" name="client_status" value="<?php echo ($this->input->post('client_status') ? $this->input->post('client_status') : $client_detail['client_status']); ?>" class="form-control" id="client_status" />
						</div>
					</div>
					<div class="col-md-6 hide">
						<label for="comments" class="control-label">Comments</label>
						<div class="form-group">
							<textarea name="comments" class="form-control" id="comments"><?php echo ($this->input->post('comments') ? $this->input->post('comments') : $client_detail['comments']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
				<a href="<?php echo base_url()?>client_detail/index">
					<button type="button" class="btn btn-default">
						<i class="fa fa-arrow-left"></i> Cancel
					</button>
				</a>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
<script>
function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }
	function validateNumber(event) {
		var key = window.event ? event.keyCode : event.which;
		if (event.keyCode === 8 || event.keyCode === 46) {
			return true;
		} else if ( key < 48 || key > 57 ) {
			return false;
		} else {
			return true;
		}
	}
</script>