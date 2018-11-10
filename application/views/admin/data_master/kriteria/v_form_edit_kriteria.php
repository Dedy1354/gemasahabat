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
        KRITERIA
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Kriteria</li>
    </ol>
</section>
      <section class="content">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Edit Kriteria</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?= base_url('admin/C_kriteria/proses_edit_data_kriteria') ?>" method="POST" class="form-horizontal">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label">ID Kriteria</label>

                  <div class="col-sm-5">
                    <input  name="id_kriteria" value="<?= $kriteria->ID_KRITERIA ?>" type="text" readonly class="form-control" placeholder="Masukkan ID Kriteria">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Kriteria</label>

                  <div class="col-sm-5">
                    <input name="nama_kriteria" value="<?= $kriteria->NAMA_KRITERIA ?>" type="text" class="form-control" placeholder="Masukkan Nama Kriteria" required>
                  </div>
                </div>

              <div class="form-group">
                  <label class="col-sm-2 control-label">Rank Kriteria</label>

                  <div class="col-sm-5">
                    <select name="rank_kriteria" type="text" class="form-control" required><option value='<?= $kriteria->RANK_KRITERIA ?>'><?= $kriteria->RANK_KRITERIA ?></option>
                      <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option>
                      <option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option>
                      <option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option>
                      <option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option>
                      <option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option> 
                      <option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option>
                      <option value='31'>31</option><option value='32'>32 </option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option> 
                      <option value='36'>36</option><option value='37'>37 </option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option> 
                    </select>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 control-label">Bobot Kriteria</label>

                  <div class="col-sm-5">
                    <input name="bobot_kriteria" readonly value="<?= $kriteria->BOBOT_KRITERIA ?>" type="text" class="form-control" placeholder="Masukkan Bobot Kriteria" required>
                  </div>
              </div>             

              <div class="box-header">
                <a href="<?php echo base_url(); ?>admin/C_kriteria"><submit class="btn btn-default pull-center">Kembali</submit></a>
                <button type="submit" class="btn btn-info pull-left">Simpan</button>
              </div>
              
          </form>
          </div>
    </section>

<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->
<!-- jQuery UI 1.11.2 -->

<?php
$this->load->view('template/foot');
?>