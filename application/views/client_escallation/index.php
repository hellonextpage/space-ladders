<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Client Escallation Listing</h3>
            	<div class="box-tools hide">
                    <a href="<?php echo site_url('client_escallation/add'); ?>" class="btn btn-success btn-sm">Add</a> 
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
                            <th>Escallation Id</th>
                            <th>Status</th>
                            <th>Project </th>
                            <th>Escallation Date</th>
                            <th>Client Comments</th>
                            <th>Admin Comments</th>
                            <th>Replied Date</th>
                            
                            
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <?php foreach($client_escallation as $c){ ?>
                    <tr>
						<td><?php echo $c['escallation_id']; ?></td>
                        <td><?php if($c['is_active']=='1'){ echo "<button class='btn btn-success btn-xs'>Active</button>";}else{ echo "<button class='btn btn-danger btn-xs'>Inactive</button>";}?></td>
						<td><?php $project_name = $this->db->query("select * from project_menu where project_id=".$c['project_id'])->row_array();
                        echo "<a href='".base_url()."project_menu/index/".$c['project_id']."/p'>".$project_name['project_name']."</a>"; ?></td>
						<td><?php echo date('d-m-Y',strtotime($c['escallation_on'])); ?></td>
                        <td><?php echo $c['client_comments']; ?></td>
						<td><?php if($c['admin_comments']!="" && $c['admin_comments']!=null){ echo $c['admin_comments'];}else{ echo "N/A";} ?></td>
						<td><?php if(strtotime($c['updated_on'])=='0000-00-00'){ echo "N/A";}else{echo date('d-m-Y',strtotime($c['updated_on']));} ?></td>
						
						<td>
                            <a href="<?php echo site_url('client_escallation/edit/'.$c['escallation_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('client_escallation/remove/'.$c['escallation_id']); ?>" class="hide btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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