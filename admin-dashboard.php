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
.admin-cards {
  display: flex;
  gap: 2rem;
  flex-wrap: wrap;
}
.admin-card {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.04);
  padding: 2rem 2.5rem;
  min-width: 220px;
  flex: 1 1 220px;
  text-align: center;
}
.admin-card .admin-card-title {
  font-size: 1.1rem;
  color: #888;
  margin-bottom: 0.5rem;
}
.admin-card .admin-card-value {
  font-size: 2.1rem;
  font-weight: bold;
  color: #222;
}
@media (max-width: 900px) {
  .admin-main { margin-left: 0; padding: 1.5rem 0.5rem; }
  .admin-sidebar { position: static; width: 100%; min-height: auto; display: flex; flex-direction: row; gap: 1rem; }
}
</style>
<div class="admin-sidebar">
  <div class="admin-logo mb-4">ADMIN PANEL</div>
  <a href="admin-dashboard.php" class="nav-link active">Dashboard</a>
  <a href="admin-produk.php" class="nav-link">Produk</a>
  <a href="admin-kategori.php" class="nav-link">Kategori</a>
  <a href="admin-order.php" class="nav-link">Order</a>
  <a href="admin-user.php" class="nav-link">User</a>
  <a href="admin-newsletter.php" class="nav-link">Newsletter</a>
  <a href="admin-setting.php" class="nav-link">Setting</a>
</div>
<div class="admin-main">
  <h2 class="mb-4" style="font-weight:700; letter-spacing:1px;">Dashboard</h2>
  <div class="admin-cards mb-5">
    <div class="admin-card">
      <div class="admin-card-title">Total Produk</div>
      <div class="admin-card-value">128</div>
    </div>
    <div class="admin-card">
      <div class="admin-card-title">Order Masuk</div>
      <div class="admin-card-value">34</div>
    </div>
    <div class="admin-card">
      <div class="admin-card-title">User Terdaftar</div>
      <div class="admin-card-value">512</div>
    </div>
    <div class="admin-card">
      <div class="admin-card-title">Newsletter</div>
      <div class="admin-card-value">210</div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-7 mb-4">
      <div class="card p-4">
        <h5 class="mb-3">Ringkasan Order Terbaru</h5>
        <table class="table table-sm">
          <thead><tr><th>#</th><th>Nama</th><th>Tanggal</th><th>Status</th><th>Total</th></tr></thead>
          <tbody>
            <tr><td>1</td><td>Andi</td><td>2024-06-01</td><td><span class="badge bg-success">Selesai</span></td><td>Rp 1.200.000</td></tr>
            <tr><td>2</td><td>Budi</td><td>2024-06-01</td><td><span class="badge bg-warning text-dark">Proses</span></td><td>Rp 850.000</td></tr>
            <tr><td>3</td><td>Citra</td><td>2024-05-31</td><td><span class="badge bg-danger">Batal</span></td><td>Rp 400.000</td></tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-5 mb-4">
      <div class="card p-4">
        <h5 class="mb-3">Aktivitas Terakhir</h5>
        <ul class="list-unstyled mb-0" style="font-size:0.98rem;">
          <li>Admin login - 2024-06-01 09:00</li>
          <li>Tambah produk baru - 2024-05-31 16:22</li>
          <li>Order #1234 diproses - 2024-05-31 15:10</li>
          <li>User baru daftar - 2024-05-31 14:55</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php
include 'includes/footer.php';
?> 