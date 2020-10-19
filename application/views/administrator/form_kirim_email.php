<div class="container-fluid">
  <div class="alert alert-success">
    <i class="fas fa-comment-dots"></i> Form Balas Pesan User
  </div>

  <?php foreach($hubungi as $hub): ?>
    <form action="<?= base_url('administrator/hubungi_kami/kirim_email_aksi') ?>" method="post">
      <div class="form-group">
        <label for="">Email</label>
        <input type="hidden" name="id_hubungi" value="<?= $hub->id_hubungi; ?>">
        <input type="text" name="email" class="form-control" value="<?= $hub->email; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="">Subject</label>
        <input type="text" name="subject" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Pesan</label>
        <textarea name="pesan" id="" cols="30" rows="5" class="form-control"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Kirim</button>
  
    </form>
  <?php endforeach; ?>
</div>