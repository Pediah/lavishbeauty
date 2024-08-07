<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Hair Dresser Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- header -->
<section class="header">

    <a href="index.html" class="logo" >
    <img src="images/LOGO.png" alt="" style="max-height: 90px;">
    </a>

    <nav class="navbar">
        <div id="close-navbar" class="fas fa-times"></div>
        <a href="index.html">home</a>
        <a href="#about">about</a>
        <a href="gallery.html">gallery</a>
        <div class="dropdown">
            <a>services</a>
            <ul class="dropdown-content">
                <li><a href="beauty.html">Beauty Essentials</a></li>
                <li><a href="nails.html">Nail Care</a></li>
                <li><a href="barber.html">Hair Services</a></li>
            </ul>
        </div>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>

  <section id="tranding">
    <div class="container">
      <h1 class="text-center section-heading">Lavish Beauty</h1>
    </div>
    <div class="container">
      <div class="swiper tranding-slider">
        <div class="swiper-wrapper">
          <!-- PHP script to load images -->
          <?php
            // Directory where images are stored
            $imageDir = 'gallery/';
            
            // Scan the directory for images
            $images = glob($imageDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
            
            // Loop through images and generate HTML
            foreach ($images as $image) {
              echo '<div class="swiper-slide tranding-slide">';
              echo '<div class="tranding-slide-img">';
              echo '<img src="' . $image . '" alt="Tranding">';
              echo '</div>';
              echo '<div class="tranding-slide-content">';
              echo '<h1 class="food-price">$20</h1>'; // Example price, replace with dynamic data
              echo '<div class="tranding-slide-content-bottom">';
              echo '<h2 class="food-name">Food Name</h2>'; // Example name, replace with dynamic data
              echo '<h3 class="food-rating">';
              echo '<span>4.5</span>';
              echo '<div class="rating">';
              echo '<ion-icon name="star"></ion-icon>';
              echo '<ion-icon name="star"></ion-icon>';
              echo '<ion-icon name="star"></ion-icon>';
              echo '<ion-icon name="star"></ion-icon>';
              echo '<ion-icon name="star"></ion-icon>';
              echo '</div>';
              echo '</h3>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
            }
          ?>
          <!-- End of PHP script -->
        </div>
        <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script>
  var TrandingSlider = new Swiper('.tranding-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 2.5,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });
</script>
<script src="js/script.js"></script>
</body>
</html>
