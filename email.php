<?PHP
    $destino = "e113s10@gmail.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if(!preg_match($email_exp,$correo)) {
 
    $error_message .= 'La dirección de correo proporcionada no es válida.<br />';
 
   }

    mail($destino, "Mensaje", $contenido);
    header("Location:http://cacao.16mb.com/pixs/pixs.html");
?>