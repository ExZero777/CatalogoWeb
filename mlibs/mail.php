<?php

$nombre = $_GET['nombreUsuario'];
$apellido = $_GET['apellidoUsuario'];
$mail = $_GET['mailUsuario'];
$telefono = $_GET['telUsuario'];
$area = $_GET['areaUsuario'];
$asunto = $_GET['asunto'];
$mensaje = $_GET['comentario'];

require_once('../libs/PHPMailer/PHPMailerAutoload.php');

require_once("../libs/PHPMailer/class.phpmailer.php");
$Correo = new PHPMailer();
$Correo->SMTPDebug = 3;
$Correo->IsSMTP();
$Correo->SMTPAuth = true;
$Correo->SMTPSecure = "tls";
$Correo->Host = "smtp.gmail.com";
$Correo->Port = 587;
$Correo->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
    );    
$Correo->Username = "judele.s.a.777@gmail.com";
$Correo->Password = "garfio1234";
$Correo->SetFrom($mail,'De ' . $mail);
$Correo->FromName = "From " . $mail;
$Correo->AddAddress("ldmarques007@gmail.com");
$Correo->Subject = $asunto;
$Correo->Body = "<H3>Hola! " . $nombre . " " . $apellido . " te ha mandado un mail!" . "</H3>" . "<p>Mensaje:</p>" . "<p>".$mensaje."</p>" ."<p>Telefono:</p>" . "<p>".$telefono."</p>" ."<p>Area:</p>" . "<p>".$area."</p>" . "<p>La direccion del contacto es ".$mail."</p>";
$Correo->IsHTML (true);

$Correo->Send();
header("HTTP/1.1 302 Moved Temporarily"); 
header("Mail Enviado Exitosamente,Sera Contactado A La Brevedad"); 
header("Location: ../panel/"); 
?>
