<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Update Mahasiswa
  </div>

  <?php foreach($mahasiswa as $mhs): ?>
  <?= form_open_multipart('administrator/mahasiswa/update_mahasiswa_aksi'); ?>

    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="">NIM Mahasiswa</label>
          <input type="hidden" name="id" value="<?= $mhs->id; ?>">
          <input type="text" name="nim" class="form-control" value="<?= $mhs->nim; ?>">
          <?= form_error('nim', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Nama Mahasiswa</label>
          <input type="text" name="nama_lengkap" class="form-control" value="<?= $mhs->nama_lengkap; ?>">
          <?= form_error('nama_lengkap', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Alamat</label>
          <input type="text" name="alamat" class="form-control" value="<?= $mhs->alamat; ?>">
          <?= form_error('alamat', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" name="email" class="form-control" value="<?= $mhs->email; ?>">
          <?= form_error('email', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Telepon</label>
          <input type="text" name="telepon" class="form-control" value="<?= $mhs->telepon; ?>">
          <?= form_error('telepon', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Tempat Lahir</label>
          <input type="text" name="tempat_lahir" class="form-control" value="<?= $mhs->tempat_lahir; ?>">
          <?= form_error('tempat_lahir', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" class="form-control" value="<?= $mhs->tanggal_lahir; ?>">
          <?= form_error('tanggal_lahir', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Jenis Kelamin</label>
          <select name="jenis_kelamin" id="" class="form-control" value="<?= $mhs->jenis_kelamin; ?>">
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select>
          <?= form_error('jenis_kelamin', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">Program Studi</label>
          <select name="nama_prodi" id="" class="form-control" value="<?= $mhs->nama_prodi; ?>">
            <?php foreach($prodi as $prd): ?>
              <option value="<?= $prd->nama_prodi; ?>"><?= $prd->nama_prodi; ?></option>
            <?php endforeach; ?>
          </select>
          <?= form_error('nama_prodi', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <?php foreach($detail as $dt): ?>
            <img src="<?= base_url('assets/uploads/').$mhs->photo; ?>" style="width:20%;">
          <?php endforeach; ?><br><br>
          <label for="">Foto</label><br>
          <input type="file" name="userfile" value="<?= $mhs->photo; ?>">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>

      </div>
    </div>

  <?php form_close(); ?>
  <?php endforeach; ?>
</div>