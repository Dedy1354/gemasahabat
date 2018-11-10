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
        USER
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
    </ol>
</section>

        <section class="content">
                  <div class="box box-primary">
                  <div class="box-header with-border">
                  <h3 class="box-title">Form Data User</h3>
                  </div>
                    <div class="box-body">

            <form action="<?= base_url('admin/C_user/proses_tambah_data_user') ?>" method="POST" class="form-horizontal">
                        <div class="box-body">
                       <div class="box box-primary">

                         <label>*Form Input</label>
                          <div class="box-body">
                            <div class="row">
                              <div class="col-xs-3">
                              <input name="user_name" type="text" class="form-control" placeholder="Masukkan username" required>
                              </div>
                              <div class="col-xs-3">
                              <input name="password" type="text" class="form-control" placeholder="Masukkan password" required>
                              </div>
                            </div>
                          </div>
                          <div class="box-body">
                            <div class="row">
                              <div class="col-xs-3">
                              <select  name="level" type="text" class="form-control" required>
                              <option value="0">---Pilih Level---</option>
                              <option value="Admin">Admin</option>
                              <option value="Pengawas">Pengawas</option>
                              </select>
                              </div>
                            </div>
                          </div>
                        <div class="box-header">
                          <button type="submit" class="btn btn-info pull-left fa fa-plus-circle">Tambah</button>
                          <button type="reset" class="btn btn-warning pull-left ">Reset</button>          
                        </div>
                        </div>
                    </form><br><br>
                      <table id="example1" class="table table-bordered table-striped text-center">              
                       <thead>
                          <tr>
                            <th style="width:5%;" >NO</th>
                            <th style="width:15%;" >USERNAME</th>
                            <th style="width:15%;" >PASSWORD</th>
                            <th style="width:15%;" >LEVEL</th>
                            <th style="width:15%;" >ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                          $no = 1;
                          foreach ($daftar_user as $tampil) {
                        ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $tampil->USER_NAME; ?></td>
                          <td><?php echo $tampil->PASSWORD; ?></td>
                          <td><?php echo $tampil->LEVEL; ?></td>
                          <td align="center">
                              <a href="<?php echo base_url(); ?>admin/C_user/edit_data_user/<?php echo $tampil->USER_NAME?>"><submit class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></submit></a>
                              <a href="<?php echo base_url(); ?>admin/C_user/hapus_data_user/<?php echo $tampil->USER_NAME ?>" onclick="return confirm('anda yakin akan menghapus user atas nama <?php echo $tampil->USER_NAME ?>')"><submit class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></submit></a>
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