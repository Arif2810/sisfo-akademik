<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Input Program Studi
  </div>
  <form action="<?= base_url('administrator/prodi/tambah_prodi_aksi') ?>" method="post">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Kode Prodi</label>
          <input type="text" name="kode_prodi" placeholder="Masukkan kode prodi" class="form-control">
          <?= form_error('kode_prodi', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Nama Prodi</label>
          <input type="text" name="nama_prodi" placeholder="Masukkan nama prodi" class="form-control">
          <?= form_error('nama_prodi', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Nama jurusan</label>
          <select name="nama_jurusan" id="" class="form-control">
            <option value="">--Pilih Jurusan--</option>
            <?php foreach($jurusan as $jrs): ?>
            <option value="<?= $jrs->nama_jurusan ?>"><?= $jrs->nama_jurusan; ?></option>
            <?php endforeach; ?>
          </select>
          <?= form_error('nama_jurusan', '<div class="text-danger small">', '</div>'); ?>
        </div>
    
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>
</div>