<?php
include 'includes/header.php';
include 'includes/navbar.php';

// Array gambar placeholder dinamis
global $gallery;
$gallery = [];
for ($i = 1; $i <= 48; $i++) {
    $gallery[] = [
        'src' => "https://via.placeholder.com/300x300?text=Produk+$i",
        'alt' => "Produk $i"
    ];
}
?>

<div class="container my-5">
  <h1 class="mb-4 fw-bold text-center">Galeri Produk Garut Kulit</h1>
  <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-3">
    <?php foreach ($gallery as $item): ?>
      <div class="col">
        <div class="card h-100 border-0 shadow-sm">
          <img src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>" class="card-img-top rounded">
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php
include 'includes/footer.php';
?> 