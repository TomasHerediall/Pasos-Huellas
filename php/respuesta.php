<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASOS & HUELLAS</title>
</head>
<body>
    <?php
        $nombre_usuario= _GET['introducir_nombre'];
        $email_usuario=$_GET['introducir_email'];
        $telefono_usuario=$_GET['introducir_telefono'];
        $asunto_peticion=$_GET['introducir_asunto'];
        $mensaje_peticion=$_GET['introducir_mensaje'];

      echo "Hola soy $nombre_usuario";
    ?>
</body>
</html>