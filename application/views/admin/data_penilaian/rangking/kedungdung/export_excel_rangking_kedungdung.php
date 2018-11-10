<?php 
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=Rangking_kedungdung.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
?>

	<style type="text/css">
    .tengah {
		text-align: center;
	}
	.th {
		font: bold;
	}
	td{
		mso-number-format:"\@";
	}
	</style>

	<center><h2>HASIL RANGKING KELUARGA MISKIN KECAMATAN KEDUNGDUNG</h2></center>

	<table border='1'>
	<h3>
		    <thead>
            <tr>
              <th style="width:5%;">No.</th>
              <th style="width:15%;">Id Keluarga</th>
              <th style="width:15%;">Kepala keluarga</th>
              <th style="width:15%;">Record</th>
              <th style="width:15%;">Total Nilai</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            foreach ($kedungdung as $tampil) {
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $tampil->ID_KELUARGA; ?></td>
              <td><?php echo $tampil->KEPALA_KELUARGA; ?></td>
              <td><?php echo $tampil->RECORD; ?></td>
              <td><?php echo $tampil->TOTAL; ?></td>
            </tr>
          <?php } ?>
        </tbody>
	</h3>
	</table>