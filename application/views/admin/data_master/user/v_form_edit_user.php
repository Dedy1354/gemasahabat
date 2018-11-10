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
        <li class="active">Edit User</li>
    </ol>
</section>

      <section class="content">
          <div class="box">
            <div class="box-header with-border">
                  <h3 class="box-title">Form Edit Data User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <form action="<?= base_url('admin/C_user/proses_edit_data_user')?>" method="POST" class="form-horizontal">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">USER NAME</label>

                  <div class="col-sm-5">
                    <input name="user_name" value="<?= $user->USER_NAME ?>" type="text" class="form-control" required >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">PASSWORD</label>

                  <div class="col-sm-5">
                    <input name="password" value="<?= $user->PASSWORD ?>" type="text" class="form-control"  required>
                  </div>
                </div>

                <div class="form-group">
                      <label class="col-sm-2 control-label">LEVEL</label>

                      <div class="col-sm-5">
                       <select name="level" type="text" class="form-control" required>
                        <option value="<?= $user->LEVEL ?>"><?= $user->LEVEL ?></option>
                        <option value="Admin">Admin</option>
                        <option value="Pengawas">Pengawas</option>
                       </select>
                      </div>
                  </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-header">
                <a href="<?php echo base_url(); ?>index.php/admin/C_user"><submit class="btn btn-default pull-center">Kembali</submit></a>
                <button type="submit" class="btn btn-info pull-left">Simpan</button>
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