<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Merriweather Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Cardo Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Oswald Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet Links -->
    <link rel="stylesheet" href="style.css">

    
</head>
<body>
    <div class="container-fluid d-flex flex-column">
        <!-- Navbar -->
        <div id="home-navbar" class="navbar navbar-expand-sm bg-primary-custom">
            <div class="container-fluid py-2 d-flex flex-column">
                <!-- Title -->
                <p class="text-title text-custom h1">Le Puki</p>
                <!-- Links -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link link-custom text-header" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-custom text-header" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-custom text-header" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-custom text-header" href="#">Reserve</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Carousel -->
        <div id="home-carousel" class="carousel slide flex-grow" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/carousel-img1.jpg" alt="carousel-img1" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/carousel-img2.jpg" alt="carousel-img2" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/carousel-img3.jpg" alt="carousel-img3" class="d-block w-100">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#home-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#home-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
        

    <!-- JS Script Links -->
    <script src="home.js"></script>
</body>
</html>