<div class="container-fluid">

  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Pesan dari User
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <table class="table table-striped table-hover table-borderd">
    <tr>
      <th>NO</th>
      <th>NAMA</th>
      <th>EMAIL</th>
      <th>PESAN</th>
      <th colspan="2">AKSI</th>
    </tr>

    <?php 
    $no = 1;
    foreach($hubungi as $hub): ?>
    <tr>
      <td width="20px;"><?= $no++; ?></td>
      <td><?= $hub->nama; ?></td>
      <td><?= $hub->email; ?></td>
      <td><?= $hub->pesan; ?></td>
      <td width="20px"><?= anchor('administrator/hubungi_kami/kirim_email/'.$hub->id_hubungi, '<div class="btn btn-sm btn-primary"><i class="fas fa-comment-dots"></i></div>') ?></td>
      <td width="20px"><?= anchor('administrator/hubungi_kami/delete/'.$hub->id_hubungi, '<div onclick="return confirm(\'Yakin akan menghapus?\')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>