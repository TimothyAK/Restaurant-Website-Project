<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Merriweather Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Cardo Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Alata Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">

    <!-- Farro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Farro:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet Links -->
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container-fluid w-100 d-flex flex-column p-0 mx-0">
        <!-- Navbar -->
        <div id="navbar" class="navbar navbar-expand-sm bg-primary1-custom">
            <div class="container-fluid">
                <!-- Links -->
                <ul class="navbar-nav d-flex align-items-center">
                    <li class="nav-item">
                        <a class="nav-link link-custom font-paragraph" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-custom font-paragraph" href="#">Menu</a>
                    </li>
                    <!-- Title -->
                    <a class="navbar-brand" href="#">
                        <img class="navbar-logo" src="images/restaurant_logo3.png" alt="Navbar Brand"> 
                    </a>
                    <li class="nav-item">
                        <a class="nav-link link-custom font-paragraph" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-custom font-paragraph" href="#">Reserve</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Carousel -->
        <div id="img-carousel" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/carousel-img1.jpg" alt="carousel-img1" class="carousel-img d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/carousel-img2.jpg" alt="carousel-img2" class="carousel-img d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/carousel-img3.jpg" alt="carousel-img3" class="carousel-img d-block w-100">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#img-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#img-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
            
        <!-- About Us -->
        <div id="about-us" class="row content-container text-container">
            <div class="col-2 d-flex justify-content-end p-0">
                <div class="d-flex align-items-center">
                    <h3 class="text-header font-header rotated-header m-0">About Us</h3>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <p class="font-paragraph text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus molestiae aperiam quia neque, aliquid sapiente doloribus voluptatibus cumque laudantium quam voluptate nam reiciendis harum unde ea! Quod dignissimos debitis minus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quod voluptates voluptas officiis nisi, neque ipsa deserunt tempore magnam praesentium repellendus commodi quos est. Magnam temporibus laborum nulla sequi modi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident sapiente commodi labore perferendis maxime voluptates veniam molestias mollitia, amet, atque repellendus saepe quam eaque laboriosam velit enim, quibusdam aut! Possimus!</p>
                </div>
                <div class="row">
                    <a href="" class="col-auto link-custom font-paragraph">Read More...</a>
                </div>
                
            </div>
        </div>

        <!-- Schedule and Location -->
        <div class="content-container imaged-container px-0">
            <!-- Schedule -->
            <div id="schedule" class="row">
                <div class="content-container text-container text-center col-6 bg-primary1-custom">
                    <h3 class="font-header text-header mb-1">Schedule</h3>
                    <div class="row mb-4">
                        <div class="col p-0">
                            <ul class="list-unstyled font-paragraph text-end m-0">
                                <li>Monday :&nbsp</li>
                                <li>Tuesday :&nbsp</li>
                                <li>Wednesday :&nbsp</li>
                                <li>Thursday :&nbsp</li>
                                <li>Friday :&nbsp</li>
                                <li>Saturday :&nbsp</li>
                                <li>Sunday :&nbsp</li>
                            </ul>
                        </div>
                        <div class="col p-0">
                            <ul class="list-unstyled font-paragraph text-start m-0">
                                <li>10.00 - 18.00</li>
                                <li>10.00 - 18.00</li>
                                <li>10.00 - 18.00</li>
                                <li>10.00 - 18.00</li>
                                <li>10.00 - 18.00</li>
                                <li>10.00 - 18.00</li>
                                <li>10.00 - 18.00</li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="font-header mb-1">Contact Us</h3>
                    <div class="row d-flex justify-content-center">
                        <p class="font-paragraph mb-0 d-block">021 111 222 333</p>
                        <i class="bi bi-instagram fs-5 w-auto"></i>
                        <i class="bi bi-twitter fs-5 w-auto"></i>
                        <i class="bi bi-facebook fs-5 w-auto"></i>
                    </div>
                </div>
            </div>
            <!-- Location -->
            <div id="location" class="row">
                <div class="col-6"></div>
                <div class="col-6 container bg-primary1-custom">
                        <h3 class="font-header text-header text-center mb-1">Location</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33859098.71777259!2d-12.328587300000013!3d-58.80400019999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb09dff882a7809e1%3A0xb08d0a385dc8c7c7!2sAntarctica!5e0!3m2!1sen!2sid!4v1714896732989!5m2!1sen!2sid" width="100%" height="450" style="border:0; margin: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
        </div>

        <!-- Call to Action (Reserve) -->
        <div id="reserve" class="container-fluid content-container text-container text-center">
            <h2 class="font-header text-header">Reserve</h2>
            <p class="font-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam minima autem unde rem rerum obcaecati veniam vitae eligendi recusandae esse sint ut sed odio quis a molestias, necessitatibus eos asperiores?</p>
            <button>Reserve Now</button>
        </div>

        <!-- Footer -->
        <div id="footer" class="container-fluid content-container text-container text-center">
            <h4 class="font-header font-paragraph">Le Puki</h4>
            <p class="font-paragraph">Something something street | 021 111 222 333</p>
        </div>
    </div>
    

    <!-- JS Script Links -->
    <script src="home.js"></script>
</body>
</html>