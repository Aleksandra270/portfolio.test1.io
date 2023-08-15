<?php
 
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 require "PHPMailer/src/PHPMailer.php";
 require "PHPMailer/src/Exception.php";

 $mail = new PHPMailer(true);
 $mail->CharSet = "UTF-8";


    $firstName = $_POST["FirstName"];
    $lastName = $_POST["LastName"];
    $email = $_POST["Email"];
    $contactNumber = $_POST["ContactNumber"];
    $message = $_POST["textarea"];

    // Change the following line to your desired email address
    $to = "egorova132@gmail.com";
    $subject = "Contact Form Submission";
    $body = "$firstName . ' ' . $lastName . ' ' .  $email . ' ' . $contactNumber . ' ' .  $message";
    
    $theme = ["Заявка с формы"];

    $mail->addAddress(egorova132@gmail.com);
    $mail->Subject = $theme;
    $mail->Body = $body;
    $mail->send();
?>