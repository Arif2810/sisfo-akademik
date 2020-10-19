<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Input Data Informasi
  </div>

  <form action="<?= base_url('administrator/informasi/tambah_informasi_aksi') ?>" method="post">

    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="">ICON</label>
          <input type="hidden" name="id_informasi" class="form-control">
          <input type="text" name="icon" class="form-control">
          <?= form_error('icon', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">JUDUL INFORMASI</label>
          <input type="text" name="judul_informasi" class="form-control">
          <?= form_error('judul_informasi', '<div class="text-danger small">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="">ISI INFORMASI</label>
          <textarea name="isi_informasi" id="" cols="30" rows="3" class="form-control"></textarea>
          <?= form_error('isi_informasi', '<div class="text-danger small">', '</div>'); ?>
        </div>

        <button type="submit" class="btn btn-primary mb-5">Simpan</button>

      </div>
    </div>
  </form>


</div>