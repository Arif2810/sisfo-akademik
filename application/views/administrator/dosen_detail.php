<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-eye"></i> Detail Dosen
  </div>

  <table class="table table-bordered table-hover table-striped">

    <?php foreach($detail as $dt): ?>
      <img class="mb-2" src="<?= base_url('assets/uploads/').$dt->photo; ?>" alt="" style="width:20%;">
      <tr>
        <th>NIDN</th>
        <td><?= $dt->nidn; ?></td>
      </tr>
      <tr>
        <th>NAMA DOSEN</th>
        <td><?= $dt->nama_dosen; ?></td>
      </tr>
      <tr>
        <th>ALAMAT</th>
        <td><?= $dt->alamat; ?></td>
      </tr>
      <tr>
        <th>JENIS KELAMIN</th>
        <td><?= $dt->jenis_kelamin; ?></td>
      </tr>
      <tr>
        <th>EMAIL</th>
        <td><?= $dt->email; ?></td>
      </tr>
      <tr>
        <th>NO TELEPON</th>
        <td><?= $dt->telp; ?></td>
      </tr>

    <?php endforeach; ?>
  </table>

  <?= anchor('administrator/dosen', '<div class="btn btn-primary btn-sm mb-5">Kembali</div>') ?>
  
</div>