<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Garut Kulit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <style>
    body { font-family: 'Montserrat', Arial, sans-serif; }
    .navbar-brand { font-weight: 700; font-size: 2rem; letter-spacing: 2px; }
    /* Carousel besar dan responsif, mirip garutkulit.id */
    #produkCarousel {
      margin-bottom: 1.5rem;
    }
    #produkCarousel .carousel-item {
      height: 480px;
      transition: height 0.3s;
    }
    #produkCarousel .carousel-item img {
      height: 100%;
      width: 100%;
      object-fit: cover;
      object-position: center;
      border-radius: 24px;
      box-shadow: 0 8px 32px rgba(0,0,0,0.18);
      transition: border-radius 0.3s, box-shadow 0.3s;
    }
    @media (max-width: 992px) {
      #produkCarousel .carousel-item {
        height: 320px;
      }
    }
    @media (max-width: 768px) {
      #produkCarousel .carousel-item {
        height: 180px;
      }
      #produkCarousel .carousel-item img {
        border-radius: 12px;
      }
    }
    /* Masonry grid produk */
    .produk-masonry {
      column-count: 4;
      column-gap: 1.2rem;
    }
    @media (max-width: 1200px) {
      .produk-masonry { column-count: 3; }
    }
    @media (max-width: 900px) {
      .produk-masonry { column-count: 2; }
    }
    @media (max-width: 600px) {
      .produk-masonry { column-count: 1; }
    }
    .produk-item {
      display: inline-block;
      width: 100%;
      background: #fff;
      border-radius: 16px;
      margin-bottom: 1.2rem;
      box-shadow: 0 2px 12px rgba(0,0,0,0.07);
      overflow: hidden;
      transition: box-shadow 0.2s;
    }
    .produk-img-wrap {
      width: 100%;
      overflow: hidden;
      border-radius: 16px 16px 0 0;
    }
    .produk-img {
      width: 100%;
      display: block;
      transition: transform 0.3s, box-shadow 0.3s;
      aspect-ratio: 1/1;
      object-fit: cover;
    }
    .produk-item:hover .produk-img {
      transform: scale(1.06);
      box-shadow: 0 8px 32px rgba(0,0,0,0.18);
    }
    .produk-info {
      padding: 0.5rem 0.7rem 1rem 0.7rem;
    }
    /* Kategori Produk Grid */
    .kategori-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
      gap: 1.5rem 1.2rem;
      justify-items: center;
      align-items: start;
      margin-bottom: 2rem;
    }
    .kategori-item {
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.07);
      padding: 1rem 0.5rem 0.7rem 0.5rem;
      transition: box-shadow 0.2s;
      width: 100%;
      max-width: 170px;
    }
    .kategori-img-wrap {
      width: 100%;
      aspect-ratio: 1/1;
      overflow: hidden;
      border-radius: 12px;
      margin-bottom: 0.5rem;
    }
    .kategori-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s, box-shadow 0.3s;
      display: block;
    }
    .kategori-item:hover .kategori-img {
      transform: scale(1.08);
      box-shadow: 0 8px 32px rgba(0,0,0,0.18);
    }
    .kategori-nama {
      margin-top: 0.3rem;
      font-size: 1rem;
      font-weight: 600;
      color: #222;
    }
    /* Quick Shop gambar seragam */
    .quickshop-img-wrap {
      width: 100%;
      aspect-ratio: 1/1;
      overflow: hidden;
      border-radius: 12px 12px 0 0;
      background: #f7f7f7;
    }
    .quickshop-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.3s;
    }
    .card:hover .quickshop-img {
      transform: scale(1.06);
    }
  </style>
</head>
<body> 