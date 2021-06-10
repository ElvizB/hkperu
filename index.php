<?php
//hkperuu.herokuapp.com
//$componentes_url = parse_url($_SERVER['REQUEST_URI']);
$componentes_url = parse_url($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);

$ruta = $componentes_url['path'];

$partes_ruta = explode('/', $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);

$ruta_elegida = 'vistas/404.php';

if($partes_ruta[0] == 'hkperuu.herokuapp.com'){
  if (count($partes_ruta) == 1){
    $ruta_elegida = 'vistas/home.php';
  }else if (count($partes_ruta) == 2){
    switch($partes_ruta[1]){
      case 'consultoria':
        $ruta_elegida = 'vistas/consultoria.php';
        break;
      case 'formacion-especializada':
        $ruta_elegida = 'vistas/formacion-especializada.php';
        break;
      case 'nosotros':
          $ruta_elegida = 'vistas/nosotros.php';
          break;
      case 'smart-cities':
          $ruta_elegida = 'vistas/smart-cities.php';
          break; 
     case 'smart-grids':
        $ruta_elegida = 'vistas/smart-grids.php';
          break; 
      case 'transformacion-digital':
          $ruta_elegida = 'vistas/transformacion-digital.php';
          break; 
     case 'agilidad':
          $ruta_elegida = 'vistas/agilidad.php';
          break; 
     case 'sap':
          $ruta_elegida = 'vistas/sap.php';
          break; 
      case 'pmo':
          $ruta_elegida = 'vistas/pmo.php';
          break;   
      case 'contacto':
        $ruta_elegida = 'vistas/contacto.php';
        break;
    }
  }
}

include_once $ruta_elegida;
