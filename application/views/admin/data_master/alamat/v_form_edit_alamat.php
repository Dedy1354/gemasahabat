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
        ALAMAT
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">edit alamat</li>
    </ol>
</section>

      <section class="content">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Data Alamat</h3>
            </div>

           <form action="<?= base_url('admin/C_alamat/proses_edit_data_alamat')?>" method="POST" class="form-horizontal">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-xs-2 control-label">ID DUSUN/ALAMAT</label>
                  <div class="col-xs-4">
                    <input name="dus_id" readonly value="<?= $dusun->DUS_ID ?>" type="text" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-xs-2 control-label">ID KECAMATAN</label>
                        <div class="col-xs-4">
                          <select name="" type="text" id='kecamatan' class="form-control" required >
                            <option value="">-pilih nama kecamatan-</option>
                            <?php foreach ($tampil_kecamatan as $lihat_kecamatan) {
                              ?>
                              <option value='<?= $lihat_kecamatan->KEC_ID ?>'><?= $lihat_kecamatan->KEC_NAMA ?></option>
                           <?php  } ?>  
                          </select>
                      </div>
                </div>

                <div class="form-group">
                  <label class="col-xs-2 control-label">ID DESA</label>
                        <div class="col-xs-4">
                          <select name="des_id" type="text" id='desa' class="form-control" required>
                                  <option value='<?= $dusun->DES_ID ?>'><?= $DES_ID ?></option>
                          </select>
                        </div>
                      </div>
                </div>

                <div class="form-group">
                  <label class="col-xs-2 control-label">NAMA DUSUN</label>
                    <div class="col-xs-4">
                    <input name="dus_nama" type="text" class="form-control" value="<?= $dusun->DUS_NAMA ?>" required>
                    </div>
                </div>
              <!-- /.box-body -->
              <div class="box-header">
                <a href="<?php echo base_url(); ?>admin/C_alamat"><submit class="btn btn-default pull-center">Kembali</submit></a>
                <button type="submit" class="btn btn-info pull-left">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
    </section>

<?php
$this->load->view('template/js');
?>
 <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  
  <script type="text/javascript">
  $(document).ready(function(){
    $('#kecamatan').change(function(){
      var id = $(this).val();
        $('#desa').load("<?php echo base_url()?>/admin/C_alamat/pilih_desa/"+id);
    });
  });
  </script>
<?php
$this->load->view('template/foot');
?>