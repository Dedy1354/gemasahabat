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
        Penilaian    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Penilaian </li>
    </ol>
</section>

<section class="content">
          
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
                      <td><a href="<?php echo base_url(); ?>admin/C_penilaian/nilai/<?php echo $tampil->ID_KELUARGA ?>">
                        <?php echo $tampil->ID_KELUARGA; ?></a></td>
                      <td><?php echo $tampil->NAMA_KEPALAKELUARGA; ?></td>
                      <td><?php echo $tampil->JUMLAH_ANGGOTAKELUARGA; ?></td>
                      <td><?php echo $tampil->JUMLAH_KELUARGA; ?></td>
                      <td align="center">
                          <a href="<?php echo base_url(); ?>admin/C_penilaian/nilai/<?php echo $tampil->ID_KELUARGA ?>"><submit class="btn btn-info btn-sm"> <i class="fa fa-eye"></i>Penilian</submit></a>
                      </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                  </table>
  
</section>

<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->

<?php
$this->load->view('template/foot');
?>