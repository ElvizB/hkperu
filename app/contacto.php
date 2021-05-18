<?php
$email_c          = isset($_POST['emailC'])        ?   $_POST['emailC']         : '';
$celular_c        = isset($_POST['celularC'])      ?   $_POST['celularC']       : '';
$dni_c            = isset($_POST['dniC'])          ?   $_POST['dniC']           : '';
$empresa_c        = isset($_POST['empresaC'])      ?   $_POST['empresaC']       : '';
$mensaje_c        = isset($_POST['mensajeC'])      ?   $_POST['mensajeC']       : '';
$contenido  = '
                <html>
                    <head><meta charset="gb18030">
                        <title>Email con HTML</title>
                    </head>
                    <body>
                        <h2 style="margin-bottom: 0;color: #0081c2" >Llego la siguiente información :</h2>
                        <hr>
                        <p>La empresa <strong> '.$empresa_c.' </strong> te ha enviado el siguiente mensaje :</p>
                        <p>'.$mensaje_c.' <br><br> </p>
                        <p>Su RUC O DNI es : '.$dni_c.'</p>
                        <p>Puedes ponerte en contacto con la persona através de su email : '.$email_c .'</p>
                        <p>Su número es : '.$celular_c.'</p>
                        <hr>
                    </body>
                </html>';
$contenido .= "Enviado el : " . date('d-m-Y');
//$contenido .= "Enviado el : " . date('d-m-Y (H:i:s)', time());      

$headers    =   'MIME-Version: 1.0' . "\r\n";
$headers   .=  "Content-type: text/html; charset=UTF-8\r\n";

$destinatario   = 'contacto@galatelperu.com';
$asunto         = 'Sección de Contacto';

// Enviar correo
$sendMail   =   mail($destinatario, $asunto , $contenido, $headers);

if ($sendMail)
echo json_encode('Llena los campos ctm');
else
echo json_encode('Correcto: <br> Sus Datos son: ');