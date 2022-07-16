<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Admin Client Chat Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin_client_chat/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Interaction Id</th>
						<th>Is Active</th>
						<th>Project Id</th>
						<th>Interaction On</th>
						<th>Interaction Type</th>
						<th>Comment</th>
						<th>Interaction From</th>
						<th>Interaction Text</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($admin_client_chat as $a){ ?>
                    <tr>
						<td><?php echo $a['interaction_id']; ?></td>
						<td><?php echo $a['is_active']; ?></td>
						<td><?php echo $a['project_id']; ?></td>
						<td><?php echo $a['interaction_on']; ?></td>
						<td><?php echo $a['interaction_type']; ?></td>
						<td><?php echo $a['comment']; ?></td>
						<td><?php echo $a['interaction_from']; ?></td>
						<td><?php echo $a['interaction_text']; ?></td>
						<td>
                            <a href="<?php echo site_url('admin_client_chat/edit/'.$a['interaction_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin_client_chat/remove/'.$a['interaction_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
