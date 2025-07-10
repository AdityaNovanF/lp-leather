<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>
<section class="container my-5">
  <h2 class="mb-4 text-center" style="font-weight:700; letter-spacing:1px;">Contact Us</h2>
  <div class="row justify-content-center mb-4">
    <div class="col-md-6">
      <form>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" placeholder="Nama Anda">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="email@domain.com">
        </div>
        <div class="mb-3">
          <label for="pesan" class="form-label">Pesan</label>
          <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis pesan Anda..."></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Kirim Pesan</button>
      </form>
      <div class="mt-4">
        <p class="mb-1"><strong>Alamat:</strong> Jl. Raya Garut No. 123, Garut, Indonesia</p>
        <p class="mb-1"><strong>Email:</strong> info@garutkulit.id</p>
        <p class="mb-1"><strong>Telepon:</strong> 0812-3456-7890</p>
      </div>
    </div>
  </div>
</section>
<?php
include 'includes/footer.php';
?> 