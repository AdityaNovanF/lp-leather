<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>
<section class="container my-5" style="max-width:500px;">
  <div class="d-flex justify-content-center mb-4" style="gap:2rem;">
    <a href="login.php" class="fw-bold" style="font-size:1.2rem; color:#888; text-decoration:none;">Login</a>
    <a href="register.php" class="fw-bold" style="font-size:1.2rem; color:#222; border-bottom:2px solid #111; text-decoration:none;">Register</a>
  </div>
  <form class="mb-3">
    <div class="mb-3">
      <label for="register-email" class="form-label">EMAIL ADDRESS *</label>
      <input type="email" class="form-control" id="register-email" required>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="newsletter" checked>
      <label class="form-check-label" for="newsletter" style="font-size:0.97rem;">SUBSCRIBE TO OUR NEWSLETTER</label>
    </div>
    <div class="mb-3" style="font-size:0.97rem; color:#444;">
      Data Anda akan tersimpan di website ini - Silahkan periksa email Anda untuk melihat password yang dibuat secara otomatis oleh sistem kami.
    </div>
    <button type="submit" class="btn w-100" style="background:#111; color:#fff; font-weight:600;">Register</button>
  </form>
</section>
<?php
include 'includes/footer.php';
?> 