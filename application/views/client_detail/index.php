<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Client Details Listing</h3>
            	<div class="box-tools hide">
                    <a href="<?php echo site_url('client_detail/add'); ?>" class="btn btn-success btn-sm">Add</a> 
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
						<th>Name</th>
						<th>Mobile </th>
						<th>Email </th>
						<th>City</th>
                        <th>Reach In Whatsapp</th>
                        <th>Coupon Used / Projects</th>
                        <th>Status</th>
						<th>Joined On</th>
						<th>Actions</th>
                    </tr>
					</thead>
                    <?php foreach($client_details as $c){ ?>
                    <tr>
						
						<td><?php echo $c['name']; ?></td>
						<td><?php echo $c['mobile_number']; ?></td>
						<td><?php if($c['email_id']!="" && $c['email_id']!=null){echo $c['email_id'];}else{echo "N/A";} ?></td>
						<td><?php echo $c['city']; ?></td>
                        <td><?php if($c['reach_in_whatsapp']=='1'){ echo "Yes";}else{ echo "No";}?></td>
                        <td>
                        <?php $client = $this->db->query("select * from project_menu where client_id=".$c['client_id']."")->num_rows();
						$coupons = $this->db->query("select * from project_menu where coupon_code!='' and client_id=".$c['client_id']."")->num_rows();
                        echo $coupons.'/'.$client; ?> 
                        <a class="btn btn-warning btn-xs" href="<?php echo base_url()?>project_menu/index/<?php echo $c['client_id']?>/c">Click to view</a>
                        </td>
                        <td><?php if($c['is_active']=='1'){ echo "<button class='btn btn-success btn-xs'>Active</button>";}else{ echo "<button class='btn btn-danger btn-xs'>Inactive</button>";}?></td>
						<td><?php echo date('d-m-Y',strtotime($c['signup_on'])); ?></td>
						<td>
                            <a href="<?php echo site_url('client_detail/edit/'.$c['client_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('client_detail/remove/'.$c['client_id']); ?>" class="hide btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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