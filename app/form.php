<?php
$nombre         = isset($_POST['nombre'])       ?   $_POST['nombre']        : '';
$apellidoP      = isset($_POST['apellidoP'])    ?   $_POST['apellidoP']     : '';
$apellidoM      = isset($_POST['apellidoM'])    ?   $_POST['apellidoM']     : '';
$email          = isset($_POST['email'])        ?   $_POST['email']         : '';
$celular        = isset($_POST['celular'])      ?   $_POST['celular']       : '';
$dni            = isset($_POST['dni'])          ?   $_POST['dni']           : '';
$consultoria    = isset($_POST['consultoria'])  ?   $_POST['consultoria']   : '';
$empresa        = isset($_POST['empresa'])      ?   $_POST['empresa']       : '';
$sector         = isset($_POST['sector'])       ?   $_POST['sector']        : '';
$mensaje        = isset($_POST['mensaje'])      ?   $_POST['mensaje']       : '';
$contenido  = '
                <html>
                    <head>
                        <title>Email con HTML</title>
                    </head>
                    <body>
                        <h2 style="margin-bottom: 0;color: #0081c2" >Llego la siguiente información :</h2>
                        
                        <hr>
                        <p><b>Su Nombre es:</b> '.$nombre.'</p>
                        <p><b>Sus apellidos son:</b> '.$apellidoP.' '.$apellidoM.'</p>
                        <p><b>Consultoria elegida es:</b> '.$consultoria.'</p>
                        <p><b>Sector elegido es:</b> '.$sector.'</p>                        
                        <p>La empresa <strong> '.$empresa.' </strong> te ha enviado el siguiente mensaje :</p>
                        <p>'.$mensaje.' <br><br> </p>
                        <p>Su RUC O DNI es : '.$dni.'</p>
                        <p>Su número es : '.$celular.'</p>
                        <p>Puedes ponerte en contacto con la persona mediante su email : '.$email .'</p>
                        <hr>
                        
                    </body>
                </html>';
$contenido .= "Enviado el : " . date('d-m-Y');
//$contenido .= "Enviado el : " . date('d-m-Y (H:i:s)', time());      

$headers    =   'MIME-Version: 1.0' . "\r\n";
$headers   .=  "Content-type: text/html; charset=UTF-8\r\n";

$destinatario   = 'contacto@galatelperu.com';
$asunto         = 'Consultarias y Formacion Especializada';

// Enviar correo
$sendMail   =   mail($destinatario, $asunto , $contenido, $headers);

if ($sendMail)
echo json_encode('Llena los campos ctm');
else
echo json_encode('Correcto: <br> Sus Datos son: ');