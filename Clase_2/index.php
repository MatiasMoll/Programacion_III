<?php
/**
 * GET:Obtener recursos
 * POST:Crear recursos
 * PUT: Modificar recursos
 * DELETE: Borrar recursos
 */


 /**if(isset($_POST)){
     echo json_encode($_POST);
 }else if(isset($_GET)){
     echo $_GET;
 }*/

/**if(isset($_GET))
{
    switch($_GET['casos']){
        case 'paises':
           $datos = array('chile','argentina');
        break;
   
        case 'continentes': 
           $datos = array('America','Asia');
        break;
        
        case 'subcont': 
           $datos = array('Sudamerica','Norteamerica');
        default: 
           $datos = "Caso no valido";
       break;
    }
    $ar = array(
        'succes'=>true,
        'data'=>$datos
    );

    echo json_encode($ar);

    $request_method = $_SERVER('REQUEST_METHOD');
    $path_info = $_SERVER("PATH_INFO");
    $respuesta = new stdClass();
    $respuesta->success = true;
    $respuesta->data = "";

    switch ($request_method) {
        case 'GET':
            # code...
            break;
        case 'POST':
            # code...
            break;
        case 'DELETE':
            # code...
            break;        
        default:
            $respuesta->success = false;
            $respuesta->data = "Metodo no valido";
            break;
    }*/

$archivo = fopen("prueba.txt",'a+');
$escritura = fwrite($archivo,"Nueva linea");
//echo fread($archivo,filesize('prueba.txt'));

while(!feof($archivo))
{
    echo fgets($archivo);
}

fclose($archivo);




 