<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-plus"></i> Form Tambah Data KRS
  </div>

  <form action="<?= base_url('administrator/krs/tambah_krs_aksi') ?>" method="post">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="">Tahun Akademik</label>
        <input type="hidden" name="id_thn_akad" class="form-control" value="<?= $id_thn_akad; ?>">
        <input type="hidden" name="id_krs" class="form-control" value="<?= $id_krs; ?>">
        <input type="text" name="thn_akad_smt" class="form-control" value="<?= $thn_akad_smt . " - " . $semester; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="">NIM Mahasiswa</label>
        <input type="text" name="nim" class="form-control" value="<?= $nim; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="">Mata Kuliah</label>
        <?php
        $query = $this->db->query("SELECT kode_matakuliah, nama_matakuliah FROM matakuliah");

        $dropdowns = $query->result();
        foreach($dropdowns as $dropdown){
          $dropdownsList[$dropdown->kode_matakuliah] = $dropdown->nama_matakuliah;
        }

        echo form_dropdown('kode_matakuliah', $dropdownsList, $kode_matakuliah, 'class="form-control" id="kode_matakuliah"');
        ?>
      </div>

      <button type="submit" class="btn btn-primary">Simpan</button>
      <?= anchor('administrator/krs/krs_aksi', '<div class="btn btn-warning">Kembali</div>') ?>

    </div>
  </div>

  </form>
</div>