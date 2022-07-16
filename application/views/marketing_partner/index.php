<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Marketing Partners Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('marketing_partner/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
			<?php if($this->session->flashdata('success')!="" && $this->session->flashdata('success')!=null){?>
                
                <div class="alert alert-success alert-dismissible  " role="alert">
                <strong><?php echo $this->session->flashdata('success');?></strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <?php } ?>
                <table class="table table-striped bootstrap-table">
					<thead>
						<tr>
							
							<th> Name</th>
							<th> Company</th>
							<th>Mobile </th>
							<th>Email</th>
							<th>Area</th>
							<th>City</th>
							<th>Live Coupons </th>
							<th>Used Coupons </th>
							<th>Status</th>
							<th>Joined On</th>
							
							<th>Actions</th>
						</tr>
					</thead>
                    <?php foreach($marketing_partners as $m){ ?>
                    <tr>
						<td><?php echo $m['partner_name']; ?></td>
						<td><?php echo $m['partner_company']; ?></td>
						<td><?php echo $m['mobile_no']; ?></td>
						<td><?php echo $m['email']; ?></td>
						<td><?php echo $m['area']; ?></td>
						<td><?php echo $m['city']; ?></td>
						<td><?php 
						$coupons = $this->db->query("select * from marketing_partner_coupons where is_active='1' and marketing_partner_id=".$m['marketing_partner_id'])->result_array();
						if(count($coupons)>0){
							echo count($coupons);

							echo " <a data-toggle='modal' data-target='#exampleModal".$m['marketing_partner_id']."' class='btn btn-warning  btn-xs' >Click to view</a>";
						 ?>

					
						
<div class="modal fade" id="exampleModal<?php echo $m['marketing_partner_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-center"  id="exampleModalLabel">Coupons</h3>
        
      </div>
      <div class="modal-body">
		
			<table class="table table-stripped">
				<tr>
					<th>Coupon Code</th>
				</tr>
				
				<tbody>
					<?php foreach($coupons as $c){ ?>
						<tr>
							<td><?php echo $c['coupon_code']?></td>
						</tr>
					
					<?php } ?>
					
				</tbody>
				
			</table>
		
		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
					<?php } else{
							echo "N/A";
						} 
						
						?>
						
						</td>
						<td><?php 
						$used = $this->db->query("select p.*,c.name from project_menu p left join client_details c on c.client_id=p.client_id where p.partner_id=".$m['marketing_partner_id'])->result_array();
						if(count($used)>0){
							echo count($used);

							echo " <a data-toggle='modal' data-target='#exampleModalN".$m['marketing_partner_id']."' class='btn btn-warning  btn-xs' >Click to view</a>";
						
						?>

						
						
<div class="modal fade" id="exampleModalN<?php echo $m['marketing_partner_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-center" id="exampleModalLabel">Projects</h3>
        
      </div>
      <div class="modal-body">
		
			<table class="table table-stripped">
				<tr>
					<th>Project Name</th>
					<th>Project Status</th>
					<th>Coupon Code</th>
					<th>Client Name</th>
					<th>Action</th>
				</tr>
				
				<tbody>
					<?php foreach($used as $u){ ?>
						<tr>
							<td><?php if($u['project_name']!="" && $u['project_name']!=null){ echo $u['project_name'];}else{echo "N/A";}?></td>
							<td><?php echo $u['project_status']?></td>
							<td><?php  echo $u['coupon_code'];?></td>
							<td><?php echo $u['name']?></td>
							<td><a class="btn btn-warning btn-xs" href="<?php echo base_url()?>project_menu/index/<?php echo $u['project_id'];?>/p">View Project</a></td>
						</tr>
					
					<?php } ?>
					
				</tbody>
				
			</table>
		
		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


						<?php

						
						}else{
							echo "N/A";
						} 
						
						?></td>
						                        <td><?php if($m['status']=='1'){ echo "<button class='btn btn-success btn-xs'>Active</button>";}else{ echo "<button class='btn btn-danger btn-xs'>Inactive</button>";}?></td>

						<td><?php echo date('d-m-Y',strtotime($m['created_on'])); ?></td>
						<td>
                            <a href="<?php echo site_url('marketing_partner/edit/'.$m['marketing_partner_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a onclick="return confirm('Do you want to delete');" href="<?php echo site_url('marketing_partner/remove/'.$m['marketing_partner_id']); ?>" class="hide btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
