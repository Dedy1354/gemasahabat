<?php
$this->load->view('template/head');
?>

<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        SUBKRITERIA
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Subkriteria</li>
    </ol>
</section>

      <section class="content">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Data Subkriteria</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?= base_url('admin/C_subkriteria/proses_edit_data_subkriteria') ?>" method="POST" class="form-horizontal">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">ID Subkriteria</label>

                  <div class="col-sm-10">
                    <input name="id_subkriteria" value="<?= $subkriteria->ID_SUBKRITERIA ?>" type="text" readonly class="form-control" placeholder="Masukkan ID subkriteria">
                  </div>
                </div>

                <div class="form-group" >
                  <label class="col-sm-2 control-label">ID Kriteria</label>

                 <div class="col-sm-10">
                    <select name="id_kriteria"  type="text" class="form-control"  required>
                    <?php foreach ($kriteria as $kriteria) {
                            echo '<option value="'.$kriteria->ID_KRITERIA.'"';
                            if($kriteria->ID_KRITERIA == $subkriteria->ID_KRITERIA){
                              echo 'selected="selected"';
                            }
                            echo '>'.$kriteria->NAMA_KRITERIA.'</option>';
                          } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Subkriteria</label>

                  <div class="col-sm-10">
                    <input name="nama_subkriteria" value="<?= $subkriteria->NAMA_SUBKRITERIA ?>" type="text" class="form-control" placeholder="Masukkan Nama Subkriteria" required>
                  </div>
                </div>

              <div class="form-group">
                  <label class="col-sm-2 control-label">Rank Subkriteria</label>

                  <div class="col-sm-10">
                    <select name="rank_subkriteria" type="text" class="form-control" required><option value='<?= $subkriteria->RANK_SUBKRITERIA ?>'><?= $subkriteria->RANK_SUBKRITERIA ?></option>
                      <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option>
                      <option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option>
                      <option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option>
                    </select>
                  </div>
              </div>

               <div class="form-group">
                  <label class="col-sm-2 control-label">Bobot Subkriteria</label>

                  <div class="col-sm-10">
                    <input name="bobot_subkriteria" readonly value="<?= $subkriteria->BOBOT_SUBKRITERIA ?>" type="text" class="form-control" placeholder="Masukkan Bobot Subkriteria" required>
                  </div>
              </div>             

              <div class="box-header">
                <a href="<?php echo base_url(); ?>admin/C_subkriteria"><submit class="btn btn-default pull-center">Kembali</submit></a>
                <button type="submit" class="btn btn-info pull-left">Simpan</button>
              </div>
              
          </form>
          </div>
    </section>

<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->

<?php
$this->load->view('template/foot');
?>