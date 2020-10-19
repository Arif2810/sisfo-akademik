<div class="container-fluid">
  <center>
    <legend><strong>TRANSKRIP NILAI</strong></legend>

    <table>
      <tr>
        <td>NIM</td>
        <td>: <?= $nim; ?></td>
      </tr>
      <tr>
        <td>NAMA</td>
        <td>: <?= $nama; ?></td>
      </tr>
      <tr>
        <td>Program Studi</td>
        <td>: <?= $prodi; ?></td>
      </tr>
    </table>
  </center>

  <table class="table table-bordered table-striped table-hover mt-3">
    <tr>
      <th>NO</th>
      <th>KODE MATA KULIAH</th>
      <th>NAMA MATA KULIAH</th>
      <th align="center">SKS</th>
      <th align="center">NILAI</th>
      <th align="center">SKOR</th>
    </tr>

    <?php
    $no = 1;
    $jSks = 0;
    $jSkor = 0;

    foreach($transkrip as $tr): ?>

    <tr>
      <td><?= $no++; ?></td>
      <td><?= $tr->kode_matakuliah; ?></td>
      <td><?= $tr->nama_matakuliah; ?></td>
      <td align="center"><?= $tr->sks; ?></td>
      <td align="center"><?= $tr->nilai; ?></td>
      <td align="center"><?= skorNilai($tr->nilai, $tr->sks); ?></td>

      <?php
      $jSks += $tr->sks;
      $jSkor += skorNilai($tr->nilai, $tr->sks)
      ?>
    </tr>

    <?php endforeach; ?>

    <tr>
      <td colspan="3">Jumlah</td>
      <td align="center"><?= $jSks; ?></td>
      <td></td>
      <td align="center"><?= $jSkor; ?></td>
    </tr>

  </table>
  
  <p>Index Prestasi Kulmulatif : <?= number_format($jSkor/$jSks); ?></p>

</div>