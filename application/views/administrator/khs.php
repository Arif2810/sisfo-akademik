<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Kartu Hasil Studi (KHS)
  </div>

  <center class="mb-3">
    <legend class="mt-3"><strong>KARTU HASIL STUDI</strong></legend>

    <table>
      <tr>
        <td><strong>NIM</strong></td>
        <td>&nbsp;: <?= $mhs_nim; ?></td>
      </tr>
      <tr>
        <td><strong>Nama Lengkap</strong></td>
        <td>&nbsp;: <?= $mhs_nama; ?></td>
      </tr>
      <tr>
        <td><strong>Program Studi</strong></td>
        <td>&nbsp;: <?= $mhs_prodi; ?></td>
      </tr>
      <tr>
        <td><strong>Tahun Akademik (Semester)</strong></td>
        <td>&nbsp;: <?= $thn_akad; ?></td>
      </tr>
    </table>
  </center>

  <?= anchor('administrator/nilai/print', '<button class="btn btn-info btn-sm mb-2"><i class="fas fa-print fa-sm"></i> print</button>') ?>

  <table class="table table-bordered table-hover table-stroped">
    <tr>
      <th>NO</th>
      <th>KODE MATA KULIAH</th>
      <th>NAMA MATA KULIAH</th>
      <th>SKS</th>
      <th>NILAI</th>
      <th>SKOR</th>
    </tr>

    <?php
    $no = 1;
    $jumlahSks = 0;
    $jumlahNilai = 0;
    foreach($mhs_data as $row): ?>
    <tr>
      <td width="20px"><?= $no++; ?></td>
      <td><?= $row->kode_matakuliah; ?></td>
      <td><?= $row->nama_matakuliah; ?></td>
      <td><?= $row->sks; ?></td>
      <td><?= $row->nilai; ?></td>
      <td><?= skorNilai($row->nilai, $row->sks); ?></td>
      <?php
      $jumlahSks += $row->sks;
      $jumlahNilai += skorNilai($row->nilai, $row->sks);
      ?>
    </tr>
    <?php endforeach; ?>
    <tr>
      <td colspan="3">Jumlah</td>
      <td><?= $jumlahSks; ?></td>
      <td><?= $jumlahNilai; ?></td>
    </tr>

  </table>

  Index Prestasi : <?= number_format($jumlahNilai / $jumlahSks); ?>
</div>