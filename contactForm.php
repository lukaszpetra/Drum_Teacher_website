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

    if (mail($to, $sub, $message, $headers)) { ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="./goBack.css">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
            <script src="https://kit.fontawesome.com/a6b012235e.js" crossorigin="anonymous"></script>
            <link rel="icon" type="image/png" href="./img/favicon.png" />
            <link rel="shortcut icon" href="./img/favicon.png">

            <title>Drum Teacher</title>
        </head>

        <body>
            <div class="wrapper">
                <p>Twoja wiadomość została wysłana</p>
                <p>!!! Dziękujemy !!!</p>
                <a class="btn" href="./index.html"><button>Powrót do strony głównej</button></a>
            </div>
        </body>

        </html>


<?php
    } else {
        echo "Coś poszło nie tak :(";
    }
}
