<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Update Dosen
  </div>

  <?php foreach($dosen as $dsn): ?>
  <?= form_open_multipart('administrator/dosen/update_dosen_aksi'); ?>

    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="">NIDN</label>
          <input type="hidden" name="id_dosen" value="<?= $dsn->id_dosen; ?>">
          <input type="text" name="nidn" class="form-control" value="<?= $dsn->nidn; ?>">
          <?= form_error('nidn', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Nama Dosen</label>
          <input type="text" name="nama_dosen" class="form-control" value="<?= $dsn->nama_dosen; ?>">
          <?= form_error('nama_dosen', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Alamat</label>
          <input type="text" name="alamat" class="form-control" value="<?= $dsn->alamat; ?>">
          <?= form_error('alamat', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Jenis Kelamin</label>
          <select name="jenis_kelamin" id="" class="form-control" value="<?= $dsn->jenis_kelamin; ?>">
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select>
          <?= form_error('jenis_kelamin', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" name="email" class="form-control" value="<?= $dsn->email; ?>">
          <?= form_error('email', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">No. Telepon</label>
          <input type="text" name="telp" class="form-control" value="<?= $dsn->telp; ?>">
          <?= form_error('telp', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <?php foreach($detail as $dt): ?>
            <img src="<?= base_url('assets/uploads/').$dsn->photo; ?>" style="width:20%;">
          <?php endforeach; ?><br><br>
          <label for="">Foto</label><br>
          <input type="file" name="userfile" value="<?= $dsn->photo; ?>">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>

      </div>
    </div>

  <?php form_close(); ?>
  <?php endforeach; ?>
</div>