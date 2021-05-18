<?php 

$method = $_SERVER['REQUEST_METHOD'];

// Process only when method is POST
if($method == 'POST'){
    
    //recibir params
	$requestBody = file_get_contents('php://input');
    $params = json_decode($requestBody);
        
    $params = (array) $params;

    if($params['UserName'] &&  $params['UserPhone']){        

        $data = [
          
            'UserName' => $params['UserName'],
            'UserPhone' => $params['UserPhone']            
        ];
        
    }
    
     $contenido  = '
                <html>
                    <head><meta http-equiv="Content-Type" content="text/html; charset=big5">
                        <title>Email con HTML</title>
                    </head>
                    <body>
                        <h2 style="margin-bottom: 0;color: #0081c2" >Llego la siguiente mensaje :</h2>
                        <hr>
                        <p><strong>El Nombre es :</strong>'.$params['UserName'].'</p>
                        <p><strong>Su Número es :</strong>'.$params['UserPhone'].'</p>
                       
                    </body>
                </html>';
        $contenido .= "Enviado el : " . date('d-m-Y');
        //$contenido .= "Enviado el : " . date('d-m-Y (H:i:s)', time());      

        $headers    =   'MIME-Version: 1.0' . "\r\n";
        $headers   .=  "Content-type: text/html; charset=UTF-8\r\n";

        $destinatario   = 'contacto@galatelperu.com';
        $asunto         = 'Mensaje Chatbot RIGAT';

        // Enviar correo
        $sendMail   =   mail($destinatario, $asunto , $contenido, $headers);

}

?>