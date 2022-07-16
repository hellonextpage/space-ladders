
<style>
.small-box:hover {
    background-color: #309da1 !important;
}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $requested;?></h3>
                <p>Requested Projects</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url()?>project_menu/index/Quote-Requested/s" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
		</div>
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $completed;?></h3>
                <p>Completed Projects</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url()?>project_menu/index/Project-Completed/s" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
		</div>
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $design_accepted;?></h3>
                <p>Design Accepted Projects</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url()?>project_menu/index/Design-Accepted/s" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
		</div>
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $first_payment;?></h3>
                <p>First Payment Made Projects</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url()?>project_menu/index/Received-First-Payment/s" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
		</div>
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $dropped;?></h3>
                <p>Dropped Projects</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url()?>project_menu/index/Dropped-Project/s" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
		</div>
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $escallations;?></h3>
                <p>Opened Escallations</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url()?>client_escallation/index" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
		</div>
    </div>
</div>