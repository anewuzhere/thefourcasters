<div class="content-wrapper">
    <section class="content-header">
      <h1>Truck Driver Details</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="<?=base_url().'admin/userdetails'?>">User Details</a></li>
        <li class="active">Truck Driver Details</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Truck Driver Information</h3>
            </div>

            <div class="box-body">  
              <table id="driver" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Driver #</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Contact Number</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($drivs as $driv): ?>
                    <tr>
                        <td><?= $driv->drivernum?></td>
                        <td><?= $driv->fname?></td>
                        <td><?= $driv->mname?></td>
                        <td><?= $driv->lname?></td>
                        <td><?= $driv->email?></td>                            
                        <td><?= $driv->contact?></td>

                        <td>
                        <a href="<?= base_url().'driver/edit/'.$driv->id?>" class="btn btn-warning" role="button">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true">
                        </span></a>
                        <?php $onclick = array('onclick'=>"return confirm('Are you sure?')");?>
                        <a href="<?=base_url('driver/del/'.$driv->id)?>" class="btn btn-danger" onclick="return confirm('Are you sure?')" role="button">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true" name="delete" >
                        </span></a>
                        </td>
                        </td>
                    </tr>        
                <?php endforeach; ?> 
                </tfoot>
              </table>
            </div>
                <div class="box-footer">
                <a href="<?=base_url()?>driver/add" class="btn btn-success btn-block btn-sm" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Truck Driver</a>
                </div>

                <center><?php echo $this->pagination->create_links();?></center>
            </div>
          </div>
        </div>
        </section>
</div>

<div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirm Delete</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to delete this user?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Cancel</button>
                <a href="<?=base_url('driver/del/'.$driv->id)?>"  role="button" class="btn btn-outline" >Delete</a>
              </div>
            </div>
          </div>
        </div>
        
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>The Fourcasters</b>
    </div>
    <strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation</a>.</strong> All rights
    reserved.
  </footer>
