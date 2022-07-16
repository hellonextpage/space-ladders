<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Admin Login Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin_login/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Admin Id</th>
						<th>Is Active</th>
						<th>Password</th>
						<th>Username</th>
						<th>Created On</th>
						<th>Updated On</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($admin_login as $a){ ?>
                    <tr>
						<td><?php echo $a['admin_id']; ?></td>
						<td><?php echo $a['is_active']; ?></td>
						<td><?php echo $a['password']; ?></td>
						<td><?php echo $a['username']; ?></td>
						<td><?php echo $a['created_on']; ?></td>
						<td><?php echo $a['updated_on']; ?></td>
						<td>
                            <a href="<?php echo site_url('admin_login/edit/'.$a['admin_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin_login/remove/'.$a['admin_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
