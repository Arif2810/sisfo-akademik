<div class="container-fluid">

  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Informasi
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <?= anchor('administrator/informasi/tambah_informasi', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Informasi</button>') ?>

  <table class="table table-striped table-hover table-borderd">
    <tr>
      <th>NO</th>
      <th>ICON</th>
      <th>JUDUL INFORMASI</th>
      <th>ISI INFORMASI</th>
      <th colspan="2">AKSI</th>
    </tr>

    <?php 
    $no = 1;
    foreach($informasi as $info): ?>
    <tr>
      <td width="20px;"><?= $no++; ?></td>
      <td><?= $info->icon; ?></td>
      <td><?= $info->judul_informasi; ?></td>
      <td><?= $info->isi_informasi; ?></td>
      <td width="20px"><?= anchor('administrator/informasi/update/'.$info->id_informasi, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/informasi/delete/'.$info->id_informasi, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>