<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

// print_r(file_get_contents('php://input', true));

$data = json_decode(file_get_contents('php://input', true));

$nombre		= $data->nombre;
$email		= $data->email;
$movil      = $data->movil;
$mensaje    = $data->mensaje;

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host 		= 'smtp.gmail.com';
$mail->Port 		= 587;
$mail->SMTPSecure 	= PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPAuth 	= true;

// credentials
// fixme set account credentials from enterprice
$mail->Username = 'styven22121@gmail.com';
$mail->Password = 'hfzhqetcppavvmnj';


//Set who the message is to be sent from
$mail->setFrom($email, $nombre);

//Set an alternative reply-to address
// $mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
// fixme set email and name from company
$mail->addAddress('naranjamasmedia@gmail.com', 'Binary Future');
$mail->Subject = 'Email desde la pagina';
$mail->Body    = "
  Nombre: {$nombre}
  Email: {$email}
  Móvil: {$movil}
  Mensaje: {$mensaje}
";

//send the message, check for errors
if (!$mail->send()) {
    echo json_encode('{"success": false}');
} else {
    echo json_encode('{"success": true}');
}