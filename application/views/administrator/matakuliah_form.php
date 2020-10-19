<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Input Mata Kuliah
  </div>
  <form action="<?= base_url('administrator/matakuliah/tambah_matakuliah_aksi') ?>" method="post">
    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="">Kode Mata Kuliah</label>
            <input type="text" name="kode_matakuliah" class="form-control">
            <?= form_error('kode_matakuliah', '<div class="text-danger small">', '</div>'); ?>
          </div>
          <div class="form-group">
            <label for="">Nama Mata Kuliah</label>
            <input type="text" name="nama_matakuliah" class="form-control">
            <?= form_error('nama_matakuliah', '<div class="text-danger small">', '</div>'); ?>
          </div>
          <div class="form-group">
            <label for="">SKS</label>
            <select name="sks" id="" class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
            </select>
            <?= form_error('sks', '<div class="text-danger small">', '</div>'); ?>
          </div>
          <div class="form-group">
            <label for="">Semester</label>
            <select name="semester" id="" class="form-control">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
            </select>
            <?= form_error('semester', '<div class="text-danger small">', '</div>'); ?>
          </div>
          <div class="form-group">
            <label for="">Program Studi</label>
            <select name="nama_prodi" id="" class="form-control">
              <option value="">--Pilih Program Studi--</option>
              <?php foreach($prodi as $prd): ?>
                <option value="<?= $prd->nama_prodi; ?>"><?= $prd->nama_prodi; ?></option>
              <?php endforeach; ?>
            </select>
            <?= form_error('nama_prodi', '<div class="text-danger small">', '</div>'); ?>
          </div>
      
          <button type="submit" class="btn btn-primary mb-4">Simpan</button>
        </div>
    </div>
  </form>
</div>