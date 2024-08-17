<style type="text/css">
body,td,th {
	font-family: "Open Sans", sans-serif;
}
</style>
<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$tipoSeg = $_POST['tipoSeg'];
$message = $_POST['message'];
$formcontent=" Nombre: $nombre \n  Email: $email \n Telefono: $telefono \n Seguro: $tipoSeg \n Mensaje: $message";
$recipient = "mallexpresseu@gmail.com";
$subject = "Mensaje Contactenos";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
echo "<br><br><br><br><center>Muchas gracias por su mensaje! <br>En breve le responderemos.</center>" ."<br><a href='form.html' style='text-decoration:none;color:#00F'> <center>Atras</center></a>";
?>
