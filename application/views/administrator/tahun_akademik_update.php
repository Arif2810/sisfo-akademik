<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-edit"></i> Form Update Tahun Akademik
  </div>

  <?php foreach($tahun_akademik as $tak): ?>
  <form action="<?= base_url('administrator/tahun_akademik/update_aksi') ?>" method="post">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Tahun Akademik</label>
          <input type="hidden" name="id_thn_akad" value="<?= $tak->id_thn_akad; ?>" class="form-control">
          <input type="text" name="tahun_akademik" placeholder="Masukkan tahun akademik" class="form-control" value="<?= $tak->tahun_akademik; ?>">
          <?= form_error('tahun_akademik', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Semester</label>
          <select name="semester" id="" class="form-control" value="<?= $tak->semester; ?>">
            <option><?= $tak->semester; ?></option>
            <option>Ganjil</option>
            <option>Genap</option>
          </select>
          <?= form_error('semester', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Status</label>
          <select name="status" id="" class="form-control" value="<?= $tak->status; ?>">
            <option><?= $tak->status; ?></option>
            <option>Aktif</option>
            <option>Tidak Aktif</option>
          </select>
          <?= form_error('status', '<div class="text-danger small">', '</div>'); ?>
        </div>
    
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>

  <?php endforeach; ?>
</div>