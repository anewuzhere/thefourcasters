<div class="content-wrapper">
<section class="content-header">
  <h1>Customer/Importer Details</h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url().'customer/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
      <li><a href="<?=base_url().'customer/booking'?>">Booking Information</a></li>
      <li class="active">Add</a></li>
    </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-sm-12">   
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Add Details</h3>
        </div>
        <!-- Text input-->

        <form class="form-horizontal" action ="<?=base_url().'booking/insert'?>" method = "post">
        <div class="box-body">
          <div class="form-group">
            <div class="col-md-4">
              <input type="hidden"  name="id" type="text" placeholder="ID" class="form-control input-md" required="" >  
            </div>
          </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="date">Date:</label>
            <div class="col-md-4">
              <input name="date" type="date" class="form-control input-md">  
              <?= form_error('date', '<span class="label label-danger">', '</span>') ?>  
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="name">Customer/Importer</label>  
            <div class="col-md-4">
              <input id="custname" name="custname" type="text" placeholder="Customer/Importer" class="form-control input-md" disabled> 
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="customertype">Customer Type:</label>
            <div class="col-md-4">
              <select id="cust_type" name="customertype" class="form-control" disabled>
                <option value="1">Customer Type</option>
                <option value="1">In-house Brokerage</option>
                <option value="2">Broker/Agent</option>
                <option value="3">Freight Forwarder</option>
                <option value="4">Local/Sub-Contractor</option>
              </select>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="cargo">Cargo Size:</label>
            <div class="col-md-4">
              <input id="cargo" name="cargo" type="text" placeholder="Cargo Size" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="price">Price:</label>
            <div class="col-md-4">
              <input id="price" name="price" type="text" placeholder="Price" class="form-control input-md" disabled>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="destination">Destination:</label>  
            <div class="col-md-4">
              <input id="destination" name="destination" type="text" placeholder="Destination" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for=""></label>
            <div class="col-md-4">
              <button id="buttonid" name="add" type="Submit" value="Submit" class="btn btn-success">Submit</button></a>
              <a href="<?=base_url().'customer/booking'?>"><button id="" name="" class="btn btn-danger">Cancel</button></a>
            </div>
        </div> 
        </center>
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
