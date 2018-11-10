<?php
$this->load->view('template/head');
?>

<!--tambahkan custom css disini-->
<!-- iCheck -->

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        ALAMAT
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Detail Alamat</li>
    </ol>
</section>

      <section class="content">
            <div class="box box-primary">
                <!-- Horizontal Form -->
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Form Detail Data Alamat</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form action="" method="POST" class="form-horizontal">
                    <div class="box-body">

                      <div class="form-group">
                        <label class="col-sm-2 control-label">ID DUSUN/ALAMAT</label>
                        <div class="col-sm-10">
                          <label class="form-control"><?= $dusun->DUS_ID ?></label>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">DESA</label>

                        <div class="col-sm-10">
                          <label class="form-control"><?= $DES_ID ?></label>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-sm-2 control-label">NAMA DESUN/ALAMAT</label>

                        <div class="col-sm-10">
                          <label class="form-control"><?= $dusun->DUS_NAMA ?></label>
                        </div>
                      </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-header">
                      <a href="<?php echo base_url(); ?>admin/C_alamat"><submit class="btn btn-default pull-left">Kembali</submit></a>
                    </div>
                    <!-- /.box-footer -->
                  </form>
                </div>
              </div>
      </section>

<?php
$this->load->view('template/js');
?>


<!--tambahkan custom js disini-->

<?php
$this->load->view('template/foot');
?>