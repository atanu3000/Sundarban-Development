<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/Sundarban-development/client/phpmailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/Sundarban-development/client/phpmailer/src/SMTP.php';
require 'C:/xampp/htdocs/Sundarban-development/client/phpmailer/src/Exception.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'sundarini2023@gmail.com';
$mail->Password = 'nedjtzsjabycxrpb';

$mail->setFrom('sundarini2023@gmail.com');
$mail->isHTML(true);

?>