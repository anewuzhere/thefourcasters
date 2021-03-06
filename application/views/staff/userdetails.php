<div class="content-wrapper">
    <section class="content-header">
      <h1>User Accounts</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'staff/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">User Accounts</a></li>
      </ol>
    </section>

    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6 col-xs-12">
          <div class="box box-success collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title"><b><i>Company Mission</i></b></h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              To be a leading Manila-based cargo forwarder, logistics provider,
              customs broker and tariff consultant.
            </div>
          </div>
      </div>

      <div class="col-md-6 col-xs-12">
          <div class="box box-success collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title"><b><i> Company Vision</i></b></h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              The Pursuit of Reliability, Efficiency, Personalized Service and Trustworthiness.
            </div>
          </div>
      </div>
     

    </div>
    <div class="row">
    <?php if($this->session->userdata('priv') =='5'OR $this->session->userdata('priv') =='1') {?>
        <div class="col-md-3 col-xs-12">
          <div class="small-box bg-red">
            <div class="inner">
              <h1><b>Customer<br/>Details</b></h1>
              <br/><br/><br/><br/>
            </div>
            <div class="icon"><br/>
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?=base_url().'staff/customerdetails'?>" class="small-box-footer">Proceed <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    <?php }else{}?>
          <!-- small box -->
          <?php if($this->session->userdata('priv') =='4'OR $this->session->userdata('priv') =='1') {?>
        <div class="col-md-3 col-xs-12">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h1><b>Driver<br/>Details</b></h1>
              <br/><br/><br/><br/>
            </div>
            <div class="icon"><br/>
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?=base_url().'staff/driverdetails'?>" class="small-box-footer">Proceed <i class="fa fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <?php }else{}?>
          <!-- small box -->
          <?php if($this->session->userdata('priv') =='4'OR $this->session->userdata('priv') =='1') {?>
        <div class="col-md-3 col-xs-12">
          <div class="small-box bg-green">
            <div class="inner">
              <h1><b>Helper<br/>Details</b></h1>
              <br/><br/><br/><br/>
            </div>
            <div class="icon"><br/>
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?=base_url().'staff/helperdetails'?>" class="small-box-footer">Proceed <i class="fa fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <?php }else{}?>
      
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

