<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Project Menu Edit</h3>
            </div>
			<form method="post" onsubmit="return validateForm();" action="<?=base_url('project_menu/edit/'.$project_menu['project_id'])?>" enctype="multipart/form-data">
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="is_active" value="1" <?php echo ($project_menu['is_active']==1 ? 'checked="checked"' : ''); ?> id='is_active' />
							<label for="is_active" class="control-label">Is Active</label>
						</div>
					</div>
					<div class="col-md-6 hide">
						<label for="project_id_for_client" class="control-label">Project Id For Client</label>
						<div class="form-group">
							<input type="text" name="project_id_for_client" value="<?php echo ($this->input->post('project_id_for_client') ? $this->input->post('project_id_for_client') : $project_menu['project_id_for_client']); ?>" class="form-control" id="project_id_for_client" />
						</div>
					</div>
					<div class="col-md-6 hide">
						<label for="client_id" class="control-label">Client Id</label>
						<div class="form-group">
							<input type="text" name="client_id" value="<?php echo ($this->input->post('client_id') ? $this->input->post('client_id') : $project_menu['client_id']); ?>" class="form-control" id="client_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="possession_in" class="control-label"><span class="text-danger">*</span>Possession In</label>
						<div class="form-group">
							<select class="form-control" name="possession_in">
								<option value="<3months" <?php if($project_menu['possession_in'] == '<3months'){ echo "selected";} ?>> < 3 Months</option>
								<option value="3-6months" <?php if($project_menu['possession_in'] == '3-6months'){ echo "selected";} ?>>3-6 Months</option>
								<option value=">6months" <?php if($project_menu['possession_in'] == '>6months'){ echo "selected";} ?>> > 6 Months</option>
							</select>
							<span class="text-danger"><?php echo form_error('possession_in');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="floorplan" class="control-label"><span class="text-danger">*</span>Floor Plan</label>
						<div class="form-group">
							<select class="form-control" name="floorplan">
								<option value="1BHK" <?php if($project_menu['floorplan'] == '1BHK'){ echo "selected";} ?>> 1 BHK </option>
								<option value="2BHK" <?php if($project_menu['floorplan'] == '2BHK'){ echo "selected";} ?>> 2 BHK </option>
								<option value="3BHK" <?php if($project_menu['floorplan'] == '3BHK'){ echo "selected";} ?>> 3 BHK</option>
								<option value="3+ BHK" <?php if($project_menu['floorplan'] == '3+ BHK'){ echo "selected";} ?>> 3+ BHK</option>
							</select>
							<span class="text-danger"><?php echo form_error('floorplan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="purpose" class="control-label"><span class="text-danger">*</span>Purpose</label>
						<div class="form-group">
							<select class="form-control" name="purpose">
								<option value="Move in" <?php if($project_menu['purpose'] == 'Move in'){ echo "selected";} ?>> Move In </option>
								<option value="Move out" <?php if($project_menu['purpose'] == 'Move out'){ echo "selected";} ?>> Rent Out</option>
								<option value="Renovate" <?php if($project_menu['purpose'] == 'Renovate'){ echo "selected";} ?>> Renovate</option>
							</select>
							<span class="text-danger"><?php echo form_error('purpose');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="coupon_code" class="control-label">Coupon Code</label>
						<div class="form-group">
							<input type="text" name="coupon_code" readonly value="<?php echo ($this->input->post('coupon_code') ? $this->input->post('coupon_code') : $project_menu['coupon_code']); ?>" class="form-control" id="coupon_code" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="project_name" class="control-label">Project Name</label>
						<div class="form-group">
							<input type="text" name="project_name" class="form-control" id="project_name" value="<?php echo ($this->input->post('project_name') ? $this->input->post('project_name') : $project_menu['project_name']); ?>">
						</div>
					</div>
					<div class="col-md-6">
						<label for="project_manager_name" class="control-label">Project Manager Name</label>
						<div class="form-group">
							<select class="form-control" id="project_manager_name" name="project_manager_name">
								<option value="">Select Manager</option>
								<?php foreach($manager as $m){?>
									<option value="<?php echo $m['id'];?>"  <?php if($project_menu['project_manager_name'] == $m['id']){ echo "selected";} ?>><?php echo $m['name'];?></option>
								<?php } ?>
							</select>
						</div>
					</div>

					<div class="col-md-6">
						<label for="project_status" class="control-label">Project Status</label>
						<div class="form-group">
							<select class="form-control" id="project_status" name="project_status">
								<option value="Quote Requested" <?php if($project_menu['project_status'] == 'Quote Requested'){ echo "selected";} ?>> Quote Requested </option>
								<option value="Design Ongoing" <?php if($project_menu['project_status'] == 'Design Ongoing'){ echo "selected";} ?>> Design Ongoing </option>
								<option value="Design Accepted" <?php if($project_menu['project_status'] == 'Design Accepted'){ echo "selected";} ?>> Design Accepted </option>
								<option value="Received First Payment" <?php if($project_menu['project_status'] == 'Received First Payment'){ echo "selected";} ?>> Received First Payment</option>
								<option value="Received Second Payment" <?php if($project_menu['project_status'] == 'Received Second Payment'){ echo "selected";} ?>> Received Second Payment</option>
								<option value="Project Completed" <?php if($project_menu['project_status'] == 'Project Completed'){ echo "selected";} ?>> Project Completed</option>
								<option value="Project HandOver" <?php if($project_menu['project_status'] == 'Project HandOver'){ echo "selected";} ?>> Project HandOver</option>
							</select>
							<input type="hidden" name="old_status" value="<?php echo $project_menu['project_status'];?>"/>

						</div>
					</div>

					<div class="col-md-6">
						<label for="project_start_date" class="control-label">Project Start Date</label>
						<div class="form-group">
							<input type="text" name="project_start_date" value="<?php echo ($this->input->post('project_start_date') ? $this->input->post('project_start_date') : $project_menu['project_start_date']); ?>" class="has-datepicker form-control" id="project_start_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="promissed_handover_date" class="control-label">Promissed Handover Date</label>
						<div class="form-group">
							<input type="text" name="promissed_handover_date" value="<?php echo ($this->input->post('promissed_handover_date') ? $this->input->post('promissed_handover_date') : $project_menu['promissed_handover_date']); ?>" class="has-datepicker form-control" id="promissed_handover_date" />
						</div>
					</div>
					
					
					<div class="col-md-6">
						<label for="total_project_cost" class="control-label">Total Project Cost</label>
						<div class="form-group">
							<input type="text" name="total_project_cost" onkeypress="return validateNumber(event);" value="<?php echo ($this->input->post('total_project_cost') ? $this->input->post('total_project_cost') : $project_menu['total_project_cost']); ?>" class="form-control" id="total_project_cost" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="factory_project_cost" class="control-label">Factory Project Cost</label>
						<div class="form-group">
							<input type="text" name="factory_project_cost" onkeypress="return validateNumber(event);" value="<?php echo ($this->input->post('factory_project_cost') ? $this->input->post('factory_project_cost') : $project_menu['factory_project_cost']); ?>" class="form-control" id="factory_project_cost" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="custom_cost" class="control-label">Custom Cost</label>
						<div class="form-group">
							<input type="text" name="custom_cost" onkeypress="return validateNumber(event);" value="<?php echo ($this->input->post('custom_cost') ? $this->input->post('custom_cost') : $project_menu['custom_cost']); ?>" class="form-control" id="custom_cost" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="po_date" class="control-label">Po Date</label>
						<div class="form-group">
							<input type="text" name="po_date" value="<?php echo ($this->input->post('po_date') ? $this->input->post('po_date') : $project_menu['po_date']); ?>" class="has-datepicker form-control" id="po_date" />
						</div>
					</div>
					

					<div class="col-md-6">
						<label for="project_status" class="control-label">Design Document</label>
						<div class="form-group">
							<input type="file" name="design" class="form-control" id="design" />
							<input type="hidden" id="u_design" value="<?php echo $project_menu['design']?>"/>
						</div>
					</div>

					<div class="col-md-6">
						<label for="project_status" class="control-label">Signoff</label>
						<div class="form-group">
							<input type="file" name="signoff" class="form-control" id="signoff" />
							<input type="hidden" id="u_signoff" value="<?php echo $project_menu['signoff']?>"/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="project_status" class="control-label">SLA</label>
						<div class="form-group">
							<input type="file" name="sla" class="form-control" id="sla" />
							<input type="hidden" id="u_sla" value="<?php echo $project_menu['sla']?>"/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="project_status" class="control-label">Contract</label>
						<div class="form-group">
							<input type="file" name="contract" class="form-control" id="contract" />
							<input type="hidden" id="u_contract" value="<?php echo $project_menu['contract']?>"/>
						</div>
					</div>

					<div class="col-md-6">
						<label for="first_paymnt_made_on" class="control-label">First Payment Date</label>
						<div class="form-group">
							<input type="text" name="first_paymnt_made_on" value="<?php echo ($this->input->post('first_paymnt_made_on') ? $this->input->post('first_paymnt_made_on') : $project_menu['first_paymnt_made_on']); ?>" class="has-datepicker form-control" id="first_paymnt_made_on" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="second_paymnt_made_on" class="control-label">Second Payment Date</label>
						<div class="form-group">
							<input type="text" name="second_paymnt_made_on" value="<?php echo ($this->input->post('second_paymnt_made_on') ? $this->input->post('second_paymnt_made_on') : $project_menu['second_paymnt_made_on']); ?>" class="has-datepicker form-control" id="second_paymnt_made_on" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="completed_on" class="control-label">Completed Date</label>
						<div class="form-group">
							<input type="text" name="completed_on" value="<?php echo ($this->input->post('completed_on') ? $this->input->post('completed_on') : $project_menu['completed_on']); ?>" class="has-datepicker form-control" id="completed_on" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="actual_handover_date" class="control-label"> Handover Date</label>
						<div class="form-group">
							<input type="text" name="actual_handover_date" value="<?php echo $project_menu['actual_handover_date']; ?>" class="has-datepicker form-control" id="actual_handover_date" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="comments" class="control-label">Comments</label>
						<div class="form-group">
							<textarea name="comments" class="form-control" id="comments"><?php echo ($this->input->post('comments') ? $this->input->post('comments') : $project_menu['comments']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
				<a href="<?php echo base_url()?>project_menu/index">
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

function validateForm(){
	var error = 0;
	var project_status = $("#project_status").val();
	

	if(project_status=='Design Accepted'){
		var project_name = $("#project_name").val();
		var design = $("#design").val();
		var u_design = $("#u_design").val();
		if(project_name=="" || project_name==null){
			error += 1;
			alert("Enter project name");
		}

		if((u_design=="" || u_design==null) && (design=="" || design==null)){
			error += 1;
			alert("Upload design document");
		}
	}else if(project_status=='Received First Payment'){
		var project_start_date = $("#project_start_date").val();
		var total_project_cost = $("#total_project_cost").val();
		var factory_project_cost = $("#factory_project_cost").val();
		var custom_cost = $("#custom_cost").val();
		var po_date = $("#po_date").val();
		//var project_manager_name = $("#project_manager_name").val();
		var promissed_handover_date = $("#promissed_handover_date").val();
		var first_paymnt_made_on = $("#first_paymnt_made_on").val();

		var contract = $("#contract").val();
		var signoff = $("#signoff").val();
		var sla = $("#sla").val();
		var u_sla = $("#u_sla").val();
		var u_signoff = $("#u_signoff").val();
		var u_contract = $("#u_contract").val();
		if((u_contract=="" || u_contract==null) && (contract=="" || contract==null)){
			error += 1;
			alert("Upload contract document");
		}

		if((u_signoff=="" || u_signoff==null) && (signoff=="" || signoff==null)){
			error += 1;
			alert("Upload signoff document");
		}

		if((u_sla=="" || u_sla==null) && (sla=="" || sla==null)){
			error += 1;
			alert("Upload sla document");
		}

		if(first_paymnt_made_on=="" || first_paymnt_made_on==null){
			error += 1;
			alert("Select project first payment date");
		}
		if(project_start_date=="" || project_start_date==null){
			error += 1;
			alert("Select project start date");
		}
		if(total_project_cost=="" || total_project_cost==null || total_project_cost==0){
			error += 1;
			alert("Enter project cost");
		}
		if(factory_project_cost=="" || factory_project_cost==null || factory_project_cost==0){
			error += 1;
			alert("Enter project factory cost");
		}
		if(custom_cost=="" || custom_cost==null || custom_cost==0){
			error += 1;
			alert("Enter project custom cost");
		}
		if(po_date=="" || po_date==null){
			error += 1;
			alert("Select project po date");
		}
		if(promissed_handover_date=="" || promissed_handover_date==null){
			error += 1;
			alert("Select project promissed handover date");
		}
	}else if(project_status=='Received Second Payment'){
		var second_paymnt_made_on = $("#second_paymnt_made_on").val();
		if(second_paymnt_made_on=="" || second_paymnt_made_on==null){
			error += 1;
			alert("Select project second payment date");
		}
		
	}else if(project_status=='Project Completed'){
		var completed_on = $("#completed_on").val();
		if(completed_on=="" || completed_on==null){
			error += 1;
			alert("Select project completed  date");
		}
		
	}else if(project_status=='Project HandOver'){
		var second_paymnt_made_on = $("#actual_handover_date").val();
		if(second_paymnt_made_on=="" || second_paymnt_made_on==null){
			error += 1;
			alert("Select project handover  date");
		}
		
	}
	if(error==0){
		return true;
	}else{
		return false;
	}
}

</script>