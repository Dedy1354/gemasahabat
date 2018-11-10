<?php
$this->load->view('template/head');
?>

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        SUBKRITERIA
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Detail Subkriteria</li>
    </ol>
</section>

      <section class="content">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Data Subkriteria</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="POST" class="form-horizontal">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">ID Subkriteria</label>

                  <div class="col-sm-10">
                     <label class="form-control" ><?= $subkriteria->ID_SUBKRITERIA ?></label>
                  </div>
                </div>

                <div class="form-group" >
                  <label class="col-sm-2 control-label">Kriteria</label>

                 <div class="col-sm-10">
                     <label class="form-control" ><?= $ID_KRITERIA ?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Subkriteria</label>

                  <div class="col-sm-10">
                     <label class="form-control" ><?= $subkriteria->NAMA_SUBKRITERIA ?></label>
                  </div>
                </div>

              <div class="form-group">
                  <label class="col-sm-2 control-label">Rank Subkriteria</label>

                  <div class="col-sm-10">
                     <label class="form-control" ><?= $subkriteria->RANK_SUBKRITERIA ?></label>
                  </div>
              </div>

               <div class="form-group">
                  <label class="col-sm-2 control-label">Bobot Subkriteria</label>

                  <div class="col-sm-10">
                     <label class="form-control" ><?= $subkriteria->BOBOT_SUBKRITERIA ?></label>
                  </div>
              </div>             

              <div class="box-header">
                <a href="<?php echo base_url(); ?>admin/C_subkriteria"><submit class="btn btn-default pull-center">Kembali</submit></a>
              </div>
              
          </form>
          </div>
    </section>

<?php
$this->load->view('template/js');
?>

<?php
$this->load->view('template/foot');
?>