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
        <li class="active">Edit Penilaian</li>
    </ol>
</section>

      <section class="content">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Data Penilaian</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?= base_url('admin/C_penilaian/proses_edit_data_penilaian') ?>" method="POST" class="form-horizontal">
              <div class="box-body">

                    <label>*Input Keluarga</label>
                          <div class="box-body">
                            <div class="row">
                              <div class="col-xs-3">
                              <input name="id_penilaian" type="text" value="<?= $penilaian->ID_PENILAIAN ?>" class="form-control" readonly >
                              </div>
                              <div class="col-xs-3">
                                <input name="id_keluarga"  id='keluarga' type="text" readonly="" class="form-control" value='<?= $penilaian->ID_KELUARGA ?>' >
                              </div>
                              <div class="col-xs-4">
                                <input name="kepala_keluarga" type="text" readonly=""  class="form-control"  id='nama_kepalakeluarga' value='<?= $penilaian->KEPALA_KELUARGA ?>'>
                              </div>
                            </div>
                            </div>
                            <div class="box-body">
                            <div class="row">
                              <div class="col-xs-3">
                                <input name="kecamatan" type="text" readonly=""  class="form-control"  id='nama_kecamatan' value='<?= $penilaian->KECAMATAN ?>'>
                              </div>
                              <div class="col-xs-4">
                                <input name="desa" type="text" readonly=""  class="form-control"  id='nama_desa' value='<?= $penilaian->DESA ?>'>
                              </div>
                              <div class="col-xs-5">
                                <input name="dusun" type="text" readonly="" class="form-control"  id='nama_alamat' value='<?= $penilaian->DUSUN ?>'>
                              </div>
                            </div>
                          </div>

                      <label>*Input Kriteria</label>
                      <div class="box-body">
                        <div class="row">
                          <div class="col-xs-6">
                            <select name="id_kriteria" id="nama_kriteria" type="text" class="form-control" required>
                               <?php foreach ($kriteria as $kriteria) {
                                  echo '<option value="'.$kriteria->ID_KRITERIA.'"';
                                  if($kriteria->ID_KRITERIA == $penilaian->ID_KRITERIA){
                                    echo 'selected="selected"';
                                  }
                                  echo '>'.$kriteria->NAMA_KRITERIA.'</option>';
                                } ?>
                            </select>
                          </div>
                          <div class="col-xs-2">
                            <input name="bobot_kri" type="text"  class="form-control" id='bobot_kriteria' value='<?= $penilaian->BOBOT_KRI ?>' >
                          </div>
                        </div>
                      </div>
                      <!-- /.box-body -->
                      <label>*Input Subkriteria</label>
                      <div class="box-body">
                        <div class="row">
                          <div class="col-xs-6">
                            <select name="id_subkriteria" class="form-control" id="subkriteria" required >
                                  <option value='<?= $penilaian->ID_SUBKRITERIA ?>'><?= $ID_SUBKRITERIA ?></option>  
                            </select>
                          </div>
                          <div class="col-xs-2">
                            <input name="bobot_sub" type="text"  class="form-control" id='bobot_subkriteria' value='<?= $penilaian->BOBOT_SUB?>'>
                          </div>
                        </div>
                      </div>
                    </div>

              <div class="box-header">
                <a href="<?php echo base_url(); ?>admin/C_penilaian"><submit class="btn btn-default pull-center">Kembali</submit></a>
                <button type="submit" class="btn btn-info pull-left">Simpan</button>
              </div>
              
          </form>
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
        $.get("<?php echo base_url()?>index.php/admin/C_penilaian/nama_kepalakeluarga/"+id, function(data)
        {
          $('#nama_kepalakeluarga').val(data);
        });
         $.get("<?php echo base_url()?>index.php/admin/C_penilaian/nama_kecamatan/"+id, function(data)
        {
          $('#nama_kecamatan').val(data);
        });
      });
     

      $('#nama_kriteria').change(function(){
          var id = $(this).val();

        $.get("<?php echo base_url()?>index.php/admin/C_penilaian/kriteria/"+id, function(data)
        {
          $('#kriteria').val(data);
        });
        
        $.get("<?php echo base_url()?>index.php/admin/C_penilaian/nilai_bobot_kriteria/"+id, function(data)
        {
          $('#bobot_kriteria').val(data);
        });
        
        $("#subkriteria").load("<?php echo base_url()?>index.php/admin/C_penilaian/pilih_subkriteria/"+id);

      });


      $('#subkriteria').change(function(){
        var id = $(this).val();
         $.get("<?php echo base_url()?>index.php/admin/C_penilaian/subkriteria/"+id, function(data)
        {
          $('#nam_subkriteria').val(data);
        });

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