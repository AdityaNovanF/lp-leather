<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container my-5">
  <h1 class="mb-4 fw-bold">Blog</h1>
  <div class="row g-4">
    <?php for($i=1;$i<=3;$i++): ?>
    <div class="col-md-4">
      <div class="card h-100">
        <img src="https://via.placeholder.com/400x200?text=Blog+<?= $i ?>" class="card-img-top" alt="Blog <?= $i ?>">
        <div class="card-body">
          <h5 class="card-title">Judul Artikel <?= $i ?></h5>
          <p class="card-text">Ini adalah ringkasan singkat artikel blog ke-<?= $i ?> tentang produk kulit, tips perawatan, atau inspirasi fashion.</p>
          <a href="#" class="btn btn-outline-dark">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
    <?php endfor; ?>
  </div>
</div>

<?php
include 'includes/footer.php';
?> 