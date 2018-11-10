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
        PENILAIAN
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>admin/C_home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Penilaian</li>
    </ol>
</section>

        <section class="content">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                    <h3 class="box-title">Form Data Penilaian</h3>
                    </div>
                    <div class="box-body">

                      <table id="example1" class="table table-bordered table-striped text-center">
                       <thead>
                          <tr>
                            <th style="width:3%;">No.</th>
                            <th style="width:5%;">ID KELUARGA</th>
                            <th style="width:10%;">NAMA KELUARGA</th>
                            <th style="width:10%;">KRITERIA</th>
                            <th style="width:10%;">SUBKRITERIA</th>
                            <th style="width:3%;">HASIL NILAI </th>
                            <th style="width:20%;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                          $no = 1;
                          foreach ($penilaian as $tampil) {
                        ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $tampil->ID_KELUARGA; ?></td>
                          <td><?php echo $tampil->KEPALA_KELUARGA; ?></td>
                          <td><?php echo $tampil->ID_KRITERIA; ?></td>
                          <td><?php echo $tampil->ID_SUBKRITERIA; ?></td>
                          <td><?php echo $tampil->JUMLAH; ?></td>
                          <td align="center">
                               <a href="<?php echo base_url(); ?>admin/C_penilaian/detail_data_penilaian/<?php echo $tampil->ID_PENILAIAN ?>"><submit class="btn btn-info btn-sm"> <i class="fa fa-eye"></i></submit></a>
                          </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
        </section>

<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script type="text/javascript">

  $(document).ready(function(){
      $('#keluarga').change(function(){
        var id = $(this).val();
        $.get("<?php echo base_url()?>admin/C_penilaian/nama_kepalakeluarga/"+id, function(data)
        {
          $('#nama_kepalakeluarga').val(data);
        });
         $.get("<?php echo base_url()?>admin/C_penilaian/nama_kecamatan/"+id, function(data)
        {
          $('#nama_kecamatan').val(data);
        });
         $.get("<?php echo base_url()?>admin/C_penilaian/nama_desa/"+id, function(data)
        {
          $('#nama_desa').val(data);
        });
         $.get("<?php echo base_url()?>admin/C_penilaian/nama_alamat/"+id, function(data)
        {
          $('#nama_alamat').val(data);
        });
      });
     

      $('#nama_kriteria').change(function(){
          var id = $(this).val();       
        $.get("<?php echo base_url()?>index.php/admin/C_penilaian/nilai_bobot_kriteria/"+id, function(data)
        {
          $('#bobot_kriteria').val(data);
        });
        
        $("#subkriteria").load("<?php echo base_url()?>index.php/admin/C_penilaian/pilih_subkriteria/"+id);

      });


      $('#subkriteria').change(function(){
        var id = $(this).val();
        $.get("<?php echo base_url()?>index.php/admin/C_penilaian/nilai_bobot_subkriteria/"+id, function(data)
        {
          $('#bobot_subkriteria').val(data);
        });
      });

  });
  </script>

<?php
$this->load->view('template/foot');
?>