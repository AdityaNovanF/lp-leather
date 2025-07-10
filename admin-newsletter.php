<?php
include 'includes/header.php';
?>
<style>
.admin-sidebar {
  min-height: 100vh;
  background: #222;
  color: #fff;
  padding: 2rem 1rem 1rem 1rem;
  position: fixed;
  left: 0; top: 0; bottom: 0;
  width: 220px;
  z-index: 100;
}
.admin-sidebar .admin-logo {
  font-size: 1.5rem;
  font-weight: bold;
  letter-spacing: 2px;
  margin-bottom: 2rem;
  color: #fff;
}
.admin-sidebar .nav-link {
  color: #fff;
  font-size: 1.08rem;
  margin-bottom: 1rem;
  border-radius: 6px;
  padding: 0.6rem 1rem;
  display: block;
  transition: background 0.2s;
}
.admin-sidebar .nav-link.active, .admin-sidebar .nav-link:hover {
  background: #444;
  color: #fff;
  text-decoration: none;
}
.admin-main {
  margin-left: 240px;
  padding: 2.5rem 2rem 2rem 2rem;
  background: #f7f7f7;
  min-height: 100vh;
}
@media (max-width: 900px) {
  .admin-main { margin-left: 0; padding: 1.5rem 0.5rem; }
  .admin-sidebar { position: static; width: 100%; min-height: auto; display: flex; flex-direction: row; gap: 1rem; }
}
</style>
<div class="admin-sidebar">
  <div class="admin-logo mb-4">ADMIN PANEL</div>
  <a href="admin-dashboard.php" class="nav-link">Dashboard</a>
  <a href="admin-produk.php" class="nav-link">Produk</a>
  <a href="admin-kategori.php" class="nav-link">Kategori</a>
  <a href="admin-order.php" class="nav-link">Order</a>
  <a href="admin-user.php" class="nav-link">User</a>
  <a href="admin-newsletter.php" class="nav-link active">Newsletter</a>
  <a href="admin-setting.php" class="nav-link">Setting</a>
</div>
<div class="admin-main" style="margin-left:240px; padding:2.5rem 2rem 2rem 2rem; background:#f7f7f7; min-height:100vh;">
  <h2 class="mb-4" style="font-weight:700; letter-spacing:1px;">Manajemen Newsletter</h2>
  <div class="d-flex justify-content-between align-items-center mb-3">
    <form class="d-flex" style="gap:0.5rem;">
      <input type="text" class="form-control" placeholder="Cari email..." style="max-width:220px;">
      <button class="btn btn-dark">Cari</button>
    </form>
  </div>
  <div class="card p-3">
    <table class="table table-bordered table-hover align-middle mb-0">
      <thead class="table-light">
        <tr><th>#</th><th>Email</th><th>Aksi</th></tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>user1@email.com</td><td>
          <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
        </td></tr>
        <tr><td>2</td><td>user2@email.com</td><td>
          <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
        </td></tr>
      </tbody>
    </table>
  </div>
</div>
<?php
include 'includes/footer.php';
?> 