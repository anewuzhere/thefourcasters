<div class="content-wrapper">
    <section class="content-header">
      <h1>Truck Details</h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
          <li><a href="<?=base_url().'admin/truckdetails'?>">Truck Details</a></li>
          <li class="active">Add</a></li>
        </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-sm-12">   
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Add Details</h3>
            </div>

    <form class="form-horizontal" action ="<?=base_url().'truck/insert'?>" method = "post">
        <div class="box-body">
          <div class="form-group">
            <div class="col-md-4">
              <input type="hidden"  name="id" type="text" placeholder="ID" class="form-control input-md" required="" >  
            </div>
          </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="upload">Image</label>  
      <div class="col-md-4">
      <?php echo form_open_multipart('truck/do_upload');?>
      <input value="<?=set_value('img')?>" class="form-control" type="file" name="img" size="20">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="brand">Make</label>  
        <div class="col-md-4">
          <input value="<?=set_value('brand')?>" name="brand" type="text" placeholder="Brand/Maker" class="form-control input-md" required="">
          <?= form_error('brand', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="plate_no">Plate No.</label>  
        <div class="col-md-4">
          <input value="<?=set_value('plate_no')?>" name="plate_no" type="text" placeholder="Plate No." class="form-control input-md" required="">
          <?= form_error('plate_no', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="series">Series</label>  
        <div class="col-md-4">
          <input value="<?=set_value('series')?>" name="series" type="text" placeholder="series" class="form-control input-md" >
          <?= form_error('series', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="mvfile_no">MV File No.</label>  
        <div class="col-md-4">
          <input value="<?=set_value('mvfile_no')?>" name="mvfile_no" type="text" placeholder="MV File No." class="form-control input-md" required="">
          <?= form_error('gcm', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="engine_no">Engine No.</label>  
        <div class="col-md-4">
          <input value="<?=set_value('engine_no')?>" name="engine_no" type="text" placeholder="Engine No." class="form-control input-md" required="">
          <?= form_error('engine_no', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="chassis_no">Chassis No.</label>  
        <div class="col-md-4">
          <input value="<?=set_value('chassis_no')?>" name="chassis_no" type="text" placeholder="Chassis No." class="form-control input-md" required="">
          <?= form_error('chassis_no', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="grosswt" >Gross Weight</label>  
        <div class="col-md-4">
          <input value="<?=set_value('grosswt')?>" name="grosswt" type="number" placeholder="Gross Weight" class="form-control input-md" required="">  
          <?= form_error('groowt', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="netwt" >Net Weight</label>  
        <div class="col-md-4">
          <input value="<?=set_value('netwt')?>" name="netwt" type="number" placeholder="Shipping Weight" class="form-control input-md" required="">  
          <?= form_error('netwt', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="netcap" >Net Capacity</label>  
        <div class="col-md-4">
          <input value="<?=set_value('netcap')?>" name="netcap" type="number" placeholder="Net Capacity" class="form-control input-md" required="">  
          <?= form_error('netcap', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>
    
    <div class="form-group">
      <label class="col-md-4 control-label"for ="year">Year</label>  
        <div class="col-md-4">
          <input value="<?=set_value('year')?>" name="year" type="number" placeholder="Year" class="form-control input-md"  required="">
          <?= form_error('year', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>
<!-- Not Working -->
<? 
  $test = $_GET['year'] -  YEAR(GETDATE());

  ?>
  <div hidden class="form-group">
      <label class="col-md-4 control-label" for ="old">Truck Old</label>  
        <div class="col-md-4">
          <input disabled  name="old"  value="<? echo $test;?>" type="number" placeholder="Old" class="form-control input-md">
        </div>
    </div>
<!--  -->

    <div class="form-group">
      <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-4">
  
          <button id="button1id" name="add" type="Submit" value="Submit" class="btn btn-success">Add</button>
            <a href="<?=base_url().'admin/truckdetails/'?>" class="btn btn-danger" role="button">Back</a>

            </form>
        </div>  
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
