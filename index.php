<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Banner -->
<div class="container mt-4">
  <img src="https://via.placeholder.com/1200x400?text=Garut+Kulit+Best+Seller" class="img-fluid w-100 rounded" alt="Garut Kulit Best Seller">
</div>

<!-- Produk Best Seller -->
<section class="container my-5">
  <h2 class="mb-4 text-center" style="font-weight:700; letter-spacing:1px;">Best-Selling Garut Kulit</h2>
  <div class="row row-cols-1 row-cols-md-4 g-4">
    <?php for($i=1;$i<=8;$i++): ?>
    <div class="col">
      <div class="card h-100">
        <img src="https://via.placeholder.com/300x300?text=Jaket+Kulit+<?= $i ?>" class="card-img-top" alt="Jaket Kulit <?= $i ?>">
        <div class="card-body text-center">
          <h5 class="card-title">Jaket Kulit <?= $i ?></h5>
          <p class="card-text">Rp <?= number_format(1200000 + $i*10000,0,',','.') ?></p>
          <a href="#" class="btn btn-dark w-100 mb-2">Quick View</a>
          <a href="#" class="btn btn-outline-dark w-100">Add to Cart</a>
        </div>
      </div>
    </div>
    <?php endfor; ?>
  </div>
</section>

<!-- Quick Shop Section -->
<section class="container my-5">
  <h2 class="mb-4 text-center" style="font-weight:700; letter-spacing:1px;">Quick Shop</h2>
  <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
    <?php
      $categories = ['Accessories','Bags','Belts','Black Jacket','Corporate','Jackets','Men','Men Accessories','Men Bags','Men Belts','Men Jacket','Men Pouches','Men Wallet','Office Pouches','Preorder','Sandals','Unisex','Unisex Accessories','Unisex Bags','Unisex Pouches','Wallet','Women','Women Accessories','Women Bags','Women Belts','Women Pouches','Women Wallet'];
      foreach($categories as $cat):
    ?>
      <a href="#" class="btn btn-outline-secondary btn-sm"> <?= $cat ?> </a>
    <?php endforeach; ?>
  </div>
  <div class="row row-cols-1 row-cols-md-4 g-4">
    <?php for($i=1;$i<=8;$i++): ?>
    <div class="col">
      <div class="card h-100">
        <img src="https://via.placeholder.com/300x300?text=Produk+<?= $i ?>" class="card-img-top" alt="Produk <?= $i ?>">
        <div class="card-body text-center">
          <h5 class="card-title">Produk <?= $i ?></h5>
          <p class="card-text">Rp <?= number_format(200000 + $i*25000,0,',','.') ?></p>
          <a href="#" class="btn btn-dark w-100 mb-2">Quick View</a>
          <a href="#" class="btn btn-outline-dark w-100">Add to Cart</a>
        </div>
      </div>
    </div>
    <?php endfor; ?>
  </div>
</section>

<?php
include 'includes/footer.php';
?> 