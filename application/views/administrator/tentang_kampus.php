<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> TENTANG KAMPUS
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <table class="table table-borderd table-hover table-striped">
    <tr>
      <th>NO</th>
      <th>SEJARAH</th>
      <th>VISI</th>
      <th>MISI</th>
      <th>AKSI</th>
    </tr>

    <?php
    $no = 1;

    foreach($tentang as $ttg): ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= $ttg->sejarah; ?></td>
      <td><?= $ttg->visi; ?></td>
      <td><?= $ttg->misi; ?></td>
      <td width="20px"><?= anchor('administrator/tentang_kampus/update/'.$ttg->id, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>
