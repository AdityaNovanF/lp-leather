<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Carousel Produk -->
<div id="produkCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Jaket Kulit">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Tas Kulit">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Sepatu Kulit">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#produkCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#produkCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Hero Banner -->
<!-- Bagian ini dihapus karena sudah digantikan carousel -->

<!-- Kategori Barang -->
<section class="container my-5">
  <h2 class="mb-4 text-center" style="font-weight:700; letter-spacing:1px;">Kategori Produk</h2>
  <div class="kategori-grid">
    <?php
      $kategori = [
        ["Bags", "https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80"],
        ["Wallets", "https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=400&q=80"],
        ["Belts", "https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=400&q=80"],
        ["Accessories", "https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80"],
        ["Jackets", "https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80"],
        ["Sandals", "https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80"],
        ["Pouches", "https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=400&q=80"],
        ["Backpack", "https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80"]
      ];
      foreach($kategori as $kat):
    ?>
      <div class="kategori-item text-center mb-4">
        <div class="kategori-img-wrap mb-2">
          <img src="<?= $kat[1] ?>" alt="<?= $kat[0] ?>" class="kategori-img">
        </div>
        <div class="kategori-nama" style="font-weight:600; font-size:1rem;"> <?= $kat[0] ?> </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- Produk Best Seller -->
<section class="container my-5">
  <h2 class="mb-4 text-center" style="font-weight:700; letter-spacing:1px;">Best-Selling Garut Kulit</h2>
  <div class="produk-masonry">
    <?php 
      $imgArr = [
        'https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=600&q=80', // jaket
        'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80', // tas
        'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80', // sepatu
        'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=600&q=80', // dompet
        'https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=600&q=80', // sabuk
      ];
      for($i=1;$i<=16;$i++): 
        $img = $imgArr[($i-1)%count($imgArr)];
        $nama = "Produk Kulit $i";
        $harga = number_format(1200000 + $i*10000,0,',','.');
    ?>
    <div class="produk-item mb-4">
      <div class="produk-img-wrap">
        <img src="<?= $img ?>" alt="<?= $nama ?>" class="produk-img">
      </div>
      <div class="produk-info text-center mt-2">
        <div class="produk-nama" style="font-weight:600; font-size:1.1rem;"> <?= $nama ?> </div>
        <div class="produk-harga text-muted" style="font-size:0.95rem;">Rp <?= $harga ?></div>
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
    <?php 
      for($i=1;$i<=8;$i++): 
        $img = $imgArr[($i+2)%count($imgArr)];
    ?>
    <div class="col">
      <div class="card h-100">
        <div class="quickshop-img-wrap">
          <img src="<?= $img ?>" class="quickshop-img card-img-top" alt="Produk <?= $i ?>">
        </div>
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