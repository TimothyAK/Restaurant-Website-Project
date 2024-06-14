<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

$conn = new mysqli($servername, $username, $password, $dbname, 3306);

if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $date = htmlspecialchars(trim($_POST['date']));
    $time = htmlspecialchars(trim($_POST['time']));
    $guestAmount = htmlspecialchars(trim($_POST['guestAmount']));
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Invalid email format");
    }

    $stmt = $conn->prepare("INSERT INTO reservations (name, email, date, time, guestAmount) VALUES ('$name','$email','$date','$time','$guestAmount')");

    if($stmt->execute()){
        echo "New reservation created successfully";
    }else {
        echo "Error: " . $stmt->error;
    }
}
echo "";
?>