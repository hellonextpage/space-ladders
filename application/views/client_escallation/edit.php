<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Client Escallation Edit</h3>
            </div>
			<?php echo form_open('client_escallation/edit/'.$client_escallation['escallation_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6 hide">
						<div class="form-group">
							<input type="checkbox" name="is_closed" value="1" <?php echo ($client_escallation['is_closed']==1 ? 'checked="checked"' : ''); ?> id='is_closed' />
							<label for="is_closed" class="control-label">Is Closed</label>
						</div>
					</div>
					
					<div class="col-md-6 hide">
						<label for="project_id" class="control-label">Project Id</label>
						<div class="form-group">
							<input type="text" name="project_id" value="<?php echo ($this->input->post('project_id') ? $this->input->post('project_id') : $client_escallation['project_id']); ?>" class="form-control" id="project_id" />
						</div>
					</div>
					<div class="col-md-6 hide">
						<label for="escallation_on" class="control-label">Escallation On</label>
						<div class="form-group">
							<input type="text" name="escallation_on" value="<?php echo ($this->input->post('escallation_on') ? $this->input->post('escallation_on') : $client_escallation['escallation_on']); ?>" class="has-datetimepicker form-control" id="escallation_on" />
						</div>
					</div>
					<div class="col-md-6 hide">
						<label for="created_on" class="control-label">Created On</label>
						<div class="form-group">
							<input type="text" name="created_on" value="<?php echo ($this->input->post('created_on') ? $this->input->post('created_on') : $client_escallation['created_on']); ?>" class="has-datetimepicker form-control" id="created_on" />
						</div>
					</div>
					<div class="col-md-6 hide">
						<label for="updated_on" class="control-label">Updated On</label>
						<div class="form-group">
							<input type="text" name="updated_on" value="<?php echo ($this->input->post('updated_on') ? $this->input->post('updated_on') : $client_escallation['updated_on']); ?>" class="has-datetimepicker form-control" id="updated_on" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="client_comments" class="control-label">Client Comments</label>
						<div class="form-group">
							<textarea name="client_comments" readonly class="form-control" id="client_comments"><?php echo ($this->input->post('client_comments') ? $this->input->post('client_comments') : $client_escallation['client_comments']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="admin_comments" class="control-label">Admin Comments</label>
						<div class="form-group">
							<textarea name="admin_comments" class="form-control" id="admin_comments"><?php echo ($this->input->post('admin_comments') ? $this->input->post('admin_comments') : $client_escallation['admin_comments']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="is_active" value="1" <?php echo ($client_escallation['is_active']==1 ? 'checked="checked"' : ''); ?> id='is_active' />
							<label for="is_active" class="control-label">Is Active</label>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
				<a href="<?php echo base_url()?>client_escallation/index">
					<button type="button" class="btn btn-default">
						<i class="fa fa-arrow-left"></i> Cancel
					</button>
				</a>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>