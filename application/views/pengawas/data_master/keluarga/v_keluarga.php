<?php
$this->load->view('template_pengawas/head');
?>


<?php
$this->load->view('template_pengawas/topbar');
$this->load->view('template_pengawas/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Keluarga
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Keluarga</li>
    </ol>
</section>

    <section class="content">
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Data Keluarga</h3>
            </div>
                <div class="box-body">


                  <table id="example1" class="table table-bordered table-striped text-center">
                   <thead>
                      <tr>
                        <th style="width:3%;">NO</th>
                        <th style="width:5%;">ID KELUARGA</th>
                        <th style="width:15%;">NAMA KEPALA KELUARGA</th>
                        <th style="width:10%;">JUMLAH ANGGOTA KELUARGA</th>
                        <th style="width:10%;">JUMLAH KELUARGA</th>
                        <th style="width:10%;">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      $no = 1;
                      foreach ($daftar_keluarga as $tampil) {
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $tampil->ID_KELUARGA; ?></td>
                      <td><?php echo $tampil->NAMA_KEPALAKELUARGA; ?></td>
                      <td><?php echo $tampil->JUMLAH_ANGGOTAKELUARGA; ?></td>
                      <td><?php echo $tampil->JUMLAH_KELUARGA; ?></td>
                      <td align="center">
                          <a href="<?php echo base_url(); ?>pengawas/C_keluarga/detail_data_keluarga/<?php echo $tampil->ID_KELUARGA ?>"><submit class="btn btn-info btn-sm"> <i class="fa fa-eye"></i></submit></a>
                      </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
    </section>

<?php
$this->load->view('template_pengawas/js');
?>

<script type="text/javascript">
  $(document).ready(function(){

    $('#kecamatan').change(function(){
      var id = $(this).val();
        $('#desa').load("<?php echo base_url()?>/admin/C_keluarga/pilih_desa/"+id);
    });
    
    $('#desa').change(function(){
      var id = $(this).val();
        $('#alamat').load("<?php echo base_url()?>/admin/C_keluarga/pilih_alamat/"+id);
    });

  });

</script>

<!--tambahkan custom js disini-->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

<?php
$this->load->view('template_pengawas/foot');
?>