<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require_once 'reserve.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                                     // Enable verbose debug output (0 to disable)
    $mail->isSMTP();                                             // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                    // Enable SMTP authentication
    $mail->Username   = 'saboresdelsur.reservation@gmail.com';                // SMTP username (the email you will use to send emails)
    $mail->Password   = 'zfedralhvhwtkhms';                         // SMTP password
    $mail->SMTPSecure = 'tls';                                   // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                     // TCP port to connect to

    //Recipients
    $mail->setFrom('saboresdelsur.reservation@gmail.com', 'Sabores Del Sur');       // From email address and name
    $mail->addAddress($customer_email, $customer_name); // Add a recipient

    // Content
    $mail->isHTML(true);                                         // Set email format to HTML
    $mail->Subject = 'Reservation Confirmation';
    $mail->Body    = "Dear Mr/Mrs $customer_name, <br>
                        Thank you for making a reservation on our website. To confirm your reservation please reply to this email with the following format, <br>
                        --Confirm <br>
                        --*Change this if this reservation is booked for an Event. E.g. Birthday, Anniversary, Farewell, etc.* <br>
                        --*Change this if there are any request for the food. E.g. Seafood Allergy, etc.* <br>
                        --*Change this if there are any other requests.* <br>
                        <br>
                        We hope to see you soon in our restaurant, <br>
                        Sabores del Sur";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    $emailSent = true;
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
