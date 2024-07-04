<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Hair Dresser Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- header -->
<section class="header">

    <a href="index.html" class="logo">
        <img src="images/LOGO.png" alt="">
    </a>

    <nav class="navbar">
        <div id="close-navbar" class="fas fa-times"></div>
        <a href="index.html">home</a>
        <a href="#about">about</a>
        <div class="dropdown">
            <a href="">services</a>
            <ul class="dropdown-content">
                <li><a href="beauty.html">Beauty Essentials</a></li>
                <li><a href="nails.html">Nail Care</a></li>
                <li><a href="barber.html">Hair Services</a></li>
            </ul>
        </div>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>
    <div class="gallery">
        <?php
        $imageFolder = "images/"; // Path to your image folder
        $images = glob($imageFolder . "*.{jpg,jpeg,png,gif}", GLOB_BRACE); // Fetch all image files
        
        $counter = 0;
        echo '<div class="column">';
        foreach ($images as $image) {
            $imageName = basename($image);
            echo '<article class="card">';
            echo '<figure>';
            echo '<img src="' . $imageFolder . $imageName . '" alt="' . pathinfo($imageName, PATHINFO_FILENAME) . '" onclick="openLightbox();currentSlide(' . ($counter + 1) . ')">';
            echo '<figcaption>';
            echo '<h3>' . pathinfo($imageName, PATHINFO_FILENAME) . '</h3>';
            echo '</figcaption>';
            echo '</figure>';
            echo '</article>';

            $counter++;
            if ($counter % 8 == 0 && $counter < count($images)) {
                echo '</div><div class="column">';
            }
        }
        echo '</div>';
        ?>
    </div> 

    <!-- Lightbox structure -->
    <div id="lightbox" class="lightbox" onclick="closeLightbox()">
        <span class="close cursor" onclick="closeLightbox()">&times;</span>
        <div class="lightbox-content">
            <?php
            $counter = 0;
            foreach ($images as $image) {
                $imageName = basename($image);
                echo '<div class="slide">';
                echo '<img src="' . $imageFolder . $imageName . '" style="width:100%">';
                echo '</div>';
                $counter++;
            }
            ?>
            <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
            <a class="next" onclick="changeSlide(1)">&#10095;</a>
        </div>
    </div>  

    <script src="js/gallery.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>
