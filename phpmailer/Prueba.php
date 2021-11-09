<?php    

//require_once ("../prueba/vendor/phpmailer/phpmailer/src/Email.php");

use PHPMailer\PHPMailer\Email as Email;

require "vendor/Autoload.php";

$mail = new Email();
 

$bodyHTML = '<h2>el mail esta bien</h2>';


  $enviardo =      $mail->metEnviar("titulo","nombre","email","asunto",$bodyHTML);

if($enviardo)
{
    echo "correo enviado";
}
else
{
    echo "cooreo no enviado ";
}





?>

