<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-edit"></i> Form Edit Mata Kuliah
  </div>

  <?php foreach($matakuliah as $mk): ?>
    <form action="<?= base_url('administrator/matakuliah/update_aksi') ?>" method="post">

      <div class="row">
        <div class="col-md-6">

          <div class="form-group">
            <label for="">Nama Mata Kuliah</label>
            <input type="hidden" name="kode_matakuliah" class="form-control" value="<?= $mk->kode_matakuliah ?>">
            <input type="text" name="nama_matakuliah" class="form-control" value="<?= $mk->nama_matakuliah ?>">
          </div>
          <div class="form-group">
            <label for="">SKS</label>
            <select name="sks" id="" class="form-control">
              <option><?= $mk->sks; ?></option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Semester</label>
            <select name="semester" id="" class="form-control">
              <option><?= $mk->semester; ?></option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Program Studi</label>
            <select name="nama_prodi" id="" class="form-control">
              <option><?= $mk->nama_prodi; ?></option>
              <?php foreach($prodi as $prd): ?>
                <option value="<?= $prd->nama_prodi; ?>"><?= $prd->nama_prodi; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary btn-sm">Simpan</button>

        </div>
      </div>

    </form>
  <?php endforeach; ?>
  
</div>