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
        <li class="active">Kriteria</li>
    </ol>
</section>

      <section class="content">
                <div class="box box-primary">
                  <div class="box-header with-border">
                  <h3 class="box-title">Form Data Kriteria</h3>
                  </div>
                  <div class="box-body">
                              
                                <form action="<?= base_url('admin/C_kriteria/proses_tambah_data_kriteria') ?>" method="POST" class="form-horizontal">
                                    <div class="box-body">
                                    <div class="box box-primary">
                                    <label>*Form Input</label>
                                     <div class="box-body">
                                        <div class="row">
                                          <div class="col-xs-2">
                                          <input name="id_kriteria" type="text" readonly value="<?=$kodeunik?>" class="form-control" placeholder="Masukkan ID Kriteria">
                                          </div>
                                        </div>
                                      </div>

                                      <div class="box-body">
                                        <div class="row">
                                          <div class="col-xs-4">
                                          <input name="nama_kriteria" type="text" class="form-control" placeholder="Masukkan Nama Kriteria" required>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="box-body">
                                        <div class="row">
                                          <div class="col-xs-4">
                                          <select name="rank_kriteria" type="text" class="form-control" required>
                                            <option value='0'>pilih panjang rank</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option>
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
                                      </div>

                                    <div class="box-header">
                                      <button type="submit" class="btn btn-info pull-left fa fa-plus-circle">Tambah</button>
                                      <button type="reset" class="btn btn-warning pull-left ">Reset</button>
                                      <a href="<?php echo base_url(); ?>admin/C_kriteria/hitung_bobot"<submit class="btn btn-default pull-right"><i class="fa fa-pie-chart"></i>update nilai bobot</submit></a>
                                    </div>
                                  </div>
                                </form>


                    <table id="example1" class="table table-bordered table-striped text-center">
                     <thead>
                        <tr>
                          <th style="width:5%;" >NO</th>
                          <th style="width:5%;" >ID KRITERIA</th>
                          <th style="width:15%;" >NAMA KRITERIA</th>
                           <th style="width:5%;" >RANK KRITERIA</th>
                          <th style="width:10%;" >BOBOT KRITERIA</th>
                          <th style="width:15%;" >ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        $no = 1;
                        foreach ($daftar_kriteria as $tampil) {
                      ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $tampil->ID_KRITERIA; ?></td>
                        <td><?php echo $tampil->NAMA_KRITERIA; ?></td>
                        <td><?php echo $tampil->RANK_KRITERIA; ?></td>
                        <td><?php echo $tampil->BOBOT_KRITERIA; ?></td>
                        <td align="center">
                             <a href="<?php echo base_url(); ?>admin/C_kriteria/detail_data_kriteria/<?php echo $tampil->ID_KRITERIA ?>"><submit class="btn btn-info btn-sm"> <i class="fa fa-eye"></i></submit></a>
                            <a href="<?php echo base_url(); ?>admin/C_kriteria/edit_data_kriteria/<?php echo $tampil->ID_KRITERIA ?>"><submit class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></submit></a>
                            <a href="<?php echo base_url(); ?>admin/C_kriteria/hapus_data_kriteria/<?php echo $tampil->ID_KRITERIA ?>" onclick="return confirm('anda yakin akan menghapus data <?php echo $tampil->ID_KRITERIA ?> atas nama indikator <?php echo $tampil->NAMA_KRITERIA ?>')"><submit class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></submit></a>
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