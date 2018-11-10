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
        KELUARGA
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Detail Keluarga</li>
    </ol>
</section>

      <section class="content">
            <div class="box">
                <!-- Horizontal Form -->
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Form Detail Data Keluarga</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form action="<?= base_url('admin/C_keluarga/proses_detail_data_keluarga')?>" method="POST" class="form-horizontal">
                    <div class="box-body">

                      <div class="form-group">
                        <label class="col-sm-2 control-label">ID Keluarga</label>

                        <div class="col-sm-10">
                          <label class="form-control"><?= $keluarga->ID_KELUARGA ?></label>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Kecamatan</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $KEC_ID ?></label>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Desa</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $DES_ID ?></label>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Alamat</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $DUS_ID ?></label>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Kepala keluarga</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $keluarga->NAMA_KEPALAKELUARGA ?></label>
                        </div>
                      </div>
                         <div class="form-group">
                        <label class="col-sm-2 control-label">Jumlah Anggota Keluarga</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $keluarga->JUMLAH_ANGGOTAKELUARGA ?></label>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-sm-2 control-label">Jumlah Keluarga</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $keluarga->JUMLAH_KELUARGA ?></label>
                        </div>
                      </div>  

                    </div>
                    <!-- /.box-body -->
                    <div class="box-header">
                      <a href="<?php echo base_url(); ?>admin/C_keluarga"><submit class="btn btn-default pull-left">Kembali</submit></a>
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