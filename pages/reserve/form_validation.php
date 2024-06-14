<?php    

    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function sanitize_numbers($num_data) {
        $num_data = trim($num_data);
        $num_data = stripslashes($num_data);
        $num_data = htmlspecialchars($num_data);
        $num_data = preg_replace("/[^0-9]/","", $num_data);
        return $num_data;
    }
?>