<html>
<style type="text/css">
.zebra-table {
      width: 100%;
      border-collapse: collapse;
      box-shadow: 0 2px 3px 1px #ddd;
      overflow: hidden;
      border:10px solid #fff;
    }
.zebra-table th,.zebra-table td{
      vertical-align: top;
      padding:10px 7px;
      text-align: left;
      margin:0;
    }
.zebra-table tbody tr:nth-child(odd) { /* Make table like zebra */
      background:#eee;
    }
#ketengah {
      text-align: center;
    }
</style>
    <head>
        <title>Rekap Data Hasil Perangkingan Keluarga Miskin Kab.Sampang</title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <div>
                        <img src="assets/AdminLTE-2.0.5/dist/img/sampang.png" width="100" height="100"/>
                    </div>
                </td>
                <td width="430">
                    <div align="center">
                        <span>PEMERINTAH KABUPATEN SAMPANG</span><br/><br>
                        <span><b>DINAS PEMBERDAYAAN MASAYARAKAT DAN DESA</b></span><br/><br>
                        <span>Jl.Jaksa Agung Suprapto No.51 Kode Pos 69251</span><br/>
                    </div>
                </td>
                <hr>
            </tr>
        </table>

        <div><h4><center>Rekap Nilai Data Hasil Perangkingan Keluarga Miskin kec.Jrengik</center></h4></div>

        <table class="zebra-table">
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
            foreach ($jrengik as $tampil) {
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
        </table>
    </html>