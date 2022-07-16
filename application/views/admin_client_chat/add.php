<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Admin Client Chat Add</h3>
            </div>
            <?php echo form_open('admin_client_chat/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="is_active" value="1"  id="is_active" />
							<label for="is_active" class="control-label">Is Active</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="project_id" class="control-label">Project Id</label>
						<div class="form-group">
							<input type="text" name="project_id" value="<?php echo $this->input->post('project_id'); ?>" class="form-control" id="project_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="interaction_on" class="control-label">Interaction On</label>
						<div class="form-group">
							<input type="text" name="interaction_on" value="<?php echo $this->input->post('interaction_on'); ?>" class="has-datetimepicker form-control" id="interaction_on" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="interaction_type" class="control-label">Interaction Type</label>
						<div class="form-group">
							<input type="text" name="interaction_type" value="<?php echo $this->input->post('interaction_type'); ?>" class="form-control" id="interaction_type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="comment" class="control-label">Comment</label>
						<div class="form-group">
							<input type="text" name="comment" value="<?php echo $this->input->post('comment'); ?>" class="form-control" id="comment" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="interaction_from" class="control-label">Interaction From</label>
						<div class="form-group">
							<input type="text" name="interaction_from" value="<?php echo $this->input->post('interaction_from'); ?>" class="form-control" id="interaction_from" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="interaction_text" class="control-label">Interaction Text</label>
						<div class="form-group">
							<textarea name="interaction_text" class="form-control" id="interaction_text"><?php echo $this->input->post('interaction_text'); ?></textarea>
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