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
        KRITERIA
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Detail kriteria</li>
    </ol>
</section>

      <section class="content">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Detail Kriteria</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="POST" class="form-horizontal">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">ID Kriteria</label>

                  <div class="col-sm-5">
                    <label class="form-control" ><?= $kriteria->ID_KRITERIA ?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Kriteria</label>

                  <div class="col-sm-5">
                    <label class="form-control" ><?= $kriteria->NAMA_KRITERIA ?></label>
                  </div>
                </div>

              <div class="form-group">
                  <label class="col-sm-2 control-label">Rank Kriteria</label>

                  <div class="col-sm-5">
                    <label class="form-control" ><?= $kriteria->RANK_KRITERIA ?></label>
                  </div>
              </div>     

              <div class="form-group">
                  <label class="col-sm-2 control-label">Bobot Kriteria</label>

                  <div class="col-sm-5">
                        <label class="form-control" ><?= $kriteria->BOBOT_KRITERIA ?></label>
                  </div>
              </div>

              <div class="box-header">
                <a href="<?php echo base_url(); ?>admin/C_kriteria"><submit class="btn btn-default pull-center">Kembali</submit></a>
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