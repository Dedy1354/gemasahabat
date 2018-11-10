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
        SUBKRITERIA
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Subkriteria</li>
    </ol>
</section>

      <section class="content">
                <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Form Data Subkriteria</h3>
                  </div>
                  <div class="box-body">

                    <form action="<?= base_url('admin/C_subkriteria/proses_tambah_data_subkriteria') ?>" method="POST" class="form-horizontal">
                      <div class="box-body">

                      <div class="box box-primary">
                      <div class="box-body">
                        <div class="row">
                          <div class="col-xs-4">
                          <input name="id_subkriteria" type="text" readonly value="<?=$kodeunik?>" class="form-control" placeholder="Masukkan ID subkriteria">
                          </div>
                        </div>
                        </div>
                      <div class="box-body">
                        <div class="row">
                          <div class="col-xs-4">
                            <select name="id_kriteria"  type="text" class="form-control" onchange="update_kriteria()" required>
                           <option value=''>- Pilih nama kriteria -</option>
                           <?php foreach ($tampil_kriteria as $lihat_kriteria) {
                             ?>
                            <option value='<?= $lihat_kriteria->ID_KRITERIA ?>'><?= $lihat_kriteria->NAMA_KRITERIA ?></option>
                            <?php } ?>
                          </select>
                          </div>
                        </div>
                      </div>
                      <div class="box-body">
                        <div class="row">
                          <div class="col-xs-4">
                          <input name="nama_subkriteria" type="text" class="form-control" placeholder="Masukkan Nama Subkriteria" required>
                          </div>
                        </div>
                      </div>
                      <div class="box-body">
                        <div class="row">
                          <div class="col-xs-4">
                          <select name="rank_subkriteria" type="text" class="form-control" required>
                            <option value='0'>pilih panjang Rank</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option>
                            <option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option>
                            <option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option>
                          </select>
                          </div>
                        </div>
                        </div>

              
                          <div class="box-header">
                            <button type="submit" class="btn btn-info pull-left fa fa-plus-circle">Tambah</button>
                            <button type="reset" class="btn btn-warning pull-left ">Reset</button>          
                            <a href="<?php echo base_url(); ?>admin/C_subkriteria/hitung_bobot"<submit class="btn btn-default pull-right"><i class="fa fa-pie-chart"></i>update nilai bobot</submit></a>
                          </div>
                  </div>
                   </form><br><br>

                    <table id="example1" class="table table-bordered table-striped text-center">
                    
                     <thead>
                        <tr>
                          <th style="width:2%;" >NO</th>
                          <th style="width:5%;" >ID SUBKRITERIA</th>
                          <th style="width:5%;" >ID KRITERIA</th>
                          <th style="width:15%;" >NAMA SUBKRITERIA</th>
                          <th style="width:2%;" >RANK SUBKRITERIA</th>
                          <th style="width:5%;" >BOBOT SUBKRITERIA</th>
                          <th style="width:20%;">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        $no = 1;
                        foreach ($daftar_subkriteria as $tampil) {
                      ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $tampil->ID_SUBKRITERIA; ?></td>
                        <td><?php echo $tampil->ID_KRITERIA; ?></td>
                        <td><?php echo $tampil->NAMA_SUBKRITERIA; ?></td>
                        <td><?php echo $tampil->RANK_SUBKRITERIA; ?></td>
                        <td><?php echo $tampil->BOBOT_SUBKRITERIA; ?></td>
                        <td align="center">
                            <a href="<?php echo base_url(); ?>admin/C_subkriteria/detail_data_subkriteria/<?php echo $tampil->ID_SUBKRITERIA ?>"><submit class="btn btn-info btn-sm"> <i class="fa fa-eye"></i></submit></a>
                            <a href="<?php echo base_url(); ?>admin/C_subkriteria/edit_data_subkriteria/<?php echo $tampil->ID_SUBKRITERIA ?>"><submit class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></submit></a>
                            <a href="<?php echo base_url(); ?>admin/C_subkriteria/hapus_data_subkriteria/<?php echo $tampil->ID_SUBKRITERIA ?>" onclick="return confirm('anda yakin akan menghapus data <?php echo $tampil->ID_SUBKRITERIA ?> atas nama subindikator <?php echo $tampil->NAMA_SUBKRITERIA ?>')"><submit class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></submit></a>
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

<!--tambahkan custom js disini-->


<?php
$this->load->view('template/foot');
?>