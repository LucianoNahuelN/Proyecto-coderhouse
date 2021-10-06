<?php
 $destino= "lucho.n2102@gmail.com"
 $nombre = $_Post["nombre"];
 $email = $_Post["email"];
 $telefono = $_Post["telefono"];
 $mensaje = $_Post["mensaje"];
 $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono" . $telefono . "\nMensaje" . $mensaje;
 mail($destino,"Contacto", $contenido);
 header("Location:gracias.html");
?>