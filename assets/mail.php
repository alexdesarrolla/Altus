<style type="text/css">
body,td,th {
	font-family: "Open Sans", sans-serif;
}
</style>
<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$message = $_POST['mensaje'];
$formcontent=" Nombre: $nombre \n Telefono: $telefono \n Email: $email \n Mensaje: $message";
$recipient = "gerencia.calidad@qslsoluciones.com";
$subject = "Mensaje desde la Web";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
echo "<br><br><br><br><center>Muchas gracias por su mensaje! <br>En breve le responderemos.</center>" ."<br><a href='form.html' style='text-decoration:none;color:#F90;'> <center>Atras</center></a>";
?>
