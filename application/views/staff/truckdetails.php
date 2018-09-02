<div class="content-wrapper">
    <section class="content-header">
      <h1>Truck Details</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'staff/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Truck Details</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Truck Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="staff" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Waybill</th>
                <th>Equipment</th>
                <th>Driver</th>
                <th>Helper</th>
                <th>Date</th>
                <th>Customer Type</th>
                <th>Importer</th>
                <th>Destination</th>
                <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($trucks as $truck): ?>
                        <tr>
                            <td><?= $truck->id?></td>
                            <td><img src="<?=base_url().'images/'.$truck->img?>" width = "50px" alt="Image" class="img-thumbnail"></td>
                            <td><?= $truck->license_no?></td>
                            <td><?= $truck->insurance?></td>
                            <td>

                            <a href="<?= base_url().'staff_truck/edit/'.$truck->id?>" class="btn btn-default btn.lg" role="button">
                            <span class="fa fa-edit" aria-hidden="true">
                            </span></a>
                            <!-- <?php $onclick = array('onclick'=>"return confirm('Are you sure?')");?>
                        <a href="<?=base_url('staff_truck/del/'.$truck->id)?>" class="btn btn-danger" onclick="return confirm('Are you sure?')" role="button">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true" name="delete" >
                        </span></a> -->
                            </td>
                        </tr>
                         
                    <?php endforeach; ?>
                    
                </tfoot>
              </table>
              <div class="box-footer">
                <a href="<?=base_url()?>staff_truck/add" class="btn btn-success btn-block btn-sm" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Truck Details</a>
                </div>

                <center><?php echo $this->pagination->create_links();?></center>
            </div>
          </div>
        </div>       
    </section>
</div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>The Fourcasters</b>
    </div>
    <strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation</a>.</strong> All rights
    reserved.
  </footer>

