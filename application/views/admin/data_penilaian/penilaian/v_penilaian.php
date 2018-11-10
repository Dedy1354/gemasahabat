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
        PENILAIAN
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Penilaian</li>
    </ol>
</section>

        <section class="content">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                    <h3 class="box-title">Form Data Penilaian</h3>
                    </div>
                    <div class="box-body">

                <form action="<?= base_url('admin/C_penilaian/proses_tambah_data_penilaian') ?>" method="POST" class="form-horizontal">
                  <div class="box-body">
                  <div class="box box-primary">

                          <label>*Input Keluarga</label>
                          <div class="box-body">
                            <div class="row">
                              <div class="col-xs-3">
                              <input name="id_penilaian" type="text" value="<?=$kodeunik?>" class="form-control" readonly placeholder="Masukkan ID Penilaian">
                              </div>
                              <div class="col-xs-3">
                                <input name="id_keluarga"  id='keluarga' type="text" class="form-control" required placeholder="Masukan No Urut keluarga">
                              </div>
                              <div class="col-xs-4">
                                <input name="kepala_keluarga" type="text"  class="form-control"  id='nama_kepalakeluarga' readonly placeholder="Nama Kepala Keluarga">
                              </div>
                            </div>
                            </div>
                            <div class="box-body">
                            <div class="row">
                              <div class="col-xs-3">
                                <input name="kecamatan" type="text"  class="form-control"  id='nama_kecamatan' readonly placeholder="Kecamatan">
                              </div>
                              <div class="col-xs-4">
                                <input name="desa" type="text"  class="form-control"  id='nama_desa' readonly placeholder="Desa">
                              </div>
                              <div class="col-xs-5">
                                <input name="dusun" type="text"  class="form-control"  id='nama_alamat' readonly placeholder="Dusun or alamat">
                              </div>
                            </div>
                          </div>
                          <label>*Input Kriteria</label>
                          <div class="box-body">
                            <div class="row">
                              <div class="col-xs-6">
                                <select name="id_kriteria" id="nama_kriteria" type="text" class="form-control" required>
                                   <option value='0'>- Pilih nama kriteria -</option>
                                   <?php foreach ($tampil_kriteria as $lihat_kriteria) {
                                     ?>
                                    <option value='<?= $lihat_kriteria->ID_KRITERIA ?>'><?= $lihat_kriteria->NAMA_KRITERIA ?></option>
                                    <?php } ?>
                                </select>
                              </div>
                              <div class="col-xs-2">
                                <input name="bobot_kri" type="text"  class="form-control" id='bobot_kriteria' readonly placeholder="Nilai">
                              </div>
                            </div>
                          </div>
                          <!-- /.box-body -->
                          <label>*Input Subkriteria</label>
                          <div class="box-body">
                            <div class="row">
                              <div class="col-xs-6">
                                <select name="id_subkriteria" class="form-control" id="subkriteria" required >
                                      <option value='0'>- Pilih nama subkriteria -</option>  
                                </select>
                              </div>
                              <div class="col-xs-2">
                                <input name="bobot_sub" type="text"  class="form-control" id='bobot_subkriteria' readonly placeholder="Nilai">
                              </div>
                            </div>
                          </div>
                        </div>

                    <div class="box-header">
                      <button type="submit" class="btn btn-info pull-left fa fa-plus-circle">Simpan</button>
                      <button type="reset" class="btn btn-warning pull-left ">Reset</button>          
                    </div>
                  </div>
                </form><br><br>


                      <table id="example1" class="table table-bordered table-striped text-center">
                       <thead>
                          <tr>
                            <th style="width:3%;">No.</th>
                            <th style="width:5%;">ID KELUARGA</th>
                            <th style="width:10%;">NAMA KELUARGA</th>
                            <th style="width:10%;">KRITERIA</th>
                            <th style="width:10%;">SUBKRITERIA</th>
                            <th style="width:3%;">HASIL NILAI </th>
                            <th style="width:20%;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                          $no = 1;
                          foreach ($daftar_penilaian as $tampil) {
                        ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $tampil->ID_KELUARGA; ?></td>
                          <td><?php echo $tampil->KEPALA_KELUARGA; ?></td>
                          <td><?php echo $tampil->ID_KRITERIA; ?></td>
                          <td><?php echo $tampil->ID_SUBKRITERIA; ?></td>
                          <td><?php echo $tampil->JUMLAH; ?></td>
                          <td align="center">
                               <a href="<?php echo base_url(); ?>admin/C_penilaian/detail_data_penilaian/<?php echo $tampil->ID_PENILAIAN ?>"><submit class="btn btn-info btn-sm"> <i class="fa fa-eye"></i></submit></a>
                              <a href="<?php echo base_url(); ?>admin/C_penilaian/edit_data_penilaian/<?php echo $tampil->ID_PENILAIAN?>"><submit class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></submit></a>
                              <a href="<?php echo base_url(); ?>admin/C_penilaian/hapus_data_penilaian/<?php echo $tampil->ID_PENILAIAN ?>" onclick="return confirm('anda yakin akan menghapus penilaian dengan ID  <?php echo $tampil->ID_PENILAIAN ?> atas Nama <?php echo $tampil->KEPALA_KELUARGA ?>')"><submit class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></submit></a>
                          </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
        </section>

<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script type="text/javascript">

  $(document).ready(function(){
      $('#keluarga').change(function(){
        var id = $(this).val();
        $.get("<?php echo base_url()?>admin/C_penilaian/nama_kepalakeluarga/"+id, function(data)
        {
          $('#nama_kepalakeluarga').val(data);
        });
         $.get("<?php echo base_url()?>admin/C_penilaian/nama_kecamatan/"+id, function(data)
        {
          $('#nama_kecamatan').val(data);
        });
         $.get("<?php echo base_url()?>admin/C_penilaian/nama_desa/"+id, function(data)
        {
          $('#nama_desa').val(data);
        });
         $.get("<?php echo base_url()?>admin/C_penilaian/nama_alamat/"+id, function(data)
        {
          $('#nama_alamat').val(data);
        });
      });
     

      $('#nama_kriteria').change(function(){
          var id = $(this).val();       
        $.get("<?php echo base_url()?>index.php/admin/C_penilaian/nilai_bobot_kriteria/"+id, function(data)
        {
          $('#bobot_kriteria').val(data);
        });
        
        $("#subkriteria").load("<?php echo base_url()?>index.php/admin/C_penilaian/pilih_subkriteria/"+id);

      });


      $('#subkriteria').change(function(){
        var id = $(this).val();
        $.get("<?php echo base_url()?>index.php/admin/C_penilaian/nilai_bobot_subkriteria/"+id, function(data)
        {
          $('#bobot_subkriteria').val(data);
        });
      });

  });
  </script>

<?php
$this->load->view('template/foot');
?>