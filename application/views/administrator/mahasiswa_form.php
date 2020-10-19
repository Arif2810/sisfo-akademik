<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Input Mahasiswa
  </div>

  <?= form_open_multipart('administrator/mahasiswa/tambah_mahasiswa_aksi'); ?>

    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="">NIM Mahasiswa</label>
          <input type="text" name="nim" class="form-control">
          <?= form_error('nim', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Nama Mahasiswa</label>
          <input type="text" name="nama_lengkap" class="form-control">
          <?= form_error('nama_lengkap', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Alamat</label>
          <input type="text" name="alamat" class="form-control">
          <?= form_error('alamat', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" name="email" class="form-control">
          <?= form_error('email', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Telepon</label>
          <input type="text" name="telepon" class="form-control">
          <?= form_error('telepon', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Tempat Lahir</label>
          <input type="text" name="tempat_lahir" class="form-control">
          <?= form_error('tempat_lahir', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" class="form-control">
          <?= form_error('tanggal_lahir', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Jenis Kelamin</label>
          <select name="jenis_kelamin" id="" class="form-control">
            <option value="">--Pilih jenis kelamin--</option>
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select>
          <?= form_error('jenis_kelamin', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Program Studi</label>
          <select name="nama_prodi" id="" class="form-control">
            <option value="">--Pilih program studi--</option>
            <?php foreach($prodi as $prd): ?>
              <option value="<?= $prd->nama_prodi; ?>"><?= $prd->nama_prodi; ?></option>
            <?php endforeach; ?>
          </select>
          <?= form_error('nama_prodi', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Foto</label><br>
          <input type="file" name="photo">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>

      </div>
    </div>

  <?php form_close(); ?>
</div>