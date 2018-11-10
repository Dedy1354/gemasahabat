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
        KECAMATAN
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Kecamatan</li>
    </ol>
</section>

      <section class="content">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Data Kecamatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <form action="<?= base_url('admin/C_kecamatan/proses_edit_data_kecamatan')?>" method="POST" class="form-horizontal">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">ID Kecamatan</label>

                  <div class="col-sm-10">
                    <input style="width:50%" name="kec_id" value="<?= $kecamatan->KEC_ID ?>" type="text" class="form-control" placeholder="Masukkan ID Kabupaten">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Kecamatan</label>

                  <div class="col-sm-10">
                    <input style="width:50%" name="kec_nama" value="<?= $kecamatan->KEC_NAMA ?>" type="text" class="form-control" placeholder="Masukkan Nama Kabupaten" required>
                  </div>
                </div>

                
              </div>
              <!-- /.box-body -->
              <div class="box-header">
                <a href="<?php echo base_url(); ?>admin/C_kecamatan"><submit class="btn btn-default pull-center">Kembali</submit></a>
                <button type="submit" class="btn btn-info pull-left">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
    </section>

<?php
$this->load->view('template/js');
?>


<?php
$this->load->view('template/foot');
?>