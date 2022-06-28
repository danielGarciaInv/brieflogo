<?php
$datos = json_decode($_POST['datos']);

$para = 'daniel.garcia@invirtual.mx';
$titulo = 'Nuevo Brief Registrado';
$mensaje = '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Formulario - Brief Logotipo</title>
</head>';

$mensaje .= '<body class="font-InvFont bg-gray-200 w-screen h-screen">
    <main class="w-screen max-w-screen-2xl h-full m-auto">
        <h1>Nuevo Brief de logotipo registrado</h1><br>
        <p>Se ha hecho un nuevo registro de brief para Logotipos</p>
        <p>Nombre de Contacto: '.$datos->nombreCliente.'</p>
        <p>Correo de Contacto: '.$datos->correoCliente.'</p>
        <p>Teléfono de Contacto: '.$datos->telefonoCliente.'</p>
        <a href="https://centralinvirzo.xyz/login" style="padding: 10px; color:white; background: #354395; border-radius: 10px; text-decoration: none;">Ir a Inivrtual Assistant</a>
    </main>
</body>
</html>';

$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: contacto@invirtual.mx';

if(mail($para, $titulo, $mensaje, $cabeceras)){
    echo('true');
}else{
    echo('false');
}

?>
