<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Project Menu Add</h3>
            </div>
            <?php echo form_open('project_menu/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="is_active" value="1"  id="is_active" />
							<label for="is_active" class="control-label">Is Active</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="project_id_for_client" class="control-label">Project Id For Client</label>
						<div class="form-group">
							<input type="text" name="project_id_for_client" value="<?php echo $this->input->post('project_id_for_client'); ?>" class="form-control" id="project_id_for_client" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_id" class="control-label">Client Id</label>
						<div class="form-group">
							<input type="text" name="client_id" value="<?php echo $this->input->post('client_id'); ?>" class="form-control" id="client_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="possession_in" class="control-label"><span class="text-danger">*</span>Possession In</label>
						<div class="form-group">
							<input type="text" name="possession_in" value="<?php echo $this->input->post('possession_in'); ?>" class="form-control" id="possession_in" />
							<span class="text-danger"><?php echo form_error('possession_in');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="floorplan" class="control-label"><span class="text-danger">*</span>Floorplan</label>
						<div class="form-group">
							<input type="text" name="floorplan" value="<?php echo $this->input->post('floorplan'); ?>" class="form-control" id="floorplan" />
							<span class="text-danger"><?php echo form_error('floorplan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="purpose" class="control-label"><span class="text-danger">*</span>Purpose</label>
						<div class="form-group">
							<input type="text" name="purpose" value="<?php echo $this->input->post('purpose'); ?>" class="form-control" id="purpose" />
							<span class="text-danger"><?php echo form_error('purpose');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="coupon_code" class="control-label">Coupon Code</label>
						<div class="form-group">
							<input type="text" name="coupon_code" value="<?php echo $this->input->post('coupon_code'); ?>" class="form-control" id="coupon_code" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="project_start_date" class="control-label">Project Start Date</label>
						<div class="form-group">
							<input type="text" name="project_start_date" value="<?php echo $this->input->post('project_start_date'); ?>" class="has-datetimepicker form-control" id="project_start_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="promissed_handover_date" class="control-label">Promissed Handover Date</label>
						<div class="form-group">
							<input type="text" name="promissed_handover_date" value="<?php echo $this->input->post('promissed_handover_date'); ?>" class="has-datetimepicker form-control" id="promissed_handover_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="actual_handover_date" class="control-label">Actual Handover Date</label>
						<div class="form-group">
							<input type="text" name="actual_handover_date" value="<?php echo $this->input->post('actual_handover_date'); ?>" class="has-datetimepicker form-control" id="actual_handover_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="project_manager_name" class="control-label">Project Manager Name</label>
						<div class="form-group">
							<input type="text" name="project_manager_name" value="<?php echo $this->input->post('project_manager_name'); ?>" class="form-control" id="project_manager_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="total_project_cost" class="control-label">Total Project Cost</label>
						<div class="form-group">
							<input type="text" name="total_project_cost" value="<?php echo $this->input->post('total_project_cost'); ?>" class="form-control" id="total_project_cost" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="factory_project_cost" class="control-label">Factory Project Cost</label>
						<div class="form-group">
							<input type="text" name="factory_project_cost" value="<?php echo $this->input->post('factory_project_cost'); ?>" class="form-control" id="factory_project_cost" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="custom_cost" class="control-label">Custom Cost</label>
						<div class="form-group">
							<input type="text" name="custom_cost" value="<?php echo $this->input->post('custom_cost'); ?>" class="form-control" id="custom_cost" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="po_date" class="control-label">Po Date</label>
						<div class="form-group">
							<input type="text" name="po_date" value="<?php echo $this->input->post('po_date'); ?>" class="has-datetimepicker form-control" id="po_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="project_status" class="control-label">Project Status</label>
						<div class="form-group">
							<input type="text" name="project_status" value="<?php echo $this->input->post('project_status'); ?>" class="form-control" id="project_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="first_paymnt_made_on" class="control-label">First Paymnt Made On</label>
						<div class="form-group">
							<input type="text" name="first_paymnt_made_on" value="<?php echo $this->input->post('first_paymnt_made_on'); ?>" class="has-datetimepicker form-control" id="first_paymnt_made_on" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="second_paymnt_made_on" class="control-label">Second Paymnt Made On</label>
						<div class="form-group">
							<input type="text" name="second_paymnt_made_on" value="<?php echo $this->input->post('second_paymnt_made_on'); ?>" class="has-datetimepicker form-control" id="second_paymnt_made_on" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="completed_on" class="control-label">Completed On</label>
						<div class="form-group">
							<input type="text" name="completed_on" value="<?php echo $this->input->post('completed_on'); ?>" class="has-datetimepicker form-control" id="completed_on" />
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
						<label for="project_name" class="control-label">Project Name</label>
						<div class="form-group">
							<textarea name="project_name" class="form-control" id="project_name"><?php echo $this->input->post('project_name'); ?></textarea>
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