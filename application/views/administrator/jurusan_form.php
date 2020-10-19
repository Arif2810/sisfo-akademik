<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Input Jurusan
  </div>
  <form action="<?= base_url('administrator/jurusan/input_aksi') ?>" method="post">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Kode Jurusan</label>
          <input type="text" name="kode_jurusan" placeholder="Masukkan kode jurusan" class="form-control">
          <?= form_error('kode_jurusan', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Nama Jurusan</label>
          <input type="text" name="nama_jurusan" placeholder="Masukkan nama jurusan" class="form-control">
          <?= form_error('nama_jurusan', '<div class="text-danger small">', '</div>'); ?>
        </div>
    
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>
</div>