<div class="container-fluid">

  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Tahun Akademik
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <?= anchor('administrator/tahun_akademik/tambah_tahun_akademik', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Tahun Akademik</button>') ?>

  <table class="table table-hover table-bordered table-striped">
    <tr>
      <th>NO</th>
      <th>TAHUN AKADEMIK</th>
      <th>SEMESTER</th>
      <th>STATUS</th>
      <th colspan="2">AKSI</th>
    </tr>

    <?php
    $no = 1;
    foreach($tahun_akademik as $tak): ?>
    <tr>
      <td width="20px;"><?= $no++; ?></td>
      <td><?= $tak->tahun_akademik; ?></td>
      <td><?= $tak->semester; ?></td>
      <td><?= $tak->status; ?></td>
      <td width="20px"><?= anchor('administrator/tahun_akademik/update/'.$tak->id_thn_akad, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/tahun_akademik/delete/'.$tak->id_thn_akad, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>