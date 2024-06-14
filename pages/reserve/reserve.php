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
    $sql = "SELECT * FROM reservations";
    $result = mysqli_query($conn, $sql);
    $id = mysqli_num_rows($result) + 1;
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $date = htmlspecialchars(trim($_POST['date']));
    $time = htmlspecialchars(trim($_POST['time']));
    $guestAmount = htmlspecialchars(trim($_POST['guestAmount']));
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Invalid email format");
    }

    $stmt = $conn->prepare("INSERT INTO reservations (id, name, email, date, time, guestAmount) VALUES ('$id', '$name','$email','$date','$time','$guestAmount')");

    if($stmt->execute()){
        echo "New reservation created successfully";
    }else {
        echo "Error: " . $stmt->error;
    }
}

header("location:/SGU/Final/pages/Reserve/submit-reservation.html");
echo "";
?>