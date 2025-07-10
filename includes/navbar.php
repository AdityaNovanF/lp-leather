<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!-- Hamburger for mobile only -->
    <button class="navbar-toggler d-lg-none me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Logo kiri -->
    <a class="navbar-brand fw-bold" href="index.php" style="letter-spacing:2px;">GARUT KULIT</a>
    <!-- Menu horizontal hanya di desktop -->
    <div class="collapse navbar-collapse justify-content-center d-none d-lg-flex" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="nyfw.php">NYFW</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="women.php" id="womenDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Women</a>
          <ul class="dropdown-menu" aria-labelledby="womenDropdown">
            <li><a class="dropdown-item" href="sandals.php">Sandals</a></li>
            <li><a class="dropdown-item" href="women-accessories.php">Accessories</a></li>
            <li><a class="dropdown-item" href="women-bags.php">Bags</a></li>
            <li><a class="dropdown-item" href="women-belts.php">Belts</a></li>
            <li><a class="dropdown-item" href="women-pouches.php">Pouches</a></li>
            <li><a class="dropdown-item" href="women-backpack.php">Backpack</a></li>
            <li><a class="dropdown-item" href="women-wallets.php">Wallets</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="men.php" id="menDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Men</a>
          <ul class="dropdown-menu" aria-labelledby="menDropdown">
            <li><a class="dropdown-item" href="men-accessories.php">Accessories</a></li>
            <li><a class="dropdown-item" href="men-bags.php">Bags</a></li>
            <li><a class="dropdown-item" href="men-belts.php">Belts</a></li>
            <li><a class="dropdown-item" href="men-pouches.php">Pouches</a></li>
            <li><a class="dropdown-item" href="men-wallets.php">Wallets</a></li>
            <li><a class="dropdown-item" href="men-jackets.php">Jackets</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="unisex.php" id="unisexDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Unisex</a>
          <ul class="dropdown-menu" aria-labelledby="unisexDropdown">
            <li><a class="dropdown-item" href="unisex-accessories.php">Accessories</a></li>
            <li><a class="dropdown-item" href="unisex-bags.php">Bags</a></li>
            <li><a class="dropdown-item" href="unisex-pouches.php">Pouches</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="sale.php">SALE!</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="jacket.php" id="jacketDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Jacket</a>
          <ul class="dropdown-menu" aria-labelledby="jacketDropdown">
            <li><a class="dropdown-item" href="konveksi-jaket-terdekat.php">Konveksi Jaket Terdekat</a></li>
            <li><a class="dropdown-item" href="souvenir-jaket-terdekat.php">Souvenir Jaket Terdekat</a></li>
            <li><a class="dropdown-item" href="kerajinan-jaket-kulit-original.php">Kerajinan Jaket Kulit Original</a></li>
            <li><a class="dropdown-item" href="jaket-kulit-custom.php">Jaket Kulit Custom dari Garut Kulit</a></li>
            <li><a class="dropdown-item" href="konveksi-jaket-kulit-premium.php">Konveksi Jaket Kulit Premium</a></li>
            <li><a class="dropdown-item" href="jaket-kulit-terbaik-indonesia.php">Jaket Kulit Terbaik Indonesia</a></li>
            <li><a class="dropdown-item" href="jacket-etc.php">Etc</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="corporate.php" id="corporateDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Corporate</a>
          <ul class="dropdown-menu" aria-labelledby="corporateDropdown">
            <li><a class="dropdown-item" href="layanan-makloon.php">Layanan Makloon</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- Icon kanan selalu tampil -->
    <ul class="navbar-nav ms-auto d-flex flex-row align-items-center gap-3" style="font-size: 1.2rem;">
      <li class="nav-item">
        <a class="nav-link" href="login.php"><i class="fa-regular fa-user"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
      </li>
      <li class="nav-item position-relative">
        <a class="nav-link" href="#"><i class="fa-solid fa-bag-shopping"></i></a>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary" style="font-size:0.7rem;">0</span>
      </li>
    </ul>
    <!-- Offcanvas Mobile Menu hanya di mobile -->
    <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="mobileMenuLabel">MENU</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <form class="mb-3">
          <input type="text" class="form-control" placeholder="Search Products...">
        </form>
        <ul class="list-unstyled">
          <li><a href="index.php" class="d-block py-2">Home</a></li>
          <li><a href="nyfw.php" class="d-block py-2">NYFW</a></li>
          <li>
            <div class="dropdown">
              <a class="d-block py-2 dropdown-toggle" href="women.php" data-bs-toggle="dropdown">Women</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="sandals.php">Sandals</a></li>
                <li><a class="dropdown-item" href="women-accessories.php">Accessories</a></li>
                <li><a class="dropdown-item" href="women-bags.php">Bags</a></li>
                <li><a class="dropdown-item" href="women-belts.php">Belts</a></li>
                <li><a class="dropdown-item" href="women-pouches.php">Pouches</a></li>
                <li><a class="dropdown-item" href="women-backpack.php">Backpack</a></li>
                <li><a class="dropdown-item" href="women-wallets.php">Wallets</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div class="dropdown">
              <a class="d-block py-2 dropdown-toggle" href="men.php" data-bs-toggle="dropdown">Men</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="men-accessories.php">Accessories</a></li>
                <li><a class="dropdown-item" href="men-bags.php">Bags</a></li>
                <li><a class="dropdown-item" href="men-belts.php">Belts</a></li>
                <li><a class="dropdown-item" href="men-pouches.php">Pouches</a></li>
                <li><a class="dropdown-item" href="men-wallets.php">Wallets</a></li>
                <li><a class="dropdown-item" href="men-jackets.php">Jackets</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div class="dropdown">
              <a class="d-block py-2 dropdown-toggle" href="unisex.php" data-bs-toggle="dropdown">Unisex</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="unisex-accessories.php">Accessories</a></li>
                <li><a class="dropdown-item" href="unisex-bags.php">Bags</a></li>
                <li><a class="dropdown-item" href="unisex-pouches.php">Pouches</a></li>
              </ul>
            </div>
          </li>
          <li><a href="sale.php" class="d-block py-2">SALE!</a></li>
          <li>
            <div class="dropdown">
              <a class="d-block py-2 dropdown-toggle" href="jacket.php" data-bs-toggle="dropdown">Jacket</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="konveksi-jaket-terdekat.php">Konveksi Jaket Terdekat</a></li>
                <li><a class="dropdown-item" href="souvenir-jaket-terdekat.php">Souvenir Jaket Terdekat</a></li>
                <li><a class="dropdown-item" href="kerajinan-jaket-kulit-original.php">Kerajinan Jaket Kulit Original</a></li>
                <li><a class="dropdown-item" href="jaket-kulit-custom.php">Jaket Kulit Custom dari Garut Kulit</a></li>
                <li><a class="dropdown-item" href="konveksi-jaket-kulit-premium.php">Konveksi Jaket Kulit Premium</a></li>
                <li><a class="dropdown-item" href="jaket-kulit-terbaik-indonesia.php">Jaket Kulit Terbaik Indonesia</a></li>
                <li><a class="dropdown-item" href="jacket-etc.php">Etc</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div class="dropdown">
              <a class="d-block py-2 dropdown-toggle" href="corporate.php" data-bs-toggle="dropdown">Corporate</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="layanan-makloon.php">Layanan Makloon</a></li>
              </ul>
            </div>
          </li>
        </ul>
        <!-- Icon kanan di mobile -->
        <ul class="navbar-nav d-flex flex-row align-items-center gap-3 mt-3" style="font-size: 1.2rem;">
          <li class="nav-item">
            <a class="nav-link" href="login.php"><i class="fa-regular fa-user"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
          </li>
          <li class="nav-item position-relative">
            <a class="nav-link" href="#"><i class="fa-solid fa-bag-shopping"></i></a>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary" style="font-size:0.7rem;">0</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<!-- Pastikan Font Awesome sudah di-include di header.php atau layout utama --> 