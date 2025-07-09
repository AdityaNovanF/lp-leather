<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h1 class="mb-4 fw-bold">Contact Us</h1>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Send Message</button>
      </form>
      <div class="mt-5">
        <h5>Info Kontak</h5>
        <p>Email: info@garutkulit.id<br>WhatsApp: 0812-3456-7890<br>Alamat: Garut, Jawa Barat, Indonesia</p>
      </div>
    </div>
  </div>
</div>

<?php
include 'includes/footer.php';
?> 