<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>
<section class="container my-5">
  <h2 class="mb-4 text-center" style="font-weight:700; letter-spacing:1px;">Women Bags</h2>
  <div class="produk-masonry">
    <?php 
      $imgArr = [
        'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80',
        'https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=600&q=80',
        'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=600&q=80',
      ];
      for($i=1;$i<=12;$i++): 
        $img = $imgArr[($i-1)%count($imgArr)];
        $nama = "Women Bags $i";
        $harga = number_format(450000 + $i*6000,0,',','.');
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
<?php
include 'includes/footer.php';
?> 