<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['mail'];
    //$phone=$_POST['phone'];
    $msg = $_POST['message'];

    $to = 'kontakt@drummeracademy.pl'; // Receiver Email ID, Replace with your email ID

    $message = "Wiadomość od :" . $name . "\n" . "\n" . "Treść wiadomości :" . "\n\n" . $msg;
    $headers = "Od: " . $mail;

    if (mail($to, $message, $headers)) {
        echo "<h1>Twoja wiadomość została wysłana" . " " . $name . ", Postaramy się jak najszybciej na nią odpowiedzieć.</h1>";
    } else {
        echo "Coś poszło nie tak :(";
    }
}
