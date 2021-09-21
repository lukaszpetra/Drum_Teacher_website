<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['mail'];
    //$phone=$_POST['phone'];
    $msg = $_POST['message'];
    $sub = $_POST['subject'];

    $to = 'kontakt@drummeracademy.pl';
    // $to = 'lukaszpetra@gmail.com';

    $message = "Wiadomość od :" . $name . "\n" . "\n" . "\n\r" . $msg;
    $headers = "Od: " . $mail;

    if (mail($to, $sub, $message, $headers)) {
        // echo "<h1>Twoja wiadomość została wysłana" . " " . $name . ", Postaramy się jak najszybciej na nią odpowiedzieć.</h1>";
        echo '<script> alert("Twoja wiadomość została wysłana")</script>';
    } else {
        echo "Coś poszło nie tak :(";
    }
}
