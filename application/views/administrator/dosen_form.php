<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Input Dosen
  </div>

  <?= form_open_multipart('administrator/dosen/tambah_dosen_aksi'); ?>

    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="">NIDN</label>
          <input type="text" name="nidn" class="form-control">
          <?= form_error('nidn', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Nama Dosen</label>
          <input type="text" name="nama_dosen" class="form-control">
          <?= form_error('nama_dosen', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Alamat</label>
          <input type="text" name="alamat" class="form-control">
          <?= form_error('alamat', '<div class="text-danger small">', '</div>'); ?>
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
          <label for="">Email</label>
          <input type="text" name="email" class="form-control">
          <?= form_error('email', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">No. Telepon</label>
          <input type="text" name="telp" class="form-control">
          <?= form_error('telp', '<div class="text-danger small">', '</div>'); ?>
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