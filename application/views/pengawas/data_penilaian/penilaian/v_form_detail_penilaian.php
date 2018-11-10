<?php
$this->load->view('template_pengawas/head');
?>

<?php
$this->load->view('template_pengawas/topbar');
$this->load->view('template_pengawas/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

     <section class="content">
              <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Form Edit Data Penilaian</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form action="<?= base_url('index.php/admin/C_penilaian/proses_edit_data_penilaian')?>" method="POST" class="form-horizontal">
                    <div class="box-body">

                      <div class="form-group">
                        <label class="col-sm-2 control-label">ID Penilaian</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $penilaian->ID_PENILAIAN ?></label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">ID Keluarga</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $penilaian->ID_KELUARGA ?></label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Keluarga</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $penilaian->KEPALA_KELUARGA ?></label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Kecamatan</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $penilaian->KECAMATAN ?></label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Desa</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $penilaian->DESA ?></label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat/Dusun</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $penilaian->DUSUN ?></label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">ID Kriteria</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $ID_KRITERIA ?></label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nilai Kriteria</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $penilaian->BOBOT_KRI ?></label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">ID Subkriteria</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $ID_SUBKRITERIA ?></label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nilai subkriteria</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $penilaian->BOBOT_SUB ?></label>
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="col-sm-2 control-label">Jumlah Nilai</label>

                        <div class="col-sm-10">
                          <label class="form-control" ><?= $penilaian->JUMLAH ?></label>
                        </div>
                      </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-header">
                      <a href="<?php echo base_url(); ?>pengawas/C_penilaian"><submit class="btn btn-default pull-left">Kembali</submit></a>
                    </div>
                    <!-- /.box-footer -->
                  </form>
                </div>
      </section>

<?php
$this->load->view('template_pengawas/js');
?>

<!--tambahkan custom js disini-->

<?php
$this->load->view('template_pengawas/foot');
?>