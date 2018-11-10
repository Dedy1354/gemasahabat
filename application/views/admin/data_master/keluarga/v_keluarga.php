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
        Keluarga
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Keluarga</li>
    </ol>
</section>

    <section class="content">
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Data Keluarga</h3>
            </div>
                <div class="box-body">

                <form action="<?= base_url('admin/C_keluarga/proses_tambah_data_keluarga')?>" method="POST" class="form-horizontal form-label-left"/>
                  <div class="box-body">
                  <div class="box box-primary ">
                  <label>*Form Input</label>
                          <div class="box-body">
                            <div class="row">
                              <div class="col-xs-3">
                              <input name="id_keluarga" type="text" class="form-control"  placeholder="Masukkan No Urut Keluarga" required>
                              </div>
                              <div class="col-xs-3">
                                  <select name="kec_id" type="text" id='kecamatan' class="form-control" required>
                                   <option value=''>- Pilih nama kecamatan -</option>
                                   <?php foreach ($tampil_kecamatan as $lihat_kecamatan) {
                                     ?>
                                  <option value='<?= $lihat_kecamatan->KEC_ID ?>'><?= $lihat_kecamatan->KEC_NAMA ?></option>
                                  <?php } ?>
                                  </select>
                              </div>
                              <div class="col-xs-3">
                                  <select name="des_id" type="text" id='desa' class="form-control" required>
                                  <option value='0'>- Pilih nama desa -</option>
                                </select>
                              </div>
                              <div class="col-xs-3">
                                  <select name="dus_id" class="form-control" id='alamat' required >
                                  <option value='0'>Pilih nama alamat</option>
                                  </select>
                              </div>
                            </div>
                          </div>

                          <div class="box-body">
                            <div class="row">
                              <div class="col-xs-3">
                              <input name="nama_kepalakeluarga" type="text"  class="form-control"  placeholder="Nama Kepala Keluarga" required>
                              </div>
                              <div class="col-xs-3">
                              <input name="jumlah_anggotakeluarga" type="text" class="form-control"  placeholder="Jumlah Anggota Keluarga" required>
                              </div>
                              <div class="col-xs-3">
                              <input name="jumlah_keluarga" type="text" class="form-control"  placeholder="jumlah keluarga" required>
                              </div>
                            </div>
                          </div>
                          
                  <div class="box-header">
                    <button type="submit" class="btn btn-info pull-left fa fa-plus-circle">TAMBAH</button>
                    <button type="reset" class="btn btn-warning pull-left ">Reset</button>
                  </div>
                  </div>
                </form>
                  <table id="example1" class="table table-bordered table-striped text-center">
                   <thead>
                      <tr>
                        <th style="width:3%;">NO</th>
                        <th style="width:5%;">ID KELUARGA</th>
                        <th style="width:15%;">NAMA KEPALA KELUARGA</th>
                        <th style="width:10%;">JUMLAH ANGGOTA KELUARGA</th>
                        <th style="width:10%;">JUMLAH KELUARGA</th>
                        <th style="width:15%;">ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      $no = 1;
                      foreach ($daftar_keluarga as $tampil) {
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $tampil->ID_KELUARGA; ?></td>
                      <td><?php echo $tampil->NAMA_KEPALAKELUARGA; ?></td>
                      <td><?php echo $tampil->JUMLAH_ANGGOTAKELUARGA; ?></td>
                      <td><?php echo $tampil->JUMLAH_KELUARGA; ?></td>
                      <td align="center">
                          <a href="<?php echo base_url(); ?>admin/C_keluarga/detail_data_keluarga/<?php echo $tampil->ID_KELUARGA ?>"><submit class="btn btn-info btn-sm"> <i class="fa fa-eye"></i></submit></a>
                          <a href="<?php echo base_url(); ?>admin/C_keluarga/edit_data_keluarga/<?php echo $tampil->ID_KELUARGA ?>"><submit class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></submit></a>
                          <a href="<?php echo base_url(); ?>admin/C_keluarga/hapus_data_keluarga/<?php echo $tampil->ID_KELUARGA ?>" onclick="return confirm('anda yakin akan menghapus data <?php echo $tampil->ID_KELUARGA ?> atas nama kepala keluarga <?php echo $tampil->NAMA_KEPALAKELUARGA ?>')"><submit class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></submit></a>
                      </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
    </section>

<?php
$this->load->view('template/js');
?>

<script type="text/javascript">
  $(document).ready(function(){

    $('#kecamatan').change(function(){
      var id = $(this).val();
        $('#desa').load("<?php echo base_url()?>/admin/C_keluarga/pilih_desa/"+id);
    });
    
    $('#desa').change(function(){
      var id = $(this).val();
        $('#alamat').load("<?php echo base_url()?>/admin/C_keluarga/pilih_alamat/"+id);
    });

  });

</script>

<!--tambahkan custom js disini-->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

<?php
$this->load->view('template/foot');
?>