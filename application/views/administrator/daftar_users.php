<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Daftar Users
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <?= anchor('administrator/users/tambah_users', '<button class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus fa-sm"></i> Tambah Users</button>') ?>

  <table class="table table-borderd table-hover table-striped">
    <tr>
      <th>NO</th>
      <th>USERNAME</th>
      <th>EMAIL</th>
      <th>LEVEL</th>
      <th>BLOKIR</th>
      <th colspan="2">AKSI</th>
    </tr>

    <?php
    $no = 1;

    foreach($users as $user): ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= $user->username; ?></td>
      <td><?= $user->email; ?></td>
      <td><?= $user->level; ?></td>
      <td><?= $user->blokir; ?></td>
      <td width="20px"><?= anchor('administrator/users/update/'.$user->id, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/users/hapus/'.$user->id, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>