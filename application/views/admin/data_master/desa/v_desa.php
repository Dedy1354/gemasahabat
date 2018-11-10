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
        <li class="active">Desa</li>
    </ol>
</section>


      <section class="content">
                <div class="box box-primary">
                  <div class="box-header with-border">
                  <h3 class="box-title">Form Data Desa</h3>
                  </div>
                  <div class="box-body">


                    <form action="<?= base_url('admin/C_desa/proses_tambah_data_desa') ?>" method="POST" class="form-horizontal">
                    <div class="box-body">
                      <div class="box box-primary">
                      <label>*Form Input</label>
                          <div class="box-body">
                            <div class="row">
                              <div class="col-xs-3">
                              <input name="des_id" type="text" readonly value="<?=$kodeunik?>" class="form-control"  placeholder="Masukkan ID Desa">
                              </div>
                            </div>
                          </div>
                          <div class="box-body">
                            <div class="row">
                              <div class="col-xs-3">
                              <select name="kec_id" type="text" class="form-control" required>
                               <option value=''>- Pilih nama kecamatan -</option>
                               <?php foreach ($tampil_kecamatan as $lihat_kecamatan) { ?>
                                <option value='<?= $lihat_kecamatan->KEC_ID ?>'><?= $lihat_kecamatan->KEC_NAMA ?></option>
                              <?php } ?>
                              </select>
                              </div>
                            </div>
                          </div>
                          <div class="box-body">
                            <div class="row">
                              <div class="col-xs-3">
                              <input name="des_nama" type="text" class="form-control"  placeholder="Masukkan Nama Desa" required>
                              </div>
                            </div>
                          </div>

                     
                    <div class="box-header">
                      <button type="submit" class="btn btn-info pull-left fa fa-plus-circle">Tambah</button>
                      <button type="reset" class="btn btn-warning pull-left ">Reset</button>
                    </div> 
                    </div>
                </form>

                    <table id="example1" class="table table-bordered table-striped text-center">
                     <thead>
                        <tr>
                          <th style="width:5%;" >NO</th>
                          <th style="width:15%;">ID DESA</th>
                          <th style="width:15%;">ID KECAMATAN</th>
                          <th style="width:15%;">NAMA DESA</th>
                          <th style="width:15%;">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        $no = 1;
                        foreach ($daftar_desa as $tampil) {
                      ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $tampil->DES_ID; ?></td>
                        <td><?php echo $tampil->KEC_ID; ?></td>
                        <td><?php echo $tampil->DES_NAMA; ?></td>
                        <td align="center">
                            <a href="<?php echo base_url(); ?>admin/C_desa/edit_data_desa/<?php echo $tampil->DES_ID ?>"><submit class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></submit></a>
                            <a href="<?php echo base_url(); ?>admin/C_desa/hapus_data_desa/<?php echo $tampil->DES_ID ?>" onclick="return confirm('anda yakin akan menghapus data <?php echo $tampil->DES_ID ?> dengan nama desa  <?php echo $tampil->DES_NAMA ?>')"><submit class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></submit></a>
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


<?php
$this->load->view('template/foot');
?>