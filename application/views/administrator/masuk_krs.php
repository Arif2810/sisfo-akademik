<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-university"></i> Form Masuk Halaman KRS
  </div>

  <?= $this->session->flashdata('pesan'); ?>

  <form action="<?= base_url('administrator/krs/krs_aksi') ?>" method="post">
    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="">NIM Mahasiswa</label>
          <input type="text" name="nim" placeholder="Masukkan NIM mahasiswa" class="form-control">
          <?= form_error('nim', '<div class="text-danger small">', '</div>') ?>
        </div>
        <div class="form-group">
          <label for="">Tahun Akademik / Semester</label>
          <?php
          $query = $this->db->query("SELECT id_thn_akad, semester, CONCAT(tahun_akademik, ' -') AS thn_semester FROM tahun_akademik");
          $dropdowns = $query->result();

          foreach($dropdowns as $dropdown){
            if($dropdown->semester == "Ganjil"){
              $tampilSemester = "Ganjil";
            }
            else{
              $tampilSemester = "Genap";
            }
            $dropdownList[$dropdown->id_thn_akad] = $dropdown->thn_semester . " " . $tampilSemester;
          }
          echo form_dropdown('id_thn_akad', $dropdownList, '', 'class="form-control" id="id_thn_akad"');
          ?>
        </div>

        <button type="submit" class="btn btn-primary">Proses</button>

      </div>
    </div>

  </form>
</div>