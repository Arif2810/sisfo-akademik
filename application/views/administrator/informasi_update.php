<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Update Informasi
  </div>

  <?php foreach($informasi as $info): ?>

  <form action="<?= base_url('administrator/informasi/update_informasi_aksi') ?>" method="post">
  <div class="row">
    <div class="col-md-6">

      <div class="form-group">
        <label for="">Icon</label>
        <input type="hidden" name="id_informasi" value="<?= $info->id_informasi; ?>">
        <input type="text" name="icon" class="form-control" value="<?= $info->icon; ?>">
        <?= form_error('icon', '<div class="text-danger small">', '</div>'); ?>
      </div>
      <div class="form-group">
        <label for="">Judul Informasi</label>
        <input type="text" name="judul_informasi" class="form-control" value="<?= $info->judul_informasi; ?>">
        <?= form_error('judul_informasi', '<div class="text-danger small">', '</div>'); ?>
      </div>
      <div class="form-group">
        <label for="">Isi Informasi</label>
        <input type="text" name="isi_informasi" class="form-control" value="<?= $info->isi_informasi; ?>">
        <?= form_error('isi_informasi', '<div class="text-danger small">', '</div>'); ?>
      </div>

      <button type="submit" class="btn btn-primary mb-5">Simpan</button>

    </div>
  </div>

  </form>


  <?php endforeach; ?>
</div>