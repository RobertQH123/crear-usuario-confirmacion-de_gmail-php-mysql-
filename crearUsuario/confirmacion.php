<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/phpmailer/PHPMailer/src/Exception.php';
require 'vendor/phpmailer/PHPMailer/src/PHPMailer.php';
require 'vendor/phpmailer/PHPMailer/src/SMTP.php';
if(isset( $_POST['usuario']) && isset($_POST['correo']) && $_POST['password']){
    
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $numero = rand(999,10000);
    $_SESSION['codigo'] = $numero;
    $_SESSION['datos'] = ["usuario" => $usuario,"correo" => $correo,"password" => $password];
    enviarMailConfimr($_SESSION['datos']["correo"],$_SESSION['codigo']);
}
require_once 'conf.php';
Function enviarMailConfimr($correo,$numero){
    $para      = $correo;
    $asunto    = 'CONFIRMACIÓN';
    $descripcion   = 'tu codigo es '. $numero;
    // $de = 'From: tuCorreo@tuCorreo.com';
    // mail($para ,$asunto,$descripcion ,$de);
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 0;                     
        $mail->SMTPSecure = 'tls';                                           
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'tuCorreo@tuCorreo.com';   //Tu correo                  
        $mail->Password   = 'tuContraseña';               //contraseña                     
        $mail->Port       = 587;
        $mail->CharSet = 'UTF-8';                           
        $mail->setFrom('tuCorreo@tuCorreo.com', 'Robert');  //(Tu correo, nombre)
        $mail->addAddress($para);    
        $mail->SMTPKeepAlive = true;  
        $mail->Mailer = "smtp"; 
        $mail->isHTML(true);                                 
        $mail->Subject = $asunto;
        $mail->Body    = $descripcion ;
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


