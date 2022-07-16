<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Marketing Partner Coupons Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('marketing_partner_coupon/add'); ?>" class="btn btn-success btn-sm">Add</a> 
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
						<th>Coupon Id</th>
						<th>Marketing Partner </th>
						<th>Coupon Code</th>
                        <th>Coupon Created On</th>
                        <th>Project</th>
						<th>Customer</th>
						<th>Coupon Used On</th>
						
						<th>Actions</th>
                    </tr>
                    </thead>
                    <?php foreach($marketing_partner_coupons as $m){ ?>
                    <tr>
						<td><?php echo $m['coupon_id']; ?></td>
						<td><?php $p = $this->db->query("select * from marketing_partners where marketing_partner_id=".$m['marketing_partner_id'])->row_array();
                        echo $p['partner_name']; ?></td>
						<td><?php echo $m['coupon_code']; ?></td>
                        <td><?php echo date('d-m-Y',strtotime($m['created_on'])); ?></td>
                        <td><?php 
                        $coupon = $m['coupon_code'];
                        $prj = $this->db->query("select * from project_menu where coupon_code='$coupon'")->row_array();
                        if(empty($p)){
                            echo "N/A";
                        }else{
                            if($prj['project_name']!="" && $prj['project_name']!=null){
                                echo "<a href='".base_url()."project_menu/index/".$prj['project_id']."/p'>".$prj['project_name']."</a>"; 
                            }else{
                                echo "N/A";
                            }
                            
                        }
                         ?></td>
						<td><?php if($m['client_id']==0){ echo "N/A";}else{
                            $c = $this->db->query("select * from client_details where client_id=".$m['client_id'])->row_array();
                            echo $c['name'];
                         } ?></td>
						<td><?php if(strtotime($m['used_on'])!='0000-00-00'){ echo "N/A";}else{echo $m['used_on'];} ?></td>
						
						<td>
                            <a href="<?php echo site_url('marketing_partner_coupon/edit/'.$m['coupon_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('marketing_partner_coupon/remove/'.$m['coupon_id']); ?>" class="hide btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
