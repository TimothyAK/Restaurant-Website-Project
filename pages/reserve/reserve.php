<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESERVE | SABORES DEL SUR</title>

    <!-- Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Merriweather Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Farro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Farro:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet Links -->
    <link rel="stylesheet" href="style.css">

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</head>
<body>
    <!-- Navbar -->
    <div id="navbar" class="container">
        <div class="container">
            <ul class="navbar-list">
                <li class="navbar-item">
                    <a id ="home-link" href="/SGU/Final/pages/home/home.html">HOME</a>
                </li>
                <li class="navbar-item">
                    <a id="menu-link" href="/SGU/Final/pages/Menu.pdf" target="_blank">MENU</a>
                </li>
                <li class="navbar-item">
                    <img id="navbar-brand" src="images/restaurant_logo.png" alt="">
                </li>
                <li class="navbar-item">
                    <a id="about-link" href="/SGU/Final/pages/about/about.html">ABOUT</a>
                </li>
                <li class="navbar-item">
                    <a id="reserve-link" href="#">RESERVE</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="reserve" class="container">
        <h2>Book A Reservation</h2>
        <form action="recordReservation.php" method="post">
            <label for="reserve-date">Choose a date & time : </label>
            <br>
            <fieldset id="fieldset-date">
                <input type="number" id="available-dates" name="date" placeholder="DD" min="1" max="30" required>
                <input type="number" id="available-months" name="month" placeholder="MM" min="1" max="12" required>
                <select id="available-times" name="time">
                    <option value="9">09:00</option>
                    <option value="915">09:15</option>
                    <option value="930">09:30</option>
                    <option value="945">09:45</option>
                    <option value="10">10:00</option>
                    <option value="1015">10:15</option>
                    <option value="1030">10:30</option>
                    <option value="1045">10:45</option>
                    <option value="11">11:00</option>
                    <option value="1115">11:15</option>
                    <option value="1130">11:30</option>
                    <option value="1145">11:45</option>
                    <option value="12">12:00</option>
                    <option value="1215">12:15</option>
                    <option value="1230">12:30</option>
                    <option value="1245">12:45</option>
                    <option value="1315">13:15</option>
                    <option value="1330">13:30</option>
                    <option value="1345">13:45</option>
                    <option value="14">14:00</option>
                    <option value="1415">14:15</option>
                    <option value="1430">14:30</option>
                    <option value="1445">14:45</option>
                    <option value="15">15:00</option>
                    <option value="1515">15:15</option>
                    <option value="1530">15:30</option>
                    <option value="1545">15:45</option>
                    <option value="16">16:00</option>
                    <option value="1615">16:15</option>
                    <option value="1630">16:30</option>
                    <option value="1645">16:45</option>
                    <option value="17">17:00</option>
                    <option value="1715">17:15</option>
                    <option value="1730">17:30</option>
                    <option value="1745">17:45</option>
                    <option value="18">18:00</option>
                    <option value="1815">18:15</option>
                    <option value="1830">18:30</option>
                    <option value="1845">18:45</option>
                </select>
            </fieldset>
            
            <label for="">Number of people : </label>
            <br>
            <select id="numberOfPeople" name="number-of-people">
                <option value="1-2">1-2</option>
                <option value="3-4">3-4</option>
                <option value="5-6">5-6</option>
                <option value="7-8">7-8</option>
            </select>

            <label for="">Name :</label>
            <br>
            <input type="text" name="name" required>

            <label for="">Phone :</label>
            <br>
            <input type="text" name="phone" required>

            <label for="">Email :</label>
            <br>
            <input type="email" name="email" required>

            <label for="">Confirmation Method :</label>
            <br>
            <select name="confirmation-method">
                <option value="email">Email</option>
                <option value="text">Text</option>
                <option value="phone">Phone</option>
            </select>

            <fieldset id="fieldset-submit">
                <input type="submit" name="reserve" value="Reserve">
                <div class="reservation-notice">
                    <h3>Thank for your reservation. Your reservation has been recorded.</h3>
                    <p>In a short while, you will be asked to confirm your reservation through your preferred way of confirmation.</p>
                    <p>Any special requests can be specified through your preferred confirmation.</p>
                </div>
            </fieldset>
        </form>
    </div>
    
    <!-- JS Script Links -->
    <script src="reserve.js"></script>
</body>
</html>