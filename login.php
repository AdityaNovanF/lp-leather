<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>
<section class="container my-5" style="max-width:500px;">
  <div class="d-flex justify-content-center mb-4" style="gap:2rem;">
    <a href="login.php" class="fw-bold" style="font-size:1.2rem; color:#222; border-bottom:2px solid #111; text-decoration:none;">Login</a>
    <a href="register.php" class="fw-bold" style="font-size:1.2rem; color:#888; text-decoration:none;">Register</a>
  </div>
  <form class="mb-3">
    <div class="mb-3">
      <label for="login-email" class="form-label">USERNAME OR EMAIL ADDRESS *</label>
      <input type="email" class="form-control" id="login-email" required>
    </div>
    <div class="mb-3">
      <label for="login-password" class="form-label">PASSWORD *</label>
      <input type="password" class="form-control" id="login-password" required>
    </div>
    <button type="submit" class="btn w-100" style="background:#111; color:#fff; font-weight:600;">Login</button>
    <div class="d-flex justify-content-between align-items-center mt-2" style="font-size:0.95rem;">
      <div><input type="checkbox" id="remember"> <label for="remember">REMEMBER ME</label></div>
      <a href="#" style="color:#111; text-decoration:none;">LOST YOUR PASSWORD?</a>
    </div>
  </form>
  <div class="text-center mb-2" style="font-size:0.97rem; color:#444;">Use a social account for faster login or easy registration.</div>
  <div class="d-grid gap-2 mb-2">
    <button class="btn btn-primary" style="background:#4267B2; border:none;"><i class="fab fa-facebook me-2"></i>Log in with Facebook</button>
    <button class="btn btn-light border" style="color:#222;"><img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" width="20" class="me-2">Log in with Google</button>
  </div>
</section>
<?php
include 'includes/footer.php';
?> 