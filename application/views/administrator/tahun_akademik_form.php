<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Input Tahun Akademik
  </div>
  <form action="<?= base_url('administrator/tahun_akademik/tambah_tahun_akademik_aksi') ?>" method="post">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Tahun Akademik</label>
          <input type="text" name="tahun_akademik" placeholder="Masukkan tahun akademik" class="form-control">
          <?= form_error('tahun_akademik', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Semester</label>
          <select name="semester" id="" class="form-control">
            <option value="">--Pilih Semester--</option>
            <option>Ganjil</option>
            <option>Genap</option>
          </select>
          <?= form_error('semester', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Status</label>
          <select name="status" id="" class="form-control">
            <option value="">--Pilih Status--</option>
            <option>Aktif</option>
            <option>Tidak Aktif</option>
          </select>
          <?= form_error('status', '<div class="text-danger small">', '</div>'); ?>
        </div>
    
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>
</div>