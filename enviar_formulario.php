<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ruta al autoload de PHPMailer

// Inicializar PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurar servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'mail.kranservice.cl'; // Cambia esto al servidor SMTP de tu proveedor de correo
    $mail->SMTPAuth = true;
    $mail->Username = 'nicolas.heise@kranservice.cl'; // Cambia esto a tu dirección de correo electrónico
    $mail->Password = 'kranservice2022'; // Cambia esto a tu contraseña de correo electrónico
    $mail->SMTPSecure = 'tls'; // Puedes cambiar esto a 'ssl' si tu servidor SMTP lo requiere
    $mail->Port = 465; // Cambia esto al puerto SMTP de tu servidor, normalmente 587 o 465

    // Configurar remitente y destinatario
    $mail->setFrom('nicolas.heise@kranservice.cl', 'Nicolas Heise');
    $mail->addAddress('nicolas.heise@kranservice.cl');

    // Contenido del correo electrónico
    $mail->isHTML(true);
    $mail->Subject = 'Asunto del correo';
    $mail->Body    = 'Contenido del correo electrónico';

    // Enviar correo electrónico
    $mail->send();
    echo 'El correo electrónico ha sido enviado correctamente.';
} catch (Exception $e) {
    echo "Error al enviar el correo electrónico: {$mail->ErrorInfo}";
}
?>