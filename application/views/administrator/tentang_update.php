<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Update Tentang Kampus
  </div>

  <?php foreach($tentang as $ttg): ?>

  <form action="<?= base_url('administrator/tentang_kampus/update_aksi') ?>" method="post">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="">Sejarah</label>
          <input type="hidden" name="id" value="<?= $ttg->id; ?>">
          <input type="text" name="sejarah" class="form-control" value="<?= $ttg->sejarah; ?>">
        </div>
        <div class="form-group">
          <label for="">Visi</label>
          <input type="text" name="visi" class="form-control" value="<?= $ttg->visi; ?>">
        </div>
        <div class="form-group">
          <label for="">Misi</label>
          <input type="text" name="misi" class="form-control" value="<?= $ttg->misi; ?>">
        </div>
    
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>
  
  <?php endforeach; ?>
</div>