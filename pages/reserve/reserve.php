<?php
header("location: /SGU/Final/pages/reserve/submit-reservation.html");
if($emailSent) {
    exit();
}

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
    
    // Reservation Info
    $reservation_id = mysqli_num_rows($result) + 1;
    $reservation_date = htmlspecialchars(trim($_POST['date']));
    $reservation_time = htmlspecialchars(trim($_POST['time']));
    $guest_amount = htmlspecialchars(trim($_POST['guestAmount']));

    // Customer Info
    $customerHasReserved = false;
    $customer_id;
    $customer_name = htmlspecialchars(trim($_POST['name']));
    $customer_email = htmlspecialchars(trim($_POST['email']));
    
    if (!filter_var($customer_email, FILTER_VALIDATE_EMAIL)){
        die("Invalid email format");
    }

    // Check Customer if Has Reserved Before
    $sql = "select * from customers";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["customer_email"] . "<br>";
            echo $customer_email . "<br>";
            echo $row["customer_name"] . "<br>";
            echo $customer_name . "<br>";
            if($row["customer_email"] == $customer_email && $row["customer_name"] == $customer_name) {
                $customerHasReserved = true;
                $customer_id = $row["customer_id"];
                break;
            }
        }
        if(!$customerHasReserved) {
            $customer_id = mysqli_num_rows($result) + 1;
        }
    } else {
        $customer_id = 1;
    }

    // Insert Reservation
    $stmt = $conn->prepare("INSERT INTO `reservations` (
    `reservation_id`, `customer_id`, `reservation_date`, `reservation_time`, `guest_amount`) 
    VALUES (
    '$reservation_id', '$customer_id', '$reservation_date', '$reservation_time', '$guest_amount')");

    if($stmt->execute()){
        echo "New reservation created successfully";
    }else {
        echo "Error: " . $stmt->error;
    }

    // Insert Customer
    if(!$customerHasReserved)  {
        $stmt = $conn->prepare("INSERT INTO `customers` (
        `customer_id`, `customer_name`, `customer_email`) 
        VALUES (
        '$customer_id', '$customer_name', '$customer_email')");

        if($stmt->execute()){
            echo "New reservation created successfully";
        }else {
            echo "Error: " . $stmt->error;
        }
    }

    include "sendEmail.php";
}

echo "";
?>