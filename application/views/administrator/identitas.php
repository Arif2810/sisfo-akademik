<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> IDENTITAS WEBSITE
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <table class="table table-borderd table-hover table-striped">
    <tr>
      <th>NO</th>
      <th>JUDUL WEBSITE</th>
      <th>ALAMAT</th>
      <th>EMAIL</th>
      <th>NO. TELEPON</th>
      <th>AKSI</th>
    </tr>

    <?php
    $no = 1;

    foreach($identitas as $id): ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= $id->judul_website; ?></td>
      <td><?= $id->alamat; ?></td>
      <td><?= $id->email; ?></td>
      <td><?= $id->telp; ?></td>
      <td width="20px"><?= anchor('administrator/identitas/update/'.$id->id_identitas, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>