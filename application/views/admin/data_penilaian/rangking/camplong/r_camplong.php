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
        RANGKING
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Rangking</li>
    </ol>
</section>

      <section class="content">
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Form Hasil Rangking Camplong</h3>
                  </div>
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped text-center">
                    <div>
                      <a href="<?php echo base_url(); ?>admin/C_rangking/export_excel_rangking_camplong"><i class="fa fa-file-excel-o"></i>Excel</a>
                      <a href="<?php echo base_url(); ?>admin/C_rangking/export_pdf_rangking_camplong"><i class="fa fa-file-pdf-o"></i>pdf</a>
                    </div>
                     <thead>
                        <tr>
                          <th style="width:5%;">No.</th>
                          <th style="width:15%;">Id Keluarga</th>
                          <th style="width:15%;">Kepala keluarga</th>
                           <th style="width:15%;">Record</th>
                          <th style="width:15%;">Total Nilai</th>
                          <th style="width:20%;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        $no = 1;
                        foreach ($camplong as $tampil) {
                      ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $tampil->ID_KELUARGA; ?></td>
                        <td><?php echo $tampil->KEPALA_KELUARGA; ?></td>
                         <td><?php echo $tampil->RECORD; ?></td>
                        <td><?php echo $tampil->TOTAL; ?></td>
                        <td align="center">
                             <a href="<?php echo base_url(); ?>admin/C_rangking/detail_camplong/<?php echo $tampil->ID_KELUARGA ?>"><submit class="btn btn-info btn-sm"> <i class="fa fa-eye"></i>Detail</submit></a>
                        </td>
                      </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                      <div class="box-header">
                      <a href="<?php echo base_url(); ?>admin/C_rangking/data_camplong"><submit class="btn btn-default pull-center">Kembali</submit></a>
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