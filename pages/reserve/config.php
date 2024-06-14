<?php

    $servername = "localhost"; // e.g. localhost
    $username = "root";
    $password = "";
    $db = "restaurant_project_db"; 

    $conn = mysqli_connect($servername, $username, $password, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>