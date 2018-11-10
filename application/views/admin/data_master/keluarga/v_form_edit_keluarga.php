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
        <li class="active">Edit Keluarga</li>
    </ol>
</section>

      <section class="content">
             <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Form Edit Data Keluarga</h3>
                  </div>
                  <div style="width:100%" class="box-body">
                  <form action="<?= base_url('admin/C_keluarga/proses_edit_data_keluarga')?>" method="POST" class="form-horizontal form-label-left"/>
                    <div class="box-body">

                  <label>*ID Keluarga</label>
                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-5">
                        <input name="id_keluarga" type="text" readonly value="<?= $keluarga->ID_KELUARGA ?>" class="form-control" placeholder="Masukkan ID Keluarga">
                        </div>
                      </div>
                    </div>
                   
                    <label>*Kecamatan</label>
                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-5">
                          <select name="kec_id" id="kecamatan" type="text" class="form-control" required>"
                          <?php foreach ($tampil_kecamatan as $lihat_kecamatan) {
                            echo '<option value="'.$lihat_kecamatan->KEC_ID.'"';
                            if($lihat_kecamatan->KEC_ID == $keluarga->KEC_ID){
                              echo 'selected="selected"';
                            }
                            echo '>'.$lihat_kecamatan->KEC_NAMA.'</option>';
                          } ?>
                        </select>
                        </div>
                      </div>
                    </div>

                    <label>*Desa</label>
                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-5">
                          <select name="des_id" class="form-control" id='desa' required >
                          <option value="<?= $keluarga->DES_ID ?>"><?= $DES_ID ?></option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <label>*Alamat/Dusun</label>
                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-5">
                          <select name="dus_id"  class="form-control" id='alamat' required >
                          <option value='<?= $keluarga->DUS_ID ?>'><?= $DUS_ID ?></option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <label>*Nama Kepala Keluarga</label>
                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-5">
                        <input name="nama_kepalakeluarga" type="text" class="form-control" value="<?= $keluarga->NAMA_KEPALAKELUARGA ?>" required>
                        </div>
                      </div>
                    </div>

                    <label>*Jumlah Anggota Keluarga</label>
                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-5">
                        <input name="jumlah_anggotakeluarga" type="text" class="form-control" value="<?= $keluarga->JUMLAH_ANGGOTAKELUARGA ?>" required>
                        </div>
                      </div>
                    </div>

                    <label>*Jumlah Keluarga</label>
                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-5">
                        <input name="jumlah_keluarga" type="text" class="form-control" value="<?= $keluarga->JUMLAH_KELUARGA ?>" required>
                        </div>
                      </div>
                    </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-header">
                      <button type="submit" class="btn btn-info pull-left">Simpan</button>
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

<script type="text/javascript">

  $(document).ready(function(){
      $('#nama_kabupaten').change(function(){
          var id = $(this).val();
        $("#kecamatan").load("<?php echo base_url()?>index.php/admin/C_keluarga/pilih_kecamatan/"+id);
          $.get("<?php echo base_url()?>index.php/admin/C_keluarga/isi_kabupaten/"+id, function(data){
            $('#isi_kabupaten').val(data);
          });
    });

      $('#kecamatan').change(function(){
          var id = $(this).val();
        $("#desa").load("<?php echo base_url()?>index.php/admin/C_keluarga/pilih_desa/"+id);
         $.get("<?php echo base_url()?>index.php/admin/C_keluarga/isi_kecamatan/"+id, function(data){
            $('#isi_kecamatan').val(data);
          });
    });

      $('#desa').change(function(){
          var id = $(this).val();
        $("#alamat").load("<?php echo base_url()?>index.php/admin/C_keluarga/pilih_alamat/"+id);
         $.get("<?php echo base_url()?>index.php/admin/C_keluarga/isi_desa/"+id, function(data){
            $('#isi_desa').val(data);
          });
    });

      $('#alamat').change(function(){
          var id = $(this).val();
         $.get("<?php echo base_url()?>index.php/admin/C_keluarga/isi_alamat/"+id, function(data){
            $('#isi_alamat').val(data);
          });
    });


 });
</script>


<!--tambahkan custom js disini-->

<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

<?php
$this->load->view('template/foot');
?>