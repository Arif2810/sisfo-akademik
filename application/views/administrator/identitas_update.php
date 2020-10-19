<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Update Identitas
  </div>

  <?php foreach($identitas as $id): ?>

  <form action="<?= base_url('administrator/identitas/update_aksi') ?>" method="post">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Judul Website</label>
          <input type="hidden" name="id_identitas" value="<?= $id->id_identitas ?>">
          <input type="text" name="judul_website" class="form-control" value="<?= $id->judul_website ?>">
        </div>
        <div class="form-group">
          <label for="">Alamat</label>
          <input type="text" name="alamat" class="form-control" value="<?= $id->alamat ?>">
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" name="email" class="form-control" value="<?= $id->email ?>">
        </div>
        <div class="form-group">
          <label for="">No. Telepon</label>
          <input type="text" name="telp" class="form-control" value="<?= $id->telp ?>">
        </div>
    
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>
  
  <?php endforeach; ?>
</div>