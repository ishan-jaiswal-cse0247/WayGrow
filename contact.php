<?php
    session_start();
    error_reporting(0);

    $con = mysqli_connect('localhost','root','','waygrow');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "waygrow.ltd@gmail.com";

    $contact =  "insert into contact (name, email, subject, message) values ('$name', '$email', '$subject', '$message')";
    mysqli_query($con, $contact);
    echo("Thankyou for your feedback");
    mail($to, $subject, $message,$email);
    
?>