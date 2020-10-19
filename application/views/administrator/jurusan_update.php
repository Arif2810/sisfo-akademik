<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Update Jurusan
  </div>

  <?php foreach($jurusan as $jrs): ?>
  <form action="<?= base_url('administrator/jurusan/update_aksi') ?>" method="post">

    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="">Kode Jurusan</label>
          <input type="hidden" name="id_jurusan" value="<?= $jrs->id_jurusan; ?>">
          <input type="text" name="kode_jurusan" class="form-control" value="<?= $jrs->kode_jurusan; ?>">
        </div>
        <div class="form-group">
          <label for="">Nama Jurusan</label>
          <input type="text" name="nama_jurusan" class="form-control" value="<?= $jrs->nama_jurusan; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>

      </div>
    </div>

  </form>
  <?php endforeach; ?>
</div>