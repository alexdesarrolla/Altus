<style type="text/css">
body,td,th {
	font-family: "Open Sans", sans-serif;
}
</style>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos y sanitizamos los datos del formulario
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $telefono = htmlspecialchars(trim($_POST['telefono']));
    $email = htmlspecialchars(trim($_POST['email']));
    $tipoSeg = htmlspecialchars(trim($_POST['tipoSeg']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Formato del contenido del correo
    $formcontent = "Nombre: $nombre\nCorreo: $email\nTeléfono: $telefono\nTipo de Seguro: $tipoSeg\nMensaje:\n$message";

    // Destinatario y asunto del correo
    $recipient = "holalexdesarrolla@gmail.com";
    $subject = "Mensaje de Contacto";

    // Cabecera del correo
    $mailheader = "From: $email\r\n";
    $mailheader .= "Reply-To: $email\r\n";
    $mailheader .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envío del correo
    if (mail($recipient, $subject, $formcontent, $mailheader)) {
        echo "<br><br><br><br><center>Muchas gracias por su mensaje! <br>En breve le responderemos.</center>";
    } else {
        echo "<br><br><br><br><center>Lo sentimos, ha ocurrido un error al enviar su mensaje. Inténtelo de nuevo más tarde.</center>";
    }
    echo "<br><a href='form.html' style='text-decoration:none;color:#00F'><center>Atrás</center></a>";
}
?>
