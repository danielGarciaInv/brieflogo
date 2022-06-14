<?php
$datos = json_decode($_POST['datos']);

$para = 'daniel.garcia@invirtual.mx';
$titulo = 'Envio de Brief';
$mensaje = '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Formulario - Brief Logotipo</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito&display=swap");
        *,
        ::before,
        ::after {
        box-sizing: border-box;
        border-width: 0;
        border-style: solid;
        border-color: #e5e7eb;
        }
        ::before,
        ::after {
        --tw-content: "";
        }
        html {
        line-height: 1.5;
        -webkit-text-size-adjust: 100%;
        -moz-tab-size: 4;
        -o-tab-size: 4;
            tab-size: 4;
        font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
        body {
        margin: 0;
        line-height: inherit;
        }
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
        font-size: inherit;
        font-weight: inherit;
        }
        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
        height: auto;
        }
        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
        margin: 0;
        }
        [hidden] {
        display: none;
        }
        *, ::before, ::after{
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x:  ;
        --tw-pan-y:  ;
        --tw-pinch-zoom:  ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal:  ;
        --tw-slashed-zero:  ;
        --tw-numeric-figure:  ;
        --tw-numeric-spacing:  ;
        --tw-numeric-fraction:  ;
        --tw-ring-inset:  ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur:  ;
        --tw-brightness:  ;
        --tw-contrast:  ;
        --tw-grayscale:  ;
        --tw-hue-rotate:  ;
        --tw-invert:  ;
        --tw-saturate:  ;
        --tw-sepia:  ;
        --tw-drop-shadow:  ;
        --tw-backdrop-blur:  ;
        --tw-backdrop-brightness:  ;
        --tw-backdrop-contrast:  ;
        --tw-backdrop-grayscale:  ;
        --tw-backdrop-hue-rotate:  ;
        --tw-backdrop-invert:  ;
        --tw-backdrop-opacity:  ;
        --tw-backdrop-saturate:  ;
        --tw-backdrop-sepia:  ;
        }
        .m-auto{
        margin: auto;
        }
        .flex{
        display: flex;
        }
        .h-screen{
        height: 100vh;
        }
        .h-full{
        height: 100%;
        }
        .w-screen{
        width: 100vw;
        }
        .w-full{
        width: 100%;
        }
        .max-w-screen-2xl{
        max-width: 1536px;
        }
        .flex-col{
        flex-direction: column;
        }
        .border-invirtual-300{
        --tw-border-opacity: 1;
        border-color: rgb(83 98 194 / var(--tw-border-opacity));
        }
        .bg-gray-200{
        --tw-bg-opacity: 1;
        background-color: rgb(229 231 235 / var(--tw-bg-opacity));
        }
        .bg-invirtual-300{
        --tw-bg-opacity: 1;
        background-color: rgb(83 98 194 / var(--tw-bg-opacity));
        }
        .p-2{
        padding: 0.5rem;
        }
        .font-InvFont{
        font-family: Nunito, sans-serif;
        }
        .text-xl{
        font-size: 1.25rem;
        line-height: 1.75rem;
        }
        .font-semibold{
        font-weight: 600;
        }
        .text-white{
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
        }
        /* ---------------------------------- Clases personalizadas ------------------------------- */
        .max-h-560 {
        max-height: 560px;
        }
        .border-1{
        border-width: 1px;
        }
        @media (min-width: 768px){
        .md\:w-1\/2{
            width: 50%;
        }
        .md\:flex-row{
            flex-direction: row;
        }
        }

    </style>
</head>';

$mensaje .= '<body class="font-InvFont bg-gray-200 w-screen h-screen">
    <main class="w-screen max-w-screen-2xl h-full m-auto">
        <div class="seccion w-screen">
            <div class="tituloPaso p-2 bg-invirtual-300 text-white font-semibold text-xl">
                <h3>Datos de Contacto</h3>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Nombre: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->nombreCliente .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Correo Electrónico: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->correoCliente .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Teléfono: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->telefonoCliente .'</p>
                </div>
            </div>
        </div>

        <div class="seccion w-screen">
            <div class="tituloPaso p-2 bg-invirtual-300 text-white font-semibold text-xl">
                <h3>Datos de la Empresa</h3>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Nombre de la Empresa: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->nombreEmpresa .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Razón de la Empresa: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->razonEmpresa .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Correo de la Empresa: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->correoEmpresa .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Teléfono de la Empresa: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->telefonoEmpresa .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Dirección: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->direccionEmpresa .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Colonia: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->coloniaEmpresa .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Municipio / Alcaldía: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->municipioEmpresa .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Estado: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->estadoEmpresa .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Código Postal: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->cpostalEmpresa .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>País: </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->paisEmpresa .'</p>
                </div>
            </div>
        </div>

        <div class="seccion w-screen">
            <div class="tituloPaso p-2 bg-invirtual-300 text-white font-semibold text-xl">
                <h3>Información para el Logotipo</h3>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Historia de la Empresa</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->historiaEmpresa .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Significado del Nombre</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->significadoNombre .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Actividad de la Empresa</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->actividadEmpresa .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Como se diferencia de los competidores</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->diferenciadorEmpresa .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Competidores Directos </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->competidoresEmpresa .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Objetivo general de la empresa </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->objetivoEmpresa .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Mercado Meta </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->mercadoMeta .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Tipo de logo que requiere </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->checkTipoLogo .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Idea para el Logotipo </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->ideaLogotipo .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Colores para representar al negocio </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->coloresLogotipo .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Le gustaria comunicar </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->mensajeLogotipo .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>¿Desea reforzar la marca con un slogan? </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->conSlogan .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Idea para el slogan </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->ideaSlogan .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Elementos a evitar para el diseño </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->evitarDiseno .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Colores a evitar para el diseño </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->evitarColores .'</p>
                </div>
            </div>

        <div class="seccion w-screen">
            <div class="tituloPaso p-2 bg-invirtual-300 text-white font-semibold text-xl">
                <h3>Identidad corporativa</h3>
            </div>
            <div class="datosCampo flex flex-col md:flex-row ">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>¿Se requiere manual de Identidad Corporativa?</p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">
                    <p>'. $datos->checkManual .'</p>
                </div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Papeleria requerida </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">';
                    $papeleriaNecesitada = $datos->papeleriaNecesitada; foreach($papeleriaNecesitada as $papeleria){
                        $mensaje .= '<p>' . $papeleria . '</p>';
                    }
                $mensaje .= '</div>
            </div>
            <div class="datosCampo flex flex-col md:flex-row">
                <div class="col w-full md:w-1/2 p-2 font-semibold border-1 border-invirtual-300">
                    <p>Aplicaciones deseadas </p>
                </div>
                <div class="col w-full md:w-1/2 p-2 border-1 border-invirtual-300">';
                    $aplicacionesNecesitadas = $datos->aplicacionesNecesitadas; foreach($aplicacionesNecesitadas as $app){
                        $mensaje .= '<p>' . $app . '</p>';
                    }
                $mensaje .= '</div>
            </div>
        </div>
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
