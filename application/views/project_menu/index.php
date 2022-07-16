<style>
.srch{
	margin:10px 0px;
}
.srch .col-md-3{
	margin:5px 0px;
}


.bubbleWrapper {
	padding: 10px 10px;
	display: flex;
	justify-content: flex-end;
	flex-direction: column;
	align-self: flex-end;
  color: #fff;
}
.inlineContainer {
  display: inline-flex;
}
.inlineContainer.own {
  flex-direction: row-reverse;
}
.inlineIcon {
  width:20px;
  object-fit: contain;
}
.ownBubble {
	min-width: 60px;
	max-width: 700px;
	padding: 14px 18px;
  margin: 6px 8px;
	background-color: #5b5377;
	border-radius: 16px 16px 0 16px;
	border: 1px solid #443f56;
 
}
.otherBubble {
	min-width: 60px;
	max-width: 700px;
	padding: 14px 18px;
  margin: 6px 8px;
	background-color: #6C8EA4;
	border-radius: 16px 16px 16px 0;
	border: 1px solid #54788e;
  
}
.own {
	align-self: flex-end;
}
.other {
	align-self: flex-start;
}
span.own,
span.other{
  font-size: 14px;
  color: grey;
}

</style>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Project Menu Listing</h3>
            	<div class="box-tools hide">
                    <a href="<?php echo site_url('project_menu/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
			<div class="col-md-12 srch">
				<?php if($this->session->flashdata('success')!="" && $this->session->flashdata('success')!=null){?>
                
					<div class="alert alert-success alert-dismissible  " role="alert">
					<strong><?php echo $this->session->flashdata('success');?></strong> 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
				<?php } ?>

				<form  method="POST"  action="<?php echo site_url('project_menu/search');?>">
				
				<div class="col-md-3">
				
					<select class="form-control" name="city">
						<option value="">Select City</option>
						<option value="Hyderabad" <?php if($city == 'Hyderabad'){ echo "selected";} ?>> Hyderabad </option>
						<option value="Pune" <?php if($city == 'Pune'){ echo "selected";} ?>> Pune</option>
					</select>
				</div>
				<div class="col-md-3">
					<select class="form-control" name="project_status">
						<option value="">Select Project Status</option>
						<option value="Quote Requested" <?php if($project_status == 'Quote Requested'){ echo "selected";} ?>> Quote Requested </option>
						<option value="Design Ongoing" <?php if($project_status == 'Design Ongoing'){ echo "selected";} ?>> Design Ongoing </option>
						<option value="Design Accepted" <?php if($project_status == 'Design Accepted'){ echo "selected";} ?>> Design Accepted </option>
						<option value="Received First Payment" <?php if($project_status == 'Received First Payment'){ echo "selected";} ?>> Received First Payment</option>
						<option value="Received Second Payment" <?php if($project_status == 'Received Second Payment'){ echo "selected";} ?>> Received Second Payment</option>
						<option value="Project Completed" <?php if($project_status == 'Project Completed'){ echo "selected";} ?>> Project Completed</option>
						<option value="Project HandOver" <?php if($project_status == 'Project HandOver'){ echo "selected";} ?>> Project HandOver</option>
					</select>
				</div>
				<div class="col-md-3">
					<input type="text" class="form-control" name="name" value="<?php echo $name;?>" placeholder="Enter customer name "/>
				</div>
				<div class="col-md-3">
					<input type="text" class="form-control" name="mobile" value="<?php echo $mobile;?>" placeholder="Enter customer mobile"/>
				</div>
				<div class="col-md-1">
					<button class="btn btn-success" type="submit" >Search</button>
				</div>
				
				</form>
			</div>
            <div class="box-body">
                <table class="table table-striped bootstrap-table">
					<thead>
						<tr>
							<th>Project Id</th>
							<th>Client Name</th>
							<th>Possession In</th>
							<th>Floor Plan</th>
							<th>Purpose</th>
							<th>Coupon Code</th>
							<th>Project Start Date</th>
							<th>Escallations</th>
							<th>Documents</th>
							<th>Actions</th>
						</tr>
					</thead>
                    <?php foreach($project_menu as $p){ ?>
                    <tr>
						<td><?php echo $p['project_id']; ?></td>
						<td><?php $client = $this->db->query("select * from client_details where client_id=".$p['client_id']."")->row_array();
						
						echo "<a href='".base_url()."client_detail/index/".$client['client_id']."/p'>".$client['name']."</a>";
						; ?></td>
						<td><?php echo $p['possession_in']; ?></td>
						<td><?php echo $p['floorplan']; ?></td>
						<td><?php echo $p['purpose']; ?></td>
						<td><?php if($p['coupon_code']!="" && $p['coupon_code']!=null){ echo $p['coupon_code'];}else{ echo "N/A";} ?></td>
						<td><?php if(strtotime($p['project_start_date'])!='0000-00-00'){ echo "N/A";}else{ echo date('m-d-Y',strtotime($p['project_start_date']));} ?></td>
						<td>
						<?php $esc = $this->db->query("select * from client_escallation where project_id=".$p['project_id']."")->result_array();
						
						echo count($esc);
						if(count($esc)>0){
							echo " <a data-toggle='modal' data-target='#exampleModal".$p['project_id']."' class='btn btn-warning  btn-xs' >Click to view</a>";
						?>

						
<div class="modal fade" id="exampleModal<?php echo $p['project_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Escallations</h3>
        
      </div>
      <div class="modal-body">
		<?php 
		foreach($esc as $e){?>
			<div class="bubbleWrapper">
				<div class="inlineContainer">
					<img class="inlineIcon" src="<?php echo base_url()?>assets/images/logo.png">
					<div class="otherBubble other">
						<?php echo $e['client_comments'];?>
					</div>
				</div><span class="other"><?php echo "Client : ".date('d-m-Y',strtotime($e['escallation_on']));?></span>
			</div>

			<?php if($e['admin_comments']!="" && $e['admin_comments']!=null) { ?>
			
			
			<div class="bubbleWrapper">
				<div class="inlineContainer own">
					<img class="inlineIcon" src="<?php echo base_url()?>assets/images/logo.png">
					<div class="otherBubble own">
						<?php echo $e['admin_comments'];?>
					</div>
				</div><span class="own"><?php echo "Admin : ".date('d-m-Y',strtotime($e['updated_on']));?></span>
			</div>

			<?php } ?>

		<?php } ?>
		
		
		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


						
						
						<?php }
						?>
						</td>
						<td>
						<?php if($p['design']=="" && $p['design']==null){
                                }else{?>
                                    <a href="<?php echo base_url()?>uploads/design/<?php echo $p['design']?>" class="btn btn-warning btn-xs" target="blank">Design Doc</a>
                                <?php }
                            ?>

<?php if($p['sla']=="" && $p['sla']==null){
                                }else{?>
                                    <a href="<?php echo base_url()?>uploads/design/<?php echo $p['sla']?>" class="btn btn-success btn-xs" target="blank">SLA Doc</a>
                                <?php }
                            ?>

<?php if($p['contract']=="" && $p['contract']==null){
                                }else{?>
                                    <a href="<?php echo base_url()?>uploads/design/<?php echo $p['contract']?>" class="btn btn-default btn-xs" target="blank">Contract Doc</a>
                                <?php }
                            ?>

<?php if($p['signoff']=="" && $p['signoff']==null){
                                }else{?>
                                    <a href="<?php echo base_url()?>uploads/design/<?php echo $p['signoff']?>" class="btn btn-info btn-xs" target="blank">Signoff Doc</a>
                                <?php }
                            ?>
						</td>
						<td>
                            <a href="<?php echo site_url('project_menu/edit/'.$p['project_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
							<a href="<?php echo site_url('project_menu/viewChat/'.$p['project_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-view"></span> View Messages</a> 
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
	$(document).ready(function() {
				$.noConflict();
    $('.bootstrap-table').DataTable();
});
</script>
