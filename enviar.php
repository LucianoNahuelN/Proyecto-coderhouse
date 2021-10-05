<?php
 $destino= "lucho.n2102@gmail.com"
 $nombre= $_Post["nombre"];
 $nombre= $_Post["email"];
 $nombre= $_Post["telefono"];
 $nombre= $_Post["mensaje"];
 $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono" . $telefono . "\nMensaje" . $mensaje;
 mail($destino,"Contacto", $contenido);
 

?>