<?php
    $destino= "gonz83@gmail.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
    $telefono = $_POST["telefono"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTélefono: " . $telefono . "\nMensaje: " . $mensaje;
    mail($destino,"Contacto", $contenido);
    header ("Location: gracias.html");

?>
