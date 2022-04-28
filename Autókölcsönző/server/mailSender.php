<?php

//print_r ($_POST);


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

//zarodolgozat123@gmail.com
//zardogacska57
try {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->SMTPDebug  = 1;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "zarodolgozat123@gmail.com";
    $mail->Password   = "zardogacska57";

    //Recipients
    $mail->IsHTML(true);
    $mail->AddAddress("vakulyavitya@gmail.com", "Vakulya Viktor");
    //$mail->SetFrom($_POST["email"], $_POST["csNev"] . " " . $_POST["kerNev"]);
    $mail->Subject = "Message";
    //$content = $_POST['message'];
    $content = 
        "Családnév: ". $_POST["csNev"] . "<br>".
        "Keresztnév: ". $_POST["kerNev"] . "<br>".
        "Email cím: ". $_POST["email"] . "<br>".
        "Üzenet:". $_POST["message"] . "<br>";

    $mail->MsgHTML($content); 
    if(!$mail->Send()) {
        echo "Error while sending Email.";
        //var_dump($mail);
    } else {
        echo "Email sent successfully";
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>