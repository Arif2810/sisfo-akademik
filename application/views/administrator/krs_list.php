<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Kartu Rencana Studi (KRS)
  </div>

  <center class="mb-3">
    <legend class="mt-3"><strong>KARTU RENCANA STUDI</strong></legend>

    <table>
      <tr>
        <td><strong>NIM</strong></td>
        <td>&nbsp;: <?= $nim; ?></td>
      </tr>
      <tr>
        <td><strong>Nama Lengkap</strong></td>
        <td>&nbsp;: <?= $nama_lengkap; ?></td>
      </tr>
      <tr>
        <td><strong>Program Studi</strong></td>
        <td>&nbsp;: <?= $prodi; ?></td>
      </tr>
      <tr>
        <td><strong>Tahun Akademik (Semester)</strong></td>
        <td>&nbsp;: <?= $tahun_akademik . '&nbsp;(' . $semester . ')'; ?></td>
      </tr>
    </table>
  </center>

  <?= anchor('administrator/krs/tambah_krs/'.$nim.'/'.$id_thn_akad, '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Data KRS</button>') ?>
  <?= anchor('administrator/krs/print', '<button class="btn btn-info btn-sm mb-2"><i class="fas fa-print fa-sm"></i> print</button>') ?>

  <table class="table table-bordered table-hover table-stroped">
    <tr>
      <th>NO</th>
      <th>KODE MATA KULIAH</th>
      <th>NAMA MATA KULIAH</th>
      <th>SKS</th>
      <th colspan="2">AKSI</th>
    </tr>

    <?php
    $no = 1;
    $jumlahSks = 0;
    foreach($krs_data as $krs): ?>
    <tr>
      <td width="20px"><?= $no++; ?></td>
      <td><?= $krs->kode_matakuliah; ?></td>
      <td><?= $krs->nama_matakuliah; ?></td>
      <td>
        <?= $krs->sks; ?>
        <?php $jumlahSks += $krs->sks; ?>
      </td>
      <td width="20px"><?= anchor('administrator/krs/update/'.$krs->id_krs, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/krs/delete/'.$krs->id_krs, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
    <tr>
      <td colspan="3" align="right"><strong>Jumlah SKS</strong></td>
      <td colspan="3"><strong><?= $jumlahSks; ?></strong></td>
    </tr>
  </table>
</div>