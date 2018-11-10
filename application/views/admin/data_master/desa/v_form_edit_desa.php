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
        DESA
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">edit desa</li>
    </ol>
</section>

      <section class="content">
          <div class="box">
            <div class="box-header with-border">
                  <h3 class="box-title">Form Edit Data Desa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <form action="<?= base_url('admin/C_desa/proses_edit_data_desa')?>" method="POST" class="form-horizontal">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-xs-2 control-label">ID Desa</label>

                  <div class="col-xs-10">
                    <input name="des_id" readonly value="<?= $desa->DES_ID ?>" type="text" class="form-control" placeholder="Masukkan ID DESA">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-xs-2 control-label">ID Kecamatan</label>

                 <div class="col-xs-10">
                    <select name="kec_id" id='desa' type="text" class="form-control" required>
                      <?php foreach ($tampil_kecamatan as $lihat_kecamatan) {
                            echo '<option value="'.$lihat_kecamatan->KEC_ID.'"';
                            if($lihat_kecamatan->KEC_ID == $desa->KEC_ID){
                              echo 'selected="selected"';
                            }
                            echo '>'.$lihat_kecamatan->KEC_NAMA.'</option>';
                          } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-xs-2 control-label">Nama Desa</label>

                  <div class="col-xs-10">
                    <input name="des_nama" value="<?= $desa->DES_NAMA?>" type="text" class="form-control" placeholder="Masukkan Nama Desa" required>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-header">
                <button type="submit" class="btn btn-info pull-left">Simpan</button>
                <a href="<?php echo base_url(); ?>admin/C_desa"><submit class="btn btn-default pull-center">Kembali</submit></a>
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