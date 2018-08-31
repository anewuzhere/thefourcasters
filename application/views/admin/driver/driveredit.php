<div class="content-wrapper">
    <section class="content-header">
      <h1>Driver Details</h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url().'admin/userdetails'?>"><i class="fa fa-dashboard"></i> Home </a></li>
          <li><a href="<?=base_url().'admin/userdetails_driver'?>"> Driver Details </a></li>
          <li class="active">Edit</li>
        </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-sm-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update Details</h3>
            </div>

    <form class="form-horizontal"  action = "<?=base_url()?>driver/update/<?=$driv->id?>"  method='post'>
        <fieldset>
            <div class="form-group">
                <div class="col-md-4">
                    <input type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md"value="<?=$driv->id?>" required="" >
                </div>
            </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="drivernum" >Driver #</label>  
            <div class="col-md-4">
                <input  value="<?=$driv->drivernum?>" name="drivernum" type="text" placeholder="Driver #" class="form-control input-md" required="">
                <?= form_error('drivernum', '<span class="label label-danger">', '</span>') ?>  
            </div>
    </div> 

    <div class="form-group">
        <label class="col-md-4 control-label" for="fname" >First Name</label>  
            <div class="col-md-4">
                <input  value="<?=$driv->fname?>" name="fname" type="text" placeholder="First Name" class="form-control input-md" required="">
                <?= form_error('fname', '<span class="label label-danger">', '</span>') ?>  
            </div>
    </div>  

    <div class="form-group">
        <label class="col-md-4 control-label" >Middle Name</label>  
            <div class="col-md-4">
                <input  value="<?=$driv->mname?>" name="mname" type="text" placeholder="Middle Name" class="form-control input-md" >
                <?= form_error('mname', '<span class="label label-danger">', '</span>') ?>  
            </div>
    </div>  

    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Last Name</label>  
            <div class="col-md-4">
                <input  value="<?=$driv->lname?>" name="lname" type="text" placeholder="Last Name" class="form-control input-md" required="">
                <?= form_error('lname', '<span class="label label-danger">', '</span>') ?>  
            </div>
    </div>  

    <div class="form-group">
        <label class="col-md-4 control-label" >Password</label>  
            <div class="col-md-4">
                <input  value="<?=$driv->password?>" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
                <?= form_error('password', '<span class="label label-danger">', '</span>') ?>  
            </div>
    </div>  

    <div class="form-group">
        <label class="col-md-4 control-label" >Confirm Password</label>  
            <div class="col-md-4">
                <input  value="<?=$driv->repass?>" name="repass" type="password" placeholder="Confirm Password" class="form-control input-md" required="">
                <?= form_error('repass', '<span class="label label-danger">', '</span>') ?>  
            </div>
    </div>  

    <div class="form-group">
        <label class="col-md-4 control-label">Email</label>  
            <div class="col-md-4">
                <input  value="<?=$driv->email?>" name="email" type="text" placeholder="Email Address" class="form-control input-md" required="">
                <?= form_error('email', '<span class="label label-danger">', '</span>') ?>  
            </div>
    </div>  

    <div class="form-group">
        <label class="col-md-4 control-label" >Contact No.</label>  
            <div class="col-md-4">
                <input  value="<?=$driv->contact?>" name="contact" type="text" placeholder="Product Name" class="form-control input-md" required="">
                <?= form_error('contact', '<span class="label label-danger">', '</span>') ?>  
            </div>
    </div>  


    <div class="form-group">
        <label class="col-md-4 control-label" >Gender</label>
            <div class="col-md-4">
                <select  value="<?=$driv->gender?>" name="gender" class="form-control">
                <option value='<?=$driv->gender?>' selected><?=$driv->gender?></option>
                <option value="M">M</option>
                <option value="F">F</option>
                </select>
            </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
            <div class="col-md-8">
                <button id="button1id" name="submit" value="submit" class="btn btn-success">Update</button>
                <a href="<?= base_url().'admin/userdetails_driver'?>" class="btn btn-danger" role="button"> Cancel</a>
            </div>
    </div>
</fieldset>
</form>
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