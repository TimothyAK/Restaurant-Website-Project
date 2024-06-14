<?php

    require_once("config.php");
    require_once("form_validation.php");

    $sql = "SELECT * FROM reservations";
    $result = mysqli_query($conn, $sql);
    $reservation_id = mysqli_num_rows($result) + 1;

    $inputDate = sanitize_input($_POST["date"]);
    $reservation_month = sprintf("%02d", $_POST["month"]); 
    $this_year = date("Y");

    $reservation_date = sanitize_input("$this_year-$inputDate-$reservation_month");
    $number_of_people = sanitize_numbers($_POST["number-of-people"]);
    $reservation_time = sanitize_input($_POST["time"]);
    $reservation_confirmation_method = $_POST["confirmation-method"];
    $reservation_confirmed_status = false;
    $reservation_requests = "";

    $customer_name = $_POST["name"];
    $customer_phone = $_POST["phone"];
    $customer_email = $_POST["email"];

    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            if(($customer_name == $row['customer_name']) && ($customer_phone == $row['customer_phone']) && ($customer_email == $row['customer_email'])) {
                $customer_id = $row['customer_id'];
                $have_reserved = true;
            }
        }
        if(!isset($customer_id)) {
            $customer_id = mysqli_num_rows($result) + 1;
        }
    } else {
        $customer_id = 1;
    }

    if(isset($_POST["reserve"])) {
        $insertReservationSQL = "INSERT INTO `reservations` (
        `reservation_id`,
        `reservation_date`, 
        `number_of_people`,
        `reservation_time`, 
        `reservation_confirmation_method`, 
        `reservation_confirmed_status`, 
        `reservation_requests`, 
        `customer_id`) 
        VALUES (
        '$reservation_id', 
        '$reservation_date',
        '$number_of_people',
        '$reservation_time',
        '$reservation_confirmation_method',
        '$reservation_confirmed_status',
        '$reservation_requests',
        '$customer_id')";

        $insertCustomerSQL = "INSERT INTO `customers` (
        `customer_id`, 
        `customer_name`, 
        `customer_phone`, 
        `customer_email`) 
        VALUES (
        '$customer_id', 
        '$customer_name', 
        '$customer_phone', 
        '$customer_email')";

        mysqli_query($conn, $insertReservationSQL);
        
        if(!$have_reserved) {
            mysqli_query($conn, $insertCustomerSQL);
        }
    }

?>