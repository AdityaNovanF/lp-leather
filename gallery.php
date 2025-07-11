<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>
<section class="container my-5">
  <h2 class="mb-4 text-center" style="font-weight:700; letter-spacing:1px;">Gallery Garut Kulit</h2>
  <div class="produk-masonry">
    <?php 
      $imgArr = [
        'https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=600&q=80',
        'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80',
        'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80',
        'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=600&q=80',
        'https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=600&q=80',
      ];
      for($i=1;$i<=20;$i++): 
        $img = $imgArr[($i-1)%count($imgArr)];
    ?>
    <div class="produk-item mb-4">
      <div class="produk-img-wrap">
        <img src="<?= $img ?>" alt="Gallery <?= $i ?>" class="produk-img">
      </div>
    </div>
    <?php endfor; ?>
  </div>
</section>
<?php
include 'includes/footer.php';
?> 